<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Backend.php');

class Driver extends Backend {
	
		public function __construct() 
		{
		parent::__construct();
		$this->load->model('Driver_model');
	
		}	
	
	public function add(){
		if($this->session->userdata('vms_details'))
		{   			
                 $data['type']=base64_decode($this->uri->segment(3));
				 $drivers_id=base64_decode($this->uri->segment(4));
				$data['driver_details']=$this->Driver_model->get_driver_details($drivers_id); 
				 //echo'<pre>';print_r($data);exit;
				$this->load->view('driver/add-driver',$data);
				$this->load->view('owner/footer');
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	
	public function addpost()
	{
		if($this->session->userdata('vms_details'))
		{
				

					$post=$this->input->post();
                   $l_details=$this->session->userdata('vms_details');
					//echo '<pre>';print_r($post);exit;
					if(isset($post['driver_id']) && $post['driver_id']!=''){
						$driver_details= $this->Driver_model->get_driver_details(base64_decode($post['driver_id']));
						if($driver_details['email']==$post['email']){
				$onedata=array(
				'name'=>isset($post['name'])?$post['name']:'',
			    'email'=>isset($post['email'])?$post['email']:'',
			    'mobile_number'=>isset($post['mobile_number'])?$post['mobile_number']:'',
			    'dob'=>isset($post['dob'])?$post['dob']:'',
			    'marital_status'=>isset($post['marital_status'])?$post['marital_status']:'',
			    'address_one'=>isset($post['address_one'])?$post['address_one']:'',
			    'address_two'=>isset($post['address_two'])?$post['address_two']:'',
			    'city'=>isset($post['city'])?$post['city']:'',
			    'district'=>isset($post['district'])?$post['district']:'',
			    'state'=>isset($post['state'])?$post['state']:'',
			    'zip_code'=>isset($post['zip_code'])?$post['zip_code']:'',
			    'id_p_name'=>isset($post['id_p_name'])?$post['id_p_name']:'',
			    'id_p_num'=>isset($post['id_p_num'])?$post['id_p_num']:'',
			    'add_p_name'=>isset($post['add_p_name'])?$post['add_p_name']:'',
			    'add_p_num'=>isset($post['add_p_num'])?$post['add_p_num']:'',
			    'd_lic_num'=>isset($post['d_lic_num'])?$post['d_lic_num']:'',
			    'd_lmv'=>isset($post['d_lmv'])?$post['d_lmv']:'',
			    'd_psvbus'=>isset($post['d_psvbus'])?$post['d_psvbus']:'',
			    'd_mcwg'=>isset($post['d_mcwg'])?$post['d_mcwg']:'',
			    'd_trans'=>isset($post['d_trans'])?$post['d_trans']:'',
			    'd_b_num'=>isset($post['d_b_num'])?$post['d_b_num']:'',
			    'e_d_lmv'=>isset($post['e_d_lmv'])?$post['e_d_lmv']:'',
			    'e_d_psvbus'=>isset($post['e_d_psvbus'])?$post['e_d_psvbus']:'',
			    'e_d_mcwg'=>isset($post['e_d_mcwg'])?$post['e_d_mcwg']:'',
			    'e_d_trans'=>isset($post['e_d_trans'])?$post['e_d_trans']:'',
			    'e_d_b_num'=>isset($post['e_d_b_num'])?$post['e_d_b_num']:'',
			    'name_of_qualification'=>isset($post['name_of_qualification'])?$post['name_of_qualification']:'',
			    'institute'=>isset($post['institute'])?$post['institute']:'',
			    'y_of_pass'=>isset($post['y_of_pass'])?$post['y_of_pass']:'',
			    'certificate_num'=>isset($post['certificate_num'])?$post['certificate_num']:'',
			    'cer_date'=>isset($post['cer_date'])?$post['cer_date']:'',
			    'time'=>isset($post['time'])?$post['time']:'',
			    'years'=>isset($post['years'])?$post['years']:'',
			    'month'=>isset($post['month'])?$post['month']:'',
			    'size_catagory'=>isset($post['size_catagory'])?$post['size_catagory']:'',
			    'vehicle_type'=>isset($post['vehicle_type'])?$post['vehicle_type']:'',
			    'ind_exp'=>isset($post['ind_exp'])?$post['ind_exp']:'',
				'updated_at'=>date('Y-m-d H:i:s'),
				);
			$onedata1=array(
			'name'=>isset($post['name'])?$post['name']:'',
			'email'=>isset($post['email'])?$post['email']:'',
			'mobile_number'=>isset($post['mobile_number'])?$post['mobile_number']:'',
			'updated_at'=>date('Y-m-d H:i:s'),
			);
								$this->Driver_model->update_driver_details($driver_details['a_id'],$onedata1);
								$stepone= $this->Driver_model->update_driver_documents(base64_decode($post['driver_id']),$onedata);
								if(count($stepone)>0){
									$this->session->set_flashdata('success',"driver Details are successfully updated");
									redirect('driver/uploaddocuments/'.base64_encode($stepone));
								}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('driver/add/'.base64_encode(1).'/'.$post['driver_id']);
								}
						}else{

								$emailcheck= $this->Driver_model->check_email_exits($post['email']);
								if(count($emailcheck)>0){
									$this->session->set_flashdata('error','Email Id already exists. Please use another Email Id');
									redirect('driver/add/'.base64_encode(1).'/'.$post['driver_id']);
								}else{
									$driver_id= $this->Driver_model->get_driver_details(base64_decode($post['driver_id']));
				$onedata=array(
				'name'=>isset($post['name'])?$post['name']:'',
			    'email'=>isset($post['email'])?$post['email']:'',
			    'mobile_number'=>isset($post['mobile_number'])?$post['mobile_number']:'',
			    'dob'=>isset($post['dob'])?$post['dob']:'',
			    'marital_status'=>isset($post['marital_status'])?$post['marital_status']:'',
			    'address_one'=>isset($post['address_one'])?$post['address_one']:'',
			    'address_two'=>isset($post['address_two'])?$post['address_two']:'',
			    'city'=>isset($post['city'])?$post['city']:'',
			    'district'=>isset($post['district'])?$post['district']:'',
			    'state'=>isset($post['state'])?$post['state']:'',
			    'zip_code'=>isset($post['zip_code'])?$post['zip_code']:'',
			    'id_p_name'=>isset($post['id_p_name'])?$post['id_p_name']:'',
			    'id_p_num'=>isset($post['id_p_num'])?$post['id_p_num']:'',
			    'add_p_name'=>isset($post['add_p_name'])?$post['add_p_name']:'',
			    'add_p_num'=>isset($post['add_p_num'])?$post['add_p_num']:'',
			    'd_lic_num'=>isset($post['d_lic_num'])?$post['d_lic_num']:'',
			    'd_lmv'=>isset($post['d_lmv'])?$post['d_lmv']:'',
			    'd_psvbus'=>isset($post['d_psvbus'])?$post['d_psvbus']:'',
			    'd_mcwg'=>isset($post['d_mcwg'])?$post['d_mcwg']:'',
			    'd_trans'=>isset($post['d_trans'])?$post['d_trans']:'',
			    'd_b_num'=>isset($post['d_b_num'])?$post['d_b_num']:'',
			    'e_d_lmv'=>isset($post['e_d_lmv'])?$post['e_d_lmv']:'',
			    'e_d_psvbus'=>isset($post['e_d_psvbus'])?$post['e_d_psvbus']:'',
			    'e_d_mcwg'=>isset($post['e_d_mcwg'])?$post['e_d_mcwg']:'',
			    'e_d_trans'=>isset($post['e_d_trans'])?$post['e_d_trans']:'',
			    'e_d_b_num'=>isset($post['e_d_b_num'])?$post['e_d_b_num']:'',
			    'name_of_qualification'=>isset($post['name_of_qualification'])?$post['name_of_qualification']:'',
			    'institute'=>isset($post['institute'])?$post['institute']:'',
			    'y_of_pass'=>isset($post['y_of_pass'])?$post['y_of_pass']:'',
			    'certificate_num'=>isset($post['certificate_num'])?$post['certificate_num']:'',
			    'cer_date'=>isset($post['cer_date'])?$post['cer_date']:'',
			    'time'=>isset($post['time'])?$post['time']:'',
			    'years'=>isset($post['years'])?$post['years']:'',
			    'month'=>isset($post['month'])?$post['month']:'',
			    'size_catagory'=>isset($post['size_catagory'])?$post['size_catagory']:'',
			    'vehicle_type'=>isset($post['vehicle_type'])?$post['vehicle_type']:'',
			    'ind_exp'=>isset($post['ind_exp'])?$post['ind_exp']:'',
				'updated_at'=>date('Y-m-d H:i:s'),
				);
				$onedata1=array(
				'name'=>isset($post['name'])?$post['name']:'',
				'email'=>isset($post['email'])?$post['email']:'',
				'mobile_number'=>isset($post['mobile_number'])?$post['mobile_number']:'',
				'updated_at'=>date('Y-m-d H:i:s'),
				);
				$this->Driver_model->update_driver_details($driver_id['a_id'],$onedata1);
				$stepone= $this->Driver_model->update_driver_documents(base64_decode($post['driver_id']),$onedata);
				if(count($stepone)>0){
				$this->session->set_flashdata('success',"driver Details are successfully updated");
				redirect('driver/add/'.base64_encode(2).'/'.$post['driver_id']);
				}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('driver/add/'.base64_encode(1).'/'.$post['driver_id']);
				}
			}

	}


				}else{
				if(md5($post['password'])==md5($post['org_password'])){
				$emailcheck= $this->Driver_model->check_email_exits($post['email']);
				if(count($emailcheck)>0){
				$this->session->set_flashdata('error','Email Id already exists. Please use another Email Id');
				redirect('driver/add/'.base64_encode(1));
				}else{


				$admindetails=array(
				'role'=>3,
				'name'=>isset($post['name'])?$post['name']:'',
				'email'=>isset($post['email'])?$post['email']:'',
				'mobile_number'=>isset($post['mobile_number'])?$post['mobile_number']:'',
				'password'=>isset($post['org_password'])?md5($post['org_password']):'',
				'org_password'=>isset($post['org_password'])?$post['org_password']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($l_details['a_id'])?$l_details['a_id']:'',
				);
				$driverid= $this->Driver_model->save_driver_login_details($admindetails);
				
				$onedata=array(
				'a_id'=>isset($driverid)?$driverid:'',
				'name'=>isset($post['name'])?$post['name']:'',
				'email'=>isset($post['email'])?$post['email']:'',
				'mobile_number'=>isset($post['mobile_number'])?$post['mobile_number']:'',
				'dob'=>isset($post['dob'])?$post['dob']:'',
				'marital_status'=>isset($post['marital_status'])?$post['marital_status']:'',
				'address_one'=>isset($post['address_one'])?$post['address_one']:'',
				'address_two'=>isset($post['address_two'])?$post['address_two']:'',
				'city'=>isset($post['city'])?$post['city']:'',
				'district'=>isset($post['district'])?$post['district']:'',
				'state'=>isset($post['state'])?$post['state']:'',
				'zip_code'=>isset($post['zip_code'])?$post['zip_code']:'',
				'id_p_name'=>isset($post['id_p_name'])?$post['id_p_name']:'',
				'id_p_num'=>isset($post['id_p_num'])?$post['id_p_num']:'',
				'add_p_name'=>isset($post['add_p_name'])?$post['add_p_name']:'',
				'add_p_num'=>isset($post['add_p_num'])?$post['add_p_num']:'',
				'd_lic_num'=>isset($post['d_lic_num'])?$post['d_lic_num']:'',
				'd_lmv'=>isset($post['d_lmv'])?$post['d_lmv']:'',
				'd_psvbus'=>isset($post['d_psvbus'])?$post['d_psvbus']:'',
				'd_mcwg'=>isset($post['d_mcwg'])?$post['d_mcwg']:'',
				'd_trans'=>isset($post['d_trans'])?$post['d_trans']:'',
				'd_b_num'=>isset($post['d_b_num'])?$post['d_b_num']:'',
				'e_d_lmv'=>isset($post['e_d_lmv'])?$post['e_d_lmv']:'',
				'e_d_psvbus'=>isset($post['e_d_psvbus'])?$post['e_d_psvbus']:'',
				'e_d_mcwg'=>isset($post['e_d_mcwg'])?$post['e_d_mcwg']:'',
				'e_d_trans'=>isset($post['e_d_trans'])?$post['e_d_trans']:'',
				'e_d_b_num'=>isset($post['e_d_b_num'])?$post['e_d_b_num']:'',
				'name_of_qualification'=>isset($post['name_of_qualification'])?$post['name_of_qualification']:'',
				'institute'=>isset($post['institute'])?$post['institute']:'',
				'y_of_pass'=>isset($post['y_of_pass'])?$post['y_of_pass']:'',
				'certificate_num'=>isset($post['certificate_num'])?$post['certificate_num']:'',
				'cer_date'=>isset($post['cer_date'])?$post['cer_date']:'',
				'time'=>isset($post['time'])?$post['time']:'',
				'years'=>isset($post['years'])?$post['years']:'',
				'month'=>isset($post['month'])?$post['month']:'',
				'size_catagory'=>isset($post['size_catagory'])?$post['size_catagory']:'',
				'vehicle_type'=>isset($post['vehicle_type'])?$post['vehicle_type']:'',
				'ind_exp'=>isset($post['ind_exp'])?$post['ind_exp']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($l_details['a_id'])?$l_details['a_id']:'',
				);
				//echo '<pre>';print_r($onedata);exit;
				$stepone= $this->Driver_model->save_driver_details($onedata);
				if(count($stepone)>0){
				$id='VMS0001'.$stepone;
				$driver_id=array('driver_id'=>$id);
				$this->Driver_model->update_driver($stepone,$driver_id);	
				$this->session->set_flashdata('success',"driver are successfully added");
				redirect('driver/uploaddocuments/'.base64_encode($stepone));
				}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('driver/add/'.base64_encode(1));
				}
				}

				}else{
				$this->session->set_flashdata('error',"password and  Confirmpassword are not matched");
				redirect('driver/add/'.base64_encode(1));
				}
				}

				}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin/login');
				}
				}
	public function uploaddocuments()
	{
		if($this->session->userdata('vms_details'))
		{
			$data['d_id']=base64_decode($this->uri->segment(3));
			//echo '<pre>';print_r($data);exit;
			$this->load->view('driver/upload-documents',$data);
			$this->load->view('owner/footer');
			
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	public function upload_doument_post()
	{
	if($this->session->userdata('vms_details'))
		{
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$l_details=$this->session->userdata('vms_details');	
		   if(isset($_FILES['recent_photo']['name']) && $_FILES['recent_photo']['name']!=''){
							$temp = explode(".", $_FILES["recent_photo"]["name"]);
							$documents = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['recent_photo']['tmp_name'], "assets/drivers_documents/" . $documents);
						}else{
							$documents='';
						}
			if(isset($_FILES['dl']['name']) && $_FILES['dl']['name']!=''){
							$temp = explode(".", $_FILES["dl"]["name"]);
							$driving_lic = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['dl']['tmp_name'], "assets/drivers_documents/" . $driving_lic);
						}else{
							$driving_lic='';
						}			
				if(isset($_FILES['batch']['name']) && $_FILES['batch']['name']!=''){
							$temp = explode(".", $_FILES["batch"]["name"]);
							$batchs= round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['batch']['tmp_name'], "assets/drivers_documents/" . $batchs);
						}else{
							$batchs='';
						}		
				if(isset($_FILES['training']['name']) && $_FILES['training']['name']!=''){
							$temp = explode(".", $_FILES["training"]["name"]);
							$training_cer= round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['training']['tmp_name'], "assets/drivers_documents/" . $training_cer);
						}else{
							$training_cer='';
						}		
						if(isset($_FILES['d_id_proof']['name']) && $_FILES['d_id_proof']['name']!=''){
							$temp = explode(".", $_FILES["d_id_proof"]["name"]);
							$driving_id= round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['d_id_proof']['tmp_name'], "assets/drivers_documents/" . $driving_id);
						}else{
							$driving_id='';
						}
							if(isset($_FILES['add_proof']['name']) && $_FILES['add_proof']['name']!=''){
							$temp = explode(".", $_FILES["add_proof"]["name"]);
							$add_prof= round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['add_proof']['tmp_name'], "assets/drivers_documents/" . $add_prof);
						}else{
							$add_prof='';
						}
							if(isset($_FILES['criminal_record']['name']) && $_FILES['criminal_record']['name']!=''){
							$temp = explode(".", $_FILES["criminal_record"]["name"]);
							$cri_record= round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['criminal_record']['tmp_name'], "assets/drivers_documents/" . $cri_record);
						}else{
							$cri_record='';
						}
			$add=array(
			'recent_photo'=>isset($documents)?$documents:'',
			'dl'=>isset($driving_lic)?$driving_lic:'',
			'batch'=>isset($batchs)?$batchs:'',
			'training'=>isset($training_cer)?$training_cer:'',
			'd_id_proof'=>isset($driving_id)?$driving_id:'',
			'add_proof'=>isset($add_prof)?$add_prof:'',
			'criminal_record'=>isset($cri_record)?$cri_record:'',
			);
			//echo'<pre>';print_r($add);exit;
			$update=$this->Driver_model->update_driver_documents($post['d_id'],$add);
			//echo'<pre>';print_r($update);exit;
			if(count($update)>0){
				$this->session->set_flashdata('success','driver documents added successfully');
				redirect('driver/tokennumber/'.base64_encode($post['d_id']));
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
				redirect('driver/uploaddocuments/'.base64_encode($post['d_id']));
			}			
	       }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	public function tokennumber()
	{
		if($this->session->userdata('vms_details'))
		{
			$data['d_id']=base64_decode($this->uri->segment(3));
			//echo'<pre>';print_r($data);exit;
			$this->load->view('driver/token_number',$data);
			$this->load->view('owner/footer');
			
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	public function lists(){
		if($this->session->userdata('vms_details'))
		{   			
                
				$u_id=$this->session->userdata('vms_details');
				$data['drivers_list']= $this->Driver_model->get_driver_list($u_id['a_id']); 
		//echo'<pre>';print_r($data);exit;
				$this->load->view('driver/drivers-list',$data);
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
         $login_details=$this->session->userdata('vms_details');	
	             $a_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($a_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Driver_model->update_driver_staus($a_id,$stusdetails);
							$statusdata=$this->Driver_model->update_driver_details($a_id,$stusdetails);
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"driver details successfully  Deactivate.");
								}else{
									$this->session->set_flashdata('success',"driver details successfully  Activate.");
								}
								redirect('driver/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('driver/lists');
							}
						}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('dashboard');
					}	
	
        }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('admin/login');  
	   }
    }
	
	public function delete()
	{
		if($this->session->userdata('vms_details'))
		{
			$a_id=base64_decode($this->uri->segment(3));
					if($status==2){
					}
					if($a_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Driver_model->update_driver_staus($a_id,$stusdetails);
							$statusdata=$this->Driver_model->update_driver_details($a_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"driver details successfully  deleted.");
								redirect('driver/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('driver/lists');
							}
						}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('dashboard');
					}	
			
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	
	public function edit()
	{
		if($this->session->userdata('vms_details'))
		{
			$admindetails=$this->session->userdata('vms_details');
					$data['driver_id']=$this->uri->segment(3);
					$driver_id=base64_decode($this->uri->segment(3));
					$data['driver_details']=$this->Driver_model->get_driver_details($driver_id); 
					$this->load->view('driver/edit-driver',$data);
					$this->load->view('owner/footer');
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin/login');
		}
	}
	
	public function editpost()
	{
		if($this->session->userdata('vms_details'))
		{
			$l_details=$this->session->userdata('vms_details');	
				$post=$this->input->post();	
				//echo'<pre>';print_r($post);exit;
				$driver_details=$this->Driver_model->get_driver_details($post['d_id']);
				//echo'<pre>';print_r($data);exit;
             if($driver_details['email']!= $post['email']){
							$emailcheck= $this->Driver_model->check_email_exits($post['email']);
								if(count($emailcheck)>0){
									$this->session->set_flashdata('error','Email Id already exists. Please use another Email Id');
									redirect('driver/edit/'.base64_encode($post['d_id']));
								}
						}
						if(isset($_FILES['recent_photo']['name']) && $_FILES['recent_photo']['name']!=''){
							$temp = explode(".", $_FILES["recent_photo"]["name"]);
							$documents = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['recent_photo']['tmp_name'], "assets/drivers_documents/" . $documents);
						}else{
							$documents=$driver_details['recent_photo'];
						}
			if(isset($_FILES['dl']['name']) && $_FILES['dl']['name']!=''){
							$temp = explode(".", $_FILES["dl"]["name"]);
							$driving_lic = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['dl']['tmp_name'], "assets/drivers_documents/" . $driving_lic);
						}else{
							$driving_lic=$driver_details['dl'];
						}			
				if(isset($_FILES['batch']['name']) && $_FILES['batch']['name']!=''){
							$temp = explode(".", $_FILES["batch"]["name"]);
							$batchs= round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['batch']['tmp_name'], "assets/drivers_documents/" . $batchs);
						}else{
							$batchs=$driver_details['batch'];
						}		
				if(isset($_FILES['training']['name']) && $_FILES['training']['name']!=''){
							$temp = explode(".", $_FILES["training"]["name"]);
							$training_cer= round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['training']['tmp_name'], "assets/drivers_documents/" . $training_cer);
						}else{
							$training_cer=$driver_details['training'];
						}		
						if(isset($_FILES['d_id_proof']['name']) && $_FILES['d_id_proof']['name']!=''){
							$temp = explode(".", $_FILES["d_id_proof"]["name"]);
							$driving_id= round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['d_id_proof']['tmp_name'], "assets/drivers_documents/" . $driving_id);
						}else{
							$driving_id=$driver_details['d_id_proof'];
						}
							if(isset($_FILES['add_proof']['name']) && $_FILES['add_proof']['name']!=''){
							$temp = explode(".", $_FILES["add_proof"]["name"]);
							$add_prof= round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['add_proof']['tmp_name'], "assets/drivers_documents/" . $add_prof);
						}else{
							$add_prof=$driver_details['add_proof'];
						}
							if(isset($_FILES['criminal_record']['name']) && $_FILES['criminal_record']['name']!=''){
							$temp = explode(".", $_FILES["criminal_record"]["name"]);
							$cri_record= round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['criminal_record']['tmp_name'], "assets/drivers_documents/" . $cri_record);
						}else{
							$cri_record=$driver_details['criminal_record'];
						}
						
						
						
						
				        $onedata1=array(
							'name'=>isset($post['name'])?$post['name']:'',
				           'email'=>isset($post['email'])?$post['email']:'',
				            'mobile_number'=>isset($post['mobile_number'])?$post['mobile_number']:'',
				             'updated_at'=>date('Y-m-d H:i:s'),
							);
							$this->Driver_model->update_driver_details($driver_details['a_id'],$onedata1);
				         $editdata=array(
							'name'=>isset($post['name'])?$post['name']:'',
				'email'=>isset($post['email'])?$post['email']:'',
				'mobile_number'=>isset($post['mobile_number'])?$post['mobile_number']:'',
				'dob'=>isset($post['dob'])?$post['dob']:'',
				'marital_status'=>isset($post['marital_status'])?$post['marital_status']:'',
				'address_one'=>isset($post['address_one'])?$post['address_one']:'',
				'address_two'=>isset($post['address_two'])?$post['address_two']:'',
				'city'=>isset($post['city'])?$post['city']:'',
				'district'=>isset($post['district'])?$post['district']:'',
				'state'=>isset($post['state'])?$post['state']:'',
				'zip_code'=>isset($post['zip_code'])?$post['zip_code']:'',
				'id_p_name'=>isset($post['id_p_name'])?$post['id_p_name']:'',
				'id_p_num'=>isset($post['id_p_num'])?$post['id_p_num']:'',
				'add_p_name'=>isset($post['add_p_name'])?$post['add_p_name']:'',
				'add_p_num'=>isset($post['add_p_num'])?$post['add_p_num']:'',
				'd_lic_num'=>isset($post['d_lic_num'])?$post['d_lic_num']:'',
				'd_lmv'=>isset($post['d_lmv'])?$post['d_lmv']:'',
				'd_psvbus'=>isset($post['d_psvbus'])?$post['d_psvbus']:'',
				'd_mcwg'=>isset($post['d_mcwg'])?$post['d_mcwg']:'',
				'd_trans'=>isset($post['d_trans'])?$post['d_trans']:'',
				'd_b_num'=>isset($post['d_b_num'])?$post['d_b_num']:'',
				'e_d_lmv'=>isset($post['e_d_lmv'])?$post['e_d_lmv']:'',
				'e_d_psvbus'=>isset($post['e_d_psvbus'])?$post['e_d_psvbus']:'',
				'e_d_mcwg'=>isset($post['e_d_mcwg'])?$post['e_d_mcwg']:'',
				'e_d_trans'=>isset($post['e_d_trans'])?$post['e_d_trans']:'',
				'e_d_b_num'=>isset($post['e_d_b_num'])?$post['e_d_b_num']:'',
				'name_of_qualification'=>isset($post['name_of_qualification'])?$post['name_of_qualification']:'',
				'institute'=>isset($post['institute'])?$post['institute']:'',
				'y_of_pass'=>isset($post['y_of_pass'])?$post['y_of_pass']:'',
				'certificate_num'=>isset($post['certificate_num'])?$post['certificate_num']:'',
				'cer_date'=>isset($post['cer_date'])?$post['cer_date']:'',
				'time'=>isset($post['time'])?$post['time']:'',
				'years'=>isset($post['years'])?$post['years']:'',
				'month'=>isset($post['month'])?$post['month']:'',
				'size_catagory'=>isset($post['size_catagory'])?$post['size_catagory']:'',
				'vehicle_type'=>isset($post['vehicle_type'])?$post['vehicle_type']:'',
				'ind_exp'=>isset($post['ind_exp'])?$post['ind_exp']:'',
				'recent_photo'=>isset($documents)?$documents:'',
			    'dl'=>isset($driving_lic)?$driving_lic:'',
			    'batch'=>isset($batchs)?$batchs:'',
			    'training'=>isset($training_cer)?$training_cer:'',
			    'd_id_proof'=>isset($driving_id)?$driving_id:'',
			    'add_proof'=>isset($add_prof)?$add_prof:'',
			    'criminal_record'=>isset($cri_record)?$cri_record:'',
				'updated_at'=>date('Y-m-d H:i:s'),
				);
				//echo '<pre>';print_r($editdata);exit;
							$editdetails= $this->Driver_model->update_driver(($post['d_id']),$editdata);
							if(count($editdetails)>0){
							$this->session->set_flashdata('success',"driver are successfully updated");
				redirect('driver/lists');
				}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('driver/edit/'.base64_encode($post['d_id']));
				}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin/login');
		}
	}
	
	
		
	
}
