<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Backend.php');

class Contact extends Backend {
	
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
		$this->load->model('Contact_model');
	
		}
	
	
	public function add(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
             $data['contact_list']=$this->Contact_model->get_contact_address_list();
			 //echo'<pre>';print_r($data);exit;
			$this->load->view('customer/add-contact',$data);
			$this->load->view('admin/footer');
		        
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	public function addpost(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');	
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$save_data=array(
			'company_name'=>isset($post['company_name'])?$post['company_name']:'',
			'customer_name'=>isset($post['customer_name'])?$post['customer_name']:'',
			'phone_number'=>isset($post['phone_number'])?$post['phone_number']:'',
			'email_id'=>isset($post['email_id'])?$post['email_id']:'',
			'gst_number'=>isset($post['gst_number'])?$post['gst_number']:'',
			'address'=>isset($post['address'])?$post['address']:'',
			'save_address'=>isset($post['save_address'])?$post['save_address']:'',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($userdetails['a_id'])?$userdetails['a_id']:''	
			);
			//echo '<pre>';print_r($save_data);exit;
			$save= $this->Contact_model->save_contacts($save_data);
				if(count($save)>0){
				$this->session->set_flashdata('success',"contact   details sucessfully added");
				redirect('contact/lists');
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('contact/add');
			}
	     
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	
	public function lists(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
             $data['contact_list']=$this->Contact_model->get_contact_list();
			//echo'<pre>';print_r($data);exit;
			$this->load->view('customer/contacts-list',$data);
			$this->load->view('admin/footer');
		        
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	public function edit(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
			$c_id=base64_decode($this->uri->segment(3));
             $data['contact_list']=$this->Contact_model->get_contact_address_list();
			 $data['edit_contact']=$this->Contact_model->edit_contact($c_id);
			//echo'<pre>';print_r($data);exit;
			$this->load->view('customer/edit-contact',$data);
			$this->load->view('admin/footer');
		        
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	
	public function editpost(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
			$post=$this->input->post();
			//echo'<pre>';print_r($post);exit;
			$update_data=array(
			'company_name'=>isset($post['company_name'])?$post['company_name']:'',
			'customer_name'=>isset($post['customer_name'])?$post['customer_name']:'',
			'phone_number'=>isset($post['phone_number'])?$post['phone_number']:'',
			'email_id'=>isset($post['email_id'])?$post['email_id']:'',
			'gst_number'=>isset($post['gst_number'])?$post['gst_number']:'',
			'address'=>isset($post['address'])?$post['address']:'',
			'save_address'=>isset($post['save_address'])?$post['save_address']:'',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($userdetails['a_id'])?$userdetails['a_id']:''	
			);
			//echo '<pre>';print_r($update_data);exit;
			$update= $this->Contact_model->update_contacts($post['c_id'],$update_data);
			//echo '<pre>';print_r($update);exit;
				if(count($update)>0){
				$this->session->set_flashdata('success',"contact   details sucessfully updated");
				redirect('contact/lists');
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('contact/lists');
			}
			
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	public function view(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
			$c_id=base64_decode($this->uri->segment(3));
             $data['contact_list']=$this->Contact_model->get_contact_address_list();
			 $data['view_contact']=$this->Contact_model->edit_contact($c_id);
			//echo'<pre>';print_r($data);exit;
			$this->load->view('customer/view-contact',$data);
			$this->load->view('admin/footer');
		        
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	
	
	
	
	public function delete()
{

		if($this->session->userdata('vms_details'))
		{	
        $userdetails=$this->session->userdata('vms_details');		
	             $c_id=base64_decode($this->uri->segment(3));
					
					if($c_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							
							$statusdata=$this->Contact_model->update_contacts($c_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"contact sucessfully deleted.");
								redirect('contact/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('contact/lists');
							}
						}
						else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('dashboard');
					}	
	
	
           }else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin/login');
		}

		
	}	
		
	
	
	
	
	
	
	
	
	
	
}
