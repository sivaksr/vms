<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Backend.php');

class Load extends Backend {

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
	public function full()
	{
		if($this->session->userdata('vms_details'))
		{
				$data['type']=base64_decode($this->uri->segment(3));
				//echo '<pre>';print_r($data);exit;
				$this->load->view('load/full-load',$data);
				$this->load->view('admin/footer');
			
		}else{
				$this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	public function fullloadpost()
	{
		if($this->session->userdata('vms_details'))
		{
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$l_details=$this->session->userdata('vms_details');
			$add=array(
			'type'=>isset($post['load_type'])?$post['load_type']:'',
			'created_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($l_details['a_id'])?$l_details['a_id']:'',
			);
			$save=$this->load_model->save_basicLoad($add);
			if(count($save)>0){
				if(isset($post['loading_point']) && count($post['loading_point'])>0){
					$cnt=0;foreach($post['loading_point'] as $li){
						$s_add=array(
						'load_id'=>isset($save)?$save:'',
						'loading_point'=>isset($post['loading_point'][$cnt])?$post['loading_point'][$cnt]:'',
						'droping_point'=>isset($post['droping_point'][$cnt])?$post['droping_point'][$cnt]:'',
						'date'=>isset($post['date'][$cnt])?$post['date'][$cnt]:'',
						'created_at'=>date('Y-m-d H:i:s'),
						'created_by'=>isset($l_details['a_id'])?$l_details['a_id']:'',
						);
						$this->load_model->save_location_details($s_add);
					$cnt++;}
				}				
				$this->session->set_flashdata('success','Basic load added successfully');
				redirect('load/vechile_information/'.base64_encode($save));
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
				redirect('load/full/');
			}
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	public function vechile_information()
	{
		if($this->session->userdata('vms_details'))
		{
			$data['load_id']=base64_decode($this->uri->segment(3));
			//echo '<pre>';print_r($data);exit;
			$this->load->view('load/vechile-inforamtion-fl',$data);
			$this->load->view('admin/footer');
			
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	
	public  function get_vechiles_list(){
		if($this->session->userdata('vms_details'))
		{
			$post=$this->input->post();
			$details=$this->load_model->get_vechiles_list($post['type']);
			if(count($details) > 0)
			{
				$data['msg']=1;
				$data['list']=$details;
				echo json_encode($data);exit;	
			}
		//echo '<pre>';print_r($post);exit;
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	public  function vechicledetails_post(){
		if($this->session->userdata('vms_details'))
		{
			$post=$this->input->post();
			$u_data=array(
			'size_of_vechicle'=>isset($post['size_of_vechicle'])?$post['size_of_vechicle']:'',
			'vehicle_id'=>isset($post['vehicle_id'])?$post['vehicle_id']:'',
			'no_of_vechiles'=>isset($post['no_of_vechiles'])?$post['no_of_vechiles']:'',
			'updated_at'=>date('Y-m-d H:i:s'),
			);
			$update=$this->load_model->update_vechile_information($post['f_l_id'],$u_data);
			if(count($update)>0){
				$this->session->set_flashdata('success','Vehicle inforamtion added successfully');
				redirect('load/material_type/'.base64_encode($post['f_l_id']));
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
				redirect('load/vechile_information/'.base64_encode($post['f_l_id']));
			}
			//echo '<pre>';print_r($post);exit;
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	public  function material_type(){
		if($this->session->userdata('vms_details'))
		{
			$data['load_id']=base64_decode($this->uri->segment(3));
			$data['material_type_list']=$this->load_model->get_active_material_list();
			//echo '<pre>';print_r($data);exit;
			$this->load->view('load/material-type-fl',$data);
			$this->load->view('admin/footer');
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	public  function material_type_post(){
		if($this->session->userdata('vms_details'))
		{
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$u_data=array(
			'material_type'=>isset($post['material_type'])?$post['material_type']:'',
			'updated_at'=>date('Y-m-d H:i:s'),
			);
			$update=$this->load_model->update_vechile_information($post['f_l_id'],$u_data);
			if(count($update)>0){
				$this->session->set_flashdata('success','Material type added successfully');
				redirect('load/vechile_list/'.base64_encode($post['f_l_id']));
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
				redirect('load/material_type/'.base64_encode($post['f_l_id']));
			}
			//echo '<pre>';print_r($post);exit;
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	public  function vechile_list(){
		if($this->session->userdata('vms_details'))
		{
			$load_id=base64_decode($this->uri->segment(3));
			$details=$this->load_model->get_full_load_details($load_id);
			if(isset($details['material_type']) && $details['material_type']!=''){
				$data['vechile_list']=$this->load_model->get_vechicle_list($details['material_type']);
			}else{
				$data['vechile_list']=array();
			}
			$data['details']=$details;
			$data['load_id']=$load_id;
			//echo '<pre>';print_r($data);exit;
			$this->load->view('load/list-of-vechiles-fl',$data);
			$this->load->view('admin/footer');
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	public  function orderconfirm(){
		if($this->session->userdata('vms_details'))
		{
			$load_id=base64_decode($this->uri->segment(3));
			$vechicle_id=base64_decode($this->uri->segment(4));
			if($load_id=='' || $vechicle_id==''){
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
				redirect('load/material_type/'.base64_encode($load_id));
			}
			$u_data=array('vechicle_id'=>$vechicle_id);
			$this->load_model->update_vechile_information($load_id,$u_data);
			$details=$this->load_model->get_full_load_details($load_id);
			$data['v_details']=$this->load_model->get_vechicle_details($vechicle_id);
			$data['details']=$details;
			$data['load_id']=$load_id;
			$this->load->view('load/order-conformation-fl',$data);
			$this->load->view('admin/footer');
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	public  function payment(){
		if($this->session->userdata('vms_details'))
		{
			$load_id=base64_decode($this->uri->segment(3));
			$vechicle_id=base64_decode($this->uri->segment(4));
			if($load_id==''){
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
				redirect('load/material_type/'.base64_encode($load_id));
			}
			$data['load_id']=$load_id;
			$this->load->view('load/payment-fl',$data);
			$this->load->view('admin/footer');
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	public  function fullcompleted(){
		if($this->session->userdata('vms_details'))
		{
			$load_id=base64_decode($this->uri->segment(3));
			$u_data=array('completed'=>1);
			$update=$this->load_model->update_vechile_information($load_id,$u_data);
			if(count($update)>0){
				$this->session->set_flashdata('success','Material type added successfully');
				redirect('load');
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
				redirect('load/payment/'.base64_encode($load_id));
			}
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	
					
	
	
	
}
