<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class f_layanan extends CI_Controller {

    public function index()
    {
       	$this->load->view('v_head');
        $this->load->view('v_isi_layanan');
        $this->load->view('v_foot');
    }
}