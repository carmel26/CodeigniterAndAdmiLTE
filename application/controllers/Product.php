<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('Product_model');
			$this->load->helper('url_helper');
	}

	public function index()
	{ 
		$data['data'] = $this->Product_model->listProduct();   
			$data['content_view'] = 'crud/list';
			$data['msg'] = '';
			$this->load->view('main', $data);  
	}

	public function add()
	{
		$data['content_view'] = 'crud/add';
		$data['msg'] = '';
		$data['data'] = '';
        $this->load->view('main', $data); 
	}
	
	public function addSave(){
		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('designation', 'Designation', 'required'); 
  
		// Check if the form data is valid
		if ($this->form_validation->run() == FALSE) { 
		   $data['content_view'] = 'crud/add';
		   $data['data'] = '';
		   $data['msg'] = 'An error happened';
		   $this->load->view('main', $data); 
		} else { 

		   $data = array(
			  'designation' => $this->input->post('designation'),
			  'type' => $this->input->post('type'),
			  'label' => $this->input->post('label'), 
			  'dateCreation' => date('Y-m-d H:i:s'),
		   );
   
		   $result = $this->Product_model->saveProduct($data);
   
		   if ($result) {
				$data['content_view'] = 'crud/list';
				$data['msg'] = 'Data saved successfully';
				$data['data'] = $this->Product_model->listProduct();   
				$this->load->view('main', $data); 
		   } else {
				$data['content_view'] = 'crud/add';
				$data['msg'] = 'An error happened';
				$data['data'] = '';
				$this->load->view('main', $data); 
		   }
		}
	}

	public function list_product(){ 
			$data['data'] = $this->Product_model->listProduct();   
			$data['content_view'] = 'crud/list';
			$data['msg'] = '';
			$this->load->view('main', $data);  
	}

	public function edit($product_id) { 
		$data['data'] = $this->Product_model->get_one_product_id($product_id);
		$data['content_view'] = 'crud/edit';
		$data['msg'] = '';
		$this->load->view('main', $data);   
	}

	public function editSave($product_id){  
			$update_data = array(
			'designation' => $this->input->post('designation'),
			'type' => $this->input->post('type'),
			'label' => $this->input->post('label'), 
			);
	
			$result = $this->Product_model->update_product($product_id, $update_data);
	
			if ($result) {
				$data['data'] = $this->Product_model->listProduct();   
				$data['content_view'] = 'crud/list';
				$data['msg'] = '';
				$this->load->view('main', $data);  
			} else { 
			$data['product'] = $this->Product_model->get_one_product_id($product_id);
				$data['content_view'] = 'crud/edit';
				$data['msg'] = 'Error in updating product';
				$this->load->view('main', $data);   
			}
		}

		public function delete($product_id){  
			$update_data = array(
			'deleteStatus' => '1', 
			'dateDelete' => date('Y-m-d H:i:s'),
			);
	
			$result = $this->Product_model->update_product($product_id, $update_data);
	
			if ($result) {
				$data['data'] = $this->Product_model->listProduct();   
				$data['content_view'] = 'crud/list';
				$data['msg'] = 'Deleted successfully';
				$this->load->view('main', $data);  
			} else { 
			$data['product'] = $this->Product_model->get_one_product_id($product_id);
				$data['content_view'] = 'crud/edit';
				$data['msg'] = 'Error in updating product';
				$this->load->view('main', $data);   
			}
		}

		public function view($product_id) { 
			$data['data'] = $this->Product_model->get_one_product_id($product_id);
			$data['content_view'] = 'crud/view';
			$data['msg'] = '';
			$this->load->view('main', $data);   
		}
}
