<?php include("header.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Payments Overview
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Payment</li>
            <li class="active">Payments Overview</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content pb-5">
        <div class="row">
            <div class="col-md-4 pb-5">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Total Bookings Cost</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <p>This is the total bookings cost from start to till date.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Total Bookings Cost</h5>
                            </div>
                            <div class="col-md-6 text-right">
                                <b>3400.00</b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Total No.of Bookings</h5>
                            </div>
                            <div class="col-md-6 text-right">
                                <b>340</b>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <b>Average</b>
                            </div>
                            <div class="col-md-6 text-right">
                                <b>10.00</b>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            
            <div class="col-md-4 pb-5">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Delivered Bookings Amount</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <p>This is the delivered bookings cost from start to till date.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Bookings Cost</h5>
                            </div>
                            <div class="col-md-6 text-right">
                                <b>3000.00</b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>No.of Bookings</h5>
                            </div>
                            <div class="col-md-6 text-right">
                                <b>300</b>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <b>Average</b>
                            </div>
                            <div class="col-md-6 text-right">
                                <b>10.00</b>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            
            <div class="col-md-4 pb-5">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Cancelled Bookings Amount</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <p>This is the cancelled bookings cost from start to till date.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Cancelled Bookings Cost</h5>
                            </div>
                            <div class="col-md-6 text-right">
                                <b>400.00</b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>No.of Bookings Cancelled</h5>
                            </div>
                            <div class="col-md-6 text-right">
                                <b>40</b>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <b>Average</b>
                            </div>
                            <div class="col-md-6 text-right">
                                <b>10.00</b>
                            </div>
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
    
    <div class="pt-5 pb-5"></div>
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