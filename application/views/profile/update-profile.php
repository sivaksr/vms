<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <a href="<?php echo base_url('profile');?>" type="button" class="btn btn-info btn-sm pull-right">Back</a>
                        <h3 class="mt-0 mb-0">Update Profile</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div style="padding:20px;">
                        <form id="defaultForm" method="post" class="" action="<?php echo base_url('profile/editpost');?>" enctype="multipart/form-data" >
                        <input type="hidden"  name="a_id" id="a_id"   value="<?php echo isset($userdetails['a_id'])?$userdetails['a_id']:''?>" >  
							<div class="col-md-6">
                                <div class="form-group">
                                    <label class=" control-label">Name</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="name" value="<?php echo isset($userdetails['name'])?$userdetails['name']:''?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class=" control-label">Contact Number</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="mobile_number" value="<?php echo isset($userdetails['mobile_number'])?$userdetails['mobile_number']:''?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class=" control-label">Email</label>
                                    <div class="">
                                        <input type="mail" class="form-control" name="email" value="<?php echo isset($userdetails['email'])?$userdetails['email']:''?>" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="row">
                                   
                                        <label class=" control-label">Profile</label>
                                        <div class="">
                                            <input type="file" class="form-control" name="profile_pic" value="" />
                                        </div>
                                    
                                    
                                </div>
                            </div>

                            <div class="clearfix">&nbsp;</div>
                            <div class="form-group">
                                <div class="pull-left mr-5">
                                    <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Save Changes</button>
                                </div>
                            </div>

                        </form>
                        <div class="clearfix">&nbsp;</div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </section>

</div>
<script>
$(document).ready(function() {
     
      $('#defaultForm').bootstrapValidator({
   //      
          fields: {
   		
   		name:{
   		   validators: {
   				notEmpty: {
   					message: ' Name is required'
   				}
   			   }
              },
   		
					email: {
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
   		mobile_number:{
   		  validators: {
   				notEmpty: {
   					message:'Contact Number is required'
   				},
   				regexp: {
   				regexp:  /^[0-9]{10}$/,
   				message:'Contact Number must be 10 digits'
   				}
   			}
              },
   		profile_pic: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
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

