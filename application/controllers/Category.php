<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Backend.php');

class Category extends Backend {
	
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
	
		}
	public function lists(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
             $data['category_list']=$this->Category_model->get_category_list();
			// echo'<pre>';print_r($data);exit;
			$this->load->view('dhaba/category-list',$data);
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
			$this->load->view('dhaba/add-category');
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
				 $check=$this->Category_model->check_category_already($post['category']);
				if(count($check)>0){     
					$this->session->set_flashdata('error',"category  already exits. Please another category name.");
					redirect('category/add');
				}	
			
			
			 $save_data=array(
			'category'=>isset($post['category'])?$post['category']:'',
			'status'=>1,
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($userdetails['a_id'])?$userdetails['a_id']:''
			);
		 //echo'<pre>';print_r($save_data);exit;
		$save=$this->Category_model->save_categorys($save_data);
		
		if(count($save)>0){
			
					  $this->session->set_flashdata('success',"category details successfully added");	
							redirect('category/lists');	
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('category/add');
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
			$c_id=base64_decode($this->uri->segment(3));
			 $data['edit_category']=$this->Category_model->edit_category($c_id);
			//echo'<pre>';print_r($data);exit;
			$this->load->view('dhaba/edit-category',$data);
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
			$edit_category=$this->Category_model->edit_category($post['c_id']);
						//echo'<pre>';print_r($edit_category);exit;

		 if($edit_category['category']!=$post['category']){
						$check=$this->Category_model->check_category_already($post['category']);
						if(count($check)>0){
						$this->session->set_flashdata('error'," category  already exits. Please another category name. ");
						redirect('category/edit/'.base64_encode($post['c_id']));
						}	
					}	
			
			
			$update_data=array(
		 'category'=>isset($post['category'])?$post['category']:'',
			'status'=>1,
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($userdetails['a_id'])?$userdetails['a_id']:''
			);
		//echo '<pre>';print_r($update_data);exit;
		$update= $this->Category_model->update_category($post['c_id'],$update_data);
		//echo '<pre>';print_r($update);exit;
		if(count($update)>0){
			$this->session->set_flashdata('success',"category details successfully updated");	
			redirect('category/lists');	
			
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('category/edit/'.base64_encode($post['c_id']));

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
	             $c_id=base64_decode($this->uri->segment(3));
					
					if($c_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							
							$statusdata=$this->Category_model->update_category($c_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"Category sucessfully deleted.");
								redirect('category/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('category/lists');
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
