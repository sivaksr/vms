<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Backend.php');

class Material extends Backend {
	
		public function __construct() 
		{
		parent::__construct();
		$this->load->model('Material_model');
	
		}	
	public function index(){
		if($this->session->userdata('vms_details'))
		{   							
			$data['material_list']=$this->Material_model->get_all_material_details();
			//echo '<pre>';print_r($data);exit;
			$this->load->view('owner/material-type-list',$data);
			$this->load->view('owner/footer');
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	public function add(){
		if($this->session->userdata('vms_details'))
		{   							
				$this->load->view('owner/add-material-type');
				$this->load->view('owner/footer');
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	
	public function edit(){
		if($this->session->userdata('vms_details'))
		{   							
				$m_id=base64_decode($this->uri->segment(3));
				$data['m_details']=$this->Material_model->get_material_details($m_id);
				//echo '<pre>';print_r($data);exit;
				$this->load->view('owner/edit-material-type',$data);
				$this->load->view('owner/footer');
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	public function addpost(){
		if($this->session->userdata('vms_details'))
		{   							
			$l_details=$this->session->userdata('vms_details');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$check=$this->Material_model->check_material_details($post['material_type_name']);
			if(count($check)>0){
				$this->session->set_flashdata('error','Material Type already exits. Please try again');
				redirect('material/add');	
			}
			if(isset($_FILES['material_type_img']['name']) && $_FILES['material_type_img']['name']!=''){
				$temp = explode(".", $_FILES["material_type_img"]["name"]);
				$material_type_img ='22'.round(microtime(true)).'.'.end($temp);
				move_uploaded_file($_FILES['material_type_img']['tmp_name'], "assets/material_type/" . $material_type_img);
			}
			$add=array(
			'material_type_name'=>isset($post['material_type_name'])?$post['material_type_name']:'',			
			'material_type_img'=>isset($material_type_img)?$material_type_img:'',
			'or_material_type_img'=>isset($_FILES["material_type_img"]["name"])?$_FILES["material_type_img"]["name"]:'',
			'created_at'=>date('Y-m-d H:i:s'),
			'created_by'=>$l_details['a_id'],
			);
			//echo '<pre>';print_r($add);exit;
			$save=$this->Material_model->save_material_type($add);
			if(count($save)>0){
				$this->session->set_flashdata('success','Material added successfully');
				redirect('material');				
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
				redirect('material/add');
			}
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				 redirect('admin/login');
		}
	}
	
	public  function editpost(){
		if($this->session->userdata('vms_details'))
		{
			$l_details=$this->session->userdata('vms_details');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$m_details=$this->Material_model->get_material_details($post['m_t_id']);
			if($m_details['material_type_name']!=$post['material_type_name']){
				$check=$this->Material_model->check_material_details($post['material_type_name']);
				if(count($check)>0){
					$this->session->set_flashdata('error','Material already exits. Please try again');
					redirect('material/edit/'.base64_encode($post['m_t_id']));	
				}
			}
			if(isset($_FILES['material_type_img']['name']) && $_FILES['material_type_img']['name']!=''){
				unlink('assets/material_type/'.$m_details['material_type_img']);
				$temp = explode(".", $_FILES["material_type_img"]["name"]);
				$material_type_img ='22'.round(microtime(true)).'.'.end($temp);
				move_uploaded_file($_FILES['material_type_img']['tmp_name'], "assets/material_type/" . $material_type_img);
			}
			$u_data=array(
			'material_type_name'=>isset($post['material_type_name'])?$post['material_type_name']:'',			
			'material_type_img'=>isset($material_type_img)?$material_type_img:$m_details['material_type_img'],
			'or_material_type_img'=>isset($_FILES["material_type_img"]["name"])?$_FILES["material_type_img"]["name"]:$m_details['or_material_type_img'],
			'updated_at'=>date('Y-m-d H:i:s'),
			);
			$update=$this->Material_model->update_material_details($post['m_t_id'],$u_data);
			if(count($update)>0){
				$this->session->set_flashdata('success','Details added successfully');
				redirect('material/');				
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
				redirect('material/edit/'.base64_encode($post['m_t_id']));	
			}
			
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
		      redirect('admin/login');
		}
	}
	public function status(){
		if($this->session->userdata('vms_details'))
		{ 
			$m_id=base64_decode($this->uri->segment(3));
			$status=base64_decode($this->uri->segment(4));
			if($m_id==''){
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
				redirect('material');	
			}
			if($status==0){
				$sta=1;
			}else{
				$sta=0;
			}
			$u_data=array(
			'status'=>$sta,
			'updated_at'=>date('Y-m-d H:i:s'),
			);
			$update=$this->Material_model->update_material_details($m_id,$u_data);
			if(count($update)>0){
				if($status==0){
					$this->session->set_flashdata('success','Material activated successfully');
				}else{
					$this->session->set_flashdata('success','Material deactivated successfully');
				}
				redirect('material');				
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
				redirect('material');		
			}
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	public function deletes(){
		if($this->session->userdata('vms_details'))
		{ 
			$m_id=base64_decode($this->uri->segment(3));
			if($m_id==''){
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
				redirect('material');	
			}
			$u_data=array(
			'status'=>2,
			'updated_at'=>date('Y-m-d H:i:s'),
			);
			$m_details=$this->Material_model->get_material_details($m_id);
			$update=$this->Material_model->update_material_details($m_id,$u_data);
			if(count($update)>0){
				unlink('assets/material_type/'.$m_details['material_type_img']);
				$this->session->set_flashdata('success','Material deleted successfully');
				redirect('material');				
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
				redirect('material');		
			}
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
}
