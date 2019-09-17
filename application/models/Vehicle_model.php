<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vehicle_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public  function save_vehicle_details($data){
		$this->db->insert('vehicles',$data);
		return $this->db->insert_id();
	}
	public  function save_vehicles_amenities($data){
		$this->db->insert('vehicles_amenities',$data);
		return $this->db->insert_id();
	}
	public  function save_information_load_type($data){
		$this->db->insert('vehicles_inform_load',$data);
		return $this->db->insert_id();
	}
	public  function get_vehical_details($v_id){
		$this->db->select('v_id')->from('vehicles');
		$this->db->where('v_id',$v_id);
		return $this->db->get()->row_array();
	}
	
	public  function get_all_vehicle_details($v_id){
		$this->db->select('*')->from('vehicles');
		$this->db->where('v_id',$v_id);
		return $this->db->get()->row_array();
	}
	public  function get_all_vehicle_details_with_images($v_id){
		$this->db->select('*')->from('vehicles');
		$this->db->where('v_id',$v_id);
		$return=$this->db->get()->row_array();
		$data=$return;
		$images=$this->get_images_list($return['v_id']);
		$data['img_list']=$images;
		if(!empty($data)){
			return $data;
		}
	}
	public  function update_vehicle_details($v_id,$data){
		$this->db->where('v_id',$v_id);
		return $this->db->update('vehicles',$data);
	}
	public  function update_vehicles_amenities($v_a_id,$v_id,$data){
		$this->db->where('name',$v_a_id);
		$this->db->where('v_id',$v_id);
		return $this->db->update('vehicles_amenities',$data);
	}
	public  function update_information_load_type($v_i_l_id,$v_id,$data){
		$this->db->where('name',$v_i_l_id);
		$this->db->where('v_id',$v_id);
		$this->db->where('status',1);
		return $this->db->update('vehicles_inform_load',$data);
	}	
	public  function get_all_vehical_details($id){
		$this->db->select('v.*,d.name as dname,d.driver_id,d.d_lic_num')->from('vehicles as v');
		$this->db->join('drivers_list as d','d.d_id=v.driver_id','left');
		$this->db->where('v.created_by',$id);
		$this->db->where('v.status !=',2);
		$this->db->order_by('v.v_id','desc');
		$return=$this->db->get()->result_array();
		foreach($return as $list){
			$images=$this->get_images_list($list['v_id']);
			$data[$list['v_id']]=$list;
			$data[$list['v_id']]['img_list']=$images;
		}
		if(!empty($data)){
			return $data;
		}
	}
	public  function get_images_list($v_id){
		$this->db->select('img_id,img_org_name,img_name')->from('vehicle_images');
		$this->db->where('v_id',$v_id);
		return $this->db->get()->result_array();
	}
	
	public  function check_vehicle_details($rc_number){
		$this->db->select('v_id')->from('vehicles');
		$this->db->where('r_no',$rc_number);
		return $this->db->get()->row_array();
	}
	
	public  function save_vehicle_image($data){
		$this->db->insert('vehicle_images',$data);
		return $this->db->insert_id();
	}
	
	// remove  image 
	public  function remove_vehicle_imges($img_id){
		$this->db->where('img_id',$img_id);
		return $this->db->delete('vehicle_images');
	}
	public  function get_active_material_list(){
		$this->db->select('material_type_name,m_t_id')->from('material_type');
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	public  function get_amenities_list($id){
		$this->db->select('v_a_id,v_id,name')->from('vehicles_amenities');
		$this->db->where('v_id',$id);
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}public  function vehicles_inform_load($id){
		$this->db->select('v_i_l_id,v_id,name')->from('vehicles_inform_load');
		$this->db->where('v_id',$id);
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	public  function get_amenities(){
		$this->db->select('a_id,a_name')->from('amenities');
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}public  function get_load_types(){
		$this->db->select('l_t_id,load')->from('load_types');
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	public  function get_driver_list($id){
		$this->db->select('d_id,name,driver_id,mobile_number,d_lic_num')->from('drivers_list');
		$this->db->where('status',1);
		$this->db->where('created_by',$id);
		return $this->db->get()->result_array();	
	}
	public  function check_driver($id){
		$this->db->select('driver_id,v_id')->from('vehicles');
		$this->db->where('v_id',$id);
		return $this->db->get()->row_array();
	}
	
	
	
	
	

}