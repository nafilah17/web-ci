<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend extends CI_Controller {

    public function index()
    {
       	$this->load->view('v_header');
        $this->load->view('v_slider');
        $this->load->view('v_isi');
        $this->load->view('v_footer');
    }
}