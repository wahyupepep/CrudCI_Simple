<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class halloci extends CI_Controller {

	public function index()
	{
		//$this->load->view('welcome_message');
        //echo "Ini CI Pertamaku Gaes ada yang berbeda";
        
        $this->load->view('projekkecil');
    }
    
    public function fungsi()
	{
		//$this->load->view('welcome_message');
		echo "Ini CI Pertamaku Gaes ini pakai fungsi";
    }
    
    public function parameter($nama)
	{
		//$this->load->view('welcome_message');
		echo "Ini CI Pertamaku Bro $nama";
	}
}