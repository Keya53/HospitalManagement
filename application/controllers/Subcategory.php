<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subcategory extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('SubcategoryModel');
		$this->load->model('CategoryModel');

		if($this->session->userdata('user_id') == '') {
			redirect('Authentication/login');
		}
	}

	public function index()
	{
	
	
		if (!empty($_POST)) {
			$subcategory_id = $this->input->post('subcategory_id');
			$dataToAdd['subcategory_name'] = $this->input->post('subcategory_name');
			$dataToAdd['category_id'] = $this->input->post('category_id');
			
			if($subcategory_id !='')  {
				// update				
				$this->db->update('subcategory', $dataToAdd,['subcategory_id'=>$subcategory_id]);

			} else {
				// insert
				$this->db->insert('subcategory', $dataToAdd);
			}
			
		}
		$SubcateogryModel = new SubcategoryModel();	
		$cateogryModel = new CategoryModel();	
		
		$data['playlists'] = $SubcateogryModel->getSubcateogryLIst();
		$data['categories'] = $cateogryModel->getCategoryList();
		// echo "<pre>",print_r($data['categories']);die();

		if(isset($_GET['subcategory_id'])) {
			$subcategory_id = $_GET['subcategory_id'];
			$data['specific_playlist'] = $SubcateogryModel->getSubcateogryLIst($subcategory_id );
		}

		// echo '<pre>',print_r($data);die();

		
		$this->load->view('header');
		$this->load->view('sub_header');
		$this->load->view('subcategory_list_generate', $data);

		$this->load->view('footer');
	}
}
