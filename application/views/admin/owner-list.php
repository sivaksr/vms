<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Owner List
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url('owner/add'); ?>">Owner add</a></li>
            <li class="active">Owner List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
					    <div class="panel panel-default">
					<div class="panel-heading">
					<h3 class="mt-0 pull-left mb-0"> Owner List</h3>
					<span class="pull-right"> <a class="btn btn-primary btn-xs " href="<?php echo base_url('owner/add'); ?>"> Add</a></span>
					<div class="clearfix">&nbsp;</div>
				</div>
               
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Company Name</th>
                                        <th>Name</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>GST Number</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php if(isset($ow_list)&&count($ow_list)>0){?>
								<?php foreach($ow_list as $list){?>
                                    <tr>
                                        <td><?php echo isset($list['company_name'])?$list['company_name']:'' ?></td>
                                        <td><?php echo isset($list['name'])?$list['name']:'' ?></td>
                                        <td><?php echo isset($list['mobile_number'])?$list['mobile_number']:'' ?></td>
                                        <td><?php echo isset($list['email'])?$list['email']:'' ?></td>
                                        <td><?php echo isset($list['gst'])?$list['gst']:'' ?></td>
                                        <td><?php echo isset($list['address'])?$list['address']:'' ?></td>
                                        <td><?php if($list['status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
                                        <td>
                                           <a href="<?php echo base_url('owner/view/'.base64_encode($list['a_id'])); ?>" class="btn btn-info btn-sm mb-5"><i class="fa fa-eye"></i></a><br>
                                            <a href="<?php echo base_url('owner/edit/'.base64_encode($list['a_id'])); ?>" class="btn btn-success btn-sm mb-5"><i class="fa fa-edit"></i></a><br>
                                            <a href="<?php echo base_url('owner/delete/'.base64_encode($list['a_id'])); ?>" class="btn btn-danger btn-sm mb-5"><i class="fa fa-trash"></i></a>
                                            <a href="<?php echo base_url('owner/status/'.base64_encode($list['a_id']).'/'.base64_encode($list['status'])); ?>" class="btn btn-warning btn-sm mb-5"><i class="fa fa-exclamation-triangle"></i></a>
                                        </td>
                                    </tr>
								<?php }?>
								<?php }?>
									
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<script>
    $(function() {
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
