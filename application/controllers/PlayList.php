<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PlayList extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('PlayListModel');
	}

	public function index()
	{
		if (!empty($_POST)) {
			$id = $this->input->post('id');
			$dataToAdd['name'] = $this->input->post('name');
			$dataToAdd['user_id'] = 1;
			if($id !='')  {
				// update				
				$this->db->update('playlist', $dataToAdd,['id'=>$id]);

			} else {
				// insert
				$this->db->insert('playlist', $dataToAdd);
			}
			
		}
		$playListModel = new PlayListModel();
		$data['playlists'] = $playListModel->getPlayLIst();

		if(isset($_GET['id'])) {
			$id = $_GET['id'];
			$data['specific_playlist'] = $playListModel->getPlayLIst($id);
		}

		// echo '<pre>',print_r($data['specific_playlist']);die();

		$this->load->view('play_list/play_list_generate', $data);
	}
}
