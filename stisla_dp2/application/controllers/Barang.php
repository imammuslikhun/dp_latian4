<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct(){
        parent:: __construct();
        $this->load->model('barang_model');
    }

    public function index() {
		

        $this->data['title']='barang';
        $this->data['barang'] = $this->barang_model->getdatabarang();
		$this->load->view('barang/barang_list', $this->data);
	}
    
    public function add(){
        $this->data['title'] = "Tambah Barang";
        $this->load->view('barang/barang_add',$this->data);
    }

    public function add_save(){
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'harga_satuan' => $this->input->post('harga_satuan'),
        );

        $simpan = $this->barang_model->simpanData($data);

        if($simpan){
            redirect('barang');

        }
    }

    public function edit($id_barang){
      

        $this->data['title'] = 'edit data';
        $this->data['barang'] = $this->barang_model->findata($id_barang);

        $this->load->view('barang/barang_edit',$this->data);

    }

    public function edit_save(){
        
        $id_barang = $this->input->post('id_barang');
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'harga_satuan' => $this->input->post('harga_satuan')
        ); 

        $update = $this->barang_model->updateData($data,$id_barang);

        if($update){
            redirect('barang');         
        }
    }

    public function hapus($id_barang){
        $del = $this->barang_model->deletedata($id_barang);
        if($del){
            redirect('barang');
        }
    }
}
?>