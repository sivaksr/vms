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
                           <a class="persistant-disabled" href="<?php echo base_url('driver/add/'.base64_encode(1));?>" title="Step 1">
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
          
           <form id="driver"   action="<?php echo base_url('driver/addpost'); ?>" method="post" enctype="multipart/form-data">
		<?php $csrf = array(
										'name' => $this->security->get_csrf_token_name(),
										'hash' => $this->security->get_csrf_hash()
								); ?>
								<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
								<input type="hidden" name="driver_id" value="<?php echo isset($driver_id)?$driver_id:''; ?>" />
            <div class="row">

				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Basic Details</legend>
						 <div class="">
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">Name</label>
								  <input type=" text" class="form-control " name="name" placeholder="Enter Name" >
							   </div>
							   <!-- /.input group -->
							</div>
						
							<div class="col-md-4">
							 <div class="form-group">
								<label>Mobile Number</label>

								<div class="input-group date">
								  <div class="input-group-addon">
									<i class="fa fa-mobile"></i>
								  </div>
								  <input type="text" placeholder="Enter Mobile Number" name="mobile_number" class="form-control pull-right" >
								</div>
								<!-- /.input group -->
							  </div>
							 
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label>Email id</label>
								  <div class="">
									 <input type="email" class="form-control" name="email" placeholder="Enter Email id" >
								  </div>
							   </div>
							</div>
							
							<div class="col-md-3">
							   <div class="form-group">
								  <label>Password</label>
								  <div class="">
									 <input type="password" class="form-control" name="password" placeholder="Enter Password"/>
								  </div>
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label>Confirm Password</label>
								  <div class="">
									 <input type="password" class="form-control" name="org_password" placeholder="Enter Confirm Password"/>
								  </div>
							   </div>
							</div>
						
							<div class="col-md-3">
							 <div class="form-group">
								<label>Date of Birth</label>

								<div class="input-group date">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="text" name="dob" class="form-control pull-right" autocomplete="off" id="datepicker1" placeholder="MM/DD/YYYY" >
								</div>
								<!-- /.input group -->
							  </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label>Marital status  </label>
								  <div class="">
									 <select class="form-control" name="marital_status">
										<option value="">Select</option>
										<option value="Married" <?php if($driver_details['marital_status']=='Married'){ echo "selected"; } ?> >Married</option>
										<option value="Un Married" <?php if($driver_details['marital_status']=='Un Married'){ echo "selected"; } ?>>Un Married</option>
									 </select>
								  </div>
							   </div>
							</div>
						
							<div class="row ">
							<div class="col-md-12 ">
							<div class="col-md-4 ">
							   <div class="form-group">
								  <label class="control-label">Address1</label>
								  <input type=" text" class="form-control " name="address_one" placeholder="Enter Address" >
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">Address2</label>
								  <input type=" text" class="form-control " name="address_two" placeholder="Enter Address" >
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">City</label>
								  <input type=" text" class="form-control " name="city" placeholder="Enter City" >
							   </div>
							   <!-- /.input group -->
							</div>	
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">District</label>
								  <input type=" text" class="form-control " name="district" placeholder="Enter District" >
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">State</label>
								<select class="form-control" name="state" >
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
								  <input type=" text" class="form-control " name="zip_code" placeholder="Enter Zipcode" >
							   </div>
							   <!-- /.input group -->
							</div>
							</div>
							</div>
							
						 </div>
						 <hr>
				  
				   </fieldset>
				</div>
				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Identy Proof </legend>
						 <div class="">
							<div class="col-md-3">
							   <div class="form-group" >
								  <label class="control-label">ID Proof Name</label>
								  <select class="form-control" name="id_p_name">
									<option value="">Select</option>
									<option value="Voter Id" >Voter Id</option>
									<option value="Aadhar" >Aadhar</option>
									<option value="Passport" >Passport</option>
									<option value="Driving Licence" >Driving Licence</option>
								  </select>
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Number</label>
								  <input type=" text" class="form-control"  name="id_p_num" placeholder="Enter Number">
							   </div>
							   <!-- /.input group -->
							</div>
							
						 </div>
				   </fieldset>
				</div>
				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Address Proof </legend>
						 <div class="">
							<div class="col-md-6">
							   <div class="form-group">
								  <label class="control-label">Address Proof Name  </label>
								  <select class="form-control" name="add_p_name">
									<option value="">Select</option>
									<option value="Voter Id">Voter Id</option>
									<option value="Aadhar">Aadhar</option>
									<option value="Passport">Passport</option>
									<option value="Bank Passbook">Bank Passbook</option>
									<option value="Electricity bill" >Electricity bill</option>
								  </select>
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-6">
							   <div class="form-group">
								  <label class="control-label">Number</label>
								  <input type=" text" class="form-control " name="add_p_num" placeholder="Enter Number" >
							   </div>
							   <!-- /.input group -->
							</div>
						 </div>
				   </fieldset>
				</div>
				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Driving Details </legend>
						 <div class="">
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Driving Licence  No  </label>
								  <input type=" text" class="form-control " name="d_lic_num" placeholder="Enter Driving Licence  No" >
							   </div>
							</div>
							<div class="col-md-12">
							   <table class="table table-bordered">
								
									<tbody>
									  <tr>
										<th>Vechicle Class</th>
										<th>LMV</th>
										<th>PSVBUS</th>
										<th>MCWG</th>
										<th>TRANS</th>
										<th>Batch Number</th>
									
									  </tr> 
									  <tr>
										<th>Date of Issue</th>
										<td class="form-group"><input type="text" name="d_lmv" class="form-control datepicker" id="datepicker2" placeholder="MM/DD/YYYY" autocomplete="off"> </td>
										<td class="form-group"><input type="text" name="d_psvbus" class="form-control datepicker" id="datepicker3" placeholder="MM/DD/YYYY" autocomplete="off"> </td>
										<td class="form-group"><input type="text" name="d_mcwg"  class="form-control datepicker" id="datepicker4" placeholder="MM/DD/YYYY" autocomplete="off"> </td>
										<td class="form-group"><input type="text" name="d_trans" class="form-control datepicker" id="datepicker5" placeholder="MM/DD/YYYY" autocomplete="off"> </td>
										<td class="form-group"><input type="text" name="d_b_num" class="form-control datepicker" id="datepicker6" placeholder="MM/DD/YYYY" autocomplete="off"> </td>
									  </tr>
									  <tr>
										<th>Expiry Date</th>
										<td class="form-group"><input type="text" name="e_d_lmv" class="form-control datepicker" id="datepicker7" placeholder="MM/DD/YYYY" autocomplete="off"> </td>
										<td class="form-group"><input type="text" name="e_d_psvbus" class="form-control datepicker" id="datepicker8" placeholder="MM/DD/YYYY" autocomplete="off"> </td>
										<td class="form-group"><input type="text" name="e_d_mcwg" class="form-control datepicker" id="datepicker9" placeholder="MM/DD/YYYY" autocomplete="off"> </td>
										<td class="form-group"><input type="text" name="e_d_trans" class="form-control datepicker" id="datepicker10" placeholder="MM/DD/YYYY" autocomplete="off"> </td>
										<td class="form-group"><input type="text" name="e_d_b_num" class="form-control datepicker" id="datepicker11" placeholder="MM/DD/YYYY" autocomplete="off" > </td>
									  </tr>	
									  <tr>
									
									
									</tbody>
								  </table>
							</div>
							
						 </div>
				   </fieldset>
				</div>
				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Qualifiction </legend>
							<fieldset class="scheduler-border">
								<legend class="scheduler-border">Eductional qualifiction  </legend>
								 <div class="">
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Name of Qualifiction   </label>
										  <input type=" text" class="form-control "  name="name_of_qualification" placeholder="Enter Qualifiction">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Institute </label>
										  <input type=" text" class="form-control "  name="institute" placeholder="Enter Institute ">
									   </div>
									</div>
									<?php $years = range(date('Y'), 1900); ?>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Year of passing </label>
											<select class="form-control" name="y_of_pass">
												<option value="">Select</option>
												<?Php foreach($years as $li){ ?>
													<option value="<?php echo $li; ?>"><?php echo $li; ?></option>
												<?php } ?>
												
											</select>
									   </div>
									</div>
									
								 </div>
						   </fieldset>
						   	<fieldset class="scheduler-border">
								<legend class="scheduler-border">Driving Training Institue Name  </legend>
								 <div class="">
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Certificate No   </label>
										  <input type=" text" class="form-control "  name="certificate_num" placeholder="Enter Certificate No">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Certificate issue Date </label>
										  <input type=" text" class="form-control "  name="cer_date" placeholder="Enter Certificate issue Date ">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Time period </label>
										<select class="form-control" name="time">
												<option value="">Select</option>
												<option value="1st Month" >1st Month</option>
												<option value="2nd Month">2nd Month</option>
												<option value="3nd Month">3rd Month</option>
												<option value="4nd Month">4th Month</option>
												<option value="5nd Month">5th Month</option>
												<option value="6nd Month">6th Month</option>
												<option value="7nd Month">7th Month</option>
												<option value="8nd Month">8th Month</option>
												<option value="9nd Month">9th Month</option>
												<option value="10nd Month">10th Month</option>
												<option value="11nd Month">11th Month</option>
												<option value="12nd Month">12th Month</option>
												
											</select>
									   </div>
									</div>
									
								 </div>
						   </fieldset>

				   </fieldset>
				</div>
				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Driving Experience  </legend>
						 <div class="">
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Years </label> <span style="font-size:20px;font-weight:600;color:red" class="pull-right" id="demo"></span>
								 <div>
									<div class="slidecontainer">
									  <input type="range" name="years" min="0" max="50"  class="slider" id="myRange">
									
									</div>
								 </div>
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Month </label> <span style="font-size:20px;font-weight:600;color:red" class="pull-right" id="demo1"></span>
								 <div>
									<div class="slidecontainer">
									  <input type="range" name="month" min="0" max="12"   class="slider" id="myRange1">
									
									</div>
								 </div>
							   </div>
							</div>
					
					<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Size Catagory </label>
								 <div>
								 <input type="hidden" name="size_catagory" id="size_catagory"  value="Small">
									<ul class="list-inline select-catag">
										<li class="list-inline-item text-center">
											<a  class=" active-cata catagory"  data-name="Small" id="Small"><i class="fa fa-truck fa-2x"></i><br>
											<span>Small</span></a>
										</li>
										<li class="list-inline-item text-center">
											<a  class="catagory"  data-name="Medium" id="Medium"><i class="fa fa-truck fa-3x"></i><br>
											<span>Medium</span></a>
										</li>
										<li class="list-inline-item text-center">
										<a class="catagory"  data-name="Large" id="Large">	<i class="fa fa-truck fa-4x"></i><br>
											<span>Large</span></a>
										</li>
										
										<li class="list-inline-item text-center">
											<a class="catagory" data-name="Extralarge" id="Extralarge"><i class="fa fa-truck fa-5x"></i><br>
											<span>Extralarge</span>
										</li>
									</ul>
									</div>
								 </div>
							   </div>
							   <div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Vehicle Type</label>
								 <div>
								<input type="hidden" name="vehicle_type"  id="vehicle_type" value="Open">
									<ul class="list-inline select-catag">
										<li class="list-inline-item text-center">
											<a  class="active-cata vehicletype" data-name="Open" id="Open"><i class="fa fa-truck fa-3x"></i><br>
											<span>Open</span></a>
										</li>
										<li class="list-inline-item text-center">
											<a class="vehicletype" data-name="Container" id="Container"><i class="fa fa-truck fa-3x"></i><br>
											<span>Container</span></a>
										</li>
										<li class="list-inline-item text-center">
										<a class="vehicletype" data-name="Troller" id="Troller">	<i class="fa fa-truck fa-3x"></i><br>
											<span>Troller</span></a>
										</li>
										<li class="list-inline-item text-center">
											<a class="vehicletype" data-name="Sometype" id="Sometype"><i class="fa fa-truck fa-3x"></i><br>
											<span>Sometype</span></a>
										</li>
									</ul>
									</div>
								 </div>
							   </div>
							
							
						<div class="clearfix">&nbsp;</div>
							<div class="row">
							<div class="col-md-3">
							     <div class="form-group">
								  <label class="control-label">You have Any industrial Experience    </label>
								  <select class="form-control" name="ind_exp">
									<option value="">Select</option>
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								  </select>
							   </div>
							</div>
							</div>
							
						 </div>
				   </fieldset>
				</div>
            </div>
			
            <br>
            <ul class="list-inline text-center">
              <li><button type="submit" class="btn btn-primary next-step" >Submit</button></li>
                </ul>
            </form>
         </div>
      </div>
	  </section>
</div>

<script type="text/javascript">
$(document).ready(function() {
	$('#datepicker1').datepicker({
      autoclose: true
    });
	$('#datepicker2').datepicker({
      autoclose: true
    });
	$('#datepicker3').datepicker({
      autoclose: true
    });
	$('#datepicker4').datepicker({
      autoclose: true
    });
	$('#datepicker5').datepicker({
      autoclose: true
    });
	$('#datepicker6').datepicker({
      autoclose: true
    });
	$('#datepicker7').datepicker({
      autoclose: true
    });
	$('#datepicker8').datepicker({
      autoclose: true
    });
	$('#datepicker9').datepicker({
      autoclose: true
    });
	$('#datepicker10').datepicker({
      autoclose: true
    });
	$('#datepicker11').datepicker({
      autoclose: true
    });
    $('#driver').bootstrapValidator({
        
        fields: {
            name: {
                validators: {
					notEmpty: {
						message: 'Name is required'
					}
				}
            },
			mobile_number: {
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
			password: {
                validators: {
					notEmpty: {
						message: 'Password is required'
					},
					stringLength: {
                        min: 6,
                        message: 'Password  must be at least 6 characters'
                    },
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,
					message: 'Password wont allow <>[]'
					}
				}
            },
           
           org_password: {
					 validators: {
						 notEmpty: {
						message: 'Confirm Password is required'
					},
					identical: {
						field: 'password',
						message: 'password and Confirm Password do not match'
					}
					}
				},
			dob: {
                validators: {
					notEmpty: {
								message: 'Date of Birth is required'
						},
                    date: {
                        format: 'MM/DD/YYYY',
                        message: 'The value is not a valid date'
                    }
                }
            },
			marital_status: {
					 validators: {
						 notEmpty: {
						message: 'Marital status is required'
					}
					}
			},
           address_one: {
					 validators: {
						 notEmpty: {
						message: 'Address1 is required'
					}
					}
			}, address_two: {
					 validators: {
						 notEmpty: {
						message: 'Address2 is required'
					}
					}
			}, city: {
					 validators: {
						 notEmpty: {
						message: 'City is required'
					}
					}
			},district: {
					 validators: {
						 notEmpty: {
						message: 'District is required'
					}
					}
			},state: {
					 validators: {
						 notEmpty: {
						message: 'state is required'
					}
					}
			},zip_code:{
				validators: {
						 notEmpty: {
						message: 'Zipcode is required'
					}
					}
			},
			id_p_name: {
					 validators: {
						 notEmpty: {
						message: 'ID Proof Name is required'
					}
					}
			},id_p_num: {
					 validators: {
						 notEmpty: {
						message: 'ID Proof Number  is required'
					}
					}
			},add_p_name: {
					 validators: {
						 notEmpty: {
						message: 'Address Proof Name is required'
					}
					}
			},add_p_num: {
					 validators: {
						 notEmpty: {
						message: 'Address Proof Number  is required'
					}
					}
			},d_lic_num: {
					 validators: {
						 notEmpty: {
						message: 'Driving Licence No is required'
					}
					}
			},
			d_lmv: {
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
		d_psvbus: {
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
			d_mcwg: {
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
			d_trans: {
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
			d_b_num: {
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
			e_d_lmv: {
                validators: {
					notEmpty: {
								message: 'Expiry Date is required'
						},
                    date: {
                        format: 'MM/DD/YYYY',
                        message: 'The value is not a valid date'
                    }
                }
            },
			e_d_psvbus: {
                validators: {
					notEmpty: {
								message: 'Expiry Date is required'
						},
                    date: {
                        format: 'MM/DD/YYYY',
                        message: 'The value is not a valid date'
                    }
                }
            },
			e_d_mcwg: {
                validators: {
					notEmpty: {
								message: 'Expiry Date is required'
						},
                    date: {
                        format: 'MM/DD/YYYY',
                        message: 'The value is not a valid date'
                    }
                }
            },
			e_d_trans: {
                validators: {
					notEmpty: {
								message: 'Expiry Date is required'
						},
                    date: {
                        format: 'MM/DD/YYYY',
                        message: 'The value is not a valid date'
                    }
                }
            },
			e_d_b_num: {
                validators: {
					notEmpty: {
								message: 'Expiry Date is required'
						},
                    date: {
                        format: 'MM/DD/YYYY',
                        message: 'The value is not a valid date'
                    }
                }
            },
			
			
				name_of_qualification: {
					 validators: {
						 notEmpty: {
						message: 'Name of Qualifiction  is required'
					}
					}
			},
			institute: {
					 validators: {
						 notEmpty: {
						message: 'Name of Institute  is required'
					}
					}
			},
			y_of_pass: {
					 validators: {
						 notEmpty: {
						message: 'Year of passing  is required'
					}
					}
			},
             certificate_num: {
					 validators: {
						 notEmpty: {
						message: 'Certificate No  is required'
					}
					}
			},
         cer_date: {
					 validators: {
						 notEmpty: {
						message: 'Certificate issue Date  is required'
					}
					}
			},
          time: {
					 validators: {
						 notEmpty: {
						message: 'Time period  is required'
					}
					}
			},
          size_catagory: {
					 validators: {
						 notEmpty: {
						message: 'Size Catagory  is required'
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
			ind_exp: {
					 validators: {
						 notEmpty: {
						message: 'You have Any industrial Experience is required'
					}
					}
			},
            dl: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only docx,doc,xlsx,pdf files are allowed'
					}
				}
            },
            batch: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only docx,doc,xlsx,pdf files are allowed'
					}
				}
            },
             training: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only docx,doc,xlsx,pdf files are allowed'
					}
				}
            },
			d_id_proof: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only docx,doc,xlsx,pdf files are allowed'
					}
				}
            },
			add_proof: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only docx,doc,xlsx,pdf files are allowed'
					}
				}
            },
            criminal_record: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only docx,doc,xlsx,pdf files are allowed'
					}
				}
            },
            recent_photo: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            },

			
            }
        });
     $('#datepicker1').on('changeDate ', function(e) {
		$('#driver').bootstrapValidator('revalidateField', 'dob');
		}); $('#datepicker2').on('changeDate ', function(e) {
		$('#driver').bootstrapValidator('revalidateField', 'd_lmv');
		}); $('#datepicker3').on('changeDate ', function(e) {
		$('#driver').bootstrapValidator('revalidateField', 'd_psvbus');
		}); $('#datepicker4').on('changeDate ', function(e) {
		$('#driver').bootstrapValidator('revalidateField', 'd_mcwg');
		}); $('#datepicker5').on('changeDate ', function(e) {
		$('#driver').bootstrapValidator('revalidateField', 'd_trans');
		}); $('#datepicker6').on('changeDate ', function(e) {
		$('#driver').bootstrapValidator('revalidateField', 'd_b_num');
		});$('#datepicker7').on('changeDate ', function(e) {
		$('#driver').bootstrapValidator('revalidateField', 'e_d_lmv');
		});$('#datepicker8').on('changeDate ', function(e) {
		$('#driver').bootstrapValidator('revalidateField', 'e_d_psvbus');
		});$('#datepicker9').on('changeDate ', function(e) {
		$('#driver').bootstrapValidator('revalidateField', 'e_d_mcwg');
		});$('#datepicker10').on('changeDate ', function(e) {
		$('#driver').bootstrapValidator('revalidateField', 'e_d_trans');
		});$('#datepicker11').on('changeDate ', function(e) {
		$('#driver').bootstrapValidator('revalidateField', 'e_d_b_num');
		});
		
		
		
		
		
		
		
		
});

</script>

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

<script>
var slider1 = document.getElementById("myRange1");
var output1 = document.getElementById("demo1");
output1.innerHTML = slider1.value;

slider1.oninput = function() {
  output1.innerHTML = this.value;
}
</script>
<script>

   //Date picker
    $('.datepicker').datepicker({
      autoclose: true
    });
</script>
<script>	
$(document).ready(function(){  
	$(".catagory").click(function(){
	  var name = $(this).data('name');
	  $('#size_catagory').val(name);
	  $(".catagory").removeClass('active-cata');
	  $("#"+name).addClass('active-cata');
	  
	}); 
	$(".vehicletype").click(function(){
	      var name = $(this).data('name');
	      $('#vehicle_type').val(name);
	      $(".vehicletype").removeClass('active-cata');
	      $("#"+name).addClass('active-cata');
	});
	
});

</script>
