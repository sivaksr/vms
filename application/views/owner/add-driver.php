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
                        <h3 class="mt-0 mb-0">Add Driver</h3>
                        
                    </div>
                    <div class="col-md-9">
                        <div class="stepper">
                            <ul class="nav nav-tabs">
                                <li role="presentation" class="active">
                                    <a class="persistant-disabled" href="<?php echo base_url('driver/add'); ?>" title="Step 1">
                                        <span class="round-tab">1</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="javascript:void(0);" title="Step 2">
                                        <span class="round-tab">2</span>
                                    </a>
                                </li>                                
                            </ul>
                        </div>
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
                        <form id="add_driver" name="add_driver" role="form" action="<?php echo base_url('driver/addpost'); ?>" method="post" enctype="multipart/form-data">
                            <div class="">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input type=" text" class="form-control" name="name" id="name" placeholder="Enter Name">
                                    </div>
                                </div>
								<div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Driving license number</label>
                                        <input type=" text" class="form-control" name="driving_lic_no" id="driving_lic_no" placeholder="Enter Driving license number">
                                    </div>
                                </div>
								<div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Vehicle type</label>
                                        <input type=" text" class="form-control" name="vehicle_type" id="vehicle_type" placeholder="Enter Vehicle type">
                                    </div>
                                </div> 
								<div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Salary </label>
                                        <input type=" text" class="form-control" name="salary" id="salary" placeholder="Enter Salary">
                                    </div>
                                </div> 
								<div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Address</label>
                                        <input type=" text" class="form-control" id="address" name="address" placeholder="Enter Address">
                                    </div>
                                </div>
                               <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="mobile_num" id="mobile_num"/>
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
										<input type="text" class="form-control" name="rto_permission" id="rto_permission"/>
                                        
                                    </div>
                                </div> 
								<div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control " name="rto_per_exp_date" id="rto_per_exp_date"/>
                                    </div>
                                </div>
								<div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Experience</label>
                                        <input type=" text" class="form-control " name="experience" id="experience" placeholder="Enter Experience">
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
                                        <input type="date" class="form-control " name="d_lic_issu_date" id="d_lic_issu_date" >
                                    </div>
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control" name="d_lic_exp_date" id="d_lic_exp_date" >
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
                                        <input type="date" class="form-control" name="d_bat_issu_date" id="d_bat_issu_date" >
                                    </div>
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control" name="d_bat_exp_date" id="d_bat_exp_date" >
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
                                        <input type="date" class="form-control" name="d_trai_issu_date" id="d_trai_issu_date" >
                                    </div>
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control" name="d_trai_exp_date" id="d_trai_exp_date" >
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
                                        <input type="date" class="form-control" name="d_id_issu_date" id="d_id_issu_date" >
                                    </div>
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control" name="d_id_exp_date" id="d_id_exp_date" >
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
                                        <input type="date" class="form-control" name="d_add_issu_date" id="d_add_issu_date" >
                                    </div>
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control" name="d_add_exp_date" id="d_add_exp_date" >
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
                                        <input type="date" class="form-control" name="d_crim_issu_date" id="d_crim_issu_date" >
                                    </div>
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control" name="d_crim_exp_date" id="d_crim_exp_date" >
                                    </div>
                                </div>
                                </div>
								</div>	
									
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Size category</label>
                                        <select class="form-control" name="s_category" id="s_category">
											<option value="">Select </option>
											<option value="Small">Small</option>
											<option value="Medium">Medium</option>
											<option value="Large">Large</option>
											<option value="Ex-large">Ex-large</option>
										</select>
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Model Type   </label>
                                        <select class="form-control" name="m_type" id="m_type">
											<option value="">Select </option>
											<option value="open">open</option>
											<option value="close">close</option>
											<option value="contener">contener</option>
											<option value="Treller">Treller</option>
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
                                        <input type="text" class="form-control" name="material_name" id="material_name" >
										</div>
                                </div>			
							</div>
								
                            <br>
                            <ul class="list-inline text-center">
                                <li><button  class="btn btn-primary next-step">Save & Continue</button></li>
                            </ul>
                        </form>
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
						 notEmpty: {
						message: 'Material icon  is required'
						},regexp: {
						regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
						message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
						}
					}
				}
            }
        })
     
});

</script>
