<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Backend.php');

class Loadmanage extends Backend {

	public function __construct() 
	{
		parent::__construct();	
				$this->load->model('Loadmanage_model');
	}
	
	public function index()
	{
		if($this->session->userdata('vms_details'))
		{
			$data['booking_list']=$this->Loadmanage_model->get_active_load_list();
			$data['cancel_list']=$this->Loadmanage_model->get_cancle_load_list();
			$data['delivery_list']=$this->Loadmanage_model->get_delivery_load_list();
			//echo '<pre>';print_r($data);exit;
			$this->load->view('owner/manage-load',$data);
			$this->load->view('owner/footer');
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	public function status()
	{
		if($this->session->userdata('vms_details'))
		{
			$load_id=base64_decode($this->uri->segment(3));
			$status=base64_decode($this->uri->segment(4));
			if($load_id=='' || $status==''){
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
				redirect('loadmanage');
			}
			$u_data=array('status'=>$status,'updated_at'=>date('Y-m-d H:i:s'));
			$update=$this->Loadmanage_model->update_load_status($load_id,$u_data);
			//echo $this->db->last_query();exit;
			if(count($update)>0){
				$this->session->set_flashdata('success','load status changed successfully');
				redirect('loadmanage');
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
				redirect('loadmanage');
			}
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
				
	
	
	
}
