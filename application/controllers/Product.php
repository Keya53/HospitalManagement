<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('SubcategoryModel');
		$this->load->model('CategoryModel');
		$this->load->model('ProductModel');
	}
	public function index(){
		$ProductModel=new ProductModel();
		$data['categorys']=$this->ProductModel->showCategory();
		$data['SubCategorys']=$this->ProductModel->showSubCategorys();
		
		
		if (!empty($_POST)) {
		$dataToAdd = [
			'productName'=>$this->input->post('productName'),
			'description'=>$this->input->post('description'),
			'ActualPrice'=>$this->input->post('ActualPrice'),
			'discount'=>$this->input->post('discount'),
			'category'=>$this->input->post('category'),
			'SubCategory'=>$this->input->post('SubCategory'),
			
		];

		$status = $this->db->insert('product', $dataToAdd);

		if ($status) {
		      $this->session->set_flashdata('Success','Successfully Inserted');
			  return redirect('Product/index');
			} else {
			echo 'fail';
		}
		
		}

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('productList',$data);
		$this->load->view('footer');
	}
}
