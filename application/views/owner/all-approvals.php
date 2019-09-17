<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            All Approvals
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li>Listing</li>
            <li class="active">All Approvals</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Vehicles</a></li>
                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Drivers</a></li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane active" id="tab_1">
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
                                            <th>Status</th>
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
                                            <td><span class="text-success font-weight-bold icon_size2">Active</span></td>
                                            <td>
                                                <a href="#" type="button" class="btn btn-info btn-sm mb-2"><i class="fa fa-exclamation-triangle"></i></a>
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
                                            <td><span class="text-success font-weight-bold icon_size2">Active</span></td>
                                            <td>
                                                <a href="#" type="button" class="btn btn-info btn-sm mb-2"><i class="fa fa-exclamation-triangle"></i></a>
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
                                            <td><span class="text-danger font-weight-bold icon_size2">InActive</span></td>
                                            <td>
                                                <a href="#" type="button" class="btn btn-info btn-sm mb-2"><i class="fa fa-exclamation-triangle"></i></a>
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
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="tab_2">
                            <div class="table-responsive">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>License No</th>
                                            <th>Badge No</th>
                                            <th>Email Id</th>
                                            <th>Phone Number</th>
                                            <th>Experience</th>
                                            <th>Salary</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ram</td>
                                            <td>mohan
                                            </td>
                                            <td>AFGFHFT1134</td>
                                            <td>12</td>
                                            <td>rammohan@gmail.com</td>
                                            <td>8765XXXXXX</td>
                                            <td>3 yrs</td>
                                            <td>20000</td>
                                            <td><span class="text-success font-weight-bold icon_size2">Active</span></td>
                                            <td>
                                                <a href="#" type="button" class="btn btn-info btn-sm mb-2"><i class="fa fa-exclamation-triangle"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>ram</td>
                                            <td>mohan
                                            </td>
                                            <td>AFGFHFT1134</td>
                                            <td>12</td>
                                            <td>rammohan@gmail.com</td>
                                            <td>8765XXXXXX</td>
                                            <td>3 yrs</td>
                                            <td>20000</td>
                                            <td><span class="text-success font-weight-bold icon_size2">Active</span></td>
                                            <td>
                                                <a href="#" type="button" class="btn btn-info btn-sm mb-2"><i class="fa fa-exclamation-triangle"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>ram</td>
                                            <td>mohan
                                            </td>
                                            <td>AFGFHFT1134</td>
                                            <td>12</td>
                                            <td>rammohan@gmail.com</td>
                                            <td>8765XXXXXX</td>
                                            <td>3 yrs</td>
                                            <td>20000</td>
                                            <td><span class="text-success font-weight-bold icon_size2">Active</span></td>
                                            <td>
                                                <a href="#" type="button" class="btn btn-info btn-sm mb-2"><i class="fa fa-exclamation-triangle"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>License No</th>
                                            <th>Badge No</th>
                                            <th>Email Id</th>
                                            <th>Phone Number</th>
                                            <th>Experience</th>
                                            <th>Salary</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
            </div>
        </div>
    </section>
    <!-- /.content -->
    <div class="p-5"></div>
</div>
<!-- /.content-wrapper -->

<script>
    $(function() {
        $("#example1").DataTable();
        $("#example2").DataTable();
    });
</script>

<?php include('footer.php'); ?>