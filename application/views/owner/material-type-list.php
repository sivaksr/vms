
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            All Material type
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="<?php echo base_url('material/add'); ?>">Add Material type</a></li>
            <li class="active">All Material type</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <div class="tab-content">
						<?php if(isset($material_list) && count($material_list)>0){ ?>
                        <div class="tab-pane active" id="tab_1">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Material type Image</th>
                                            <th>Material type Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php foreach($material_list as $list){ ?>
                                        <tr>
                                            <td><img src="<?php echo base_url('assets/material_type/'.$list['material_type_img']); ?>" width="50px" height="50px" ></td>
                                            <td><?php echo isset($list['material_type_name'])?$list['material_type_name']:''; ?></td>
                                            <td><span class="text-success font-weight-bold icon_size2"><?php if($list['status']==1){ echo "Active";}else{ echo "Deactive"; } ?></span></td>
                                            <td>
												<a href="javascript;void(0);" onclick="admindeactive('<?php echo base64_encode(htmlentities($list['m_t_id'])).'/'.base64_encode(htmlentities($list['status']));?>');adminstatus('<?php echo $list['status'];?>')" href="javascript:void(0)" data-toggle="modal" data-target="#myModal">
												<i class="fa fa-edit"></i><?php if($list['status']==0){ echo "Active";}else{ echo "Deactive"; } ?> </a>
												<a href="<?php echo base_url('material/edit/'.base64_encode($list['m_t_id'])); ?>" class="btn btn-primary btn-xs mb-5"><i class="fa fa-edit mr-5"></i>Edit</a>
												<a href="javascript;void(0);" onclick="admindelete('<?php echo base64_encode($list['m_t_id']) ?>');admindedeletemsg();" data-toggle="modal" data-target="#myModal" class="btn btn-danger btn-xs mb-5" title="Delete"><i class="fa fa-trash mr-5"></i>Delete</a>

                                            </td>
                                        </tr>
									<?php } ?>
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Material type Image</th>
                                            <th>Material type Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
						<?php } ?>
                        <!-- /.tab-pane -->


                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
            </div>
        </div>
    </section>
    <!-- /.content -->
    <div class="p-5"></div>
</div>
<!-- /.content-wrapper -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
			
			<div style="padding:10px">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 style="pull-left" class="modal-title">Confirmation</h4>
			</div>
			<div class="modal-body">
			<div class="alert alert-danger alert-dismissible" id="errormsg" style="display:none;"></div>
			  <div class="row">
				<div id="content1" class="col-xs-12 col-xl-12 form-group">
				Are you sure ? 
				</div>
				</div>
				<div class="row">
				<div class="col-md-6 col-sm-6  col-sm-6 ">
				  <button type="button" aria-label="Close" data-dismiss="modal" class="btn  blueBtn pull-left">Cancel</button>
				</div>
				<div class="col-md-6 col-sm-6  col-sm-6 ">
                <a href="?id=value" class="btn  blueBtn popid pull-right" style="text-decoration:none;"> <span aria-hidden="true">Ok</span></a>
				</div>
			 </div>
		  </div>
      </div>
      
    </div>
  </div>
<script>
 function admindeactive(id){
	$(".popid").attr("href","<?php echo base_url('material/status'); ?>"+"/"+id);
}
function adminstatus(id){
	if(id==1){
			$('#content1').html('Are you sure you want to Deactivate?');
		
	}if(id==0){
			$('#content1').html('Are you sure you want to activate?');
	}
}
function admindelete(id){
	$(".popid").attr("href","<?php echo base_url('material/deletes'); ?>"+"/"+id);
}
function admindedeletemsg(){
	
			$('#content1').html('Are you sure you want to delete?');

}
    $(function() {
        $("#example1").DataTable();
        $("#example2").DataTable();
    });
</script>

