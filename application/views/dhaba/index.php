<?php include("header.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i> Home</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-cubes"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">No.of Orders</span>
                        <span class="info-box-number">90<small></small></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                
                <div class="info-box">
                    <span class="info-box-icon bg-blue"><i class="fa fa-tags" aria-hidden="true"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">No.of Categories</span>
                        <span class="info-box-number">15</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-th-large" aria-hidden="true"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">No.of Items</span>
                        <span class="info-box-number">43</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                
                <div class="info-box">
                    <span class="info-box-icon bg-orange"><i class="fa fa-money" aria-hidden="true"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Received Amount</span>
                        <span class="info-box-number">₹ 45000</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                
            </div>
            <!-- /.col -->
            <div class="col-md-6 col-sm-6 col-xs-12 ">
                <div class="panel panel-success">
                    <div class="panel-body">
                        <div class="row">
                            <div class="  ">
                                <table class="table table-user-information text-center">
                                    <tbody>
                                        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                                        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- /.row -->
        
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include("footer.php"); ?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    window.onload = function() {
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2",
            title: {
                text: "DAY TO DAY ORDERS"
            },
            axisY: {
                includeZero: false
            },
            data: [{
                type: "line",
                dataPoints: [{
                        y: 450
                    },
                    {
                        y: 414
                    },
                    {
                        y: 520,
                        indexLabel: "highest",
                        markerColor: "red",
                        markerType: "triangle"
                    },
                    {
                        y: 460
                    },
                    {
                        y: 450
                    },
                    {
                        y: 500
                    },
                    {
                        y: 480
                    },
                    {
                        y: 480
                    },
                    {
                        y: 410,
                        indexLabel: "lowest",
                        markerColor: "DarkSlateGrey",
                        markerType: "cross"
                    },
                    {
                        y: 500
                    },
                    {
                        y: 480
                    },
                    {
                        y: 510
                    }
                ]
            }]
        });
        chart.render();
    }
</script>