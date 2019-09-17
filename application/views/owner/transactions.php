<?php include("header.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Transactions List
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Payment</li>
            <li class="active">Transactions</li>
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
                                    <th>Transaction ID</th>
                                    <th>Customer Name</th>
                                    <th>From (location)</th>
                                    <th>To (location)</th>
                                    <th>Vehicle number</th>
                                    <th>Card Number</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>123SDF452</td>
                                    <td>Customer1</td>
                                    <td>Hyderabad</td>
                                    <td>Vizag</td>
                                    <td>123456</td>
                                    <td>xxxx-xxxx-3456</td>
                                    <td>2000.00</td>
                                    <td>12-1-2018</td>
                                </tr>
                                <tr>
                                    <td>123SDF452</td>
                                    <td>Customer1</td>
                                    <td>Hyderabad</td>
                                    <td>Vizag</td>
                                    <td>123456</td>
                                    <td>xxxx-xxxx-3456</td>
                                    <td>2000.00</td>
                                    <td>20-2-2018</td>
                                </tr>
                                <tr>
                                    <td>123SDF452</td>
                                    <td>Customer1</td>
                                    <td>Hyderabad</td>
                                    <td>Vizag</td>
                                    <td>123456</td>
                                    <td>xxxx-xxxx-3456</td>
                                    <td>2000.00</td>
                                    <td>12-1-2018</td>
                                </tr>
                                <tr>
                                    <td>123SDF452</td>
                                    <td>Customer1</td>
                                    <td>Hyderabad</td>
                                    <td>Vizag</td>
                                    <td>123456</td>
                                    <td>xxxx-xxxx-3456</td>
                                    <td>2000.00</td>
                                    <td>20-2-2018</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Transaction ID</th>
                                    <th>Customer Name</th>
                                    <th>From (location)</th>
                                    <th>To (location)</th>
                                    <th>Vehicle number</th>
                                    <th>Card Number</th>
                                    <th>Price</th>
                                    <th>Date</th>
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