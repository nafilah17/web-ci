<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class f_program extends CI_Controller {

    public function index()
    {
       	$this->load->view('v_head');
        $this->load->view('v_isi_program');
        $this->load->view('v_foot');
    }
}