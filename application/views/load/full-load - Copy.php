<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Full Load
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url('load'); ?>">Load Booking</a></li>
            <li class="active">Full Load</li>
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
                                    <a class="persistant-disabled" href="<?php echo base_url('load/full/'.base64_encode(1));?>" title="Step 1">
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
                    <form id="defaultForm" name="defaultForm" action="<?php echo base_url('load/fullloadpost'); ?>" method="post">
                       <?php $csrf = array(
										'name' => $this->security->get_csrf_token_name(),
										'hash' => $this->security->get_csrf_hash()
								); ?>
								<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
							      <input type="hidden" id="load_id" name="load_id" value="<?php echo isset($load_id)?$load_id:'' ?>"> 
						<div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Loading Point</label>
                                    <input type="text" class="form-control" name="loading_point" placeholder="Enter Your Loading  point" />
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Droping Point</label>
                                    <input type="text" class="form-control" name="droping_point" placeholder="Enter Your Droping  point" />
                                    <!-- /.input group -->
                                </div>
                            </div>
							
							<div class="col-md-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" name="date" class="form-control"  placeholder="Enter Your Droping  point" />
                                    <!-- /.input group -->
                                </div>
                            </div>
							
                            <!--<div class="col-md-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="date" class="form-control pull-right datepicker" id="">
                                    </div>
                                    <!-- /.input group 
                                </div>-->
                            </div>
                       
                        <ul class="list-inline pull-right">
						 <li><button type="submit" class="btn btn-primary next-step" >Submit</button></li>
                        </ul>
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