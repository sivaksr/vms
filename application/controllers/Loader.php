<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Backend.php');

class Loader extends Backend {
	
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
		$this->load->model('Load_model');
	
		}
	
	
	public function booking(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
             
			$this->load->view('load/load-booking');
			$this->load->view('admin/footer');
		        
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	public function full(){
		if($this->session->userdata('vms_details'))
		{
            
			$data['tab']=base64_decode($this->uri->segment(3));
				$data['hospital_id']=$this->uri->segment(4);
				//echo '<pre>';print_r($data);exit;
				
			if(isset($data['hospital_id']) && $data['hospital_id']!=''){
					$data['load_details']= $this->Load_model->get_load_details(base64_decode($this->uri->segment(4)));
					echo '<pre>';print_r($data);exit;
				}else{
					$data['load_details']=array();
				}
			
			
			
			$this->load->view('load/full-load');
			$this->load->view('admin/footer');
		        
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	public function fullloadpost(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
           $post=$this->input->post();
		   //echo'<pre>';print_r($post);exit;
		   $save_data=array(
		   'loading_point'=>isset($post['loading_point'])?$post['loading_point']:'',
		   'droping_point'=>isset($post['droping_point'])?$post['droping_point']:'',
		   'date'=>isset($post['date'])?$post['date']:'',
		   'status'=>1,
		   'created_at'=>date('Y-m-d H:i:s'),
		   'updated_at'=>date('Y-m-d H:i:s'),
		   'created_by'=>isset($userdetails['a_id'])?$userdetails['a_id']:''
		   );

		$save=$this->Load_model->save_basic_load($save_data);

        if(count($save)>0){
		$this->session->set_flashdata('success',"Load sucessfully added");
		redirect('load/vehicleinformation/'.base64_encode(2));
		
		}else{
		$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
		redirect('load/full/'.base64_encode(1));
		}
	  
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	
	
	public function vehicleinformation(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
            
			$this->load->view('load/vechile-inforamtion-fl');
			$this->load->view('admin/footer');
		        
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	public function vechicledetails(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
           $post=$this->input->post();
		   
		   $save_data=array(
		   'l_id'=>isset($post['l_id'])?$post['l_id']:'',
		   'size_of_vechicle'=>isset($post['size_of_vechicle'])?$post['size_of_vechicle']:'',
		   'vehicle'=>isset($post['vehicle'])?$post['vehicle']:'',
		   'no_of_vechiles'=>isset($post['no_of_vechiles'])?$post['no_of_vechiles']:'',
		   'status'=>1,
		   'created_at'=>date('Y-m-d H:i:s'),
		   'updated_at'=>date('Y-m-d H:i:s'),
		   'created_by'=>isset($userdetails['a_id'])?$userdetails['a_id']:''
		   );
		  //echo'<pre>';print_r($save_data);exit; 
		$save=$this->Load_model->save_vechicle_details($save_data);
		//echo'<pre>';print_r($save);exit;


        if(count($save)>0){
		$this->session->set_flashdata('success',"Load sucessfully added");
		redirect('load/materialtype/'.base64_encode(3).'/'.$post['l_id']);
		}else{
		$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
		redirect('load/vechicledetails/'.base64_encode(2).'/'.$post['l_id']);
		}
	  
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	
	
	
	
	
	
	
	public function materialtype(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
             
			$this->load->view('load/material-type-fl');
			$this->load->view('admin/footer');
		        
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	
	public function listvechiles(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
             
			$this->load->view('load/list-of-vechiles-fl');
			$this->load->view('admin/footer');
		        
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	public function orderconfirm(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
             
			$this->load->view('load/order-conformation-fl');
			$this->load->view('admin/footer');
		        
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	public function payment(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
             
			$this->load->view('load/payment-fl');
			$this->load->view('admin/footer');
		        
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	
	public function part(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
             
			$this->load->view('load/part-load');
			$this->load->view('admin/footer');
		        
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	public function box(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
             
			$this->load->view('load/box-load');
			$this->load->view('admin/footer');
		        
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	
	
	
	
	
	
	
	
}
