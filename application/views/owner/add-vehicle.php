<style>
 hr{
   margin-top:0px
   }
   fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

    legend.scheduler-border {
        font-size: 1.2em !important;
        font-weight: bold !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
    }
</style>
<div class="content-wrapper">
	<section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="m-0 pull-left">Add Vehicle </h3>
                <span class="pull-right"><a href="<?php echo base_url('vehicle/index'); ?>" class="btn btn-primary btn-sm">Vehicles List</a></span>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
         <form id="addvehicle" name="addvehicle" role="form" action="<?php echo base_url('vehicle/addpost'); ?>" method="post" enctype="multipart/form-data">
		
            <div class="row">

				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Basic Information</legend>
						 <div class="">
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Registration No</label>
								  <input type=" text" class="form-control " name="r_no" placeholder="Enter Registration No">
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Owner Name</label>
								  <input type=" text" class="form-control " name="o_name" placeholder="Enter Owner Name">
							   </div>
							   <!-- /.input group -->
							</div>
					
						<div class="col-md-3">
							 <div class="form-group">
								<label>Mobile Number</label>

								<div class="input-group date">
								  <div class="input-group-addon">
									<i class="fa fa-mobile"></i>
								  </div>
								  <input type="text" name="mobile" class="form-control pull-right" value="">
								</div>
								<!-- /.input group -->
							  </div>
							 
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label>Email id</label>
								  <div class="">
									 <input type="type" class="form-control" name="email" placeholder="Enter Email id"/>
								  </div>
							   </div>
							</div>
							
						 </div>
						 <div class="row ">
							<div class="col-md-12 ">
							<div class="col-md-4 ">
							   <div class="form-group">
								  <label class="control-label">Address1</label>
								  <input type=" text" class="form-control " name="add_one" placeholder="Enter Address">
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">Address2</label>
								  <input type=" text" class="form-control " name="add_two" placeholder="Enter Address">
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">City</label>
								  <input type=" text" class="form-control " name="city" placeholder="Enter City">
							   </div>
							   <!-- /.input group -->
							</div>	
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">District</label>
								  <input type=" text" class="form-control " name="dist" placeholder="Enter District">
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">State</label>
								<select class="form-control" name="state">
									<option value="">Select State</option>
									<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
									<option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
									<option value="Daman and Diu">Daman and Diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Lakshadweep">Lakshadweep</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Orissa">Orissa</option>
									<option value="Pondicherry">Pondicherry</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttaranchal">Uttaranchal</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="West Bengal">West Bengal</option>
								</select>
							   </div>
							   <!-- /.input group -->
							</div>
								<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">Zipcode</label>
								  <input type=" text" class="form-control " name="zipcode" placeholder="Enter Zipcode">
							   </div>
							   <!-- /.input group -->
							</div>
							</div>
							</div>
						 <hr>
				  
				   </fieldset>
				</div>
				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Vehicle Details </legend>
						 <div class="">
						 <div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Registration No</label>
								  <input type=" text" class="form-control " name="v_r_no" placeholder="Enter Registration No">
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Manufacturer Name</label>
								  <input type=" text" class="form-control " name="v_manu_name" placeholder="Enter Manufacturer Name">
							   </div>
							   <!-- /.input group -->
							</div>
							
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Model  Name and number </label>
								  <input type=" text" class="form-control " name="v_m_name_num" placeholder="Enter Model  Name and number ">
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">No of Wheel</label>
								  <input type=" text" class="form-control " name="no_of_wheel" placeholder="Enter No of Wheel ">
							   </div>
							</div>	
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">No of Axel</label>
								  <input type=" text" class="form-control " name="no_of_axel" placeholder="Enter No of Axel ">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Fuel Capacity</label>
								  <input type=" text" class="form-control " name="fuel_cap" placeholder="Enter Fuel Capacity ">
							   </div>
							</div>	
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Chassis No</label>
								  <input type=" text" class="form-control " name="chassis_no" placeholder="Enter Chassis No ">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Engine No</label>
								  <input type=" text" class="form-control " name="engine_no" placeholder="Enter Engine No ">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Body Types</label>
								  <input type=" text" class="form-control " name="body_type" placeholder="Enter Body Types ">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Manufacturing Year</label>
								  <input type=" text" class="form-control " name="manu_year" placeholder="Enter Manufacturing Year ">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Registration Date </label>
								  <input type=" text" class="form-control datepicker" name="registration_date" placeholder="Enter Registration Date MM/DD/YYYY">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Sitting Capacity </label>
								  <input type=" text" class="form-control " name="sitting_cap" placeholder="Enter Sitting Capacity  ">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Already run in Km </label>
								  <input type=" text" class="form-control " name="already_run_in_km" placeholder="Enter Already run in Km  ">
							   </div>
							</div>
						 </div>
				   </fieldset>
				</div>
			
				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Insurance</legend>
						 <div class="">
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Insurance company Name  </label>
								  <input type=" text" class="form-control " name="insurance_c_n" placeholder="Enter Insurance company Name">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Policy Number</label>
								  <input type=" text" class="form-control " name="insurance_p_n" placeholder="Enter Policy Number">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Date of Issue</label>
								  <input type="text" class="form-control datepicker" autocomplete="off" name="insurance_date_issue"  placeholder="Enter Date of Issue MM/DD/YYYY" >
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Date of Expiry</label>
								  <input type=" text" class="form-control datepicker" name="insurance_date_exp" placeholder="Enter Date of Issue MM/DD/YYYY">
							   </div>
							</div>
							
						 </div>
				   </fieldset>
				</div>
				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">RTO Document </legend>
						 <div class="">
							<fieldset class="scheduler-border">
								<legend class="scheduler-border">Road Tax  </legend>
								 <div class="">
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Issue date </label>
										  <input type=" text" class="form-control datepicker" name="rto_issue_date" placeholder="Enter Issue date">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Due date</label>
										  <input type=" text" class="form-control datepicker" name="rto_due_date" placeholder="Enter Due date">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Expire Date</label>
										  <input type=" text" class="form-control datepicker" name="rto_exp_date" placeholder="Enter Expire Date">
									   </div>
									</div>
								 </div>
							</fieldset>
							<fieldset class="scheduler-border">
								<legend class="scheduler-border">Fitness  </legend>
								 <div class="">
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Issue date </label>
										  <input type=" text" class="form-control datepicker" name="fitness_isse_date" placeholder="Enter Issue date">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Due date</label>
										  <input type=" text" class="form-control datepicker" name="fitness_due_date" placeholder="Enter Due date">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Expire Date</label>
										  <input type=" text" class="form-control datepicker" name="fitness_exp_date" placeholder="Enter Expire Date">
									   </div>
									</div>
								 </div>
							</fieldset>
							<fieldset class="scheduler-border">
								<legend class="scheduler-border">Pollution  </legend>
								 <div class="">
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Issue date </label>
										  <input type=" text" class="form-control datepicker" name="pollution_isse_date" placeholder="Enter Issue date">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Due date</label>
										  <input type=" text" class="form-control datepicker" name="pollution_due_date" placeholder="Enter Due date">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Expire Date</label>
										  <input type=" text" class="form-control datepicker" name="pollution_exp_date" placeholder="Enter Expire Date">
									   </div>
									</div>
								 </div>
							</fieldset>
							<fieldset class="scheduler-border">
								<legend class="scheduler-border">Road permit  </legend>
								 <div class="">
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">State name </label>
										  <input type=" text" class="form-control " name="road_state_name" placeholder="Enter State name">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Validity </label>
										  <input type=" text" class="form-control " name="road_validaity" placeholder="Enter Validity">
									   </div>
									</div>
								 </div>
							</fieldset>
						 </div>
				   </fieldset>
				</div>
				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">INFORMATION </legend>
						 <div class="">
						 <div class="row">
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">Load Types</label>
									  <select class="form-control select2" name="information_load_type[]" multiple="multiple" data-placeholder="Enter Load Types" style="width: 100%;">
										<option value="">Select</option>
										<?php if(isset($load_types) && count($load_types)>0){ ?>
											<?php foreach($load_types as $li){?>
											<option value = "<?php echo $li['l_t_id'];?>" ><?php echo $li['load']; ?></option>
											<?php } ?>
										<?php } ?>
									 </select>
							   </div>
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">Size Catagory </label>
								 <div>
								 <input type="hidden" name="size_catagory" id="size_catagory" value="">

									<ul class="list-inline select-catag">
										<li class="list-inline-item text-center">
											<a href="javascript:void(0);" onclick="size_cat('Small',1)" class="s_c1 s_c" ><i class="fa fa-truck fa-2x"></i><br>
											<span>Small</span></a>
										</li>
										<li class="list-inline-item text-center">
											<a href="javascript:void(0);" onclick="size_cat('Medium',2)" class="s_c2 s_c" ><i class="fa fa-truck fa-3x"></i><br>
											<span>Medium</span></a>
										</li>
										<li class="list-inline-item text-center">
										<a href="javascript:void(0);" onclick="size_cat('Large',3)" class="s_c3 s_c" >	<i class="fa fa-truck fa-4x"></i><br>
											<span>Large</span></a>
										</li>
										<li class="list-inline-item text-center">
											<a href="javascript:void(0);" onclick="size_cat('Extra Large',4);" class="s_c4 s_c"><i class="fa fa-truck fa-5x"></i><br>
											<span>Extra Large</span>
										</li>
									</ul>
									</div>
								 </div>
							   </div>
							<div class="col-md-4">
							 <div class="form-group">
								  <label class="control-label">Vehicle Type</label>
								 <div>
									<ul class="list-inline select-catag">
									<input type="hidden" name="vehicle_type" id="vehicle_type" value="">
										<li class="list-inline-item text-center">
											<a href="javascript:void(0);" onclick="vehicle_type('Open',1)" class="v_t1 v_t" ><i class="fa fa-truck fa-3x"></i><br>
											<span>Open</span></a>
										</li>
										<li class="list-inline-item text-center">
											<a href="javascript:void(0);" onclick="vehicle_type('Container',2)" class="v_t2 v_t" ><i class="fa fa-truck fa-3x"></i><br>
											<span>Container</span></a>
										</li>
										<li class="list-inline-item text-center">
										<a href="javascript:void(0);" onclick="vehicle_type('Troller',3)" class="v_t3 v_t" >	<i class="fa fa-truck fa-3x"></i><br>
											<span>Troller</span></a>
										</li>
										<li class="list-inline-item text-center">
											<a href="javascript:void(0);" onclick="vehicle_type('Some Type',4)" class="v_t4 v_t" ><i class="fa fa-truck fa-3x"></i><br>
											<span>Some Type</span></a>
										</li>
									</ul>
									</div>
								 </div>
							</div>
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">Material </label>
								  	<input type="hidden" name="material" id="material" value="">
									<div>
										<ul class="list-inline">
											<li class="list-inline-item text-center ">
												<a href="javascript:void(0);" onclick="mater('Some Text',1)" class="mat1 mat" ><i class="fa fa-archive fa-2x"></i><br>
												<span>Some Text</span></a>
											</li>
											<li class="list-inline-item text-center">
												<a href="javascript:void(0);" onclick="mater('Some Text',2)" class="mat2 mat" ><i class="fa fa-car fa-2x"></i><br>
												<span>Some Text</span></a>
											</li>
											<li class="list-inline-item text-center">
												<a href="javascript:void(0);" onclick="mater('Some Text',3)" class="mat3 mat" ><i class="fa fa-cog fa-2x"></i><br>
												<span>Some Text</span></a>
											</li>
											<li class="list-inline-item text-center">
												<a href="javascript:void(0);" onclick="mater('Some Text',4)" class="mat4 mat" ><i class="fa fa-cubes fa-2x"></i><br>
												<span>Some Text</span></a>
											</li>
										</ul>
									</div>
							   </div>
							</div>
							<div class="col-md-2">
							   <div class="form-group">
								  <label class="control-label">Capacity </label>
									 <select class="form-control" name="capacity">
										<option value="">Select</option>
										<option value="1">Capacity 1</option>
										<option value="2">Capacity 2</option>
										<option value="3">Capacity 3</option>
									 </select>
							   </div>
							</div>
							<div class="col-md-2">
							   <div class="form-group">
								  <label class="control-label">Height  </label>
								  <input type=" text" class="form-control " name="high" placeholder="Enter Height">
							   </div>
							</div>
							<div class="col-md-2">
							   <div class="form-group">
								  <label class="control-label">Length </label>
								  <input type=" text" class="form-control " name="length" placeholder="Enter Length">
							   </div>
							</div>
							<div class="col-md-2">
							   <div class="form-group">
								  <label class="control-label">Width </label>
								  <input type=" text" class="form-control " name="width" placeholder="Enter Length">
							   </div>
							</div>
							<div class="col-md-4">
							  <div class="form-group">
								<label>Amenities</label>
								  <select class="form-control select2" name="Amenities[]" multiple="multiple" data-placeholder=" Enter Amenities" style="width: 100%;">
									<option value="">select</option>
									<?php if(isset($amenities) && count($amenities)>0){ ?>
									<?php foreach($amenities as $state){ ?>
									<option value = "<?php echo $state['a_id'];?>" ><?php echo $state['a_name']; ?></option>
									<?php } ?>
									<?php } ?>
								</select>
							  </div>
							</div>
							<div class="col-md-6">
								<div > 
									<table class="table table-bordered table-hover" id="tab_logic">
										<thead>
											<tr >
												<th class="">
													Vehicle Icons
												</th>
												
											</tr>
										</thead>
										<tbody>
											<tr id='addr0'>
												<td class="form-group">
													<input type="file"  name="vehicle_images[]" class="form-control">
												</td>
												
											</tr>
											<tr id='addr1'></tr>
										</tbody>
									</table>	
									<a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
								</div>
                                </div>
							
							
						 </div>
				   </fieldset>
				</div>
            </div>
			
            <br>
            <ul class="list-inline text-center">
            <li><button type="submit" class="btn btn-primary next-step">Save & Continue</button></li>
            </ul>
            </form>
            </div>
        </div>
	</section>
</div>
<script>
$(document).ready(function() {
	$('.datepicker').datepicker({
      autoclose: true
    });
    $('#addvehicle').bootstrapValidator({
        
        fields: {
            r_no: {
                validators: {
					notEmpty: {
						message: 'Registration No is required'
					}
				}
            },
			o_name: {
                validators: {
					notEmpty: {
						message: 'Owner Name is required'
					}
				}
            },
			mobile: {
                 validators: {
					notEmpty: {
						message: 'Mobile Number is required'
					},
					regexp: {
					regexp:  /^[0-9]{10}$/,
					message:'Mobile Number must be 10 digits'
					}
				
				}
            },
			email: {
                 validators: {
					notEmpty: {
						message: 'Email is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example johndoe@domain.com.'
					}
				}
            },
			add_one: {
                validators: {
					notEmpty: {
						message: 'Address1 is required'
					}
				}
            },
			add_two: {
                validators: {
					notEmpty: {
						message: 'Address2 is required'
					}
				}
            },
			city: {
                validators: {
					notEmpty: {
						message: 'City is required'
					}
				}
            },
			dist: {
                validators: {
					notEmpty: {
						message: 'District is required'
					}
				}
            },
			state: {
                validators: {
					notEmpty: {
						message: 'State is required'
					}
				}
            },
			zipcode: {
                validators: {
					notEmpty: {
						message: 'Zipcode is required'
					}
				}
            },
			v_r_no: {
                validators: {
					notEmpty: {
						message: 'Registration No is required'
					}
				}
            },
			v_manu_name: {
                validators: {
					notEmpty: {
						message: 'Manufacturer Name is required'
					}
				}
            },
			v_m_name_num: {
                validators: {
					notEmpty: {
						message: 'Model Name and number is required'
					}
				}
            },
			no_of_wheel: {
                validators: {
					notEmpty: {
						message: 'No of Wheel is required'
					},regexp: {
   					regexp:  /^[0-9]*$/,
   					message:'No of Wheel  must be digits'
   					}
				}
            },
			no_of_axel: {
                validators: {
					notEmpty: {
						message: 'No of Axel is required'
					},
					regexp: {
   					regexp:  /^[0-9]*$/,
   					message:'No of Axel  must be digits'
   					}
				}
            },
			fuel_cap: {
                validators: {
					notEmpty: {
						message: 'Fuel Capacity is required'
					}
				}
            },
			chassis_no: {
                validators: {
					notEmpty: {
						message: 'Chassis No is required'
					}
				}
            },
			engine_no: {
                validators: {
					notEmpty: {
						message: 'Engine No is required'
					}
				}
            },
			body_type: {
                validators: {
					notEmpty: {
						message: 'Body Types is required'
					}
				}
            },
			manu_year: {
                validators: {
					notEmpty: {
						message: 'Manufacturing Year is required'
					}
				}
            },
			registration_date: {
                validators: {
					notEmpty: {
						message: 'Registration Date is required'
					},
					date: {
                        format: 'MM/DD/YYYY',
                        message: 'The value is not a valid date'
                    }
				}
            },
			sitting_cap: {
                validators: {
					notEmpty: {
						message: 'Sitting Capacity is required'
					}
				}
            },
            already_run_in_km: {
                validators: {
					notEmpty: {
						message: 'Already run in Km is required'
					}
				}
            },
			insurance_c_n: {
                validators: {
					notEmpty: {
						message: 'Insurance company Name is required'
					}
				}
            },
			insurance_p_n: {
                validators: {
					notEmpty: {
						message: 'Policy Number is required'
					}
				}
            },
			insurance_date_issue: {
                validators: {
                   notEmpty: {
						message: 'Date of Issue is required'
						},
                    date: {
                        format: 'MM/DD/YYYY',
                        message: 'The value is not a valid date'
                    }
                }
            },
			insurance_date_exp: {
                validators: {
                   notEmpty: {
						message: 'Date of Expiry is required'
						},
                    date: {
                        format: 'MM/DD/YYYY',
                        message: 'The value is not a valid date'
                    }
                }
            },
			rto_issue_date: {
                validators: {
					notEmpty: {
						message: 'Issue date is required'
					},
					date: {
                        format: 'MM/DD/YYYY',
                        message: 'The value is not a valid date'
                    }
				}
            },
			rto_due_date: {
                validators: {
					notEmpty: {
						message: 'Due date is required'
					},
					date: {
                        format: 'MM/DD/YYYY',
                        message: 'The value is not a valid date'
                    }
				}
            },
			rto_exp_date: {
                validators: {
					notEmpty: {
						message: 'Expire Date is required'
					},
					date: {
                        format: 'MM/DD/YYYY',
                        message: 'The value is not a valid date'
                    }
				}
            },
			fitness_isse_date: {
                validators: {
					notEmpty: {
						message: 'Issue date is required'
					},
					date: {
                        format: 'MM/DD/YYYY',
                        message: 'The value is not a valid date'
                    }
				}
            },
			fitness_due_date: {
                validators: {
					notEmpty: {
						message: 'Due date is required'
					},
					date: {
                        format: 'MM/DD/YYYY',
                        message: 'The value is not a valid date'
                    }
				}
            },
			fitness_exp_date: {
                validators: {
					notEmpty: {
						message: 'Expire Date is required'
					},
					date: {
                        format: 'MM/DD/YYYY',
                        message: 'The value is not a valid date'
                    }
				}
            },
			pollution_isse_date: {
                validators: {
					notEmpty: {
						message: 'Issue date is required'
					},
					date: {
                        format: 'MM/DD/YYYY',
                        message: 'The value is not a valid date'
                    }
				}
            },
			pollution_due_date: {
                validators: {
					notEmpty: {
						message: 'Due date is required'
					},
					date: {
                        format: 'MM/DD/YYYY',
                        message: 'The value is not a valid date'
                    }
				}
            },
			pollution_exp_date: {
                validators: {
					notEmpty: {
						message: 'Expire Date is required'
					},
					date: {
                        format: 'MM/DD/YYYY',
                        message: 'The value is not a valid date'
                    }
				}
            },
			road_state_name: {
                validators: {
					notEmpty: {
						message: 'State name is required'
					}
				}
            },
			road_validaity: {
                validators: {
					notEmpty: {
						message: 'Validity is required'
					}
				}
            },
			'information_load_type[]': {
                validators: {
					notEmpty: {
						message: 'Load Types is required'
					}
				}
            },
			size_catagory: {
                validators: {
					notEmpty: {
						message: 'Size Catagory is required'
					}
				}
            },
			vehicle_type: {
                validators: {
					notEmpty: {
						message: 'Vehicle Type is required'
					}
				}
            },
			material: {
                validators: {
					notEmpty: {
						message: 'Material is required'
					}
				}
            },
			capacity: {
                validators: {
					notEmpty: {
						message: 'Capacity is required'
					}
				}
            },
			high: {
                validators: {
					notEmpty: {
						message: 'Height is required'
					}
				}
            },
			length: {
                validators: {
					notEmpty: {
						message: 'Length is required'
					}
				}
            },
			width: {
                validators: {
					notEmpty: {
						message: 'Width is required'
					}
				}
            },
			'Amenities[]': {
                validators: {
					notEmpty: {
						message: 'Amenities is required'
					}
				}
            },
			'vehicle_images[]': {
                validators: {
					notEmpty: {
						message: 'Vehicle Icons is required'
					},
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            }
			
			
			
            }
        });
       
	    $('.datepicker').on('changeDate ', function(e) {
		$('#addvehicle').bootstrapValidator('revalidateField', 'registration_date');
		});$('.datepicker').on('changeDate ', function(e) {
		$('#addvehicle').bootstrapValidator('revalidateField', 'insurance_date_issue');
		});$('.datepicker').on('changeDate ', function(e) {
		$('#addvehicle').bootstrapValidator('revalidateField', 'insurance_date_exp');
		});$('.datepicker').on('changeDate ', function(e) {
		$('#addvehicle').bootstrapValidator('revalidateField', 'rto_issue_date');
		});$('.datepicker').on('changeDate ', function(e) {
		$('#addvehicle').bootstrapValidator('revalidateField', 'rto_due_date');
		});$('.datepicker').on('changeDate ', function(e) {
		$('#addvehicle').bootstrapValidator('revalidateField', 'rto_exp_date');
		});$('.datepicker').on('changeDate ', function(e) {
		$('#addvehicle').bootstrapValidator('revalidateField', 'fitness_isse_date');
		});$('.datepicker').on('changeDate ', function(e) {
		$('#addvehicle').bootstrapValidator('revalidateField', 'fitness_due_date');
		});$('.datepicker').on('changeDate ', function(e) {
		$('#addvehicle').bootstrapValidator('revalidateField', 'fitness_exp_date');
		});$('.datepicker').on('changeDate ', function(e) {
		$('#addvehicle').bootstrapValidator('revalidateField', 'pollution_isse_date');
		});$('.datepicker').on('changeDate ', function(e) {
		$('#addvehicle').bootstrapValidator('revalidateField', 'pollution_due_date');
		});$('.datepicker').on('changeDate ', function(e) {
		$('#addvehicle').bootstrapValidator('revalidateField', 'pollution_exp_date');
		});
		
});
function size_cat(id,c){
	$('#size_catagory').val(id);
	 $(".s_c").removeClass("active-cata");
	 $(".s_c"+c).addClass("active-cata");
}
function vehicle_type(id,c){
	$('#vehicle_type').val(id);
	 $(".v_t").removeClass("active-cata");
	 $(".v_t"+c).addClass("active-cata");
}function mater(id,c){
	$('#material').val(id);
	 $(".mat").removeClass("active-cata");
	 $(".mat"+c).addClass("active-cata");
}
$(document).ready(function() {
        var i = 1;
        $("#add_row").click(function() {
            $('#addr' + i).html("<td class='form-group'><input name='vehicle_images[]' type='file'  class='form-control input-md'  /> </td>");

            $('#tab_logic').append('<tr id="addr' + (i + 1) + '"></tr>');
            i++;
        });
        $("#delete_row").click(function() {
            if (i > 1) {
                $("#addr" + (i - 1)).html('');
                i--;
            }
        });

    });
  $(function () {
    
        $(".select2").select2();

  });
</script>


