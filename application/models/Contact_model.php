<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public function save_contacts($data){
	$this->db->insert('contact', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_contact_list(){
	$this->db->select('contact.*')->from('contact');
	$this->db->where('contact.status!=',2);
    return $this->db->get()->result_array();
	}
	public function get_contact_address_list(){
	$this->db->select('contact.address,contact.c_id,contact.save_address')->from('contact');
	$this->db->where('contact.address!=','');
	$this->db->group_by('contact.address');
    return $this->db->get()->result_array();
	}
	public function get_contact_save_address_list(){
	$this->db->select('contact.address,contact.c_id,contact.save_address')->from('contact');
	$this->db->where('contact.save_address=','');
    return $this->db->get()->result_array();
	}
	
	
	public function edit_contact($c_id){
	$this->db->select('contact.*')->from('contact');
	$this->db->where('contact.c_id',$c_id);
    return $this->db->get()->row_array();
	}
	public function update_contacts($c_id,$data){
	$this->db->where('c_id',$c_id);
     return $this->db->update('contact',$data);	
	}
	
	
	
	

}