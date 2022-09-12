<?php
defined('BASEPATH') OR exit('not allowed access');

class   mahasiswa_model extends CI_model{
    public function getdatamahasiswa(){
        $data = $this->db->get('mahasiswa')->result();
        return $data;
    }
}