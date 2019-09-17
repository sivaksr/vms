<?php include("header.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            RTO / Insurance Tie-up List
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Third-Party</li>
            <li class="active">RTO/ Insurance</li>
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
                                    <th>Registration ID</th>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Agreement From</th>
                                    <th>Agreement To</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Country</th>
                                    <th>Zip Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12342563</td>
                                    <td>Azhar Basha</td>
                                    <td>8765XXXXXX</td>
                                    <td>1-1-2019</td>
                                    <td>31-12-2019</td>
                                    <td>D/No: xxxxx, XXXX street, beside xxxxxx</td>
                                    <td>Hyderabad</td>
                                    <td>Telangana</td>
                                    <td>India</td>
                                    <td>500016</td>
                                    <td>
                                        <a href="#" type="button" class="btn btn-warning btn-sm mr-2 mb-2"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                        <a href="#" type="button" class="btn btn-danger btn-sm mr-2 mb-2"><i class="fa fa-trash"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>12342563</td>
                                    <td>Azhar Basha</td>
                                    <td>8765XXXXXX</td>
                                    <td>1-1-2019</td>
                                    <td>31-12-2019</td>
                                    <td>D/No: xxxxx, XXXX street, beside xxxxxx</td>
                                    <td>Hyderabad</td>
                                    <td>Telangana</td>
                                    <td>India</td>
                                    <td>500016</td>
                                    <td>
                                        <a href="#" type="button" class="btn btn-warning btn-sm mr-2 mb-2"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                        <a href="#" type="button" class="btn btn-danger btn-sm mr-2 mb-2"><i class="fa fa-trash"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>12342563</td>
                                    <td>Azhar Basha</td>
                                    <td>8765XXXXXX</td>
                                    <td>1-1-2019</td>
                                    <td>31-12-2019</td>
                                    <td>D/No: xxxxx, XXXX street, beside xxxxxx</td>
                                    <td>Hyderabad</td>
                                    <td>Telangana</td>
                                    <td>India</td>
                                    <td>500016</td>
                                    <td>
                                        <a href="#" type="button" class="btn btn-warning btn-sm mr-2 mb-2"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                        <a href="#" type="button" class="btn btn-danger btn-sm mr-2 mb-2"><i class="fa fa-trash"></i>Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S.No</th>
                                    <th>Registration ID</th>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Agreement From</th>
                                    <th>Agreement To</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Country</th>
                                    <th>Zip Code</th>
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