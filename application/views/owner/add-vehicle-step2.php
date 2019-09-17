
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Vehicle
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Listing</li>
            <li><a href="vehicle.php">Vehicle</a></li>
            <li class="active">Add Vehicle</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="m-0 pull-left">Vehicle Details</h3>
                <span class="pull-right"><a href="<?php echo base_url('vehicle/index'); ?>" class="btn btn-primary btn-sm">Vehicles List</a></span>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form id="addvichile" role="form" action="<?php echo base_url('vehicle/addonepost'); ?>" method="post" enctype="multipart/form-data">
								<input  type="hidden" name="v_id" id="v_id" value="<?php echo isset($v_details['v_id'])?$v_details['v_id']:''; ?>">
							<div class="row">
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
                            </div>
                           
                            
                            
                            
                            <br>
                            <ul class="list-inline text-center">
                                <li><button type="submit" class="btn btn-primary next-step">Submit</button></li>
                            </ul>
                        </form>
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
    $('#addvichile').bootstrapValidator({
        
        fields: {
            insurance_img: {
                validators: {
					notEmpty: {
						message: 'Insurance is required'
					},regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
					}
				}
            },
			fitness_img: {
                 validators: {
					notEmpty: {
						message: 'Fitness  is required'
					},regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
					}
				}
            },pollution_img: {
                 validators: {
					notEmpty: {
						message: 'Pollution is required'
					},regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
					}
				}
            },rc_img: {
                 validators: {
					notEmpty: {
						message: 'RC is required'
					},regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
					}
				}
            },road_permit: {
                 validators: {
					notEmpty: {
						message: 'Road Permit  is required'
					},regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
					}
				}
            },owner_id_proof: {
                 validators: {
					notEmpty: {
						message: 'Owner ID PROOF is required'
					},regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
					}
				}
            },add_proof: {
                 validators: {
					notEmpty: {
						message: 'Address Proof  is required'
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
