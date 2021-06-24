<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class SubcategoryModel extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		
	}
	public function getSubcateogryLIst($id='') {
		$sql="select sc.*,c.category_name from subcategory as sc 
		
		join category as c on c.category_id=sc.category_id ";
        if ($id=='') {
            $query=$this->db->query($sql);
            $result = $query->result_array();
            return $result;
        } else {
			$sql .= " where subcategory_id='$id'";
			// $sql .= " join category where subcategory_id.category_id= category.category_id";
			$query=$this->db->query($sql);
            $result = $query->result_array();
			return $result[0];
		}
	}
}
?>
