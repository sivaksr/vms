<style>
hr{
	margin-top:0px
	
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="mt-0 mb-0">Edit Driver Edit</h3>
                     </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="">
                <div class="col-md-12 ">
					 <h3 class="m-0 pull-left">Basic details </h3>
				</div>
				</div>
                <div class="row">
                    <div class="col-md-12">
                        <form id="add_driver" name="add_driver" role="form" action="<?php echo base_url('driver/editpost'); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" id="d_id" name="d_id" value="<?php echo isset($d_details['d_id'])?$d_details['d_id']:''; ?>">
							<div class="">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input type=" text" class="form-control" name="name" id="name" placeholder="Enter Name" value="<?php echo isset($d_details['name'])?$d_details['name']:''; ?>">
                                    </div>
                                </div>
								<div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Driving license number</label>
                                        <input type=" text" class="form-control" name="driving_lic_no" id="driving_lic_no" placeholder="Enter Driving license number" value="<?php echo isset($d_details['driving_lic_no'])?$d_details['driving_lic_no']:''; ?>">
                                    </div>
                                </div>
								<div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Vehicle type</label>
                                        <input type=" text" class="form-control" name="vehicle_type" id="vehicle_type" placeholder="Enter Vehicle type" value="<?php echo isset($d_details['vehicle_type'])?$d_details['vehicle_type']:''; ?>">
                                    </div>
                                </div> 
								<div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Salary </label>
                                        <input type=" text" class="form-control" name="salary" id="salary" placeholder="Enter Salary" value="<?php echo isset($d_details['salary'])?$d_details['salary']:''; ?>">
                                    </div>
                                </div> 
								<div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Address</label>
                                        <input type=" text" class="form-control" id="address" name="address" placeholder="Enter Address" value="<?php echo isset($d_details['address'])?$d_details['address']:''; ?>">
                                    </div>
                                </div>
                               <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="mobile_num" id="mobile_num" value="<?php echo isset($d_details['mobile_num'])?$d_details['mobile_num']:''; ?>">
                                        </div>
                                    </div>
                                </div>                             
                             </div>
                         <hr>
				<div class="col-md-12 ">
					 <h3 class="m-0 pull-left">Driver Info </h3>
				</div>
					<div class="">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Rto permission </label>
										<input type="text" class="form-control" name="rto_permission" id="rto_permission" value="<?php echo isset($d_details['rto_permission'])?$d_details['rto_permission']:''; ?>">
                                        
                                    </div>
                                </div> 
								<div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control " name="rto_per_exp_date" id="rto_per_exp_date" value="<?php echo isset($d_details['rto_per_exp_date'])?$d_details['rto_per_exp_date']:''; ?>">
                                    </div>
                                </div>
								<div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Experience</label>
                                        <input type=" text" class="form-control " name="experience" id="experience" placeholder="Enter Experience" value="<?php echo isset($d_details['experience'])?$d_details['experience']:''; ?>">
                                    </div>
                                </div>
                            </div> 
							<hr>
				
					<div class="row">
                                <div class="col-md-6">
									<div class="col-md-12 ">
										 <h3 class="m-0 pull-left">Driving license  </h3>
									</div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Issue date </label>
                                        <input type="date" class="form-control " name="d_lic_issu_date" id="d_lic_issu_date" value="<?php echo isset($d_details['d_lic_issu_date'])?$d_details['d_lic_issu_date']:''; ?>" >
                                    </div>
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control" name="d_lic_exp_date" id="d_lic_exp_date" value="<?php echo isset($d_details['d_lic_exp_date'])?$d_details['d_lic_exp_date']:''; ?>" >
                                    </div>
                                </div>
                                </div>  
								<div class="col-md-6">
									<div class="col-md-12 ">
										 <h3 class="m-0 pull-left">Batch   </h3>
									</div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Issue date </label>
                                        <input type="date" class="form-control" name="d_bat_issu_date" id="d_bat_issu_date" value="<?php echo isset($d_details['d_bat_issu_date'])?$d_details['d_bat_issu_date']:''; ?>" >
                                    </div>
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control" name="d_bat_exp_date" id="d_bat_exp_date"  value="<?php echo isset($d_details['d_bat_exp_date'])?$d_details['d_bat_exp_date']:''; ?>">
                                    </div>
                                </div>
                                </div>
								<div class="col-md-6">
									<div class="col-md-12 ">
										 <h3 class="m-0 pull-left">Training    </h3>
									</div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Issue date </label>
                                        <input type="date" class="form-control" name="d_trai_issu_date" id="d_trai_issu_date" value="<?php echo isset($d_details['d_trai_issu_date'])?$d_details['d_trai_issu_date']:''; ?>" >
                                    </div>
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control" name="d_trai_exp_date" id="d_trai_exp_date" value="<?php echo isset($d_details['d_trai_exp_date'])?$d_details['d_trai_exp_date']:''; ?>" >
                                    </div>
                                </div>
                                </div>
								
                            
								<div class="col-md-6">
									<div class="col-md-12 ">
										 <h3 class="m-0 pull-left">ID Proof    </h3>
									</div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Issue date </label>
                                        <input type="date" class="form-control" name="d_id_issu_date" id="d_id_issu_date" value="<?php echo isset($d_details['d_id_issu_date'])?$d_details['d_id_issu_date']:''; ?>" >
                                    </div>
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control" name="d_id_exp_date" id="d_id_exp_date" value="<?php echo isset($d_details['d_id_exp_date'])?$d_details['d_id_exp_date']:''; ?>" >
                                    </div>
                                </div>
                                </div>
								
									</div>
									<div class="row">
                                <div class="col-md-6">
									<div class="col-md-12 ">
										 <h3 class="m-0 pull-left">Address Proof </h3>
									</div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Issue date </label>
                                        <input type="date" class="form-control" name="d_add_issu_date" id="d_add_issu_date" value="<?php echo isset($d_details['d_add_issu_date'])?$d_details['d_add_issu_date']:''; ?>" >
                                    </div>
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control" name="d_add_exp_date" id="d_add_exp_date" value="<?php echo isset($d_details['d_add_exp_date'])?$d_details['d_add_exp_date']:''; ?>">
                                    </div>
                                </div>
                                </div>  
								<div class="col-md-6">
									<div class="col-md-12 ">
										 <h3 class="m-0 pull-left">Criminal Record</h3>
									</div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Issue date </label>
                                        <input type="date" class="form-control" name="d_crim_issu_date" id="d_crim_issu_date" value="<?php echo isset($d_details['d_crim_issu_date'])?$d_details['d_crim_issu_date']:''; ?>">
                                    </div>
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control" name="d_crim_exp_date" id="d_crim_exp_date" value="<?php echo isset($d_details['d_crim_exp_date'])?$d_details['d_crim_exp_date']:''; ?>">
                                    </div>
                                </div>
                                </div>
								</div>	
									
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Size category</label>
                                        <select class="form-control" name="s_category" id="s_category" >
											<option value="">Select </option>
											<option value="Small" <?php if($d_details['s_category']=='Small'){ echo "selected";} ?>>Small</option>
											<option value="Medium" <?php if($d_details['s_category']=='Medium'){ echo "selected";} ?>>Medium</option>
											<option value="Large" <?php if($d_details['s_category']=='Large'){ echo "selected";} ?>>Large</option>
											<option value="Ex-large" <?php if($d_details['s_category']=='Ex-large'){ echo "selected";} ?>>Ex-large</option>
										</select>
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Model Type   </label>
                                        <select class="form-control" name="m_type" id="m_type">
											<option value="">Select </option>
											<option value="open" <?php if($d_details['m_type']=='open'){ echo "selected";} ?> >open</option>
											<option value="close" <?php if($d_details['m_type']=='close'){ echo "selected";} ?>>close</option>
											<option value="contener" <?php if($d_details['m_type']=='contener'){ echo "selected";} ?>>contener</option>
											<option value="Treller" <?php if($d_details['m_type']=='Treller'){ echo "selected"; } ?>>Treller</option>
										</select>
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
											<label class="control-label">Material icon</label>
											<input type="file" class="form-control" name="material_icon" id="material_icon" >
										</div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Material name</label>
                                        <input type="text" class="form-control" name="material_name" id="material_name"  value="<?php echo isset($d_details['material_name'])?$d_details['material_name']:''; ?>">
										</div>
                                </div>
<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Image</label>
                                        <input type="file" class="form-control "  name="image" id="image">
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Driving License </label>
                                        <input type="file" class="form-control" name="driving_lic" id="driving_lic">
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Batch  </label>
                                        <input type="file" class="form-control"  name="batch_img" id="batch_img">
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Training  </label>
                                        <input type="file" class="form-control "  name="training_img" id="training_img">
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Driver ID Proof  </label>
                                        <input type="file" class="form-control" name="driving_id_proof" id="driving_id_proof">
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Address Proof</label>
                                        <input type="file" class="form-control "  name="add_proof" id="add_proof">
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Criminal Record    </label>
                                        <input type="file" class="form-control " name="criminal_record" id="criminal_record">
                                    </div>
                                </div>								
							
								
                            <br>
                            <ul class="list-inline text-center">
                                <li><button type="submit"  class="btn btn-primary next-step">Save & Continue</button></li>
                            </ul>
                        </form>
						</div>
						 </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- /.content -->
    <div class="p-5"></div>
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">
$(document).ready(function() {
    $('#add_driver').bootstrapValidator({
        
        fields: {
            name: {
                validators: {
					notEmpty: {
						message: 'Name is required'
					}
				}
            },
			driving_lic_no: {
                validators: {
					notEmpty: {
						message: 'Driving license number is required'
					}
					
				}
            },
           address: {
					 validators: {
						 notEmpty: {
						message: 'Address is required'
					}
					}
			}, vehicle_type: {
					 validators: {
						 notEmpty: {
						message: 'Vehicle type is required'
					}
					}
			}, salary: {
					 validators: {
						 notEmpty: {
						message: 'Salary is required'
					}
					}
			},
           mobile_num: {
					 validators: {
						 notEmpty: {
						message: 'Mobile Number is required'
					}
					}
			}, rto_permission: {
					 validators: {
						 notEmpty: {
						message: 'Rto permission is required'
					}
					}
			}, rto_per_exp_date: {
					 validators: {
						 notEmpty: {
						message: 'Expiry Date is required'
					}
					}
			},experience: {
					 validators: {
						 notEmpty: {
						message: 'Experience is required'
					}
					}
			},d_lic_issu_date: {
					 validators: {
						 notEmpty: {
						message: 'Issue date is required'
					}
					}
			},d_lic_exp_date: {
					 validators: {
						 notEmpty: {
						message: 'Expiry Date is required'
					}
					}
			},d_bat_issu_date: {
					 validators: {
						 notEmpty: {
						message: 'Issue date  is required'
					}
					}
			},d_bat_exp_date: {
					 validators: {
						 notEmpty: {
						message: 'Expiry Date  is required'
					}
					}
			},d_trai_issu_date: {
					 validators: {
						 notEmpty: {
						message: 'Issue date  is required'
					}
					}
			},d_trai_exp_date: {
					 validators: {
						 notEmpty: {
						message: 'Expiry Date  is required'
					}
					}
			},d_id_issu_date: {
					 validators: {
						 notEmpty: {
						message: 'Issue date  is required'
					}
					}
			},d_id_exp_date: {
					 validators: {
						 notEmpty: {
						message: 'Expiry Date  is required'
					}
					}
			},d_add_issu_date: {
					 validators: {
						 notEmpty: {
						message: 'Issue date  is required'
					}
					}
			},d_add_exp_date: {
					 validators: {
						 notEmpty: {
						message: 'Expiry Date  is required'
					}
					}
			},d_crim_issu_date: {
					 validators: {
						 notEmpty: {
						message: 'Issue date  is required'
					}
					}
			},d_crim_exp_date: {
					 validators: {
						 notEmpty: {
						message: 'Expiry Date  is required'
					}
					}
			},s_category: {
					 validators: {
						 notEmpty: {
						message: 'Size category  is required'
					}
					}
			},m_type: {
					 validators: {
						 notEmpty: {
						message: 'Model Type  is required'
					}
					}
			},material_name: {
					 validators: {
						 notEmpty: {
						message: 'Material name  is required'
					}
					}
			},material_icon: {
					 validators: {
						regexp: {
						regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
						message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
						}
					}
				},image: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
					}
				}
            },
			driving_lic: {
                 validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
					}
				}
            },batch_img: {
                 validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
					}
				}
            },training_img: {
                 validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
					}
				}
            },driving_id_proof: {
                 validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
					}
				}
            },add_proof: {
                 validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
					}
				}
            },criminal_record: {
                 validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
					}
				}
            }
            }
        })
     
});

</script>
