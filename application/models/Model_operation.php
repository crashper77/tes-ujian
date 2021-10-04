<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_operation extends CI_Model {
	public function add($tabel, $data){
        $this->db->insert($tabel, $data);
    }

    public function viewdata(){
        $this->db->select_max('id_soal');
        $id = $this->db->get('soal')->row_array()['id_soal'];

        $this->db->select('*');
        $this->db->where('id_soal', $id);
        return $this->db->get('soal')->row_array();
    }
}
