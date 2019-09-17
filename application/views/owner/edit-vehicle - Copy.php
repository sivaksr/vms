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
                <h3 class="m-0 pull-left">Edit Vehicle </h3>
                <span class="pull-right"><a href="<?php echo base_url('vehicle'); ?>" class="btn btn-primary btn-sm">Vehicles List</a></span>
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
                        <form id="addvehicle" name="addvehicle" role="form" action="<?php echo base_url('vehicle/editpost'); ?>" method="post" enctype="multipart/form-data">
                           <input  type="hidden" name="v_id" id="v_id" value="<?php echo isset($v_details['v_id'])?$v_details['v_id']:''; ?>">
							<div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Rc No</label>
                                        <input type="text" class="form-control" id="rc_number" name="rc_number" placeholder="Enter Rc No" value="<?php echo isset($v_details['rc_number'])?$v_details['rc_number']:''; ?>">
                                    </div>
                                    <!-- /.input group -->
                                </div>
								<div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Model No</label>
                                        <input type="text" class="form-control" id="model_no" name="model_no" placeholder="Enter Model No" value="<?php echo isset($v_details['model_no'])?$v_details['model_no']:''; ?>">
                                    </div>
                                    <!-- /.input group -->
                                </div> 
								<div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Vehicle owner name</label>
                                        <input type="text" class="form-control" id="v_o_name" name="v_o_name" placeholder="Enter First Name" value="<?php echo isset($v_details['v_o_name'])?$v_details['v_o_name']:''; ?>">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="mobile_num" name="mobile_num" value="<?php echo isset($v_details['mobile_num'])?$v_details['mobile_num']:''; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class=" control-label">Address</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="address" name="address" value="<?php echo isset($v_details['address'])?$v_details['address']:''; ?>">
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
                                        <input type="text" class="form-control" id="v_capacity" name="v_capacity" placeholder="Enter Capacity " value="<?php echo isset($v_details['v_capacity'])?$v_details['v_capacity']:''; ?>">
                                    </div>
                                    <!-- /.input group -->
                                </div> 
								<div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Size-L-H-W</label>
                                        <input type="text" class="form-control" id="v_size_l_h_w" name="v_size_l_h_w" placeholder="Enter Size-L-H-W" value="<?php echo isset($v_details['v_size_l_h_w'])?$v_details['v_size_l_h_w']:''; ?>">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Wheel and axle </label>
                                        <div class="">
                                            <input type="text" class="form-control" id="v_wheel_axle" name="v_wheel_axle"  placeholder="Wheel and axle" value="<?php echo isset($v_details['v_wheel_axle'])?$v_details['v_wheel_axle']:''; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class=" control-label">Fuel Capacity </label>
                                        <div class="">
                                            <input type="text" class="form-control" id="v_fuel_capacity" name="v_fuel_capacity" placeholder="Fuel Capacity" value="<?php echo isset($v_details['v_fuel_capacity'])?$v_details['v_fuel_capacity']:''; ?>">
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
                                        <input type="date" class="form-control" id="i_issue_date" name="i_issue_date" value="<?php echo isset($v_details['i_issue_date'])?$v_details['i_issue_date']:''; ?>">
                                    </div>
                                    <!-- /.input group -->
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control" id="i_expiry_date" name="i_expiry_date" value="<?php echo isset($v_details['i_expiry_date'])?$v_details['i_expiry_date']:''; ?>">
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
                                        <input type="date" class="form-control " id="f_issue_date" name="f_issue_date" value="<?php echo isset($v_details['f_issue_date'])?$v_details['f_issue_date']:''; ?>">
                                    </div>
                                    <!-- /.input group -->
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control " id="f_expiry_date" name="f_expiry_date" value="<?php echo isset($v_details['f_expiry_date'])?$v_details['f_expiry_date']:''; ?>">
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
                                        <input type="date" class="form-control " id="r_issue_date" name="r_issue_date" value="<?php echo isset($v_details['r_issue_date'])?$v_details['r_issue_date']:''; ?>">
                                    </div>
                                    <!-- /.input group -->
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control" id="r_expiry_date" name="r_expiry_date" value="<?php echo isset($v_details['r_expiry_date'])?$v_details['r_expiry_date']:''; ?>">
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
                                        <input type="date" class="form-control" id="p_issue_date" name="p_issue_date" value="<?php echo isset($v_details['p_issue_date'])?$v_details['p_issue_date']:''; ?>">
                                    </div>
                                    <!-- /.input group -->
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control " id="p_expiry_date" name="p_expiry_date" value="<?php echo isset($v_details['p_expiry_date'])?$v_details['p_expiry_date']:''; ?>">
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
                                        <input type="date" class="form-control " id="rp_issue_date" name="rp_issue_date" value="<?php echo isset($v_details['rp_issue_date'])?$v_details['rp_issue_date']:''; ?>">
                                    </div>
                                    <!-- /.input group -->
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date  </label>
                                        <input type="date" class="form-control " id="rp_expiry_date" name="rp_expiry_date" value="<?php echo isset($v_details['rp_expiry_date'])?$v_details['rp_expiry_date']:''; ?>">
                                    </div>
                                    <!-- /.input group -->
                                </div>
									
                                </div>
							
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Vehicle Icon  </label>
                                        <input type="file" class="form-control" id="vehicle_icon" name="vehicle_icon" value="<?php echo isset($v_details['vehicle_icon'])?$v_details['vehicle_icon']:''; ?>" >
                                    </div>
                                </div>
								<div class="col-md-6">
									<div class="form-group">
                                        <label class="control-label">Size category    </label>
                                        <select class="form-control" name="s_category" id="s_category">
											<option value="">Select</option>
											<option value="Small" <?php if($v_details['s_category']=='Small'){ echo "selected";} ?>>Small</option>
											<option value="Medium" <?php if($v_details['s_category']=='Large'){ echo "selected";} ?>>Medium</option>
											<option value="Large" <?php if($v_details['s_category']=='Large'){ echo "selected";} ?>>Large</option>
											<option value="Ex-large" <?php if($v_details['s_category']=='Ex-large'){ echo "selected";} ?>>Ex-large</option>
										</select>
                                    </div>
                                </div>
									<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Model Type   </label>
                                        <select class="form-control" name="m_type" id="m_type">
											<option value="">Select</option>
											<option value="open" <?php if($v_details['m_type']=='open'){ echo "selected";} ?>>open</option>
											<option value="close" <?php if($v_details['m_type']=='close'){ echo "selected";} ?>>close</option>
											<option value="contener" <?php if($v_details['m_type']=='contener'){ echo "selected";} ?>>contener</option>
											<option value="Treller" <?php if($v_details['m_type']=='Treller'){ echo "selected";} ?>>Treller</option>
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
                                        <input type="text" class="form-control " name="material_name" id="material_name" value="<?php echo isset($v_details['material_name'])?$v_details['material_name']:''; ?>">
                                    </div>
                                </div>	
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Material name   </label>
										   <select class="form-control" name="material_name" id="material_name">
											<option value="">Select</option>
											<?php if(isset($material_list) && count($material_list)>0){ ?>
												<?php foreach($material_list as $list){ ?>
													<?php if($v_details['material_name']==$list['m_t_id']){ ?>
														<option selected value="<?php echo $list['m_t_id']; ?>"><?php echo $list['material_type_name']; ?></option>	
													<?php }else{ ?>
														<option value="<?php echo $list['m_t_id']; ?>"><?php echo $list['material_type_name']; ?></option>	
													<?php } ?>
												<?php } ?>
											<?php } ?>
										</select>
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Insurance</label>
                                        <input type="file" class="form-control" name="insurance_img" id="insurance_img"  >
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Fitness </label>
                                        <input type="file" class="form-control" name="fitness_img" id="fitness_img">
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Pollution  </label>
                                        <input type="file" class="form-control" name="pollution_img" id="pollution_img">
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">RC  </label>
                                        <input type="file" class="form-control " name="rc_img" id="rc_img">
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Road Permit  </label>
                                        <input type="file" class="form-control " name="road_permit" id="road_permit">
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Owner ID PROOF  </label>
                                        <input type="file" class="form-control " name="owner_id_proof" id="owner_id_proof">
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Address Proof    </label>
                                        <input type="file" class="form-control " name="add_proof" id="add_proof">
                                    </div>
                                </div>
								<div class="col-md-12"></div>
								<?php if(isset($v_details['img_list']) && count($v_details['img_list'])>0){ ?>
									<?php foreach($v_details['img_list'] as $lis){ ?>
										<div id="v_img<?php echo $lis['img_id']; ?>" class="col-md-6"><a href="javascript:void(0);" onclick="remove_img(<?php echo $lis['img_id']; ?>)">X</a>
											<div class="form-group">
												<label class="control-label">Vehicle Icons :</label>
												<img src="<?php echo base_url('assets/vehicle/'.$lis['img_name']); ?>" height="50px" width="50px;">
											</div>
										</div>
									<?php } ?>
								<?php } ?>
								<div class="col-md-12"></div>
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
function remove_img(i_id){
		jQuery.ajax({
					url: "<?php echo base_url('vehicle/remove_vehicle_imges');?>",
					data: {
						i_id: i_id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
						if(data.msg==1){
   						jQuery('#v_img'+i_id).hide();
   					}
				 }
			});
		
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
						 regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
					}
					}
			},vehicle_icon: {
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
