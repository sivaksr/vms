<?php include("header.php"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Assigned Driver
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Listing</a></li>
            <li><a href="assigned-drivers-list.php">Assigned Drivers List</a></li>
            <li class="active">Edit Assigned Driver</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="m-0 pull-left">Info</h3>
                <span class="pull-right">
                    <a href="assigned-drivers-list.php" class="btn btn-info btn-sm"><i class="fa fa-arrow-left mr-2"></i>Back</a>
                </span>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Vehicle Registration Number</label>
                                        <select class="form-control" name="vrnumber">
                                            <option value="0" disabled>Select</option>
                                            <option value="1" selected>Option</option>
                                            <option value="2">Option</option>
                                            <option value="3">Option</option>
                                            <option value="4">Option</option>
                                        </select>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Vehicle Name</label>
                                        <select class="form-control" name="vname">
                                            <option value="0" disabled>Select</option>
                                            <option value="1" selected>Option</option>
                                            <option value="2">Option</option>
                                            <option value="3">Option</option>
                                            <option value="4">Option</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Driver Name</label>
                                        <select class="form-control" name="dname">
                                            <option value="0" disabled>Select</option>
                                            <option value="1" selected>Option</option>
                                            <option value="2">Option</option>
                                            <option value="3">Option</option>
                                            <option value="4">Option</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Phone Number</label>
                                        <input type="text" class="form-control" name="mobile" value="98xxxxxx20" placeholder="Enter Phone Number">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <ul class="list-inline text-center">
                                <li><button type="button" class="btn btn-primary next-step">Save Changes</button></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="p-5"></div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include("footer.php"); ?>