<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Backend.php');

class Owner extends Backend {
	
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
		$this->load->model('Owner_model');
	
		}
	
	
	public function index(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
			$data['ow_list']=$this->Owner_model->get_owner_list();
			$this->load->view('admin/owner-list',$data);
			$this->load->view('admin/footer');
		        
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	public function add(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
			$this->load->view('admin/owner-add');
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
			$check=$this->Owner_model->check_email_id($post['email_id']);
			if(count($check)>0){
				$this->session->set_flashdata('error',"Email id already exist. Please try again.");
				redirect('owner/add');
			}
			$save_data=array(
			'role'=>2,
			'company_name'=>isset($post['company_name'])?$post['company_name']:'',
			'name'=>isset($post['customer_name'])?$post['customer_name']:'',
			'mobile_number'=>isset($post['phone_number'])?$post['phone_number']:'',
			'email'=>isset($post['email_id'])?$post['email_id']:'',
			'password'=>isset($post['confirmpwd'])?md5($post['confirmpwd']):'',
			'org_password'=>isset($post['confirmpwd'])?$post['confirmpwd']:'',
			'gst'=>isset($post['gst_number'])?$post['gst_number']:'',
			'address'=>isset($post['address'])?$post['address']:'',
			'created_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($userdetails['a_id'])?$userdetails['a_id']:''	
			);
			//echo '<pre>';print_r($save_data);exit;
			$save= $this->Owner_model->save_owner($save_data);
				if(count($save)>0){
				$this->session->set_flashdata('success',"Owner sucessfully added");
				redirect('owner/index');
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('owner/add');
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
             $data['ow_list']=$this->Owner_model->get_owner_list();
			//echo'<pre>';print_r($data);exit;
			$this->load->view('admin/owner-list',$data);
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
			$o_id=base64_decode($this->uri->segment(3));
			 $data['ow_details']=$this->Owner_model->get_owner_details($o_id);
			//echo'<pre>';print_r($data);exit;
			$this->load->view('admin/owner-edit',$data);
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
			$ow=$this->Owner_model->get_owner_details($post['a_id']);
			if(count($ow)>0){
				if($ow['email']!=$post['email_id']){
					$this->session->set_flashdata('error',"Email id already exist. Please try again.");
					redirect('owner/edit/'.base64_encode($post['a_id']));
				}				
			}
			$ud=array(
			'company_name'=>isset($post['company_name'])?$post['company_name']:'',
			'name'=>isset($post['customer_name'])?$post['customer_name']:'',
			'mobile_number'=>isset($post['phone_number'])?$post['phone_number']:'',
			'email'=>isset($post['email_id'])?$post['email_id']:'',
			'gst'=>isset($post['gst_number'])?$post['gst_number']:'',
			'address'=>isset($post['address'])?$post['address']:'',
			'updated_at'=>date('Y-m-d H:i:s'),
			);
			$update= $this->Owner_model->update_owner($post['a_id'],$ud);
			if(count($update)>0){
				$this->session->set_flashdata('success',"Owner details sucessfully updated");
				redirect('owner/index');
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('owner/edit/'.base64_encode($post['a_id']));
			}
			
	    }else{
			 $this->session->set_flashdata('error','Please login to continue');
				redirect('admin/login');
		}
	}
	public function view(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
			$o_id=base64_decode($this->uri->segment(3));
			 $data['ow_details']=$this->Owner_model->get_owner_details($o_id);
			//echo'<pre>';print_r($data);exit;
			$this->load->view('admin/owner-view',$data);
			$this->load->view('admin/footer');		        
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}	
	public function status()
	{

		if($this->session->userdata('vms_details'))
		{	
        $userdetails=$this->session->userdata('vms_details');		
	     $c_id=base64_decode($this->uri->segment(3));
	     $stat=base64_decode($this->uri->segment(4));
		 if($stat==1){
			 $st=0;
		 }else{
			$st=1; 
		 }
			$stusdetails=array(
				'status'=>$st,
				'updated_at'=>date('Y-m-d H:i:s')
				);
			$update=$this->Owner_model->update_owner($c_id,$stusdetails);
				if(count($update)>0){
					if($stat==1){
						$this->session->set_flashdata('success',"Owner sucessfully deactivate.");
					}else{
						$this->session->set_flashdata('success',"contact sucessfully activate.");
					}
					redirect('owner/lists');
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('owner/lists');
				}
					
	
           }else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin/login');
		}

		
	}public function delete()
{
	if($this->session->userdata('vms_details'))
		{	
			$userdetails=$this->session->userdata('vms_details');		
			 $c_id=base64_decode($this->uri->segment(3));
			$stusdetails=array(
			'status'=>2,
			'updated_at'=>date('Y-m-d H:i:s')
			);

			$statusdata=$this->Owner_model->update_owner($c_id,$stusdetails);
			if(count($statusdata)>0){
				$this->session->set_flashdata('success',"Owner sucessfully deleted.");
				redirect('owner/index');
			}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('owner/index');
			}							
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin/login');
		}

		
	}	
		
	
	
	
	
	
	
	
	
	
	
}
