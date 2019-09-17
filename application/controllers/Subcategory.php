<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Backend.php');

class Subcategory extends Backend {
	
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
		$this->load->model('Category_model');
		$this->load->model('Subcategory_model');
	
		}
	public function lists(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
             $data['subcategory_list']=$this->Subcategory_model->get_sub_category_list_data();
			//echo'<pre>';print_r($data);exit;
			$this->load->view('dhaba/subcategory-list',$data);
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
			$data['category_list']=$this->Subcategory_model->get_subcategory_list();
			//echo'<pre>';print_r($data);exit;
			$this->load->view('dhaba/add-subcategory',$data);
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
			$check=$this->Subcategory_model->check_subcategory_exsists($post['category_name'],$post['sub_category']);
						//echo '<pre>';print_r($check);exit;
						if(count($check)>0){
							$this->session->set_flashdata('error',"Sub category  already exist. Please use another Sub category name");
							redirect('subcategory/add');
						}
			
			 $save_data=array(
			'category_name'=>isset($post['category_name'])?$post['category_name']:'',
			'sub_category'=>isset($post['sub_category'])?$post['sub_category']:'',
			'status'=>1,
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($userdetails['a_id'])?$userdetails['a_id']:''
			);
		 //echo'<pre>';print_r($save_data);exit;
		$save=$this->Subcategory_model->save_subcategorys($save_data);
		
		if(count($save)>0){
			
					  $this->session->set_flashdata('success',"subcategory details successfully added");	
							redirect('subcategory/lists');	
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('subcategory/add');
				}
			
		
	       }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	
	public function edit(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
			$s_id=base64_decode($this->uri->segment(3));
			 $data['edit_subcategory']=$this->Subcategory_model->edit_subcategory($s_id);
			$data['category_list']=$this->Subcategory_model->get_subcategory_list();

			//echo'<pre>';print_r($data);exit;
			$this->load->view('dhaba/edit-subcategory',$data);
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
			$data['edit_subcategory']=$this->Subcategory_model->edit_subcategory($s_id);
		 if($edit_subcategory['category_name']!=$post['category_name'] || $edit_subcategory['sub_category']!=$post['sub_category']){
						$check=$this->Subcategory_model->check_subcategory_exsists($post['category_name'],$post['sub_category']);
						if(count($check)>0){
						$this->session->set_flashdata('error'," Sub category already exist. Please use another Sub category name");
						redirect('subcategory/edit/'.base64_encode($post['s_id']));

						}	
					}	
			
			$update_data=array(
		 'category_name'=>isset($post['category_name'])?$post['category_name']:'',
		 'sub_category'=>isset($post['sub_category'])?$post['sub_category']:'',
			'status'=>1,
			'created_at'=>date('Y-m-d H:i:s'), 
			'updated_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($userdetails['a_id'])?$userdetails['a_id']:''
			);
		//echo '<pre>';print_r($update_data);exit;
		$update= $this->Subcategory_model->update_subcategory($post['s_id'],$update_data);
		//echo '<pre>';print_r($update);exit;
		if(count($update)>0){
			$this->session->set_flashdata('success',"sub category details successfully updated");	
			redirect('subcategory/lists');	
			
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('subcategory/lists');
			}	
			
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	
	public function remove_subcategory()
	{
	$post=$this->input->post();
					
		$delete_date=$this->Category_model->delete_sub_category_details($post['p_id']);
		if(count($delete_date)>0){
			$data['msg']=1;
			echo json_encode($data);exit;
		}else{
			$data['msg']=0;
			echo json_encode($data);exit;
		}
}	
	
	
	
	
	
	
	public function delete()
{

		if($this->session->userdata('vms_details'))
		{	
        $userdetails=$this->session->userdata('vms_details');		
	             $s_id=base64_decode($this->uri->segment(3));
					
					if($s_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							
							$statusdata=$this->Subcategory_model->update_subcategory($s_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"Sub Category sucessfully deleted.");
								redirect('subcategory/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('subcategory/lists');
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
