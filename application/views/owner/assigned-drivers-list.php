<?php include("header.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Assigned Drivers List
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Listing</a></li>
            <li class="active">Assigned Drivers List</li>
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
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Vehicle Registration Number</th>
                                    <th>Vehicle Name</th>
                                    <th>Driver Name</th>
                                    <th>Phone Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>123456</td>
                                    <td>AFGFHFT1134</td>
                                    <td>RAMU</td>
                                    <td>8765XXXXXX</td>
                                    <td>
                                        <a href="edit-assigned-driver.php" type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                                        <a href="#" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>123456</td>
                                    <td>AFGFHFT1134</td>
                                    <td>RAMU</td>
                                    <td>8765XXXXXX</td>
                                    <td>
                                        <a href="edit-assigned-driver.php" type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                                        <a href="#" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>123456</td>
                                    <td>AFGFHFT1134</td>
                                    <td>RAMU</td>
                                    <td>8765XXXXXX</td>
                                    <td>
                                        <a href="edit-assigned-driver.php" type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                                        <a href="#" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>123456</td>
                                    <td>AFGFHFT1134</td>
                                    <td>RAMU</td>
                                    <td>8765XXXXXX</td>
                                    <td>
                                        <a href="edit-assigned-driver.php" type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                                        <a href="#" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>123456</td>
                                    <td>AFGFHFT1134</td>
                                    <td>RAMU</td>
                                    <td>8765XXXXXX</td>
                                    <td>
                                        <a href="edit-assigned-driver.php" type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                                        <a href="#" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S.No</th>
                                    <th>Vehicle Registration Number</th>
                                    <th>Vehicle Name</th>
                                    <th>Driver Name</th>
                                    <th>Phone Number</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
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