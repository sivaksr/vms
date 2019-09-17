<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Box Load
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="load-booking.php">Load Booking</a></li>
            <li><a href="#">Box Load</a></li>
            <li class="active">Basic Load</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="mt-0 mb-0">Basic load</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="stepper">
                            <ul class="nav nav-tabs">
                                <li role="presentation" class="active">
                                    <a class="persistant-disabled" href="box-load.php" title="Step 1">
                                        <span class="round-tab">1</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="nearest-location-bl.php" title="Step 2">
                                        <span class="round-tab">2</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="list-of-vechiles-bl.php" title="Step 3">
                                        <span class="round-tab">3</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="order-conformation-bl.php" title="Step 4">
                                        <span class="round-tab">4</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="payment-bl.php" title="Complete">
                                        <span class="round-tab">5</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <form id="" name="" action="" method="">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group ml-10">
                                    <label>Service Type</label>
                                    <select class="form-control" name="servicetype">
                                        <option value="" disabled selected>Select</option>
                                        <option value="1">Commercial</option>
                                        <option value="2">Non-Commercial</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right datepicker" id="">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-list" style="margin-bottom:0px;">
                                        <thead>
                                            <tr>
												<th>Material Type</th>
                                                <th colspan="3">Dimensions</th>
                                                <th>No.of Items</th>
                                                <th>Weight (in Kg's)</th>
                                                <th>Material Value</th>
                                                <th>Dropping Point</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="mb-0">
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="materialtype" placeholder="Enter Type"/>
                                                    </div>
                                                </td>
												<td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="length" placeholder="Length" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="width" placeholder="Width" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="height" placeholder="Height" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="itemsnumber" placeholder="Enter number" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="weight" placeholder="weight" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="materialvalue" placeholder="Material Value" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="droppingpoint" placeholder="Dropping Point"/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-md btn-success" id="addRow"><i class="fa fa-plus"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>        
                        </div>
                        <ul class="list-inline pull-right">
                            <li><a href="nearest-location-bl.php" type="button" class="btn btn-primary next-step">Save and continue</a></li>
                        </ul>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
    $(document).ready(function() {
        var counter = 0;

        $("#addRow").on("click", function() {
            var newRow = $("<tr>");
            var cols = "";
            
            cols += '<td><div class="form-group"><input type="text" class="form-control" name="materialtype' + counter + '" placeholder="Enter Type"/></div></td>';
            
            cols += '<td><div class="form-group"><input type="text" class="form-control" name="length' + counter + '" placeholder="Length"/></div></td>';
            
            cols += '<td><div class="form-group"><input type="text" class="form-control" name="width' + counter + '" placeholder="Width"/></div></td>';
            
            cols += '<td><div class="form-group"><input type="text" class="form-control" name="height' + counter + '" placeholder="Height"/></div></td>';
            
            cols += '<td><div class="form-group"><input type="text" class="form-control" name="itemsnumber' + counter + '" placeholder="Enter number"/></div></td>';
            
            cols += '<td><div class="form-group"><input type="text" class="form-control" name="weight' + counter + '" placeholder="weight" /></div></td>';
            
            cols += '<td><div class="form-group"><input type="text" class="form-control" name="materialvalue' + counter + '" placeholder="Material Value"/></div></td>';
            
            cols += '<td><div class="form-group"><input type="text" class="form-control" name="droppingpoint' + counter + '" placeholder="Dropping Point"/></div></td>';
            

            cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
            newRow.append(cols);
            $("table.table-list").append(newRow);
            counter++;
        });

        $("table.table-list").on("click", ".ibtnDel", function(event) {
            $(this).closest("tr").remove();
            counter -= 1
        });
    });
</script>
<?php include("footer.php"); ?>

<script>
    //Date picker
    $('.datepicker').datepicker({
        autoclose: true
    });
</script>