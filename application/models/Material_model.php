<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Material_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public  function save_material_type($data){
		$this->db->insert('material_type',$data);
		return $this->db->insert_id();
	}
	public  function get_material_details($m_t_id){
		$this->db->select('*')->from('material_type');
		$this->db->where('m_t_id',$m_t_id);
		return $this->db->get()->row_array();
	}
	
	public  function get_all_material_details(){
		$this->db->select('*')->from('material_type');
		$this->db->where('status !=',2);
		return $this->db->get()->result_array();
	}
	
	public  function update_material_details($m_t_id,$data){
		$this->db->where('m_t_id',$m_t_id);
		return $this->db->update('material_type',$data);
	}
	
	public  function check_material_details($material_type_name){
		$this->db->select('*')->from('material_type');
		$this->db->where('material_type_name',$material_type_name);
		$this->db->where('status !=',2);
		return $this->db->get()->row_array();
	}
	
	
	
	
	
	
	

}