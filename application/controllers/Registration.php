<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registration extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function signup()
	{

		if (!empty($_POST)) {
			$this->form_validation->set_rules('user_id', 'User Name', 'trim|required|alpha');
			$this->form_validation->set_rules('password', 'password', 'trim|required|max_length[6]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');


			if ($this->form_validation->run()) {
				$dataToAdd = [
					'user_id' => $this->input->post('user_id'),
					'password' => $this->input->post('password'),
					'email' => $this->input->post('email'),
					'name' => $this->input->post('user_id'),
				];

				$status = $this->db->insert('user', $dataToAdd);

				if ($status) {
					return redirect('Authentication/login');
				} else {
					return redirect('Registration/signup');
				}
			} else {
				$this->load->view('header');
				$this->load->view('register');
				$this->load->view('footer');
			}



			// $this->email->from(set_value('email'), set_value('user_id'));
			// $this->email->to("pori@gmail.com");
			// $this->email->subject("Registration Greeting.....");
			// $this->email->message("Thanks For Registration");
			// // $this->email->new_line("\r\n");
			// $this->email->send();
			// if ($this->email->send()) {
			// 	echo 'Your Email Has Been Sent!';
			// } else {
			// 	show_error($this->email->print_debugger());
			// }
		} else {
			$this->load->view('header');
			$this->load->view('register');
			$this->load->view('footer');
			// return redirect('/Registration/signup');
		}
	}
}
