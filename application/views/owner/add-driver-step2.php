<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Driver
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Listing</li>
            <li><a href="<?php echo base_url('driver'); ?>">Driver</a></li>
            <li class="active">Add Driver</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="mt-0 mb-0">Upload Documents</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="stepper">
                            <ul class="nav nav-tabs">
                                <li role="presentation" class="completed">
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
                <div class="row">
                    <div class="col-md-12">
								<form id="add_driver1" name="add_driver1" role="form" action="<?php echo base_url('driver/addonepost'); ?>" method="post" enctype="multipart/form-data">
								<input  type="hidden" name="d_id" id="d_id" value="<?php echo isset($d_details['d_id'])?$d_details['d_id']:''; ?>"> 
								<div class="row">
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
    $('#add_driver1').bootstrapValidator({
        
        fields: {
            image: {
                validators: {
					notEmpty: {
						message: 'Image is required'
					},regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
					}
				}
            },
			driving_lic: {
                 validators: {
					notEmpty: {
						message: 'Driving License  is required'
					},regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
					}
				}
            },batch_img: {
                 validators: {
					notEmpty: {
						message: 'Batch is required'
					},regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
					}
				}
            },training_img: {
                 validators: {
					notEmpty: {
						message: 'Training is required'
					},regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
					}
				}
            },driving_id_proof: {
                 validators: {
					notEmpty: {
						message: 'Driver ID Proof  is required'
					},regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
					}
				}
            },add_proof: {
                 validators: {
					notEmpty: {
						message: 'Address Proof is required'
					},regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
					}
				}
            },criminal_record: {
                 validators: {
					notEmpty: {
						message: 'Criminal Record  is required'
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
