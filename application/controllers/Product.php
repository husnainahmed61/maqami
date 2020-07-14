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
		if (isset($slug) && !empty($slug)){
			$data['postDetail'] = $this->db->select('*')->from('product')->where('uri',$slug)->get()->result_array();
		}

		$data['slug'] = $slug;
		$this->load->view('includes/front-header');
		$this->load->view('product/singleProduct', $data);
		$this->load->view('includes/front-footer');
	}
}
