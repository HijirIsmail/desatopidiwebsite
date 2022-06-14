<?php

class produk extends CI_Controller{
    function __construct(){
		parent::__construct();
		$this->load->model('m_crud');
	}

    function index(){
		$title['judul'] = 'Data Produk';
		$data['hasil'] = $this->m_crud->readBy('tbl_bumdes', array('status <>'=>-1));
		$this->load->view('includes/v_header', $title);
		$this->load->view('v_produk', $data);
		$this->load->view('includes/v_footer');
	}
    

}

