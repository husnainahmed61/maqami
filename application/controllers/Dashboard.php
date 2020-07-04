<?php

class Dashboard extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Admin_model');
		if($this->session->userdata("userexist")==false)
		{
			$this->session->set_flashdata("login_error","<div class='alert alert-danger'>Please login first</div>");
			redirect("login");
		}
	}
	public function index(){

		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$this->load->view('index');
	}
	public function addproduct(){
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$this->load->view('addproduct');
	}
	public function productDataadd()
	{
		if ($this->input->post('addproduct') == 'Yes') {
			$product_name = $this->input->post('product_name');
			$original_price = $this->input->post('original_price');
			$discounted_price = $this->input->post('discounted_price');
			$product_description = $this->input->post('product_description');

				$repar = array(".", ",", " ", ";", "'", "\\", "\"", "/", "(", ")", "?");
				$uploaddir = './uploads/';
				$basename = basename($_FILES['video']['name']);
				$filename = pathinfo($basename, PATHINFO_FILENAME);
				$ext = pathinfo($basename, PATHINFO_EXTENSION);
				$repairedfilename = str_replace($repar, "1", $filename);
				$updatedimagename = rand(10, 99999999) . $repairedfilename . "." . strtolower($ext);
				$uploadfile4            = $uploaddir . basename($updatedimagename);
				move_uploaded_file($_FILES['video']['tmp_name'], $uploadfile4);
				$res=$this->Admin_model->addproduct($product_name,$original_price,$discounted_price,$product_description,$updatedimagename);
			if ($res>0)
			{
				/*================Product image===============*/
				$repar = array(".", ",", " ", ";", "'", "\\", "\"", "/", "(", ")", "?");
				$img=count($_FILES['product_image']['name']);
				for ($i=0;$i<$img;$i++) {
					$uploaddir = './uploads/productimage/';
					$basename = basename($_FILES['product_image']['name'][$i]);
					$filename = pathinfo($basename, PATHINFO_FILENAME);
					$ext = pathinfo($basename, PATHINFO_EXTENSION);
					$repairedfilename = str_replace($repar, "1", $filename);
					$product_image = rand(10, 99999999) . $repairedfilename . "." . strtolower($ext);
					$uploadfile4 = $uploaddir . basename($product_image);
					move_uploaded_file($_FILES['product_image']['tmp_name'][$i], $uploadfile4);
					$data = array('product_image' => $product_image,
						'post_id' => $res);
					$this->db->insert('product_image', $data);
				}
				/*================Slider image=================*/
				$count = count($_FILES['slider_image']['name']);
				for ($i=0;$i<$count;$i++) {
					$uploaddir = './uploads/slider/';
					$basename = basename($_FILES['slider_image']['name'][$i]);
					$filename = pathinfo($basename, PATHINFO_FILENAME);
					$ext = pathinfo($basename, PATHINFO_EXTENSION);
					$repairedfilename = str_replace($repar, "1", $filename);
					$slider_image = rand(10, 99999999) . $repairedfilename . "." . strtolower($ext);
					$uploadfile4 = $uploaddir . basename($slider_image);
					move_uploaded_file($_FILES['slider_image']['tmp_name'][$i], $uploadfile4);
					$data=array('image'=>$slider_image,
						'post_id'=>$res);
					$this->db->insert('slider_image',$data);
				}
				$this->session->set_flashdata("udate_msg", "<div class='alert alert-success alert-dismissible mb-2' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Product Added Successfully.</strong></div>");


				redirect('product');
			}
		}
	}
	public function Listproduct(){

		$data['product']=$this->Admin_model->getprooduct();
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$this->load->view('list-product',$data);
	}
	public function updateproductdata($id){

		$data['getproductimage']=$this->db->select('*')->from('product_image')->where('post_id',$id)->get()->result_array();
		$data['getsliderimage']=$this->db->select('*')->from('slider_image')->where('post_id',$id)->get()->result_array();
		$data['getproduct']=$this->db->select('*')->from('product')->where('id',$id)->get()->row_array();
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$this->load->view('update-producct',$data);
	}
	public function editproduct(){
		if ($this->input->post('editproduct') == 'Yes') {
			$productid = $this->input->post('productid');
			$product_name = $this->input->post('product_name');
			$original_price = $this->input->post('original_price');
			$discounted_price = $this->input->post('discounted_price');
			$product_description = $this->input->post('product_description');

			$repar = array(".", ",", " ", ";", "'", "\\", "\"", "/", "(", ")", "?");
			$uploaddir = './uploads/';
			$basename = basename($_FILES['video']['name']);
			$filename = pathinfo($basename, PATHINFO_FILENAME);
			$ext = pathinfo($basename, PATHINFO_EXTENSION);
			$repairedfilename = str_replace($repar, "1", $filename);
			$updatedimagename = rand(10, 99999999) . $repairedfilename . "." . strtolower($ext);
			$uploadfile4            = $uploaddir . basename($updatedimagename);
			move_uploaded_file($_FILES['video']['tmp_name'], $uploadfile4);
			$res=$this->Admin_model->updateproduct($product_name,$original_price,$discounted_price,$product_description,$updatedimagename,$productid);
//			print_r($res);
//			exit();
			$this->db->where('post_id',$res)->delete('product_image');
			$this->db->where('post_id',$res)->delete('slider_image');
			if ($res>0)
			{
				/*================Product image===============*/
				$repar = array(".", ",", " ", ";", "'", "\\", "\"", "/", "(", ")", "?");
				$img=count($_FILES['product_image']['name']);
				for ($i=0;$i<$img;$i++) {
					$uploaddir = './uploads/productimage/';
					$basename = basename($_FILES['product_image']['name'][$i]);
					$filename = pathinfo($basename, PATHINFO_FILENAME);
					$ext = pathinfo($basename, PATHINFO_EXTENSION);
					$repairedfilename = str_replace($repar, "1", $filename);
					$product_image = rand(10, 99999999) . $repairedfilename . "." . strtolower($ext);
					$uploadfile4 = $uploaddir . basename($product_image);
					move_uploaded_file($_FILES['product_image']['tmp_name'][$i], $uploadfile4);
					$data = array('product_image' => $product_image,
						'post_id' => $res);
					$this->db->insert('product_image', $data);
				}
				/*================Slider image=================*/
				$count = count($_FILES['slider_image']['name']);
				for ($i=0;$i<$count;$i++) {
					$uploaddir = './uploads/slider/';
					$basename = basename($_FILES['slider_image']['name'][$i]);
					$filename = pathinfo($basename, PATHINFO_FILENAME);
					$ext = pathinfo($basename, PATHINFO_EXTENSION);
					$repairedfilename = str_replace($repar, "1", $filename);
					$slider_image = rand(10, 99999999) . $repairedfilename . "." . strtolower($ext);
					$uploadfile4 = $uploaddir . basename($slider_image);
					move_uploaded_file($_FILES['slider_image']['tmp_name'][$i], $uploadfile4);
					$data=array('image'=>$slider_image,
						'post_id'=>$res);
					$this->db->insert('slider_image',$data);
				}
				$this->session->set_flashdata("udate_msg", "<div class='alert alert-success alert-dismissible mb-2' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Product update Successfully.</strong></div>");

				redirect('view-product');
			}
		}
	}
}

?>
