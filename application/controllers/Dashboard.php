<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Backend.php');

class Dashboard extends Backend {
	
		public function __construct() 
		{
			parent::__construct();	
			$this->load->model('Dashboard_model');
	
		}	
	public function index(){
		if($this->session->userdata('vms_details'))
		{   							
			$u_l=$this->session->userdata('vms_details');
			$details=$this->Admin_model->login_based_condition_details($u_l['a_id']);
			if($u_l['role']==1){
				$this->load->view('owner/index');
				$this->load->view('owner/footer');
			}else if($u_l['role'] == 4){

				$this->load->view('customer/index');
				$this->load->view('admin/footer');
			}else{
				$this->load->view('customer/index');
				$this->load->view('customer/footer');
			}
			//echo '<pre>';print_r($u_l);exit;
			
			
		        
	    }else{
			 $this->session->set_flashdata('error','Please login to continue');
			redirect('');
		}
	}
	
	
	public function logout(){
		if($this->session->userdata('vms_details'))
		{
			$vms_details=$this->session->userdata('vms_details');
			$this->session->unset_userdata($vms_details);
			$this->session->unset_userdata('vms_details');
			$this->session->sess_destroy('vms_details');
			$this->session->unset_userdata('vms_details');
			redirect('admin/login');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('admin/login');
		} 
	}
	
	
	
	
	
	
	
	
	
	
	
	
}
