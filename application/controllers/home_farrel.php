<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_farrel extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('googlemaps');
        $this->load->model('m_rumkit_farrel');
    }
    

    public function index()
    {
        $config['center']='-7.41412038444763, 109.21575190718235';
        $config['zoom']=15;
        $this->googlemaps->initialize($config);

        $rumkit = $this->m_rumkit_farrel->list_farrel();
        foreach ($rumkit as $key => $rumkit_farrel) {
            $marker= array();
            $marker['position']="$rumkit_farrel->latitude, $rumkit_farrel->longitude";
            $marker['animation']="DROP";
            $marker['infowindow_content']='<div class="media" style="width:250px;">';
            $marker['infowindow_content'] .='<div class="media-body">';
            $marker['infowindow_content'] .='<h4> Nama Rumah Sakit : '.$rumkit_farrel->nama_rumkit. '</h4>';
            $marker['infowindow_content'] .='<p> Nomer Telepon : ' .$rumkit_farrel->no_telp. '</p>';
            $marker['infowindow_content'] .='<p> Alamat : '.$rumkit_farrel->alamat. '</p>';
            $marker['infowindow_content'] .='<p> Deskripsi :  '.$rumkit_farrel->deskripsi. '</p';
            $marker['infowindow_content'] .='</div>';
            $marker['infowindow_content'] .='</div>';

            $this->googlemaps->add_marker($marker);
        }

        $data = array(
            'title' => 'Pemetaan Rumah Sakit Farrel',
            'map'   =>  $this->googlemaps->create_map(),
            'isi'   => 'v_home_farrel',
        );
        $this->load->view('template/v_wrapper_farrel', $data, FALSE);
    }
}