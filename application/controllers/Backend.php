<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {
	
		public function __construct() 
		{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('cookie');
		$this->load->helper('security');
		$this->load->model('Home_model');
		$this->load->model('Dashboard_model');
		$this->load->model('Admin_model');
		$userdetails=$this->session->userdata('vms_details');	
		$data['userdetails'] = $this->Admin_model->get_admin_details($userdetails['a_id']);
		if($data['userdetails']['role']==2){
				$data['v_cnt']=$this->Admin_model->get_vehicles_cnt($userdetails['a_id']);
				$this->load->view('owner/header',$data);
		}else{
			$this->load->view('admin/header',$data);	
		}
		//echo'<pre>';print_r($userdetails);exit;
			
		}
	
	
	
	
	
	
	
	
	
	
	
	
	
}
