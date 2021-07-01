<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PostModel');
		$this->load->model('CategoryModel');
	}

	public function index()
	{
		$userId = $this->session->userdata('user_id');
		$usertype = $this->session->userdata('user_type');
		if($usertype == 'superadmin') {
			$userId = '';
		}
		$postModel = new PostModel();

		$data['posts'] = $postModel->getPost($userId);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('post_list', $data);
		$this->load->view('footer');
		// echo '<pre>',print_r($data['posts']);die();
	}

	public function edit()
	{
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		} else {
			$id = '';
		}
		$postModel = new PostModel();
		$data['post'] = $postModel->editpost($id);
		$categoryModel = new CategoryModel();
		$data['categories'] = $categoryModel->getCategoryList();

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('minifacebook', $data);
		$this->load->view('footer');
	}
	public function create()
	{

		if (!empty($_POST)) {

			$dataToAdd = [
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'category_id' => $this->input->post('category_id'),
				'created_by' => $this->session->userdata('user_id')
			];


			$status = $this->db->insert('posts', $dataToAdd);

			if ($status) {
				$this->session->set_flashdata('success', 'Successfully Created');
				return redirect('post/create');
			} else {
				return redirect('post/create');
			}
		} else {

			$categoryModel = new CategoryModel();

			$data['categories'] = $categoryModel->getCategoryList();
			// echo '<pre>',print_r($data['categories']);die();

			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('minifacebook', $data);
			$this->load->view('footer');
		}
	}

	public function update($id = '')
	{
		// echo '<pre>',print_r($_POST);die();

		if (!empty($_POST)) {

			$dataToAdd = [
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'category_id' => $this->input->post('category_id'),
				'updated_by' => $this->session->userdata('user_id')
			];


			$status = $this->db->update('posts', $dataToAdd, ['id' => $id]);

			if ($status) {
				$this->session->set_flashdata('success', 'Successfully Updated');
				return redirect('post');
			} else {
				return redirect('post/edit?id=' . $id);
			}
		} else {

			$categoryModel = new CategoryModel();

			$data['categories'] = $categoryModel->getCategoryList();
			// echo '<pre>',print_r($data['categories']);die();

			$this->load->view('header');
			$this->load->view('minifacebook', $data);
			$this->load->view('footer');
		}
	}



	
	
}


