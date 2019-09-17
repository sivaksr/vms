<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Contacts
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url('contact/lists'); ?>">Contacts</a></li>
            <li class="active">Booking Summary</li>
        </ol>
    </section>

    <section class="content">
      <div class="panel-body">
                        <div class="row">
						<div class="col-xs-12">
					    <div class="panel panel-default">
					<div class="panel-heading">
					<h3 class="mt-0 pull-left mb-0"> Contact View</h3>
					<span class="pull-right"> <a class="btn btn-primary btn-xs " href="<?php echo base_url('contact/add'); ?>"> Add Contact</a></span>
					<div class="clearfix">&nbsp;</div>
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
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
									<td><?php echo isset($view_contact['company_name'])?$view_contact['company_name']:''?></td>
									<td><?php echo isset($view_contact['customer_name'])?$view_contact['customer_name']:''?></td>
									<td><?php echo isset($view_contact['phone_number'])?$view_contact['phone_number']:''?></td>
									<td><?php echo isset($view_contact['email_id'])?$view_contact['email_id']:''?></td>
									<td><?php echo isset($view_contact['gst_number'])?$view_contact['gst_number']:''?></td>
									<td><?php echo isset($view_contact['address'])?$view_contact['address']:''?></td>
								</tr>
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
            </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

