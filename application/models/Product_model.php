<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	public function __construct()
	{
			$this->load->database();
	}

	public function saveProduct($data){
		return $this->db->insert('product', $data);
	}

	public function listProduct(){
		$this->db->where('deleteStatus', 0);
		$query = $this->db->get('product');
		return $query->result();
	}

	public function get_one_product_id($product_id) { 
		$query = $this->db->get_where('product', array('id' => $product_id));
		return $query->row();  
	 }

	 public function update_product($product_id, $data) { 
		$this->db->where('id', $product_id);
		return $this->db->update('product', $data);
	 }

}
