<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Contacts List
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Contacts</a></li>
            <li class="active">Contacts List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <!--<h3 class="box-title"></h3>-->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Company Name</th>
                                        <th>Name of the Customer</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>GST Number</th>
                                        <th>Address</th>
                                        <th>Saved address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php if(isset($contact_list)&&count($contact_list)>0){?>
								<?php foreach($contact_list as $list){?>
                                    <tr>
                                        <td><?php echo isset($list['company_name'])?$list['company_name']:'' ?></td>
                                        <td><?php echo isset($list['customer_name'])?$list['customer_name']:'' ?></td>
                                        <td><?php echo isset($list['phone_number'])?$list['phone_number']:'' ?></td>
                                        <td><?php echo isset($list['email_id'])?$list['email_id']:'' ?></td>
                                        <td><?php echo isset($list['gst_number'])?$list['gst_number']:'' ?></td>
                                        <td><?php echo isset($list['address'])?$list['address']:'' ?></td>
                                        <td><?php echo isset($list['save_address'])?$list['save_address']:'' ?><br>
                                            </td>
                                        <td>
                                            <a href="<?php echo base_url('contact/view/'.base64_encode($list['c_id'])); ?>" class="btn btn-info btn-sm mb-5"><i class="fa fa-eye"></i></a><br>
                                            <a href="<?php echo base_url('contact/edit/'.base64_encode($list['c_id'])); ?>" class="btn btn-success btn-sm mb-5"><i class="fa fa-edit"></i></a><br>
                                            <a href="<?php echo base_url('contact/delete/'.base64_encode($list['c_id'])); ?>" class="btn btn-danger btn-sm mb-5"><i class="fa fa-trash"></i></a>

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
function admindedelete(id){
	$(".popid").attr("href","<?php echo base_url('contact/deletes/'); ?>"+"/"+id);
}

 function admindedeletemsg(id){
			$('#content1').html('Are you sure you want to Delete?');

}  
  



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
