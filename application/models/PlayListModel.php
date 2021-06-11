<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class PlayListModel extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		
	}
	public function getPlayLIst($id='') {
		$sql="select * from playlist";
        if ($id=='') {
            $query=$this->db->query($sql);
            $result = $query->result_array();
            return $result;
        } else {
			$sql .= " where id='$id'";
			$query=$this->db->query($sql);
            $result = $query->result_array();
			return $result[0];
		}
	}
}
?>
