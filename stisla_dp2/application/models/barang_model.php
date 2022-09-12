<?php
defined('BASEPATH') OR exit('not allowed access');

class barang_model extends CI_model{

    public function getdatabarang(){
        $this->db->order_by('id_barang','DESC');
        $data = $this->db->get('barang')->result();
        return $data;
    }

    public function simpanData($data){
        $this->db->insert('barang',$data);
        return $this;
    }

    public function findata($id_barang){
        $this->db->where('id_barang',$id_barang);
        $data = $this->db->get('barang')->row();
        return $data;
    
    }

    public function updateData($data,$id_barang){
        $this->db->where('id_barang',$id_barang);
        $this->db->update('barang',$data);
        return $this;
    }

    public function deleteData($id_barang){
        $this->db->where('id_barang',$id_barang);
        $this->db->delete('barang');
        return $this;

    }
}
?>
