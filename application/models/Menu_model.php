<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}

	public function save_menu_items($data){
	$this->db->insert('menu', $data);
		return $insert_id = $this->db->insert_id();
	}
    public function get_category_list(){
			$this->db->select('category.c_id,category.category')->from('category');
		$this->db->where('category.status',1);
		$this->db->group_by('category.category');
		return $this->db->get()->result_array();
	}
	
	public function get_menu_list(){
	$this->db->select('menu.*,category.category,sub_category.sub_category')->from('menu');
	$this->db->join('category', 'category.c_id = menu.category_name', 'left');
	$this->db->join('sub_category', 'sub_category.s_id = menu.sub_category_name', 'left');
	$this->db->where('menu.status!=',2);
	return $this->db->get()->result_array();
	}
	public function subcategory_list_data($category_name){
	$this->db->select('sub_category.s_id,sub_category.sub_category')->from('sub_category');
	$this->db->where('sub_category.category_name',$category_name);
	return $this->db->get()->result_array();
	}
	
	
	public function edit_menu($m_id){
		$this->db->select('menu.*')->from('menu');
		$this->db->where('menu.m_id',$m_id);
		return $this->db->get()->row_array();
	}
	public function update_menu($m_id,$data){
	$this->db->where('m_id',$m_id);
	return $this->db->update('menu',$data);
	}
	
	
	

}