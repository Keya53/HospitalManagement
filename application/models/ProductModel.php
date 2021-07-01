<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ProductModel extends CI_Model
{
public function showCategory(){
	$sql="select * from category";
	$query = $this->db->query($sql);
	$result = $query->result_array();
	return $result;
}
public function showSubCategorys(){
	$sql="select * from subcategory";
	$query = $this->db->query($sql);
	$result = $query->result_array();
	return $result;
}


}
                        

