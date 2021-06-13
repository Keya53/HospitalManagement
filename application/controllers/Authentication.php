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
		if (!empty($_POST)) {
			$userId = $this->input->post('user_id');
			$password = $this->input->post('password');
			$user = $this->db->where('user_id', $userId)
				->where('password', $password)
				->get('user')->result_array();
			if (!empty($user)) {
				$this->session->set_userdata(
					[
						'user_id' => $user[0]['user_id'],
						'user_name' => $user[0]['name']
					]
				);
				redirect(base_url());
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
