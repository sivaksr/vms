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
                <h3 class="m-0 pull-left">Edit Material type </h3>
                <span class="pull-right"><a href="<?php echo base_url('material/'); ?>" class="btn btn-primary btn-sm">Material type List</a></span>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
                
                <div class="row">
                    <div class="col-md-12">
                        <form id="addvehicle" name="addvehicle" role="form" action="<?php echo base_url('material/editpost'); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="m_t_id" id="m_t_id" value="<?php echo isset($m_details['m_t_id'])?$m_details['m_t_id']:''; ?>">
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Material type Image</label>
                                        <input type="file" class="form-control" id="material_type_img" name="material_type_img" >
                                    </div>
                                    <!-- /.input group -->
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Material type Name</label>
                                        <input type="text" class="form-control" id="material_type_name" name="material_type_name" placeholder="Enter Material type Name" value="<?php echo isset($m_details['material_type_name'])?$m_details['material_type_name']:''; ?>">
                                    </div>
                                    <!-- /.input group -->
                                </div> 
								
								
						<div class="col-xs-12">
							<div class="clearfix">&nbsp;</div>
                            <ul class="list-inline text-center">
                                <li><button type="submit" class="btn btn-primary next-step">Update & Continue</button></li>
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
    $('#addvehicle').bootstrapValidator({
        fields: {
            material_type_img: {
                validators: {
					regexp: {
						regexp: "(.*?)\.(png|jpg|jpeg|Png|Jpeg|gif)$",
						message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
						}
				}
            },
			material_type_name: {
                validators: {
					notEmpty: {
						message: 'Material type Name is required'
					}
				}
            }
		}
        })    
});

</script>
