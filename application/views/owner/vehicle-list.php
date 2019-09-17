<?php include("header.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Vehicle List
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Listing</li>
            <li><a href="vehicle.php">Vehicle</a></li>
            <li class="active">Vehicles List</li>
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
                                        <th>Registration number</th>
                                        <th>Issued Date</th>
                                        <th>Expiry Date</th>
                                        <th>Vehicle Name</th>
                                        <th>Capacity</th>
                                        <th>Size</th>
                                        <th>Vehicle Type</th>
                                        <th>Fuel capacity</th>
                                        <th>RTO document</th>
                                        <th>R.C Number</th>
                                        <th>R.C Issued Date</th>
                                        <th>R.C Expiry Date</th>
                                        <th>Pollution Certificate Number</th>
                                        <th>Pollution Issued Date</th>
                                        <th>Pollution Expiry Date</th>
                                        <th>Insurance Policy Number</th>
                                        <th>Policy Issued Date</th>
                                        <th>Policy Expiry Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>123456</td>
                                        <td>31-1-2019</td>
                                        <td>30-1-2032</td>
                                        <td>Tata 1309</td>
                                        <td>16 Ton</td>
                                        <td>Medium</td>
                                        <td>Open</td>
                                        <td>50 liters</td>
                                        <td>file</td>
                                        <td>123DFVN</td>
                                        <td>31-1-2019</td>
                                        <td>30-1-2023</td>
                                        <td>521KNFS</td>
                                        <td>31-1-2019</td>
                                        <td>30-1-2023</td>
                                        <td>521KNFS</td>
                                        <td>31-1-2019</td>
                                        <td>30-1-2023</td>
                                        <td>
                                            <a href="edit-vehicle.php" type="button" class="btn btn-warning btn-sm mr-2 mb-2"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a href="#" type="button" class="btn btn-danger btn-sm mr-2 mb-2"><i class="fa fa-trash"></i>Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>123456</td>
                                        <td>31-1-2019</td>
                                        <td>30-1-2032</td>
                                        <td>Tata 1309</td>
                                        <td>16 Ton</td>
                                        <td>Medium</td>
                                        <td>50 liters</td>
                                        <td>file</td>
                                        <td>Open</td>
                                        <td>123DFVN</td>
                                        <td>31-1-2019</td>
                                        <td>30-1-2023</td>
                                        <td>521KNFS</td>
                                        <td>31-1-2019</td>
                                        <td>30-1-2023</td>
                                        <td>521KNFS</td>
                                        <td>31-1-2019</td>
                                        <td>30-1-2023</td>
                                        <td>
                                            <a href="edit-vehicle.php" type="button" class="btn btn-warning btn-sm mr-2 mb-2"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a href="#" type="button" class="btn btn-danger btn-sm mr-2 mb-2"><i class="fa fa-trash"></i>Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>123456</td>
                                        <td>31-1-2019</td>
                                        <td>30-1-2032</td>
                                        <td>Tata 1309</td>
                                        <td>16 Ton</td>
                                        <td>Medium</td>
                                        <td>50 liters</td>
                                        <td>file</td>
                                        <td>Open</td>
                                        <td>123DFVN</td>
                                        <td>31-1-2019</td>
                                        <td>30-1-2023</td>
                                        <td>521KNFS</td>
                                        <td>31-1-2019</td>
                                        <td>30-1-2023</td>
                                        <td>521KNFS</td>
                                        <td>31-1-2019</td>
                                        <td>30-1-2023</td>
                                        <td>
                                            <a href="edit-vehicle.php" type="button" class="btn btn-warning btn-sm mr-2 mb-2"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a href="#" type="button" class="btn btn-danger btn-sm mr-2 mb-2"><i class="fa fa-trash"></i>Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Registration number</th>
                                        <th>Issued Date</th>
                                        <th>Expiry Date</th>
                                        <th>Vehicle Name</th>
                                        <th>Capacity</th>
                                        <th>Size</th>
                                        <th>Vehicle Type</th>
                                        <th>Fuel capacity</th>
                                        <th>RTO document</th>
                                        <th>R.C Number</th>
                                        <th>R.C Issued Date</th>
                                        <th>R.C Expiry Date</th>
                                        <th>Pollution Certificate Number</th>
                                        <th>Pollution Issued Date</th>
                                        <th>Pollution Expiry Date</th>
                                        <th>Insurance Policy Number</th>
                                        <th>Policy Issued Date</th>
                                        <th>Policy Expiry Date</th>
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