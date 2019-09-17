<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Backend.php');

class Vehicle extends Backend {
	
		public function __construct() 
		{
		parent::__construct();
		$this->load->model('Vehicle_model');
	
		}	
	public function index(){
		if($this->session->userdata('vms_details'))
		{   							
			$u_id=$this->session->userdata('vms_details');
			$data['vehicle_list']=$this->Vehicle_model->get_all_vehical_details($u_id['a_id']);
			$data['driver_list']=$this->Vehicle_model->get_driver_list($u_id['a_id']);			
			//echo '<pre>';print_r($data);exit;
			$this->load->view('owner/vehicle',$data);
			$this->load->view('owner/footer');
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	public function add(){
		if($this->session->userdata('vms_details'))
		{   							
				$data['material_list']=$this->Vehicle_model->get_active_material_list();
				$data['amenities']=$this->Vehicle_model->get_amenities();
				$data['load_types']=$this->Vehicle_model->get_load_types();
				$this->load->view('owner/add-vehicle',$data);
				$this->load->view('owner/footer');
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	public function addone(){
		if($this->session->userdata('vms_details'))
		{   							
				$v_id=base64_decode($this->uri->segment(3));
				$data['v_details']=$this->Vehicle_model->get_vehical_details($v_id);
				$this->load->view('owner/add-vehicle-step2',$data);
				$this->load->view('owner/footer');
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	public function edit(){
		if($this->session->userdata('vms_details'))
		{   							
				$v_id=base64_decode($this->uri->segment(3));
				$u_id=$this->session->userdata('vms_details');
				$data['v_details']=$this->Vehicle_model->get_all_vehicle_details_with_images($v_id);
				$data['amenities']=$this->Vehicle_model->get_amenities();
				$data['load_types']=$this->Vehicle_model->get_load_types();
				$amenities_list=$this->Vehicle_model->get_amenities_list($v_id);
				$inform_load_list=$this->Vehicle_model->vehicles_inform_load($v_id);
				if(isset($amenities_list) && count($amenities_list)>0){
					foreach($amenities_list as $li){
						$i_l_l[]=$li['name'];
					}
					$data['amenities_list']=$i_l_l;	

				}else{
					$data['amenities_list']=array();	
				}
				if(isset($inform_load_list) && count($inform_load_list)>0){
					foreach($inform_load_list as $li){
						$i_t_y[]=$li['name'];
					}
					$data['inform']=$i_t_y;	

				}else{
					$data['inform']=array();	
				}				
				//echo '<pre>';print_r($data);exit;
				$this->load->view('owner/edit-vehicle',$data);
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
			$check=$this->Vehicle_model->check_vehicle_details($post['r_no']);
			if(count($check)>0){
				$this->session->set_flashdata('error','Rc number already exits. Please try again');
				redirect('vehicle/add');	
			}
			
			$add=array(
			'r_no'=>isset($post['r_no'])?$post['r_no']:'',
			'o_name'=>isset($post['o_name'])?$post['o_name']:'',
			'mobile'=>isset($post['mobile'])?$post['mobile']:'',
			'email'=>isset($post['email'])?$post['email']:'',
			'add_one'=>isset($post['add_one'])?$post['add_one']:'',
			'add_two'=>isset($post['add_two'])?$post['add_two']:'',
			'city'=>isset($post['city'])?$post['city']:'',
			'dist'=>isset($post['dist'])?$post['dist']:'',
			'state'=>isset($post['state'])?$post['state']:'',
			'zipcode'=>isset($post['zipcode'])?$post['zipcode']:'',
			'v_r_no'=>isset($post['v_r_no'])?$post['v_r_no']:'',
			'v_manu_name'=>isset($post['v_manu_name'])?$post['v_manu_name']:'',
			'v_m_name_num'=>isset($post['v_m_name_num'])?$post['v_m_name_num']:'',
			'no_of_wheel'=>isset($post['no_of_wheel'])?$post['no_of_wheel']:'',
			'no_of_axel'=>isset($post['no_of_axel'])?$post['no_of_axel']:'',
			'fuel_cap'=>isset($post['fuel_cap'])?$post['fuel_cap']:'',
			'chassis_no'=>isset($post['chassis_no'])?$post['chassis_no']:'',
			'engine_no'=>isset($post['engine_no'])?$post['engine_no']:'',
			'body_type'=>isset($post['body_type'])?$post['body_type']:'',
			'manu_year'=>isset($post['manu_year'])?$post['manu_year']:'',
			'registration_date'=>isset($post['registration_date'])?$post['registration_date']:'',
			'sitting_cap'=>isset($post['sitting_cap'])?$post['sitting_cap']:'',
			'already_run_in_km'=>isset($post['already_run_in_km'])?$post['already_run_in_km']:'',
			'insurance_c_n'=>isset($post['insurance_c_n'])?$post['insurance_c_n']:'',
			'insurance_p_n'=>isset($post['insurance_p_n'])?$post['insurance_p_n']:'',
			'insurance_date_issue'=>isset($post['insurance_date_issue'])?$post['insurance_date_issue']:'',
			'insurance_date_exp'=>isset($post['insurance_date_exp'])?$post['insurance_date_exp']:'',
			'rto_issue_date'=>isset($post['rto_issue_date'])?$post['rto_issue_date']:'',
			'rto_due_date'=>isset($post['rto_due_date'])?$post['rto_due_date']:'',
			'rto_exp_date'=>isset($post['rto_exp_date'])?$post['rto_exp_date']:'',
			'fitness_isse_date'=>isset($post['fitness_isse_date'])?$post['fitness_isse_date']:'',
			'fitness_due_date'=>isset($post['fitness_due_date'])?$post['fitness_due_date']:'',
			'fitness_exp_date'=>isset($post['fitness_exp_date'])?$post['fitness_exp_date']:'',
			'pollution_isse_date'=>isset($post['pollution_isse_date'])?$post['pollution_isse_date']:'',
			'pollution_due_date'=>isset($post['pollution_due_date'])?$post['pollution_due_date']:'',
			'pollution_exp_date'=>isset($post['pollution_exp_date'])?$post['pollution_exp_date']:'',
			'road_state_name'=>isset($post['road_state_name'])?$post['road_state_name']:'',
			'road_validaity'=>isset($post['road_validaity'])?$post['road_validaity']:'',
			'size_catagory'=>isset($post['size_catagory'])?$post['size_catagory']:'',
			'vehicle_type'=>isset($post['vehicle_type'])?$post['vehicle_type']:'',
			'capacity'=>isset($post['capacity'])?$post['capacity']:'',
			'material'=>isset($post['material'])?$post['material']:'',
			'high'=>isset($post['high'])?$post['high']:'',
			'length'=>isset($post['length'])?$post['length']:'',
			'width'=>isset($post['width'])?$post['width']:'',
			'created_at'=>date('Y-m-d H:i:s'),
			'created_by'=>$l_details['a_id'],
			);
			//echo '<pre>';print_r($add);exit;
			$save=$this->Vehicle_model->save_vehicle_details($add);
			if(count($save)>0){
				if(isset($_FILES["vehicle_images"]["name"]) && count($_FILES["vehicle_images"]["name"])>0){
					$cnt=0;foreach($_FILES["vehicle_images"]["name"] as $list){ 
					$temp = explode(".", $_FILES["vehicle_images"]["name"][$cnt]);
					$img =$cnt.round(microtime(true)).'.'.end($temp);
					move_uploaded_file($_FILES['vehicle_images']['tmp_name'][$cnt], "assets/vehicle/" . $img);
						   if($_FILES["vehicle_images"]["name"][$cnt]!=''){
								$add_data=array(
								'v_id'=>isset($save)?$save:'',
								'img_name'=>isset($img)?$img:'',
								'img_org_name'=>isset($_FILES["vehicle_images"]["name"][$cnt])?$_FILES["vehicle_images"]["name"][$cnt]:'',
								'status'=>1,
								'craeted_at'=>date('Y-m-d H:i:s'),
								'created_by'=>isset($l_details['a_id'])?$l_details['a_id']:''
								);
								$this->Vehicle_model->save_vehicle_image($add_data);	
						   }

				       $cnt++;
					   }
					}
					if(isset($post['Amenities']) && count($post['Amenities'])>0){
						foreach($post['Amenities'] as $li){
							$vadd=array(
							'v_id'=>isset($save)?$save:'',
							'name'=>isset($li)?$li:'',
							'status'=>1,
							'created_at'=>date('Y-m-d H:i:s'),
							'created_by'=>$l_details['a_id'],
							);
							$this->Vehicle_model->save_vehicles_amenities($vadd);						
						}
					}
					if(isset($post['information_load_type']) && count($post['information_load_type'])>0){
						foreach($post['information_load_type'] as $li){
							$iadd=array(
							'v_id'=>isset($save)?$save:'',
							'name'=>isset($li)?$li:'',
							'status'=>1,
							'created_at'=>date('Y-m-d H:i:s'),
							'created_by'=>$l_details['a_id'],
							);
							$this->Vehicle_model->save_information_load_type($vadd);						
						}
					}
				$this->session->set_flashdata('success','Details added successfully');
				redirect('vehicle/addone/'.base64_encode($save));				
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
				redirect('vehicle/add');
			}
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				 redirect('admin/login');
		}
	}
	public function addonepost(){
		if($this->session->userdata('vms_details'))
		{   							
			$l_details=$this->session->userdata('vms_details');
			$post=$this->input->post();
			//echo '<pre>';print_r($_FILES);exit;
			if(isset($_FILES['insurance_img']['name']) && $_FILES['insurance_img']['name']!=''){
				$temp = explode(".", $_FILES["insurance_img"]["name"]);
				$insurance_img ='11'.round(microtime(true)).'.'.end($temp);
				move_uploaded_file($_FILES['insurance_img']['tmp_name'], "assets/vehicle/" . $insurance_img);
			}
			if(isset($_FILES['fitness_img']['name']) && $_FILES['fitness_img']['name']!=''){
				$temp = explode(".", $_FILES["fitness_img"]["name"]);
				$fitness_img = '22'.round(microtime(true)).'.'.end($temp);
				move_uploaded_file($_FILES['fitness_img']['tmp_name'], "assets/vehicle/" . $fitness_img);
			}
			if(isset($_FILES['pollution_img']['name']) && $_FILES['pollution_img']['name']!=''){
				$temp = explode(".", $_FILES["pollution_img"]["name"]);
				$pollution_img ='33'.round(microtime(true)).'.'.end($temp);
				move_uploaded_file($_FILES['pollution_img']['tmp_name'], "assets/vehicle/" . $pollution_img);
			}
			if(isset($_FILES['rc_img']['name']) && $_FILES['rc_img']['name']!=''){
				$temp = explode(".", $_FILES["rc_img"]["name"]);
				$rc_img = '44'.round(microtime(true)).'.'.end($temp);
				move_uploaded_file($_FILES['rc_img']['tmp_name'], "assets/vehicle/" . $rc_img);
			}if(isset($_FILES['road_permit']['name']) && $_FILES['road_permit']['name']!=''){
				$temp = explode(".", $_FILES["road_permit"]["name"]);
				$road_permit = '55'.round(microtime(true)).'.'.end($temp);
				move_uploaded_file($_FILES['road_permit']['tmp_name'], "assets/vehicle/" . $road_permit);
			}if(isset($_FILES['owner_id_proof']['name']) && $_FILES['owner_id_proof']['name']!=''){
				$temp = explode(".", $_FILES["owner_id_proof"]["name"]);
				$owner_id_proof = '66'.round(microtime(true)).'.'.end($temp);
				move_uploaded_file($_FILES['owner_id_proof']['tmp_name'], "assets/vehicle/" . $owner_id_proof);
			}if(isset($_FILES['add_proof']['name']) && $_FILES['add_proof']['name']!=''){
				$temp = explode(".", $_FILES["add_proof"]["name"]);
				$add_proof ='77'.round(microtime(true)).'.'.end($temp);
				move_uploaded_file($_FILES['add_proof']['tmp_name'], "assets/vehicle/" . $add_proof);
			}
			$u_data=array(
			'insurance_img'=>isset($insurance_img)?$insurance_img:'',
			'fitness_img'=>isset($fitness_img)?$fitness_img:'',
			'pollution_img'=>isset($pollution_img)?$pollution_img:'',
			'rc_img'=>isset($rc_img)?$rc_img:'',
			'road_permit'=>isset($road_permit)?$road_permit:'',
			'owner_id_proof'=>isset($owner_id_proof)?$owner_id_proof:'',
			'add_proof'=>isset($add_proof)?$add_proof:'',			
			'updated_at'=>date('Y-m-d H:i:s'),
			'created_by'=>$l_details['a_id'],
			);
			//echo '<pre>';print_r($u_data);exit;
			$update=$this->Vehicle_model->update_vehicle_details($post['v_id'],$u_data);
			if(count($update)>0){
				$this->session->set_flashdata('success','Details added successfully');
				redirect('vehicle/index/');				
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
				redirect('vehicle/addone/'.base64_encode($post['v_id']));
			}
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			 redirect('admin/login');
		}
	}
	
	public function remove_vehicle_imges(){
		if($this->session->userdata('vms_details'))
		{
			$post=$this->input->post();
			$admindetails=$this->session->userdata('vms_details');
			$removedattch=$this->Vehicle_model->remove_vehicle_imges($post['i_id']);
			if(count($removedattch) > 0)
			{
			$data['msg']=1;
			echo json_encode($data);exit;	
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
			$v_details=$this->Vehicle_model->get_all_vehicle_details($post['v_id']);
			if($v_details['r_no']!=$post['r_no']){
				$check=$this->Vehicle_model->check_vehicle_details($post['r_no']);
				if(count($check)>0){
					$this->session->set_flashdata('error','Vehicle already exits. Please try again');
					redirect('vehicle/edit/'.base64_encode($post['v_id']));	
				}
			}
			
			if(isset($_FILES['insurance_img']['name']) && $_FILES['insurance_img']['name']!=''){
				unlink('assets/vehicle/'.$v_details['insurance_img']);
				$temp = explode(".", $_FILES["insurance_img"]["name"]);
				$insurance_img ='11'.round(microtime(true)).'.'.end($temp);
				move_uploaded_file($_FILES['insurance_img']['tmp_name'], "assets/vehicle/" . $insurance_img);
			}
			if(isset($_FILES['fitness_img']['name']) && $_FILES['fitness_img']['name']!=''){
				unlink('assets/vehicle/'.$v_details['fitness_img']);
				$temp = explode(".", $_FILES["fitness_img"]["name"]);
				$fitness_img = '22'.round(microtime(true)).'.'.end($temp);
				move_uploaded_file($_FILES['fitness_img']['tmp_name'], "assets/vehicle/" . $fitness_img);
			}
			if(isset($_FILES['pollution_img']['name']) && $_FILES['pollution_img']['name']!=''){
				unlink('assets/vehicle/'.$v_details['pollution_img']);
				$temp = explode(".", $_FILES["pollution_img"]["name"]);
				$pollution_img ='33'.round(microtime(true)).'.'.end($temp);
				move_uploaded_file($_FILES['pollution_img']['tmp_name'], "assets/vehicle/" . $pollution_img);
			}
			if(isset($_FILES['rc_img']['name']) && $_FILES['rc_img']['name']!=''){
				unlink('assets/vehicle/'.$v_details['rc_img']);
				$temp = explode(".", $_FILES["rc_img"]["name"]);
				$rc_img = '44'.round(microtime(true)).'.'.end($temp);
				move_uploaded_file($_FILES['rc_img']['tmp_name'], "assets/vehicle/" . $rc_img);
			}if(isset($_FILES['road_permit']['name']) && $_FILES['road_permit']['name']!=''){
				unlink('assets/vehicle/'.$v_details['road_permit']);
				$temp = explode(".", $_FILES["road_permit"]["name"]);
				$road_permit = '55'.round(microtime(true)).'.'.end($temp);
				move_uploaded_file($_FILES['road_permit']['tmp_name'], "assets/vehicle/" . $road_permit);
			}if(isset($_FILES['owner_id_proof']['name']) && $_FILES['owner_id_proof']['name']!=''){
				unlink('assets/vehicle/'.$v_details['owner_id_proof']);
				$temp = explode(".", $_FILES["owner_id_proof"]["name"]);
				$owner_id_proof = '66'.round(microtime(true)).'.'.end($temp);
				move_uploaded_file($_FILES['owner_id_proof']['tmp_name'], "assets/vehicle/" . $owner_id_proof);
			}if(isset($_FILES['add_proof']['name']) && $_FILES['add_proof']['name']!=''){
				unlink('assets/vehicle/'.$v_details['add_proof']);
				$temp = explode(".", $_FILES["add_proof"]["name"]);
				$add_proof ='77'.round(microtime(true)).'.'.end($temp);
				move_uploaded_file($_FILES['add_proof']['tmp_name'], "assets/vehicle/" . $add_proof);
			}
			$u_data=array(
			'r_no'=>isset($post['r_no'])?$post['r_no']:'',
			'o_name'=>isset($post['o_name'])?$post['o_name']:'',
			'mobile'=>isset($post['mobile'])?$post['mobile']:'',
			'email'=>isset($post['email'])?$post['email']:'',
			'add_one'=>isset($post['add_one'])?$post['add_one']:'',
			'add_two'=>isset($post['add_two'])?$post['add_two']:'',
			'city'=>isset($post['city'])?$post['city']:'',
			'dist'=>isset($post['dist'])?$post['dist']:'',
			'state'=>isset($post['state'])?$post['state']:'',
			'zipcode'=>isset($post['zipcode'])?$post['zipcode']:'',
			'v_r_no'=>isset($post['v_r_no'])?$post['v_r_no']:'',
			'v_manu_name'=>isset($post['v_manu_name'])?$post['v_manu_name']:'',
			'v_m_name_num'=>isset($post['v_m_name_num'])?$post['v_m_name_num']:'',
			'no_of_wheel'=>isset($post['no_of_wheel'])?$post['no_of_wheel']:'',
			'no_of_axel'=>isset($post['no_of_axel'])?$post['no_of_axel']:'',
			'fuel_cap'=>isset($post['fuel_cap'])?$post['fuel_cap']:'',
			'chassis_no'=>isset($post['chassis_no'])?$post['chassis_no']:'',
			'engine_no'=>isset($post['engine_no'])?$post['engine_no']:'',
			'body_type'=>isset($post['body_type'])?$post['body_type']:'',
			'manu_year'=>isset($post['manu_year'])?$post['manu_year']:'',
			'registration_date'=>isset($post['registration_date'])?$post['registration_date']:'',
			'sitting_cap'=>isset($post['sitting_cap'])?$post['sitting_cap']:'',
			'already_run_in_km'=>isset($post['already_run_in_km'])?$post['already_run_in_km']:'',
			'insurance_c_n'=>isset($post['insurance_c_n'])?$post['insurance_c_n']:'',
			'insurance_p_n'=>isset($post['insurance_p_n'])?$post['insurance_p_n']:'',
			'insurance_date_issue'=>isset($post['insurance_date_issue'])?$post['insurance_date_issue']:'',
			'insurance_date_exp'=>isset($post['insurance_date_exp'])?$post['insurance_date_exp']:'',
			'rto_issue_date'=>isset($post['rto_issue_date'])?$post['rto_issue_date']:'',
			'rto_due_date'=>isset($post['rto_due_date'])?$post['rto_due_date']:'',
			'rto_exp_date'=>isset($post['rto_exp_date'])?$post['rto_exp_date']:'',
			'fitness_isse_date'=>isset($post['fitness_isse_date'])?$post['fitness_isse_date']:'',
			'fitness_due_date'=>isset($post['fitness_due_date'])?$post['fitness_due_date']:'',
			'fitness_exp_date'=>isset($post['fitness_exp_date'])?$post['fitness_exp_date']:'',
			'pollution_isse_date'=>isset($post['pollution_isse_date'])?$post['pollution_isse_date']:'',
			'pollution_due_date'=>isset($post['pollution_due_date'])?$post['pollution_due_date']:'',
			'pollution_exp_date'=>isset($post['pollution_exp_date'])?$post['pollution_exp_date']:'',
			'road_state_name'=>isset($post['road_state_name'])?$post['road_state_name']:'',
			'road_validaity'=>isset($post['road_validaity'])?$post['road_validaity']:'',
			'size_catagory'=>isset($post['size_catagory'])?$post['size_catagory']:'',
			'vehicle_type'=>isset($post['vehicle_type'])?$post['vehicle_type']:'',
			'capacity'=>isset($post['capacity'])?$post['capacity']:'',
			'material'=>isset($post['material'])?$post['material']:'',
			'high'=>isset($post['high'])?$post['high']:'',
			'length'=>isset($post['length'])?$post['length']:'',
			'width'=>isset($post['width'])?$post['width']:'',
			'insurance_img'=>isset($insurance_img)?$insurance_img:$v_details['insurance_img'],
			'fitness_img'=>isset($fitness_img)?$fitness_img:$v_details['fitness_img'],
			'pollution_img'=>isset($pollution_img)?$pollution_img:$v_details['pollution_img'],
			'rc_img'=>isset($rc_img)?$rc_img:$v_details['rc_img'],
			'road_permit'=>isset($road_permit)?$road_permit:$v_details['road_permit'],
			'owner_id_proof'=>isset($owner_id_proof)?$owner_id_proof:$v_details['owner_id_proof'],
			'add_proof'=>isset($add_proof)?$add_proof:$v_details['add_proof'],
			'updated_at'=>date('Y-m-d H:i:s'),
			);
			$update=$this->Vehicle_model->update_vehicle_details($post['v_id'],$u_data);
			if(count($update)>0){
				if(isset($_FILES["vehicle_images"]["name"]) && count($_FILES["vehicle_images"]["name"])>0){
					$cnt=0;foreach($_FILES["vehicle_images"]["name"] as $list){ 
					$temp = explode(".", $_FILES["vehicle_images"]["name"][$cnt]);
					$img =$cnt.round(microtime(true)).'.'.end($temp);
					move_uploaded_file($_FILES['vehicle_images']['tmp_name'][$cnt], "assets/vehicle/" . $img);
						   if($_FILES["vehicle_images"]["name"][$cnt]!=''){
								$add_data=array(
								'v_id'=>isset($post['v_id'])?$post['v_id']:'',
								'img_name'=>isset($img)?$img:'',
								'img_org_name'=>isset($_FILES["vehicle_images"]["name"][$cnt])?$_FILES["vehicle_images"]["name"][$cnt]:'',
								'status'=>1,
								'craeted_at'=>date('Y-m-d H:i:s'),
								'created_by'=>isset($l_details['a_id'])?$l_details['a_id']:''
								);
								$this->Vehicle_model->save_vehicle_image($add_data);	
						   }
				       $cnt++;
					   }
					}
					if(isset($post['Amenities']) && count($post['Amenities'])>0){
						$amenities_list=$this->Vehicle_model->get_amenities_list($post['v_id']);
						if(isset($amenities_list) && count($amenities_list)>0){
							foreach($amenities_list as $li){
								$i_l_l[]=$li['name'];
							}
						}else{
							$i_l_l=array();	
						}
						$res=array_diff($i_l_l,$post['Amenities']);
						if(isset($res) && count($res)>0){
							foreach($res as $li){
								$v_u=array(
								'status'=>2,
								'updated_at'=>date('Y-m-d H:i:s'),
								);
							$this->Vehicle_model->update_vehicles_amenities($li,$post['v_id'],$v_u);
							//echo $this->db->last_query();exit;
							}

						}
						foreach($post['Amenities'] as $li){
								if (in_array($li,$i_l_l))
									{
										//$in[]=$li;	
									}else{
										$out[]=$li;
									}
									
								}
								if(isset($out) && count($out)>0){
									foreach($out as $l){
										$vadd=array(
											'v_id'=>isset($post['v_id'])?$post['v_id']:'',
											'name'=>isset($l)?$l:'',
											'status'=>1,
											'created_at'=>date('Y-m-d H:i:s'),
											'created_by'=>$l_details['a_id'],
											);
											$this->Vehicle_model->save_vehicles_amenities($vadd);
									}
								}
					}
					if(isset($post['information_load_type']) && count($post['information_load_type'])>0){
						$inform_load_list=$this->Vehicle_model->vehicles_inform_load($post['v_id']);
						if(isset($inform_load_list) && count($inform_load_list)>0){
							foreach($inform_load_list as $li){
								$i_l_t[]=$li['name'];
							}
						}else{
							$i_l_t=array();	
						}
						foreach($post['information_load_type'] as $li){
								if (in_array($li,$i_l_t))
									{
										//$in[]=$li;	
									}else{
										$out1[]=$li;
									}
									
								}
								if(isset($out1) && count($out1)>0){
									foreach($out1 as $li){
										$iadd=array(
										'v_id'=>isset($post['v_id'])?$post['v_id']:'',
										'name'=>isset($li)?$li:'',
										'status'=>1,
										'created_at'=>date('Y-m-d H:i:s'),
										'created_by'=>$l_details['a_id'],
										);
										$this->Vehicle_model->save_information_load_type($iadd);						
									}
								}
						
						$ares=array_diff($i_l_t,$post['information_load_type']);
						//echo '<pre>';print_r($ares);exit;
						if(isset($ares) && count($ares)>0){
							foreach($ares as $li){
								$iv_u=array(
								'status'=>2,
								'updated_at'=>date('Y-m-d H:i:s'),
								);
							$this->Vehicle_model->update_information_load_type($li,$post['v_id'],$iv_u);
							}

						}
					}
					
				$this->session->set_flashdata('success','Details added successfully');
				redirect('vehicle/index/');				
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
				redirect('vehicle/edit/'.base64_encode($post['v_id']));
			}
			
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
		      redirect('admin/login');
		}
	}
	public function update_drive(){
		if($this->session->userdata('vms_details'))
		{
			$l_details=$this->session->userdata('vms_details');
			$post=$this->input->post();
			$d_u=array('driver_id'=>$post['d_id'],'updated_at'=>date('Y-m-d H:i:s'));
			$check=$this->Vehicle_model->check_driver($post['v_id']);
			if(count($check)>0){
				if($check['driver_id']==$post['d_id']){
					$u_d_u=array('driver_id'=>'','updated_at'=>date('Y-m-d H:i:s'));
					$update=$this->Vehicle_model->update_vehicle_details($post['v_id'],$u_d_u);
				}else{
					$update=$this->Vehicle_model->update_vehicle_details($post['v_id'],$d_u);
				}				
			}else{
				$update=$this->Vehicle_model->update_vehicle_details($post['v_id'],$d_u);
			}
			if(count($update)>0){
				$data['msg']=1;
				echo json_encode($data);exit;
			}
		}else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
		      redirect('admin/login');
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
}
