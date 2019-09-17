

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Full Load
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url('load'); ?>">Load Booking</a></li>
            <li><a href="<?php echo base_url('load/full/'); ?>">Full Load</a></li>
            <li class="active">Vehicle inforamtion</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="mt-0 mb-0">Vehicle inforamtion</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="stepper">
                            <ul class="nav nav-tabs">
                                <li role="presentation" class="completed">
                                    <a class="persistant-disabled" href="<?php echo base_url('load/full');?>" title="Step 1">
                                        <span class="round-tab">1</span>
                                    </a>
                                </li>
                                <li role="presentation" class="completed">
                                    <a class="persistant-disabled" href="<?php echo base_url('load/vechile_information/'.base64_encode($load_id));?>" title="Step 2">
                                        <span class="round-tab">2</span>
                                    </a>
                                </li>
                               <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="javascript:void(0);" title="Step 3">
                                        <span class="round-tab">3</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="javascript:void(0);" title="Step 4">
                                        <span class="round-tab">4</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="javascript:void(0);" title="Step 5">
                                        <span class="round-tab">5</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="javascript:void(0);" title="Complete">
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
                    <form action="<?php echo base_url('load/vechicledetails_post');?>" method="post" id="defaultForm">
						<input type="hidden" id="f_l_id" name="f_l_id" value="<?php echo isset($load_id)?$load_id:''; ?>">
						<div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Size of Vehicle</label>
                                    <select class="form-control " style="width: 100%;" name="size_of_vechicle" onchange="get_related_vechile(this.value);">
											<option value="">Select</option>
											<option value="Small">Small</option>
											<option value="Medium">Medium</option>
											<option value="Large">Large</option>
											<option value="Ex-large">Ex-large</option>
									</select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Vehicle</label>
                                    <select class="form-control " style="width: 100%;" id="vehicle_id" name="vehicle_id">
                                        <option value="">Select Vehicle</option>
									</select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class=" control-label">No.of Vechiles</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="no_of_vechiles" placeholder="Enter Your no of vechiles" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline pull-right">
						

						<li><button type="submit" class="btn btn-primary next-step" >Save and continue</button></li>
						   <!--<li><a href="<?php echo base_url('load/materialtype');?>" type="button" class="btn btn-primary next-step">Save and continue</a></li>-->
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
function get_related_vechile(val){
	if(val!=''){
		jQuery.ajax({
					url: "<?php echo base_url('load/get_vechiles_list');?>",
					data: {
						type:val,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
						console.log(data);
						if(data.msg==1){
							$('#vehicle_id').empty();
							$('#vehicle_id').append("<option value=''>Select</option>");
							for(i=0; i<data.list.length; i++) {
								$('#vehicle_id').append("<option value="+data.list[i].v_id+">"+data.list[i].rc_number+"</option>");                      
							}
						}
					}
			});
	}	
}
 $(document).ready(function() {
     
      $('#defaultForm').bootstrapValidator({
   //      
          fields: {   		
				size_of_vechicle:{
				   validators: {
						notEmpty: {
							message: 'size of vechicle is required'
						}
					}
              },
			vehicle_id:{
			   validators: {
					notEmpty: {
						message: 'Select vehicle is required'
					}
				}
              },
			no_of_vechiles:{
				   validators: {
						notEmpty: {
							message: 'No Of Vechiles is required'
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