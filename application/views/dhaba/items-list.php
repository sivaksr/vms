<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Menu Items List
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Menu</a></li>
            <li class="active">Items List</li>
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
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Sub-Category</th>
                                        <th>Name</th>
                                        <th>Cost</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $cnt=1; foreach($menu_list as $list){?>
                                    <tr>
                                        <td><?php echo $cnt;?></td>
                                        <td><img src="<?php echo base_url('assets/menu items/'.$list['image']); ?>" width="70px" height="auto"></td>
                                        <td><?php echo isset($list['category'])?$list['category']:''?></td>
                                        <td><?php echo isset($list['sub_category'])?$list['sub_category']:''?></td>
                                        <td><?php echo isset($list['name'])?$list['name']:''?></td>
                                        <td><?php echo isset($list['cost'])?$list['cost']:''?></td>
                                        <td>
                                            <a href="<?php echo base_url('menu/edit/'.base64_encode($list['m_id'])); ?>" class="btn btn-warning btn-sm mb-5"><i class="fa fa-edit"></i></a>
                                            <a href="<?php echo base_url('menu/delete/'.base64_encode($list['m_id'])); ?>" class="btn btn-danger btn-sm mb-5"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    
                                    <?php $cnt++;}?>
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
