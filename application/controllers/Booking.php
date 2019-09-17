<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Backend.php');

class Booking extends Backend {

	public function __construct() 
	{
		parent::__construct();	
				$this->load->model('load_model');
	}
	
	public function index()
	{
		if($this->session->userdata('vms_details'))
		{
			$this->load->view('load/load-booking');
			$this->load->view('admin/footer');
			
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}	
	public  function summary(){
		if($this->session->userdata('vms_details'))
		{
			$l_details=$this->session->userdata('vms_details');
			$data['booking_list']=$this->load_model->get_booking_list($l_details['a_id']);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('load/booking-summary',$data);
			$this->load->view('admin/footer');
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	
					
	
	
	
}
