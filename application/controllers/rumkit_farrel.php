<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Rumkit_farrel extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('googlemaps');
        $this->load->model('m_rumkit_farrel');
        
    }
    
    public function index()
    {
        $this->user_login_farrel->cek_login();
        $data = array(
            'title' => 'Data Rumah Sakit Farrel',
            'map'   =>  $this->googlemaps->create_map(),
            'rumkit'=> $this->m_rumkit_farrel->list_farrel(),
            'isi'   => 'rumkit/v_list_farrel',
        );
        $this->load->view('template/v_wrapper_farrel', $data, FALSE);
    }
    public function input_farrel()
    {
        $this->user_login_farrel->cek_login();
        $config['center']='-7.41412038444763, 109.21575190718235';
        $config['zoom']=15;
        $this->googlemaps->initialize($config);

        $marker['position']= '-7.41412038444763, 109.21575190718235';
        $marker['draggable']= true;
        $marker['ondragend']= 'setToForm(event.latLng.lat(), event.latLng.lng())';
        $this->googlemaps->add_marker($marker);


        $this->form_validation->set_rules('nama_rumkit', 'Nama Rumah Sakit', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telepon', 'required');
        $this->form_validation->set_rules('latitude', 'Latitude', 'required');
        $this->form_validation->set_rules('longitude', 'Longitude', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Input Data Rumah Sakit Farrel',
                'map'   =>  $this->googlemaps->create_map(),
                'isi'   => 'rumkit/v_add_farrel',
            );
            $this->load->view('template/v_wrapper_farrel', $data, FALSE);
        } else {
            $data = array(
                'nama_rumkit' => $this->input->post('nama_rumkit'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'deskripsi' => $this->input->post('deskripsi')
            );
            $this->m_rumkit_farrel->input_farrels($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
            redirect('rumkit_farrel');
        }
        
    }
    public function edit_farrel($id_rumkit)
    {
        $this->user_login_farrel->cek_login();
        $config['center']='-7.41412038444763, 109.21575190718235';
        $config['zoom']=15;
        $this->googlemaps->initialize($config);

        $marker['position']= '-7.41412038444763, 109.21575190718235';
        $marker['draggable']= true;
        $marker['ondragend']= 'setToForm(event.latLng.lat(), event.latLng.lng())';
        $this->googlemaps->add_marker($marker);


        $this->form_validation->set_rules('nama_rumkit', 'Nama Rumah Sakit', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telepon', 'required');
        $this->form_validation->set_rules('latitude', 'Latitude', 'required');
        $this->form_validation->set_rules('longitude', 'Longitude', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Edit Data Rumah Sakit Farrel',
                'map'   =>  $this->googlemaps->create_map(),
                'rumkit'=> $this->m_rumkit_farrel->detail_farrel($id_rumkit),
                'isi'   => 'rumkit/v_edit_farrel',
            );
            $this->load->view('template/v_wrapper_farrel', $data, FALSE);
        } else {
            $data = array(
                'id_rumkit' => $id_rumkit,
                'nama_rumkit' => $this->input->post('nama_rumkit'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'deskripsi' => $this->input->post('deskripsi')
            );
            $this->m_rumkit_farrel->edit_farrel($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
            redirect('rumkit_farrel');
        }
        
    }
    public function delete($id_rumkit)
    {
        $data = array('id_rumkit' => $id_rumkit );
        $this->m_rumkit_farrel->delete($id_rumkit);
        $this->session->set_flashdata('pesan', 'Data Berhasil DiHapus');
        redirect('rumkit_farrel');
    }
}

/* End of file Rumkit_farrel.php */
