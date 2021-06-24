<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
	}

	public function login()
	{
		if($this->session->userdata('user_id')) {
			redirect('/');
		}

		if (!empty($_POST)) {
			$this->form_validation->set_rules('user_id', 'User Name', 'trim|required|alpha');
			$this->form_validation->set_rules('password', 'password', 'trim|required|max_length[6]');

			if ($this->form_validation->run()) {

				$userId = $this->input->post('user_id');
				$password = $this->input->post('password');
				$user = $this->db->where('user_id', $userId)
					->where('password', $password)
					->get('user')->result_array(); //get('table name')
				if (!empty($user)) {
					$this->session->set_userdata(
						[
							'user_id' => $user[0]['user_id'],
							'user_name' => $user[0]['name']
						]
					);
					redirect(base_url());
				}
			} else {
				$this->session->set_flashdata('LoginFailed', 'Invalid Username/Password');
				return redirect('Authentication/login');
			}
		}

		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function logout()
	{
		unset($_SESSION['user_id']);
		redirect('/');
	}
}
