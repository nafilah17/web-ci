<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class f_donasi extends CI_Controller {

    public function index()
    {
       	$this->load->view('v_head');
        $this->load->view('v_isi_donasi');
        $this->load->view('v_foot');
    }
}