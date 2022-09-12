<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {


    public function __construct(){
        parent:: __construct();
        $this->load->model('mahasiswa_model');
    }
	public function index() {
		
        $this->data['title']= 'mahasiswa';
        $this->data['mahasiswa'] = $this->mahasiswa_model->getdatamahasiswa();
		$this->load->view('mahasiswa/mahasiswa_list', $this->data);
	}
}
?>