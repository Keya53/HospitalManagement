<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('CategoryModel');

		if($this->session->userdata('user_id') == '') {
			redirect('Authentication/login');
		}
	}

	public function index()
	{
	
		if (!empty($_POST)) {
			$category_id = $this->input->post('category_id');
			$dataToAdd['category_name'] = $this->input->post('category_name');
			// echo "<pre>",print_r($_POST);die();
			if($category_id !='')  {
				// update				
				$this->db->update('category', $dataToAdd,['category_id'=>$category_id]);

			} else {
				// insert
				$this->db->insert('category', $dataToAdd);
			}
			
		}
		$categoryModel = new CategoryModel();	
		
		$data['playlists'] = $categoryModel->getCategoryList();

		if(isset($_GET['category_id'])) {
			$id = $_GET['category_id'];
			$data['specific_playlist'] = $categoryModel->getCategoryList($id );
		}

		// echo '<pre>',print_r($data['specific_playlist']);die();

		
		$this->load->view('header');
		$this->load->view('sub_header');
	
		$this->load->view('category_list_generate', $data);

		$this->load->view('footer');
	}
}
