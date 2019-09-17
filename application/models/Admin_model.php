<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public function login_details($data){
		$sql = "SELECT * FROM admin WHERE (email ='".$data['email']."' AND password='".$data['password']."' AND status=1)";
		return $this->db->query($sql)->row_array();	
	}
	public function get_admin_details($a_id){
		$this->db->select('admin.*,roles.role as role_name')->from('admin');
        $this->db->join('roles', 'roles.role_id = admin.role', 'left');
		$this->db->where('admin.a_id', $a_id);
		$this->db->where('admin.status', 1);
        return $this->db->get()->row_array();	
	}
	/*profile */
	public function update_profile($a_id,$data){
	$this->db->where('a_id',$a_id);
     return $this->db->update('admin',$data);	
	}
	// role list 
	public  function get_roles_list(){
		$this->db->select('role_id,role')->from('roles');
		$this->db->where('roles.status', 1);
        return $this->db->get()->result_array();
	}
	// save owners
	public  function save_onwers($data){
		$this->db->insert('admin',$data);
		return $this->db->insert_id();
	}
	// email unique purpose
	public function check_mobile_number($email){
		$this->db->select('a_id,email')->from('admin');
		$this->db->where('admin.email', $email);
		$this->db->where('admin.status !=', 2);
        return $this->db->get()->row_array();
	}
	// get user details 
	public  function get_register_details($a_id){
		$this->db->select('a_id,email,mobile_number,otp')->from('admin');
		$this->db->where('admin.a_id', $a_id);
        return $this->db->get()->row_array();
	}
	//update verification details
	public function update_user_details($a_id,$data){
		$this->db->where('admin.a_id', $a_id);
		return $this->db->update('admin',$data);
	}
	
	// get basic details  for login condition
	public  function login_based_condition_details($a_id){
		$this->db->select('a_id,email,role')->from('admin');
		$this->db->where('admin.a_id', $a_id);
        return $this->db->get()->row_array();
	}
	public  function get_vehicles_cnt($wid){
		$this->db->select('COUNT(v_id) as cnt')->from('vehicles');
		$this->db->where('created_by', $wid);
        return $this->db->get()->row_array();
	}
	
	
	
	
	

}