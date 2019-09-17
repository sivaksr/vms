

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Owner
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Owner</a></li>
            <li class="active">Add Owner</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="mt-0 pull-left mb-0">Add Owner</h3>
                <span class="pull-right"><a href="<?php echo base_url('owner/index');?>" class="btn btn-primary btn-sm">Owner List</a></span>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" id="defaultForm" method="post" action="<?php echo base_url('owner/addpost');?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Company Name</label>
                                        <input type=" text" class="form-control" name="company_name" placeholder="Enter Company Name">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Customer Name</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="customer_name" placeholder="Enter Customer Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Phone Number</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="phone_number" placeholder="Enter Phone number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Email Id</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="email_id" placeholder="Enter Email Id" />
                                        </div>
                                    </div>
                                </div> 
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Password</label>
                                        <div class="">
                                            <input type="password" class="form-control" name="pwd" placeholder="Enter Password" />
                                        </div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Confirm Password</label>
                                        <div class="">
                                            <input type="password" class="form-control" name="confirmpwd" placeholder="Enter Confirm Password" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">GST Number</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="gst_number" placeholder="Enter GST number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" id="dvPassport">
                                    <div class="form-group">
                                        <label class=" control-label">Address</label>
                                        <div class="">
                                            <textarea type="text" class="form-control" id="theinput" name="address" placeholder="Enter Address"/></textarea>
                                        </div>
                                    </div>
                                </div>								
                            </div>
                            <br>
                            <ul class="list-inline text-center">
                                <li><button type="submit" class="btn btn-primary next-step" >Submit</button></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">

$(document).ready(function(){
    $('input[type="checkbox"]').click(function(){
       if ($(this).val() == "") {
        $("#theinput").show();
    } else {
        $("#theinput").hide();
    }
    });
});







$("#theinput").keyup(function () {
    if ($(this).val() == "") {
        $("#checked_hide").show();
    } else {
        $("#checked_hide").hide();
    }
});
	
    
    
	

	
	
	
   $(document).ready(function() {
     
      $('#defaultForm').bootstrapValidator({
   //      
          fields: {
   		
   		company_name:{
   		   validators: {
   				notEmpty: {
   					message: 'Company Name is required'
   				}
   			}
              },
   		customer_name:{
   		   validators: {
   				notEmpty: {
   					message: 'Customer Name is required'
   				}
   			}
              },
   		gst_number:{
			  validators: {
   				notEmpty: {
   					message: 'Gst Number is required'
   				}
   			}
              },			
					email_id: {
					validators: {
					  notEmpty: {
						  message: 'Email Id is required'
					  },
					  regexp: {
					  regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					  message: 'Please enter a valid email address. For example johndoe@domain.com.'
					  }
					}
					},
   		phone_number:{
   		  validators: {
   				notEmpty: {
   					message:'Phone Number is required'
   				},
   				regexp: {
   				regexp:  /^[0-9]{10}$/,
   				message:'Phone Number must be 10 digits'
   				}
   			}
              },
   		address:{
   		   validators: {
   				notEmpty: {
   					message: 'Address is required'
   				},regexp: {
   				regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
   				message:'Address wont allow <> [] = % '
   				}
   			}
              },
		
		'save_address[]': {
                validators: {
                    choice: {
                        min: 0,
                        max: 1,
                        message: 'Please choose one check address'
                    }
                }
            }
   		
   		
          }
      });
   
   });
</script>
<script>
	
   $(function () {
     $("#example1").DataTable();
     $('#example2').DataTable({
       "paging": true,
       "lengthChange": false,
       "searching": false,
       "ordering": true,
       "info": true,
       "autoWidth": false
     });
   });
</script>

