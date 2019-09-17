<?php include("header.php"); ?>

<div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Insurance Provider
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Insurance Provider</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body">

                        <table id="example1" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Policy Number</th>
                                    <th>Order Number</th>
                                    <th>Date</th>
                                    <th>Pickup Place</th>
                                    <th>Droping Place</th>
                                    <th>Insurance amount</th>
                                    <th>Invoice amount</th>
                                    <th>Validity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>xxx</td>
                                    <td>123542</td>
                                    <td>23/2/2019</td>
                                    <td>Hyderabad</td>
                                    <td>Guntur</td>
                                    <td>6530.00</td>
                                    <td>6600.00</td>
                                    <td>5 days</td>
                                </tr>
								  <tr>
                                    <td>xxx</td>
                                    <td>123542</td>
                                    <td>23/2/2019</td>
                                    <td>Hyderabad</td>
                                    <td>Guntur</td>
                                    <td>6530.00</td>
                                    <td>6600.00</td>
                                    <td>5 days</td>
                                </tr>
								  <tr>
                                    <td>xxx</td>
                                    <td>123542</td>
                                    <td>23/2/2019</td>
                                    <td>Hyderabad</td>
                                    <td>Guntur</td>
                                    <td>6530.00</td>
                                    <td>6600.00</td>
                                    <td>5 days</td>
                                </tr>
                                
                            </tbody>
                        </table>

                    </div>
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
    $(document).ready(function() {
        $('#example1').DataTable();
    });
</script>
<?php include("footer.php"); ?>