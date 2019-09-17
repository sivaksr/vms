<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}

	public function save_categorys($data){
	$this->db->insert('category', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function save_sub_category_details($data){
	$this->db->insert('sub_category', $data);
    return $insert_id = $this->db->insert_id();
	}
	
	
	
    public function get_category_list(){
			$this->db->select('category.*')->from('category');
		$this->db->where('category.status!=',2);
		return $this->db->get()->result_array();
	}
	
	public function edit_category($c_id){
		$this->db->select('category.*')->from('category');
		$this->db->where('category.c_id',$c_id);
		return $this->db->get()->row_array();
	}
	public function delete_sub_category_details($s_id){
	$this->db->where('s_id',$s_id);
	return $this->db->delete('sub_category');
	}
	
	public function update_category($c_id,$data){
	$this->db->where('c_id',$c_id);
	return $this->db->update('category',$data);
	}
	public function check_category_already($category){
	$this->db->select('category.*')->from('category');
		$this->db->where('category.category',$category);
		$this->db->where('category.status ',1);
		return $this->db->get()->row_array();
	}
	
	

}