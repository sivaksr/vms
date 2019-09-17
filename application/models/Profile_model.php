<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public  function get_admin_details($id){
		$this->db->select('a_id,role,name,email,mobile_number,gst,pan,company_name,address,profile_pic,godan_add,billing_add')->from('admin');
		$this->db->where('a_id',$id);
		return $this->db->get()->row_array();
	}
	public  function get_billing_address_checked($id){
		$this->db->select('a_id,b_id,address,current')->from('billing_address');
		$this->db->where('a_id',$id);
		$this->db->where('status',1);
		$this->db->where('current',1);
		return $this->db->get()->row_array();
	}
	public  function get_godan_address_checked($id){
		$this->db->select('a_id,g_id,address,current')->from('godan_address');
		$this->db->where('a_id',$id);
		$this->db->where('status',1);
		$this->db->where('current',1);
		return $this->db->get()->row_array();
	}
	
	public function update_profile($a_id,$data){
	$this->db->where('a_id',$a_id);
     return $this->db->update('admin',$data);	
	}
	public  function save_profile_billing_add($add){
		$this->db->insert('billing_address',$add);
		return $this->db->insert_id();
	}
	public  function save_profile_godan_add($add){
		$this->db->insert('godan_address',$add);
		return $this->db->insert_id();
	}
	public  function get_c_b_a_details($id){
		$this->db->select('a_id,b_id,address,current')->from('billing_address');
		$this->db->where('a_id',$id);
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	public  function get_c_g_a_details($id){
		$this->db->select('a_id,g_id,address,current')->from('godan_address');
		$this->db->where('a_id',$id);
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	
	public  function update_b_profile_billing_add($da){
		return $this->db->update('billing_address',$da);
	}
	public  function update_b_after_profile_billing_add($id,$da){
		$this->db->where('b_id',$id);
		return $this->db->update('billing_address',$da);
	}
	public  function update_g_profile_billing_add($da){
		return $this->db->update('godan_address',$da);
	}
	public  function update_g_after_profile_billing_add($id,$da){
		$this->db->where('g_id',$id);
		return $this->db->update('godan_address',$da);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

}