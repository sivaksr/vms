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
            <li class="active">Order Confirmation</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="mt-0 mb-0">Order Confirmation</h3>
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
                                <li role="presentation" class="completed">
                                    <a class="persistant-disabled" href="material-type-pl.php" title="Step 3">
                                        <span class="round-tab">3</span>
                                    </a>
                                </li>
                                <li role="presentation" class="completed">
                                    <a class="persistant-disabled" href="list-of-vechiles-pl.php" title="Step 4">
                                        <span class="round-tab">4</span>
                                    </a>
                                </li>
                                <li role="presentation" class="active">
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
                            <div class="col-md-12 b-vans">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title ">

                                                <div class="table-responsive">
                                                    <table width="100%">
                                                        <thead class="black white-text row">
                                                            <tr>
                                                                <th class="col-md-2">Vehicle Info</th>
                                                                <th class="col-md-2">Capacity</th>
                                                                <th class="col-md-2">Loading Date / Time</th>
                                                                <th class="col-md-2">Duration</th>
                                                                <th class="col-md-2">Rating</th>
                                                                <th class="col-md-2">Price</th>
                                                            </tr>
                                                        </thead>

                                                    </table>
                                                </div>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
                                        <h4 class="panel-title vechiles-list">
                                            <div class="table-responsive">
                                                <table width="100%">

                                                    <tbody class="row">
                                                        <tr>
                                                            <td class="bv-vechile-info col-md-2">
                                                                <p class="bvv-number">15820</p>
                                                                <div class="text-center">
                                                                    <i class="fa fa-truck fa-5x"></i>
                                                                    <br>
                                                                    <p class="bvv-name">TATA 1109</p>
                                                                </div>
                                                            </td>
                                                            <td class="bv-capacity col-md-2">
                                                                <p><i class="fa fa-balance-scale"></i> 16 Ton</p>
                                                                <p><i class="fa fa-arrows-h"></i> 18 fit</p>
                                                            </td>
                                                            <td class="bv-loading-dt col-md-2">
                                                                <div class="media">
                                                                    <i class="fa fa-calendar fa-2x mt-2"></i>
                                                                    <div class="media-body">
                                                                        <p class="">06:00 - 10:00 AM</p>
                                                                        <p class="pt-0">02/01/1995</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="bv col-md-2">
                                                                <p><i class="fa fa-clock-o"></i> 16 hrs</p>
                                                            </td>
                                                            <td class="bv-rating col-md-2">
                                                                <p>4.5</p>
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                                </ul>
                                                                <p class="text-mute">359 Reviews</p>
                                                                <p class="text-success">520 Load</p>
                                                            </td>
                                                            <td class="bv-price col-md-2">
                                                                <h4>INR 2000.00</h4>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </h4>
                                        <div class="clearfix">&nbsp;</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><a href="payment-pl.php" type="button" class="btn btn-primary next-step">Procced to Payment</a></li>
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
    $(function() {
        $(".expand").on("click", function() {
            // $(this).next().slideToggle(200);
            $expand = $(this).find(">:first-child");

            if ($expand.text() == "+") {
                $expand.text("-");
            } else {
                $expand.text("+");
            }
        });
    });
</script>