<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Third-Party Services
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
                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Fuels</a></li>
                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Garage</a></li>
                        <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">RTO / Insurance</a></li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane active" id="tab_1">
                            <form action="" method="" role="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Company Name</label>
                                            <input type=" text" class="form-control " name="companyname" placeholder="Enter Company Name">
                                        </div>
                                        <!-- /.input group -->
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" control-label">Dealer Name</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="dealername" placeholder="Enter Dealer Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Registration ID</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="registerid" placeholder="Enter Registration ID" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" control-label">Phone Number</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="mobile" placeholder="Enter Phone number" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" control-label">Agreement From</label>
                                            <div class="">
                                                <input type="date" class="form-control" name="from" placeholder="Enter" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" control-label">Agreement To</label>
                                            <div class="">
                                                <input type="date" class="form-control" name="to" placeholder="Enter" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Address</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="address" placeholder="Enter Address" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">City</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="city" placeholder="Enter City Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">State</label>
                                            <select class="form-control" name="state">
                                                <option value="0" selected disabled>Select</option>
                                                <option value="1">Option</option>
                                                <option value="2">Option</option>
                                                <option value="3">Option</option>
                                                <option value="4">Option</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Country</label>
                                            <select class="form-control" name="country">
                                                <option value="0" selected disabled>Select</option>
                                                <option value="1">Option</option>
                                                <option value="2">Option</option>
                                                <option value="3">Option</option>
                                                <option value="4">Option</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Zip Code</label>
                                            <input type="text" class="form-control" name="zipcode" plceholder="Enter Zip code"/>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <ul class="list-inline text-center">
                                    <li><button type="button" class="btn btn-primary next-step">Submit</button></li>
                                </ul>
                            </form>
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="tab_2">
                            <form action="" method="" role="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Company Name</label>
                                            <input type=" text" class="form-control " name="companyname" placeholder="Enter Company Name">
                                        </div>
                                        <!-- /.input group -->
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" control-label">Owner Name</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="dealername" placeholder="Enter Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Registration ID</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="registerid" placeholder="Enter Registration ID" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" control-label">Phone Number</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="mobile" placeholder="Enter Phone number" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" control-label">Agreement From</label>
                                            <div class="">
                                                <input type="date" class="form-control" name="from" placeholder="Enter" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" control-label">Agreement To</label>
                                            <div class="">
                                                <input type="date" class="form-control" name="to" placeholder="Enter" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Address</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="address" placeholder="Enter Address" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">City</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="city" placeholder="Enter City Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">State</label>
                                            <select class="form-control" name="state">
                                                <option value="0" selected disabled>Select</option>
                                                <option value="1">Option</option>
                                                <option value="2">Option</option>
                                                <option value="3">Option</option>
                                                <option value="4">Option</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Country</label>
                                            <select class="form-control" name="country">
                                                <option value="0" selected disabled>Select</option>
                                                <option value="1">Option</option>
                                                <option value="2">Option</option>
                                                <option value="3">Option</option>
                                                <option value="4">Option</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Zip Code</label>
                                            <input type="text" class="form-control" name="zipcode" plceholder="Enter Zip code"/>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <ul class="list-inline text-center">
                                    <li><button type="button" class="btn btn-primary next-step">Submit</button></li>
                                </ul>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                        
                        <div class="tab-pane" id="tab_3">
                            <form action="" method="" role="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Registration ID</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="registerid" placeholder="Enter Registration ID" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" control-label">Name</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="headname" placeholder="Enter Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" control-label">Agreement From</label>
                                            <div class="">
                                                <input type="date" class="form-control" name="from" placeholder="Enter" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" control-label">Agreement To</label>
                                            <div class="">
                                                <input type="date" class="form-control" name="to" placeholder="Enter" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" control-label">Phone Number</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="mobile" placeholder="Enter Phone number" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Address</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="address" placeholder="Enter Address" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">City</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="city" placeholder="Enter City Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">State</label>
                                            <select class="form-control" name="state">
                                                <option value="0" selected disabled>Select</option>
                                                <option value="1">Option</option>
                                                <option value="2">Option</option>
                                                <option value="3">Option</option>
                                                <option value="4">Option</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Country</label>
                                            <select class="form-control" name="country">
                                                <option value="0" selected disabled>Select</option>
                                                <option value="1">Option</option>
                                                <option value="2">Option</option>
                                                <option value="3">Option</option>
                                                <option value="4">Option</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Zip Code</label>
                                            <input type="text" class="form-control" name="zipcode" plceholder="Enter Zip code"/>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <ul class="list-inline text-center">
                                    <li><button type="button" class="btn btn-primary next-step">Submit</button></li>
                                </ul>
                            </form>
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