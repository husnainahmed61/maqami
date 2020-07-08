<?php

class Product extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model');
	}
	public function index(){
		$data['allProducts'] = $this->db->select('*')->from('product')->get()->result_array();
		$this->load->view('includes/front-header');
		$this->load->view('product/listProducts', $data);
		$this->load->view('includes/front-footer');
	}

	public function singleProduct($slug){
		print_r($slug);
		$this->load->view('includes/front-header');
		$this->load->view('includes/front-footer');
	}
}
