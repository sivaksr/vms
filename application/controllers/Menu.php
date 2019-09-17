<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Backend.php');

class Menu extends Backend {
	
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
		$this->load->model('Menu_model');
	
		}
	public function lists(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
             $data['menu_list']=$this->Menu_model->get_menu_list();
			 //echo'<pre>';print_r($data);exit;
			$this->load->view('dhaba/items-list',$data);
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
             $data['category_list']=$this->Menu_model->get_category_list();
			 //echo'<pre>';print_r($data);exit;
			$this->load->view('dhaba/add-item',$data);
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
			 if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
							$temp = explode(".", $_FILES["image"]["name"]);
							$pic = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['image']['tmp_name'], "assets/menu items/" . $pic);
						}else{
							$pic='';
						}
			
			$save_data=array(
			'category_name'=>isset($post['category_name'])?$post['category_name']:'',
			'sub_category_name'=>isset($post['sub_category_name'])?$post['sub_category_name']:'',
			'name'=>isset($post['name'])?$post['name']:'',
			'cost'=>isset($post['cost'])?$post['cost']:'',
			'comment'=>isset($post['comment'])?$post['comment']:'',
			'image'=>isset($pic)?$pic:'',
			'status'=>1,
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($userdetails['a_id'])?$userdetails['a_id']:''	
			);
			//echo '<pre>';print_r($save_data);exit;
			$save= $this->Menu_model->save_menu_items($save_data);
			//echo '<pre>';print_r($save);exit;
				if(count($save)>0){
				$this->session->set_flashdata('success'," menu items  sucessfully added");
				redirect('menu/lists');
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('menu/add');
			}
	     
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('admin/login');
		}
	}
	
	public function subcategory_list_data(){
	if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
			
					$post=$this->input->post('category_name');
					$student_list=$this->Menu_model->subcategory_list_data($post);
					//echo'<pre>';print_r($student_list);exit;
					if(count($student_list)>0){
						$data['msg']=1;
						$data['list']=$student_list;
						echo json_encode($data);exit;	
					}else{
						$data['msg']=0;
						echo json_encode($data);exit;
					}
					
			
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin/login');
		}
	}
	
	
	public function edit(){
		if($this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
			$m_id=base64_decode($this->uri->segment(3));
			 $data['edit_menu']=$this->Menu_model->edit_menu($m_id);
			  $data['category_list']=$this->Menu_model->get_category_list();
			  $data['sub_category']=$this->Menu_model->subcategory_list_data($data['edit_menu']['category_name']);
			//echo'<pre>';print_r($data);exit;
			$this->load->view('dhaba/edit-item',$data);
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
			
			 $edit_menu=$this->Menu_model->edit_menu($post['m_id']);
			// echo'<pre>';print_r($post);exit;
			 
			if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
							$temp = explode(".", $_FILES["image"]["name"]);
							$pic = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['image']['tmp_name'], "assets/menu items/" . $pic);
						}else{
							$pic=$edit_menu['image'];
						}
			
			$update_data=array(
			'category_name'=>isset($post['category_name'])?$post['category_name']:'',
			'sub_category_name'=>isset($post['sub_category_name'])?$post['sub_category_name']:'',
			'name'=>isset($post['name'])?$post['name']:'',
			'cost'=>isset($post['cost'])?$post['cost']:'',
			'comment'=>isset($post['comment'])?$post['comment']:'',
			'image'=>isset($pic)?$pic:'',
			'status'=>1,
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($userdetails['a_id'])?$userdetails['a_id']:''		
			);
			//echo '<pre>';print_r($update_data);exit;
			$update= $this->Menu_model->update_menu($post['m_id'],$update_data);
			//echo '<pre>';print_r($update);exit;
				if(count($update)>0){
				$this->session->set_flashdata('success',"menu   details sucessfully updated");
				redirect('menu/lists');
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('menu/edit/'.base64_encode($post['m_id']));

			}
			
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
	             $m_id=base64_decode($this->uri->segment(3));
					
					if($m_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							
							$statusdata=$this->Menu_model->update_menu($m_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"menu sucessfully deleted.");
								redirect('menu/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('menu/lists');
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
