<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Load_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_basicLoad($data){
	  $this->db->insert('full_load', $data);
	  return $this->db->insert_id();
	}
	public  function get_vechiles_list($s_type){
		$this->db->select('v_id,rc_number,model_no,v_o_name')->from('vehicles');
		$this->db->where('s_category',$s_type);
		$this->db->where('s_category',$s_type);
		return $this->db->get()->result_array();
	}
	public  function update_vechile_information($f_l_id,$data){
		$this->db->where('f_l_id',$f_l_id);
		return $this->db->update('full_load',$data);
	}
	public  function get_active_material_list(){
		$this->db->select('m_t_id,material_type_name,material_type_img')->from('material_type');
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}	
	public function get_full_load_details($load_id){
		$this->db->select('f_l_id,material_type')->from('full_load');
		$this->db->where('f_l_id',$load_id);
		return $this->db->get()->row_array();
	}
	
	public function get_vechicle_list($m_type){
		$this->db->select('*')->from('vehicles');
		$this->db->where('material_name',$m_type);
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	
	public  function get_vechicle_details($v_id){
		$this->db->select('*')->from('vehicles');
		$this->db->where('v_id',$v_id);
		return $this->db->get()->row_array();
	}
	public  function save_location_details($data){
	  $this->db->insert('loading_points', $data);
	  return $this->db->insert_id();
	}
	
	public function get_booking_list($a_id){
		$this->db->select('f.*,v.rc_number,v.model_no,v.v_o_name,v.v_fuel_capacity,l.date')->from('full_load as f');
		$this->db->join('vehicles as v','v.v_id=f.vehicle_id','left');
		$this->db->join('loading_points as l','l.load_id=f.f_l_id','left');
		$this->db->where('f.completed',1);
		$this->db->where('f.created_by',$a_id);
		return $this->db->get()->result_array();
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

}