<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Backend.php');

class Profile extends Backend {
		public function __construct() 
		{
		parent::__construct();
		$this->load->model('Profile_model');
		
		}
	public function index(){
		if($this->session->userdata('vms_details'))
		{
			$u_l=$this->session->userdata('vms_details');
			//echo '<pre>';print_r($u_l);exit;
			$data['u_d']=$this->Admin_model->get_admin_details($u_l['a_id']);
			//echo '<pre>';print_r($data);exit;
			if($u_l['role']==1){
				$this->load->view('owner/profile',$data);
				$this->load->view('owner/footer');
			}else if($u_l['role']==5 || $u_l['role']==2){
					$this->load->view('customer/profile',$data);
					$this->load->view('customer/footer');
			}else{
				$data['u_d']=array();
			}	
			
			//echo'<pre>';print_r($data);exit;
			
		        
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('dashboard');
		}
	}
	public function edit(){
		if($this->session->userdata('vms_details'))
		{
			$u_l=$this->session->userdata('vms_details');
			$data['u_d']=$this->Profile_model->get_admin_details($u_l['a_id']);
			$data['c_b_a']=$this->Profile_model->get_c_b_a_details($u_l['a_id']);
			$data['c_g_a']=$this->Profile_model->get_c_g_a_details($u_l['a_id']);
			$data['checked_b_a']=$this->Profile_model->get_billing_address_checked($u_l['a_id']);
			$data['checked_g_a']=$this->Profile_model->get_godan_address_checked($u_l['a_id']);
			//echo '<pre>';print_r($data);exit;
			if($u_l['role']==1){
				$this->load->view('owner/update-profile',$data);
				
			}else if($u_l['role']==5 || $u_l['role']==2){
					$this->load->view('customer/update-profile',$data);
			}else{
					$this->load->view('profile/update-profile',$data);
			}
			$this->load->view('admin/footer');
		        
	    }else{
			 $this->session->set_flashdata('error','Please login to continue');
				redirect('');
		}
	}
	public function editpost(){
		if($this->session->userdata('vms_details'))
		{
			$u_l=$this->session->userdata('vms_details');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$userdetails=$this->Profile_model->get_admin_details($u_l['a_id']);
			if(isset($_FILES['profile_pic']['name']) && $_FILES['profile_pic']['name']!=''){
							$temp = explode(".", $_FILES["profile_pic"]["name"]);
							$pic = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['profile_pic']['tmp_name'], "assets/profilepics/" . $pic);
						}else{
							$pic=$userdetails['profile_pic'];
						}		
			$update_data=array(
            'name'=>isset($post['name'])?$post['name']:'',
            'mobile_number'=>isset($post['mobile_number'])?$post['mobile_number']:'',
            'email'=>isset($post['email'])?$post['email']:'',
            'gst'=>isset($post['gst'])?$post['gst']:'',
            'pan'=>isset($post['pan'])?$post['pan']:'',
            'company_name'=>isset($post['company_name'])?$post['company_name']:'',
            'address'=>isset($post['address'])?$post['address']:'',
            'billing_add'=>isset($post['c_b_add'])?$post['c_b_add']:'',
            'godan_add'=>isset($post['c_g_add'])?$post['c_g_add']:'',
            'profile_pic'=>isset($pic)?$pic:'',
			'updated_at'=>date('Y-m-d H:i:s'),
			);
			//echo '<pre>';print_r($update_data);exit;
			$update=$this->Profile_model->update_profile($u_l['a_id'],$update_data);
			if(count($update)>0){
				if(isset($post['c_b_add']) && $post['c_b_add']!=''){
					$c_b_add=array(
					'a_id'=>isset($u_l['a_id'])?$u_l['a_id']:'',
					'address'=>isset($post['c_b_add'])?$post['c_b_add']:'',
					'lat'=>isset($post['c_b_lat'])?$post['c_b_lat']:'',
					'long'=>isset($post['c_b_long'])?$post['c_b_long']:'',
					'created_at'=>date('Y-m-d H:i:s'),
					'created_by'=>isset($u_l['a_id'])?$u_l['a_id']:'',
					);
					$this->Profile_model->save_profile_billing_add($c_b_add);
					
				}
				$c_a_d=array('current'=>0);
				$c_a_f_d=array('current'=>1);
				if(isset($post['b_id']) && $post['b_id']!=''){
					$this->Profile_model->update_b_profile_billing_add($c_a_d);
					$this->Profile_model->update_b_after_profile_billing_add($post['b_id'],$c_a_f_d);
				}else{
					$this->Profile_model->update_b_profile_billing_add($c_a_d);						
				}
				if(isset($post['c_g_add']) && $post['c_g_add']!=''){
					$c_g_add=array(
					'a_id'=>isset($u_l['a_id'])?$u_l['a_id']:'',
					'address'=>isset($post['c_g_add'])?$post['c_g_add']:'',
					'lat'=>isset($post['c_g_lat'])?$post['c_g_lat']:'',
					'long'=>isset($post['c_g_long'])?$post['c_g_long']:'',
					'created_at'=>date('Y-m-d H:i:s'),
					'created_by'=>isset($u_l['a_id'])?$u_l['a_id']:'',
					);
					$this->Profile_model->save_profile_godan_add($c_g_add);
				}
				$c_g_d=array('current'=>0);
				$c_g_f_d=array('current'=>1);
				if(isset($post['g_id']) && $post['g_id']!=''){
						$this->Profile_model->update_g_profile_billing_add($c_g_d);
						$this->Profile_model->update_g_after_profile_billing_add($post['g_id'],$c_g_f_d);
				}else{
					$this->Profile_model->update_g_profile_billing_add($c_g_d);
				}
				$this->session->set_flashdata('success',"profile  sucessfully updated");
				redirect('profile');
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('profile/edit');
			}
		        
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('dashboard');
		}
	}
	public function updatepic(){
		if($this->session->userdata('vms_details'))
		{
			$u_l=$this->session->userdata('vms_details');
			$userdetails=$this->Profile_model->get_admin_details($u_l['a_id']);
			if(isset($_FILES['profile_pic']['name']) && $_FILES['profile_pic']['name']!=''){
							$temp = explode(".", $_FILES["profile_pic"]["name"]);
							$pic = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['profile_pic']['tmp_name'], "assets/profilepics/" . $pic);
						}else{
							$pic=$userdetails['profile_pic'];
						}
			$post=$this->input->post();
			$update_data=array(
            'updated_at'=>date('Y-m-d H:i:s'),
            'profile_pic'=>isset($pic)?$pic:'',
			);
			$update=$this->Profile_model->update_profile($u_l['a_id'],$update_data);
			if(count($update)>0){
				$this->session->set_flashdata('success',"profile  sucessfully updated");
				redirect('profile');
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('profile/edit');
			}
		        
	    }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('dashboard');
		}
	}
	public function get_gst_details(){
		if($this->session->userdata('vms_details'))
		{
			$url = 'https://commonapi.mastersindia.co/oauth/access_token/';
			$params = array (
			'username' =>'info@foliyoo.com',
			'password' =>'Subh@123#',
			'client_id' =>'ssUokqRzlVDTuSJcdb',
			'client_secret' =>'FE46LWpKqZYXNUlFEw2mZacI',
			'grant_type' =>'password'
			);
			$data_string = json_encode($params);                                                                                   			
			$headers = array(
				'Content-Type: application/json',
				'client_id: 242324v424244255545343',
			);			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url); //Remote Location URL
			  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 7); //Timeout after 7 seconds
			curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string); //parameters data
			$result = curl_exec($ch);
			curl_close($ch);
			$out=json_decode($result, TRUE);
			$post=$this->input->post();
			$url1 = 'https://commonapi.mastersindia.co/commonapis/searchgstin?gstin='.$post['gst'];
			$token = $out['access_token'];
			$ch1 = curl_init($url1);
			curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch1, CURLOPT_HTTPHEADER, array(
			   'Content-Type: application/json',
			   'client_id: ssUokqRzlVDTuSJcdb',
			   'Authorization: Bearer ' . $token
			   ));
			curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
			curl_setopt($ch1, CURLOPT_CONNECTTIMEOUT, 7); //Timeout after 7 seconds
			curl_setopt($ch1, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
			curl_setopt($ch1, CURLOPT_HEADER, 0);
			$results1 = curl_exec($ch1);
			curl_close($ch1);
			$out2=json_decode($results1, TRUE);			
			$c_name=isset($out2['data']['lgnm'])?$out2['data']['lgnm']:'';
			$add_flno=isset($out2['data']['pradr']['addr']['flno'])?$out2['data']['pradr']['addr']['flno']:'';
			$add_lgnm=isset($out2['data']['pradr']['addr']['bnm'])?$out2['data']['pradr']['addr']['bnm']:'';
			$add_st=isset($out2['data']['pradr']['addr']['st'])?$out2['data']['pradr']['addr']['st']:'';
			$add_loc=isset($out2['data']['pradr']['addr']['loc'])?$out2['data']['pradr']['addr']['loc']:'';
			$add_dstc=isset($out2['data']['pradr']['addr']['loc'])?$out2['data']['pradr']['addr']['dst']:'';
			$add_pncd=isset($out2['data']['pradr']['addr']['pncd'])?$out2['data']['pradr']['addr']['pncd']:'';
			$address=$add_flno.','.$add_lgnm.','.$add_st.','.$add_loc.','.$add_dstc.','.$add_pncd;
			if($out2['error']==''){
				$o_data['msg']=1;
				$o_data['c_nam']=$c_name;
				$o_data['adds']=$address;
				echo json_encode($o_data);exit;
			}else{
				$o_data['msg']=0;
				$o_data['c_nam']='';
				$o_data['adds']='';
				echo json_encode($o_data);exit;
			}
	    }else{
			    $this->session->set_flashdata('error','Please login to continue');
				redirect('admin/login');
		}
	}
	public  function remove_c_b_add(){
		if($this->session->userdata('vms_details'))
		{
				$post=$this->input->post();
				$u_d=array('status'=>2,'updated_at'=>date('Y-m-d H:i:s'));
				$delete=$this->Profile_model->update_b_after_profile_billing_add($post['b_id'],$u_d);
				if(count($delete)>0){
					$data['msg']=1;
					echo json_encode($data);exit;
				}
		}else{
			    $this->session->set_flashdata('error','Please login to continue');
				redirect('admin/login');
		}
	}
	public  function remove_c_g_add(){
		if($this->session->userdata('vms_details'))
		{
				$post=$this->input->post();
				$u_d=array('status'=>2,'updated_at'=>date('Y-m-d H:i:s'));
				$delete=$this->Profile_model->update_g_after_profile_billing_add($post['g_id'],$u_d);
				if(count($delete)>0){
					$data['msg']=1;
					echo json_encode($data);exit;
				}
		}else{
			    $this->session->set_flashdata('error','Please login to continue');
				redirect('admin/login');
		}
	}
	
	
	
	
}
