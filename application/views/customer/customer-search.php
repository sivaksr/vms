<?php include("header.php"); ?>
<style>


</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        
        
    </section>

    <section class="content">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="mt-0 mb-0">Vehicle Details</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="stepper">
                            <ul class="nav nav-tabs">
                                <li role="presentation" class="active">
                                    <a class="persistant-disabled" href="customer-search.php" title="Step 1">
                                        <span class="round-tab">1</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="#" title="Step 2">
                                        <span class="round-tab">2</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="#" title="Step 3">
                                        <span class="round-tab">3</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="#" title="Step 4">
                                        <span class="round-tab">4</span>
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
                                <div class="form-group">
                                    <label>Vehicle Type</label>
                                    <input type="text" class="form-control" name="loadPoint" placeholder="Vehicle type" />
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Vehicle Size</label>
                                    <input type="text" class="form-control" name="username" placeholder="Vehicle Size" />
                                    <!-- /.input group -->
                                </div>
                            </div>
							<div class="col-md-6">
                                <div class="form-group">
                                    <label>Material Type</label>
                                    <input type="text" class="form-control" name="username" placeholder="Material Type" />
                                    <!-- /.input group -->
                                </div>
                            </div>
							<div class="col-md-6">
                                <div class="form-group">
                                    <label>No of Vehicles</label>
                                    <select class="form-control">
									<option>Select</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									</select>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            
                        </div>
                        <ul class="list-inline pull-right">
                            <li><a href="vechilelist.php" type="button" class="btn btn-primary next-step">Save and continue</a></li>
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