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
            <li class="active">Material Type</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="mt-0 mb-0">Material Type</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="stepper">
                            <ul class="nav nav-tabs">
                                <li role="presentation" class="completed">
                                    <a class="persistant-disabled" href="part-load.php" title="Step 1">
                                        <span class="round-tab">1</span>
                                    </a>
                                </li>
                                <li role="presentation" class="completed">
                                    <a class="persistant-disabled" href="vechile-inforamtion-pl.php" title="Step 2">
                                        <span class="round-tab">2</span>
                                    </a>
                                </li>
                                <li role="presentation" class="active">
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
                            <div class="col-md-12 material-type form-group">
                                <label>Select Material Type</label>
                                <br><br>
                                <ul class="list-inline">
                                    <li class="list-inline-item text-center active">
                                        <i class="fa fa-archive fa-2x"></i><br>
                                        <span>Some Text</span>
                                    </li>
                                    <li class="list-inline-item text-center">
                                        <i class="fa fa-car fa-2x"></i><br>
                                        <span>Some Text</span>
                                    </li>
                                    <li class="list-inline-item text-center">
                                        <i class="fa fa-cog fa-2x"></i><br>
                                        <span>Some Text</span>
                                    </li>
                                    <li class="list-inline-item text-center">
                                        <i class="fa fa-cubes fa-2x"></i><br>
                                        <span>Some Text</span>
                                    </li>
                                    <li class="list-inline-item text-center">
                                        <i class="fa fa-leaf fa-2x"></i><br>
                                        <span>Some Text</span>
                                    </li>
                                    <li class="list-inline-item text-center">
                                        <i class="fa fa-flask fa-2x"></i><br>
                                        <span>Some Text</span>
                                    </li>
                                    <li class="list-inline-item text-center">
                                        <i class="fa fa-fire-extinguisher fa-2x"></i><br>
                                        <span>Some Text</span>
                                    </li>
                                    <li class="list-inline-item text-center">
                                        <i class="fa fa-home fa-2x"></i><br>
                                        <span>Some Text</span>
                                    </li>
                                    <li class="list-inline-item text-center">
                                        <i class="fa fa-leanpub fa-2x"></i><br>
                                        <span>Some Text</span>
                                    </li>
                                    <li class="list-inline-item text-center">
                                        <i class="fa fa-pagelines fa-2x"></i><br>
                                        <span>Some Text</span>
                                    </li>
                                    <li class="list-inline-item text-center">
                                        <i class="fa fa-lightbulb-o fa-2x"></i><br>
                                        <span>Some Text</span>
                                    </li>
                                    <li class="list-inline-item text-center">
                                        <i class="fa fa-tint fa-2x"></i><br>
                                        <span>Some Text</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><a href="list-of-vechiles-pl.php" type="button" class="btn btn-primary next-step">Save and continue</a></li>
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