<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PlayList extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('PlayListModel');

		if($this->session->userdata('user_id') == '') {
			redirect('Authentication/login');
		}
	}

	public function index()
	{
		$userId = $this->session->userdata('user_id');
	
		if (!empty($_POST)) {
			$id = $this->input->post('id');
			$dataToAdd['name'] = $this->input->post('name');
			$dataToAdd['user_id'] = $userId;
			if($id !='')  {
				// update				
				$this->db->update('playlist', $dataToAdd,['id'=>$id]);

			} else {
				// insert
				$this->db->insert('playlist', $dataToAdd);
			}
			
		}
		$playListModel = new PlayListModel();	
		
		$data['playlists'] = $playListModel->getPlayLIst($userId);

		if(isset($_GET['id'])) {
			$id = $_GET['id'];
			$data['specific_playlist'] = $playListModel->getPlayLIst($userId,$id );
		}

		// echo '<pre>',print_r($data);die();

		
		$this->load->view('header');
	
		$this->load->view('play_list/play_list_generate', $data);

		$this->load->view('footer');
	}
}
