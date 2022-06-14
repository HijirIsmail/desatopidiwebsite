<?php

class hubungikami extends CI_Controller{
    function __construct(){
		parent::__construct();
		$this->load->model('m_crud');
	}

    function index(){
		$title['judul'] = 'Hubungi Kami';
		$this->load->view('includes/v_header', $title);
		$this->load->view('v_hubungikami');
		$this->load->view('includes/v_footer');
	}
    

}