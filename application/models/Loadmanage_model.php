<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loadmanage_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public  function get_active_load_list(){
		$this->db->select('f.*,v.rc_number,v.model_no,v.v_o_name,v.v_fuel_capacity,l.date')->from('full_load as f');
		$this->db->join('vehicles as v','v.v_id=f.vehicle_id','left');
		$this->db->join('loading_points as l','l.load_id=f.f_l_id','left');
		$this->db->where('f.status !=',5);
		$this->db->where('f.status !=',6);
		$this->db->where('f.completed',1);
		$return=$this->db->get()->result_array();
		foreach($return as $li){
			$droping_list=$this->get_vechile_droping_list($li['f_l_id']);
			$data[$li['f_l_id']]=$li;
			$data[$li['f_l_id']]['droping_list']=$droping_list;
		}
		if(!empty($data)){
			return $data;			
		}
	}
	public  function get_cancle_load_list(){
		$this->db->select('f.*,v.rc_number,v.model_no,v.v_o_name,v.v_fuel_capacity,l.date')->from('full_load as f');
		$this->db->join('vehicles as v','v.v_id=f.vehicle_id','left');
		$this->db->join('loading_points as l','l.load_id=f.f_l_id','left');
		$this->db->where('f.status',5);
		$this->db->where('f.completed',1);
		$return=$this->db->get()->result_array();
		foreach($return as $li){
			$droping_list=$this->get_vechile_droping_list($li['f_l_id']);
			$data[$li['f_l_id']]=$li;
			$data[$li['f_l_id']]['droping_list']=$droping_list;
		}
		if(!empty($data)){
			return $data;			
		}
	}
	public  function get_delivery_load_list(){
		$this->db->select('f.*,v.rc_number,v.model_no,v.v_o_name,v.v_fuel_capacity,l.date')->from('full_load as f');
		$this->db->join('vehicles as v','v.v_id=f.vehicle_id','left');
		$this->db->join('loading_points as l','l.load_id=f.f_l_id','left');
		$this->db->where('f.status',6);
		$this->db->where('f.completed',1);
		$return=$this->db->get()->result_array();
		foreach($return as $li){
			$droping_list=$this->get_vechile_droping_list($li['f_l_id']);
			$data[$li['f_l_id']]=$li;
			$data[$li['f_l_id']]['droping_list']=$droping_list;
		}
		if(!empty($data)){
			return $data;			
		}
	}
	public  function get_vechile_droping_list($f_l_id){
		$this->db->select('loading_point,droping_point,date,load_id')->from('loading_points');
		$this->db->where('load_id',$f_l_id);
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	public function update_load_status($f_l_id,$data){
		$this->db->where('f_l_id',$f_l_id);
		return $this->db->update('full_load',$data);
	}
	
	
	
	

}