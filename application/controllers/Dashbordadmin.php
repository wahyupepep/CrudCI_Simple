<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbordadmin extends CI_Controller {
    public function index(){
        if(!empty($this->session->userdata('no'))){
            $this->load->view('admin/index.php');
            //tampilan berasal dari view/admin/index.php
        }else{
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

}

?>