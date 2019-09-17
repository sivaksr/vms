<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Part Load
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="load-booking.php">Load Booking</a></li>
            <li><a href="#">Part Load</a></li>
            <li class="active">Vechile inforamtion</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="mt-0 mb-0">Vechile inforamtion</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="stepper">
                            <ul class="nav nav-tabs">
                                <li role="presentation" class="completed">
                                    <a class="persistant-disabled" href="part-load.php" title="Step 1">
                                        <span class="round-tab">1</span>
                                    </a>
                                </li>
                                <li role="presentation" class="active">
                                    <a class="persistant-disabled" href="vechile-inforamtion-pl.php" title="Step 2">
                                        <span class="round-tab">2</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="material-type-pl.php" title="Step 3">
                                        <span class="round-tab">3</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="list-of-vechiles-pl.php" title="Step 4">
                                        <span class="round-tab">4</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="order-conformation-pl.php" title="Step 5">
                                        <span class="round-tab">5</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="payment-pl.php" title="Complete">
                                        <span class="round-tab">6</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <form action="" method="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Size of Vehicle</label>
                                    <select class="form-control " style="width: 100%;">

                                        <option>Eicher 14 Ft</option>
                                        <option>Eicher 17 Ft</option>
                                        <option>Eicher 19 Ft</option>
                                        <option>20 Ft closed Containers</option>
                                        <option>32 Ft closed Containers 7 to</option>
                                        <option>32 Ft closed Containers 14 ton</option>
                                        <option>Truck 19-ton</option>
                                        <option>Taurus 16 ton</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Vehicle</label>
                                    <select class="form-control " style="width: 100%;">
                                        <option>Tata Ace</option>
                                        <option>Bolero Pick up</option>


                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class=" control-label">No.of Vechiles</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="username" placeholder="Enter Your no of vechiles" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><a href="material-type-pl.php" type="button" class="btn btn-primary next-step">Save and continue</a></li>
                        </ul>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include("footer.php"); ?>



<script>
    //Date picker
    $('.datepicker').datepicker({
        autoclose: true
    });
</script>