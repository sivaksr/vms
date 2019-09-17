<?php include("header.php"); ?>


<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Reports
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Reports</li>
            </ol>
        </section>

        <section class="content">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <form role="form">
                                <div class="form-group">
                                    <label>Select Type</label>
                                    <select class="form-control" name="">
                                        <option value="0" disabled selected>All Types</option>
                                        <option value="1">Vehicles List</option>
                                        <option value="2">Drivers List</option>
                                        <option value="3">Bookings List</option>
                                        <option value="4">Cancelled Bookings List</option>
                                        <option value="5">Active Bookings List</option>
                                        <option value="6">Payments List</option>
                                        <option value="7">Transactions List</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class=" control-label">From Date</label>
                                    <div class="">
                                        <input type="date" class="form-control" name="fromdate"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" control-label">To Date</label>
                                    <div class="">
                                        <input type="date" class="form-control" name="todate"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>File Type</label>
                                    <select class="form-control" name="">
                                        <option value="0" disabled selected>All Types</option>
                                        <option value="1">Excel</option>
                                        <option value="2">PDF</option>
                                    </select>
                                </div>
                                <div class="list-inline text-center mt-5 mb-4">
                                    <a href="#" type="button" class="btn btn-primary next-step">
                                        <i class="fa fa-download mr-3"></i>Download
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <div class="p-5"></div>
</div>
<!-- /.content-wrapper -->

<?php include("footer.php"); ?>