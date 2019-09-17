<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public function login_details($e,$p){
		$sql = "SELECT * FROM admin WHERE (email ='".$e."' AND password='".$p."' AND status=1)";
		return $this->db->query($sql)->row_array();	
	}
	public  function update_user($id,$d){
		$this->db->where('a_id',$id);
		return $this->db->update('admin',$d);
	}
	public function check_mobile_email_exist($email){
		$sql = "SELECT a_id,email,mobile_number,org_password FROM admin WHERE (email='".$email."') OR (mobile_number='".$email."')";
		return $this->db->query($sql)->row_array();	
	}
	public function check_user_pwd_details($a_id){
		$sql = "SELECT a_id,password,org_password FROM admin WHERE a_id='".$a_id."'";
		return $this->db->query($sql)->row_array();	
	}
	public function get_profiledetails($aid){
		$this->db->select('a_id,role,name,email,mobile_number,gst,pan,company_name,address,billing_add,godan_add,profile_pic')->from('admin');		
		$this->db->where('a_id',$aid);
        return $this->db->get()->row_array();
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
	

}