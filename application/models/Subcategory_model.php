<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subcategory_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}

	
	
	public function get_subcategory_list(){
	$this->db->select('category.c_id,category.category')->from('category');
	$this->db->where('category.status',1);
	return $this->db->get()->result_array();	
	}
	public function save_subcategorys($data){
	$this->db->insert('sub_category', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_sub_category_list_data(){
	$this->db->select('sub_category.*,category.category')->from('sub_category');
	$this->db->join('category', 'category.c_id = sub_category.category_name', 'left');
	$this->db->where('sub_category.status!=',2);
	return $this->db->get()->result_array();	
	}
	public function edit_subcategory($s_id){
	$this->db->select('sub_category.*')->from('sub_category');
	$this->db->where('sub_category.s_id',$s_id);
	return $this->db->get()->row_array();	
	}
	
	public function update_subcategory($s_id,$data){
	$this->db->where('s_id',$s_id);
	return $this->db->update('sub_category',$data);
	}
	 public function check_subcategory_exsists($category_name,$sub_category){
			$this->db->select('sub_category.s_id')->from('sub_category');
			$this->db->where('sub_category.category_name',$category_name);
			$this->db->where('sub_category.sub_category',$sub_category);
			$this->db->where('sub_category.status ',1);
			return $this->db->get()->result_array();
		}
	
	
	
	
	
	/*
	
	public function save_sub_category_details($data){
	$this->db->insert('sub_category', $data);
    return $insert_id = $this->db->insert_id();
	}
	
	
	
    public function get_category_list(){
			$this->db->select('category.*')->from('category');
		$this->db->where('category.status!=',2);
		$return=$this->db->get()->result_array();
	  foreach($return as $list){
	   $lists=$this->get_sub_category_list($list['c_id']);
	   //echo '<pre>';print_r($lists);exit;
	   $data[$list['c_id']]=$list;
	   $data[$list['c_id']]['subcategory_list']=$lists;
	   
	  }
	if(!empty($data)){
	   
	   return $data;
	   
	  }
 }
	public function get_sub_category_list($c_id){
	 $this->db->select('sub_category.*')->from('sub_category');
     $this->db->where('sub_category.c_id',$c_id);
     $this->db->where('sub_category.status !=',2);
	 return $this->db->get()->result_array();
	}
	
	
	public function edit_category($c_id){
		$this->db->select('category.*')->from('category');
		$this->db->where('category.c_id',$c_id);
		$return=$this->db->get()->row_array();
		$list=$this->get_edit_sub_category_list($return['c_id']);
		$data=$return;
		$data['subcategory_list']=$list;
		if(!empty($data)){
			return $data;
		}
	}
	public  function get_edit_sub_category_list($c_id){
		$this->db->select('*')->from('sub_category');
		$this->db->where('sub_category.c_id',$c_id);
		return $this->db->get()->result_array();
		
	}
	public function delete_sub_category_details($s_id){
	$this->db->where('s_id',$s_id);
	return $this->db->delete('sub_category');
	}
	
	
	
	
	public function update_category($c_id,$data){
	$this->db->where('c_id',$c_id);
	return $this->db->update('category',$data);
	}
	*/
	
	

}