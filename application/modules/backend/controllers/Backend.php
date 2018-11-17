<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {

    public function index()
    {
        $this->load->view('v_header');
        $this->load->view('v_sidebar');
        $this->load->view('v_content');
        $this->load->view('v_footer');
    }
}