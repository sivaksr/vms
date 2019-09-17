<?php include("header.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Invoices List
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Payment</li>
            <li class="active">Invoices</li>
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
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Booking Id</th>
                                        <th>Customer Name</th>
                                        <th>From (location)</th>
                                        <th>To (location)</th>
                                        <th>Driver Mobile Number</th>
                                        <th>Vehicle Registration number</th>
                                        <th>Vehicle Name</th>
                                        <th>Material Type</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>VMS00012</td>
                                        <td>Customer1</td>
                                        <td>Hyderabad</td>
                                        <td>Vizag</td>
                                        <td>98xxxxxx20</td>
                                        <td>123456</td>
                                        <td>Tata 1309</td>
                                        <td>Oil Tins</td>
                                        <td>2000.00</td>
                                        <td>
                                            <a href="#" type="button" class="btn btn-info btn-sm mb-2"><i class="fa fa-download"></i> Download</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>VMS00012</td>
                                        <td>Customer1</td>
                                        <td>Hyderabad</td>
                                        <td>Vizag</td>
                                        <td>98xxxxxx20</td>
                                        <td>123456</td>
                                        <td>Tata 1309</td>
                                        <td>Oil Tins</td>
                                        <td>2000.00</td>
                                        <td>
                                            <a href="#" type="button" class="btn btn-info btn-sm mb-2"><i class="fa fa-download"></i> Download</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>VMS00012</td>
                                        <td>Customer1</td>
                                        <td>Hyderabad</td>
                                        <td>Vizag</td>
                                        <td>98xxxxxx20</td>
                                        <td>123456</td>
                                        <td>Tata 1309</td>
                                        <td>Oil Tins</td>
                                        <td>2000.00</td>
                                        <td>
                                            <a href="#" type="button" class="btn btn-info btn-sm mb-2"><i class="fa fa-download"></i> Download</a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Booking Id</th>
                                        <th>Customer Name</th>
                                        <th>From (location)</th>
                                        <th>To (location)</th>
                                        <th>Driver Mobile Number</th>
                                        <th>Vehicle Registration number</th>
                                        <th>Vehicle Name</th>
                                        <th>Material Type</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
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
    <div class="p-5"></div>
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
<?php include("footer.php"); ?>