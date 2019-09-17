<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Driver_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public  function save_driver_login_details($data){
		$this->db->insert('admin',$data);
		return $this->db->insert_id();
	}
	public  function save_driver_details($data){
		$this->db->insert('drivers_list',$data);
		return $this->db->insert_id();
	}
	public function update_driver_documents($d_id,$data){
	$this->db->where('d_id',$d_id);
	return $this->db->update('drivers_list',$data);
	}
	public function get_details_details($d_id){
		$this->db->select('*')->from('drivers_list');
		$this->db->where('d_id',$d_id);
		return $this->db->get()->row_array();	
	}
	public  function check_email_exits($email){
		$this->db->select('*')->from('admin');
		$this->db->where('email',$email);
		$this->db->where('status!=',2);
		return $this->db->get()->row_array();
	}
	public  function update_driver_details($a_id,$data){
		$this->db->where('a_id',$a_id);
    	return $this->db->update("admin",$data);
	}
	public function get_driver_details($d_id){
		$this->db->select('*')->from('drivers_list');		
		$this->db->where('d_id',$d_id);
        return $this->db->get()->row_array();
	}
	public function get_driver_list($aid){
	$this->db->select('drivers_list.*')->from('drivers_list');	
	$this->db->where('created_by',$aid);	
	$this->db->where('drivers_list.status!=',2);
    return $this->db->get()->result_array();
	}
	public function update_driver($d_id,$data){
	$this->db->where('d_id',$d_id);
	return $this->db->update('drivers_list',$data);
	}
	public function update_driver_staus($a_id,$data){
	$this->db->where('a_id',$a_id);
	return $this->db->update('drivers_list',$data);
	}
	
	
	/*
	public  function get_driver_details($v_id){
		$this->db->select('d_id')->from('drivers_list');
		$this->db->where('d_id',$v_id);
		return $this->db->get()->row_array();
	}public  function get_all_driver_details($v_id){
		$this->db->select('*')->from('drivers_list');
		$this->db->where('d_id',$v_id);
		return $this->db->get()->row_array();
	}
	public  function update_driver_details($d_id,$data){
		$this->db->where('d_id',$d_id);
		return $this->db->update('drivers_list',$data);
	}
	
	public  function get_all_drivers_details(){
		$this->db->select('*')->from('drivers_list');
		$this->db->where('status !=',2);
		return $this->db->get()->result_array();
	}
	// get driver details 
	public  function check_driving_details($dri_lic_no){
		$this->db->select('*')->from('drivers_list');
		$this->db->where('driving_lic_no',$dri_lic_no);
		return $this->db->get()->row_array();
	}
	*/
	
	
	

}