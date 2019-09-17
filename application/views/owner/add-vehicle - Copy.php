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
                <h3 class="m-0 pull-left">Add Vehicle </h3>
                <span class="pull-right"><a href="<?php echo base_url(''); ?>" class="btn btn-primary btn-sm">Vehicles List</a></span>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
                <div class="row">
                <div class="col-md-12 ">
					 <h3 class="m-0 pull-left">Basic details </h3>
				</div>
				</div>
                <div class="row">
                    <div class="col-md-12">
                        <form id="addvehicle" name="addvehicle" role="form" action="<?php echo base_url('vehicle/addpost'); ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Rc No</label>
                                        <input type="text" class="form-control" id="rc_number" name="rc_number" placeholder="Enter Rc No">
                                    </div>
                                    <!-- /.input group -->
                                </div>
								<div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Model No</label>
                                        <input type="text" class="form-control" id="model_no" name="model_no" placeholder="Enter Model No">
                                    </div>
                                    <!-- /.input group -->
                                </div> 
								<div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Vehicle owner name</label>
                                        <input type="text" class="form-control" id="v_o_name" name="v_o_name" placeholder="Enter First Name">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="mobile_num" name="mobile_num"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class=" control-label">Address</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="address" name="address" />
                                        </div>
                                    </div>
                                </div>
                             
								
                            </div>
                         <hr>
				<div class="col-md-12 ">
					 <h3 class="m-0 pull-left">Vehicle Info </h3>
				</div>
					<div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Capacity </label>
                                        <input type="text" class="form-control" id="v_capacity" name="v_capacity" placeholder="Enter Capacity ">
                                    </div>
                                    <!-- /.input group -->
                                </div> 
								<div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Size-L-H-W</label>
                                        <input type="text" class="form-control" id="v_size_l_h_w" name="v_size_l_h_w" placeholder="Enter Size-L-H-W">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Wheel and axle </label>
                                        <div class="">
                                            <input type="text" class="form-control" id="v_wheel_axle" name="v_wheel_axle"  placeholder="Wheel and axle">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class=" control-label">Fuel Capacity </label>
                                        <div class="">
                                            <input type="text" class="form-control" id="v_fuel_capacity" name="v_fuel_capacity" placeholder="Fuel Capacity"/>
                                        </div>
                                    </div>
                                </div>
                             
								
                            </div> 
							<hr>
				
					<div class="row">
                                <div class="col-md-6">
									<div class="col-md-12 ">
										 <h3 class="m-0 pull-left">Insurance  </h3>
									</div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Issue date </label>
                                        <input type="date" class="form-control" id="i_issue_date" name="i_issue_date" >
                                    </div>
                                    <!-- /.input group -->
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control" id="i_expiry_date" name="i_expiry_date" >
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                </div>  
								<div class="col-md-6">
									<div class="col-md-12 ">
										 <h3 class="m-0 pull-left">Fitness</h3>
									</div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Issue date </label>
                                        <input type="date" class="form-control " id="f_issue_date" name="f_issue_date" >
                                    </div>
                                    <!-- /.input group -->
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control " id="f_expiry_date" name="f_expiry_date" >
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                </div>
								<div class="col-md-6">
									<div class="col-md-12 ">
										 <h3 class="m-0 pull-left">RC    </h3>
									</div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Issue date </label>
                                        <input type="date" class="form-control " id="r_issue_date" name="r_issue_date" >
                                    </div>
                                    <!-- /.input group -->
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control" id="r_expiry_date" name="r_expiry_date" >
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                </div>
								
                            
								<div class="col-md-6">
									<div class="col-md-12 ">
										 <h3 class="m-0 pull-left">Pollution    </h3>
									</div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Issue date </label>
                                        <input type="date" class="form-control" id="p_issue_date" name="p_issue_date" >
                                    </div>
                                    <!-- /.input group -->
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control " id="p_expiry_date" name="p_expiry_date" >
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                </div>
								
									</div>
									<div class="col-md-12  ">
										 <h3 class=" ">Road Permit    </h3>
									</div>
								<div class="col-md-6">
								<div class="row">
									
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Issue date </label>
                                        <input type="date" class="form-control " id="rp_issue_date" name="rp_issue_date" >
                                    </div>
                                    <!-- /.input group -->
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control " id="rp_expiry_date" name="rp_expiry_date" >
                                    </div>
                                    <!-- /.input group -->
                                </div>
									
                                </div>
							
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Vehicle Icon  </label>
                                        <input type="file" class="form-control" id="vehicle_icon" name="vehicle_icon"  >
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Size category    </label>
                                        <select class="form-control" name="s_category" id="s_category">
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
											<option value="open">open</option>
											<option value="close">close</option>
											<option value="contener">contener</option>
											<option value="Treller">Treller</option>
										</select>
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Material icon   </label>
                                        <input type="file" class="form-control "  name="material_icon" id="material_icon">
										
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Material name   </label>
										   <select class="form-control" name="material_name" id="material_name">
											<option value="">Select</option>
											<?php if(isset($material_list) && count($material_list)>0){ ?>
												<?php foreach($material_list as $list){ ?>
												<option value="<?php echo $list['m_t_id']; ?>"><?php echo $list['material_type_name']; ?></option>	
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
												<td>
													<input type="file"  name="vehicle_images[]" class="form-control">
												</td>
												
											</tr>
											<tr id='addr1'></tr>
										</tbody>
									</table>	
									<a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
								</div>
                                </div>
								
						<div class="col-xs-12">
							<div class="clearfix">&nbsp;</div>
                            <ul class="list-inline text-center">
                                <li><button type="submit" class="btn btn-primary next-step">Save & Continue</button></li>
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

$(document).ready(function() {
    $('#addvehicle').bootstrapValidator({
        
        fields: {
            rc_number: {
                validators: {
					notEmpty: {
						message: 'Rc No is required'
					}
				}
            },
			model_no: {
                validators: {
					notEmpty: {
						message: 'Model No is required'
					}
					
				}
            },
           v_o_name: {
					 validators: {
						 notEmpty: {
						message: 'Vehicle owner name is required'
					}
					}
			},
           mobile_num: {
					 validators: {
						 notEmpty: {
						message: 'Mobile Number is required'
					}
					}
			}, address: {
					 validators: {
						 notEmpty: {
						message: 'Address is required'
					}
					}
			}, v_capacity: {
					 validators: {
						 notEmpty: {
						message: 'Capacity is required'
					}
					}
			},v_size_l_h_w: {
					 validators: {
						 notEmpty: {
						message: 'Size-L-H-W is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9]+\-[a-zA-Z0-9]+\-[a-zA-Z0-9]+$/,
					message: 'Size-L-H-W  can only consist  of alphabets and Space'
					}
					}
			},v_wheel_axle: {
					 validators: {
						 notEmpty: {
						message: 'Wheel and axle  is required'
					}
					}
			},v_fuel_capacity: {
					 validators: {
						 notEmpty: {
						message: 'Fuel Capacity  is required'
					}
					}
			},i_issue_date: {
					 validators: {
						 notEmpty: {
						message: 'Issue date  is required'
					}
					}
			},i_expiry_date: {
					 validators: {
						 notEmpty: {
						message: 'Expiry Date  is required'
					}
					}
			},f_issue_date: {
					 validators: {
						 notEmpty: {
						message: 'Issue date  is required'
					}
					}
			},f_expiry_date: {
					 validators: {
						 notEmpty: {
						message: 'Expiry Date  is required'
					}
					}
			},r_issue_date: {
					 validators: {
						 notEmpty: {
						message: 'Issue date  is required'
					}
					}
			},r_expiry_date: {
					 validators: {
						 notEmpty: {
						message: 'Expiry Date  is required'
					}
					}
			},p_issue_date: {
					 validators: {
						 notEmpty: {
						message: 'Issue date  is required'
					}
					}
			},p_expiry_date: {
					 validators: {
						 notEmpty: {
						message: 'Expiry Date  is required'
					}
					}
			},rp_issue_date: {
					 validators: {
						 notEmpty: {
						message: 'Issue date  is required'
					}
					}
			},rp_expiry_date: {
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
					}
					}
			},vehicle_icon: {
					 validators: {
						 notEmpty: {
						message: 'Vehicle Icon  is required'
					}
					}
			}
			
			
			
            }
        })
     
});

</script>
