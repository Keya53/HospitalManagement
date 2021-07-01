<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PostModel extends CI_Model
{

	public function getPost($userId='')
	{
		$sql = "SELECT p.*,c.category_name,u.name 
			 FROM posts as p 
				JOIN category c on c.category_id=p.category_id 
				LEFT join user u on u.user_id=p.created_by
				where (p.created_by='$userId' or ''='$userId')
			order by p.id desc";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}
	public function editpost($postId)
	{
		$sql = "select * from posts where id='$postId'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result[0];
	}

}
                        
/* End of file PostModel.php */
