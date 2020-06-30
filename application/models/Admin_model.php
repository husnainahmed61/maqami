<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model
{
	function checkadmindata($data)
	{
		$this->db->where($data);
		$query = $this->db->get("admin");
		return $query->row_array();
	}
}
?>
