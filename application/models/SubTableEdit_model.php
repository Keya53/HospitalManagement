<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SubTableEdit_model extends CI_Model
{


	public function getdata()
	{
		$sql = "SELECT c.category_id,s.subcategory_name,c.category_name ,s.category_id,s.subcategory_id
	FROM subcategory s
	JOIN category c ON
	s.category_id=c.category_id";
	
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}
	public function getEditData($id)
	{
		$sql="select * from subcategory where subcategory_id='$id'";
		$query=$this->db->query($sql);
		$result = $query->result_array();
		return !empty($result) ? $result[0] : [];

		
	}
}
                        
/* End of file PostModel.php */
