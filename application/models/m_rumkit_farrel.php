<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_rumkit_farrel extends CI_Model {

    public function list_farrel()
    {
        $this->db->select('*');
        $this->db->from('tbl_rumkit');
        $this->db->order_by('id_rumkit', 'desc');
        return $this->db->get()->result();
        
        
    }
    public function input_farrels($data)
    {
        $this->db->insert('tbl_rumkit', $data);
        
    }
    public function detail_farrel($id_rumkit)
    {
        $this->db->select('*');
        $this->db->from('tbl_rumkit');
        $this->db->where('id_rumkit', $id_rumkit);
        
        return $this->db->get()->row();
    }
    public function edit_farrel($data)
    {
        $this->db->where('id_rumkit', $data['id_rumkit']);
        $this->db->update('tbl_rumkit', $data);
        
    }
    public function delete($id_rumkit)
    {
        $this->db->where('id_rumkit', $data['id_rumkit']);
        $this->db->delete('tbl_rumkit', $data);
    }
}

/* End of file M_rumkit_farrel.php */
