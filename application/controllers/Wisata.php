<?php

class wisata extends CI_Controller{
    function __construct(){
		parent::__construct();
		$this->load->model('m_crud');
	}

    function index(){
		$title['judul'] = 'Wisata Desa Topidi';
		$this->load->view('includes/v_header', $title);
		$this->load->view('v_wisata');
		$this->load->view('includes/v_footer');
	}
    

}