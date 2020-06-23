<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ukmpemogramanweb extends CI_Controller {

	public function index()	{
        $this->load->model('modelku'); //memanggil data pada modelku
        $dataMhs=$this->modelku->getData('mhs');
        $data=array(
            "dataMhs"=>$dataMhs
        );
        $this->load->view("Homemhs", $data);
    }
    
    public function fpendaftaran(){
        $this->load->model('modelku');
        $dataProdi=$this->modelku->getData('prodi');
        $data=array(
            "dataProdi"=>$dataProdi
        );
        $this->load->view("form_tambah", $data);
    }

    public function tambah_data_mahasiswa(){
        $this->load->model('modelku');
        $datainputan=array(
            'nama'=>$this->input->post('nama'),
            'nim'=>$this->input->post('nim'),
            'alamat'=>$this->input->post('alamat'),
            'kode_prodi'=>$this->input->post('program_studi')
        );
        $query=$this->modelku->masukkan('mhs', $datainputan);
        if($query){
            echo "<script>alert('Pendaftaran Sukses')</script>";
            $this->index();
        }else{
            echo "<script>alert('Pendaftaran Gagal')</script>";
            $this->fpendaftaran();
        }
    }

    public function hapus_data_mhs($nim){
        $this->load->model('modelku');
        $nim = array (
            'nim' =>$nim
        );
        $query=$this->modelku->Hapus('mhs',$nim);
        if($query){
            echo "<script> alert('Hapus data mahasiswa sukses')</script>";
            $this->index();
        }else{
            echo "<script> alert('Hapus data mahasiswa Gagal')</script>";
            $this->index();
        }
    }

    public function edit_data_mhs($nim){
        $this->load->model('modelku');
        $data['prodi']=$this->modelku->getData('prodi');
        $mhs=$this->modelku->mhsJoinProdi($nim);
        $data['mhs']=array(
            'nama'=>$mhs[0] ['nama'],
            'nim'=>$nim,
            'alamat'=>$mhs[0] ['alamat'],
            'kode_prodi'=>$mhs[0] ['kode_prodi'],
            'nama_prodi'=>$mhs[0] ['nama_prodi']
        );
        $this->load->view('form_edit_mhs',$data);
    }

    public function proses_edit_mhs($nim){
        $this->load->model('modelku');
        $datainputan=array(
            'nama'=>$this->input->post('nama'),
            'nim'=>$this->input->post('nim'),
            'alamat'=>$this->input->post('alamat'),
            'kode_prodi'=>$this->input->post('program_studi')
        );
        $where = array(
            'nim' =>$nim
        );
        $query=$this->modelku->perbarui('mhs', $datainputan, $where);
        if($query){
            echo "<script> alert('Edit data mahasiswa sukses')</script>";
            $this->index();
        }else{
            echo "<script> alert('Edit data mahasiswa Gagal')</script>";
            $this->edit_data_nhs($nim);
        }
    }

    public function proses_login_admin(){
        $this->load->model('modelku');
        $where = array(
            'user'=>$this->input->post('user'),
            'pass'=>$this->input->post('pass'),
        );
        $cek=$this->modelku->GetWhere('adminn',$where);
        $count_cek=count($cek);
        if($count_cek > 0){
            $data_session=array(
                'no'=>$cek[0]['no'],
                'user'=>$cek[0]['user']
            );
            $this->session->set_userdata($data_session);
            echo "<script> alert('Login admin Berhasil')</script>";
            redirect(base_url()."index.php/dashbordadmin");
            //membuat controller baru bernama dashbord
        }else{
            echo "<script> alert('Login admin Gagal')</script>";
            $this->index();// gagal kembali ke index/halaman awal
        }
    }
}
