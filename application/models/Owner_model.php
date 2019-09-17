<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Owner_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public  function save_owner($data){
		$this->db->insert('admin',$data);
		return $this->db->insert_id();
	}
	public function update_owner($d_id,$data){
	$this->db->where('a_id',$d_id);
	return $this->db->update('admin',$data);
	}
	public  function get_owner_list(){
		$this->db->select('name,a_id,email,mobile_number,gst,pan,company_name,address,status')->from('admin');
		$this->db->where('status!=',2);
		$this->db->where('role',2);
		return $this->db->get()->result_array();
	}
	public  function get_owner_details($a_id){
		$this->db->select('name,a_id,email,mobile_number,gst,pan,company_name,address,status,godan_add,billing_add,profile_pic')->from('admin');
		$this->db->where('a_id',$a_id);
		return $this->db->get()->row_array();
	}
	public function check_email_id($e){
		$this->db->select('a_id')->from('admin');
		$this->db->where('email',$e);
		$this->db->where('status!=',2);
		return $this->db->get()->row_array();
	}
	
	
	

}