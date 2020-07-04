<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model
{
	function checkadmindata($data)
	{
		$this->db->where($data);
		$query = $this->db->get("users");
		return $query->row_array();
	}
	function addproduct($product_name,$original_price,$discounted_price,$product_description,$updatedimagename)
	{
		$data = array
		(
			"product_name"=>$product_name,
			"original_price"=>$original_price,
			"discounted_price"=>$discounted_price,
			"product_description"=>$product_description,
			"video"=>$updatedimagename
		);
		$this->db->insert("product",$data);
		return $this->db->insert_id();

	}
	function insert_productimage($product_image,$post_id){
		$data=array('product_image'=>$product_image,
				'post_id'=>$post_id);
		$this->db->insert('product_image',$data);
	}
	function insert_sliderimage($slider_image,$post_id){
		$data=array('image'=>$slider_image,
			'post_id'=>$post_id);
		$this->db->insert('slider_image',$data);
	}
	function getprooduct(){
		return $this->db->select('*')->from('product')->get()->result_array();
	}
	function updateproduct($product_name,$original_price,$discounted_price,$product_description,$updatedimagename,$productid)
	{
		$data = array
		(
			"product_name" => $product_name,
			"original_price" => $original_price,
			"discounted_price" => $discounted_price,
			"product_description" => $product_description,
			"video" => $updatedimagename
		);
		$this->db->where('id',$productid);
		$this->db->update("product",$data);
		$updated_status = $this->db->affected_rows();
		if ($updated_status){
			return $productid;
		}
		else{
			return false;
		}

	}
}
?>
