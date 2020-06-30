<?php

class Login extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Admin_model');
	}
	public function index(){
	$this->load->view('login');
	}
	public function validate(){
		$data=array(
		'email_id' => $this->input->post("eamil_id"),
		'password' =>$this->input->post("password"),
			);

		$res = $this->Admin_model->checkadmindata($data);
		if(empty($res))
		{
			$this->session->set_flashdata("login_error","<div class='alert alert-danger alert-dismissible mb-2' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Invalid email or password.</strong></div>");
			redirect("login");
		}
		else{
			$this->load->view('includes/head-styles');
			$this->load->view('includes/header');
			$this->load->view('includes/sidebar');
			$this->load->view('index');
			$this->load->view('includes/footer');



		}
	}
}

?>
