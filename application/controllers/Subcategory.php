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
				$status = $this->db->update('subcategory', $dataToAdd,['subcategory_id'=>$subcategory_id]);
				if($status) {
					$this->session->set_flashdata('success','Successfully Updated');
				} else {
					$this->session->set_flashdata('error','Failed to Update');
				}

			} else {
				// insert
				$status = $this->db->insert('subcategory', $dataToAdd);
				if($status) {
					$this->session->set_flashdata('success','Successfully Added');
				} else {
					$this->session->set_flashdata('error','Failed to Add');
				}
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
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('subcategory_list_generate', $data);

		$this->load->view('footer');
	}

	public function viewSubTable()
	{

		$this->load->model('SubTableEdit_model');
		$subTableEdit = new SubTableEdit_model();
		$data['posts'] = $subTableEdit->getdata();

	
		

		// if (isset($_GET['id'])) {
		// 	$id = $_GET['id'];
		// 	$data['editdata'] = $subTableEdit->getEditData($id);
		// 	// echo '<pre>',print_r($data['editdata']);die();			
		// }
		$categoryModel = new CategoryModel();
		$data['categories'] = $categoryModel->getCategoryList();
		
		

		$this->load->view('header');
		$this->load->view('play_list/subtable', $data);

		$this->load->view('footer');
	}

	public function subTableEdit(){
		$this->load->model('SubTableEdit_model');
		$subTableEdit = new SubTableEdit_model();

		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$data['editdata'] = $subTableEdit->getEditData($id);
			//  echo '<pre>',print_r($data['editdata']);die();			
		}
		$categoryModel=new CategoryModel();
		$data['categories']=$categoryModel->getCategoryList();
		$this->load->view('header');
		$this->load->view('subTableEdit',$data);

		$this->load->view('footer');

	}

	public function updateSubTable($id){
		// echo '<pre>',print_r($_POST);die();
		if (!empty($_POST)) {

			$dataToAdd = [
				
				'subcategory_name' => $this->input->post('subcategory_name'),
				'category_id' => $this->input->post('category_id'),
			
			];


			$status = $this->db->update('subcategory', $dataToAdd, ['subcategory_id' => $id]);

			if ($status) {
				$this->session->set_flashdata('success', 'Successful insertion');
				return redirect('SubCategory/viewSubTable');
				
			
			} else {
				return redirect('SubCategory/subTableEdit?id=' . $id);
			}
		}
	}

	 public function deleteSubcategory()
	{
		if(isset($_GET['subcategory_id'])) {
			$id = $_GET['subcategory_id'];
			$subcategoryModel=new SubcategoryModel();
			$status = $subcategoryModel->deleteSubcategory($id);
			if($status) {
				$this->session->set_flashdata('success','Deleted Successfully');
			} else {
				$this->session->set_flashdata('error','Something Went Wrong');
			}
			
			redirect('Subcategory/index');
			
			
		}
		
	}
}
