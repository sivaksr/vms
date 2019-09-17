<?php include("header.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
            <h1>
                Advertising
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li>Growth</li>
                <li class="active">Advertising</li>
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
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Image</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>No.of times / day</th>
                                    <th>No.of Views</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Driver Requirement</td>
                                    <td>Some Paragraph text some here about the subject...</td>
                                    <td><img src="../img/refer-friend.png" alt="image" height="70px"></td>
                                    <td>12-2-2019</td>
                                    <td>19:50 PM</td>
                                    <td>3</td>
                                    <td><span class="text-aqua font-weight-bold icon_size2">200</span></td>
                                    <td>
                                        <a href="#" type="button" class="btn btn-warning btn-sm mr-2 mb-2"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                        <a href="#" type="button" class="btn btn-danger btn-sm mr-2 mb-2"><i class="fa fa-trash"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Driver Requirement</td>
                                    <td>Some Paragraph text some here about the subject...</td>
                                    <td><img src="../img/refer-friend.png" alt="image" height="70px"></td>
                                    <td>12-2-2019</td>
                                    <td>19:50 PM</td>
                                    <td>3</td>
                                    <td><span class="text-aqua font-weight-bold icon_size2">200</span></td>
                                    <td>
                                        <a href="#" type="button" class="btn btn-warning btn-sm mr-2 mb-2"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                        <a href="#" type="button" class="btn btn-danger btn-sm mr-2 mb-2"><i class="fa fa-trash"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Driver Requirement</td>
                                    <td>Some Paragraph text some here about the subject...</td>
                                    <td><img src="../img/refer-friend.png" alt="image" height="70px"></td>
                                    <td>12-2-2019</td>
                                    <td>19:50 PM</td>
                                    <td>3</td>
                                    <td><span class="text-aqua font-weight-bold icon_size2">200</span></td>
                                    <td>
                                        <a href="#" type="button" class="btn btn-warning btn-sm mr-2 mb-2"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                        <a href="#" type="button" class="btn btn-danger btn-sm mr-2 mb-2"><i class="fa fa-trash"></i>Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S.No</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Image</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>No.of times / day</th>
                                    <th>No.of Views</th>
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