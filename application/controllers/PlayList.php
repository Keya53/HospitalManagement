<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlayList extends CI_Controller {
	function __construct() {
		parent::__construct();
	}

	public function index() {
		if(!empty($_POST)) {
			$dataToAdd['name'] = $this->input->post('name');
			$dataToAdd['user_id'] = 1;

			$this->db->insert('playlist',$dataToAdd);
		}

		$this->load->view('play_list/play_list_generate');

	}


}
