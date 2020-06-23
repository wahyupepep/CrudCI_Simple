<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelku extends CI_model {

	//public function index(){
		//$dataku->$this->load->db->query("SELECT * FROM".$tabel);
        //return $dataku->result_array();
        
    //menggunakan query builder
    public function getData($tabel){
		$dataku=$this->db->get($tabel);
        return $dataku->result_array(); //mengembalikan operasi $dataku kedalam sebuah array
    }

    public function masukkan($tabel, $data){
        $dataku=$this->db->insert($tabel, $data); //memasukkan data kedalam database
        return $dataku;
    }

    public function Hapus($tabel, $where){
        $dataku=$this->db->delete($tabel, $where); //query untuk hapus data
        return $dataku;
    }

    public function perbarui($tabel, $data, $where){
        $dataku=$this->db->update($tabel, $data, $where); //query update data
        return $dataku;
    }

    public function GetWhere($tabel, $data){
        $dataku=$this->db->get_where($tabel, $data);
        return $dataku->result_array();
    }

    public function mhsJoinProdi($nim){
        $dataku=$this->db->query('SELECT m.*, p.nama_prodi FROM mhs m JOIN prodi p WHERE m.kode_prodi=p.kode_prodi AND m.nim="'.$nim.'"');
        return $dataku->result_array();
    }

}