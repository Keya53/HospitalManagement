<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class CategoryModel extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		
	}
	public function getCategoryList($id='') {
		$sql="select * from category ";
        if ($id=='') {
            $query=$this->db->query($sql);
            $result = $query->result_array();
            return $result;
        } else {
			$sql .= " where category_id='$id'";
			$query=$this->db->query($sql);
            $result = $query->result_array();
			return $result[0];
		}
	}
}
?>
