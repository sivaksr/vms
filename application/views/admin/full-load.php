<style>


</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Full Load
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="load-booking.php">Load Booking</a></li>
            <li><a href="#">Full Load</a></li>
            <li class="active">Basic Load</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="mt-0 mb-0">Basic load</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="stepper">
                            <ul class="nav nav-tabs">
                                <li role="presentation" class="active">
                                    <a class="persistant-disabled" href="<?php echo base_url('load/full');?>" title="Step 1">
                                        <span class="round-tab">1</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="<?php echo base_url('load/vehicleinformation');?>" title="Step 2">
                                        <span class="round-tab">2</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="<?php echo base_url('load/materialtype');?>" title="Step 3">
                                        <span class="round-tab">3</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="<?php echo base_url('load/listvechiles');?>" title="Step 4">
                                        <span class="round-tab">4</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="<?php echo base_url('load/orderconfirm');?>" title="Step 5">
                                        <span class="round-tab">5</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="<?php echo base_url('load/payment');?>" title="Complete">
                                        <span class="round-tab">6</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <form action="<?php echo base_url('load/addpostone'); ?>" method="post" name="credentials" id="credentials" class="form-horizontal" enctype="multipart/form-data">
							<?php $csrf = array(
										'name' => $this->security->get_csrf_token_name(),
										'hash' => $this->security->get_csrf_hash()
								); ?>
								<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
							      <input type="hidden" id="hospital_id" name="hospital_id" value="<?php echo isset($hospital_id)?$hospital_id:'' ?>">
              
					<div class="row">
                        <div class="form-group col-md-6">
                           <label for="email">Hospital Contact Number</label>
                           <input type="text" id="hos_con_number" name="hos_con_number" autofocus="autofocus" value="<?php echo isset($hospital_details['hos_con_number'])?$hospital_details['hos_con_number']:''; ?>" class="form-control"  placeholder="Enter Contact No" >
                        </div>
                        <div class="form-group col-md-6">
                           <label for="email">Email Id</label>
                           <input type="text" id="hos_email_id" name="hos_email_id" value="<?php echo isset($hospital_details['hos_email_id'])?$hospital_details['hos_email_id']:''; ?>"  class="form-control"  placeholder="Enter Email Id" >
                        </div>
						
							<div class="form-group col-md-6">
                           <label for="email">Password</label>
                           <input type="password" id="hos_password" name="hos_password" class="form-control"  placeholder="Enter Password" >
                        </div>
                        <div class="form-group col-md-6">
                           <label for="email">Confirm Password</label>
                           <input type="password" id="hos_confirmpassword" name="hos_confirmpassword" class="form-control"  placeholder="Enter Confirm Password" >
                        </div>
						
                     </div>
                     <div class="form-actions">
                        <div class="row">
                           <div class="offset-md-11 col-md-1">
                              <button type="submit" class="btn btn-info">Next</button>
                           </div>
                        </div>
                     </div>
                  </form>
					 </div>
                </div>

            </div>
       
    </section>
    <!-- /.content -->
	 </div>

<!-- /.content-wrapper -->

<script>
 $(document).ready(function() {
     
      $('#defaultForm').bootstrapValidator({
   //      
          fields: {
   		
   		loading_point:{
   		   validators: {
   				notEmpty: {
   					message: 'Company Name is required'
   				}
   			}
              },
   		droping_point:{
   		   validators: {
   				notEmpty: {
   					message: 'Customer Name is required'
   				}
   			}
              },
   		date:{
   		   validators: {
   				notEmpty: {
   					message: 'Customer Name is required'
   				}
   			}
              }
   		
   		
          }
      });
   
   });
</script>

<script>
    //Date picker
    $('.datepicker').datepicker({
        autoclose: true
    });
</script>