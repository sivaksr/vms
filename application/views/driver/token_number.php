

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Driver
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Listing</li>
            <li><a href="vehicle.php">Driver</a></li>
            <li class="active">Add Driver</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="mt-0 mb-0">Upload Documents</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="stepper">
                            <ul class="nav nav-tabs">
                                <li role="presentation" class="completed">
                                    <a class="persistant-disabled" href="add-driver.php" title="Step 1">
                                        <span class="round-tab">1</span>
                                    </a>
                                </li>
                                <li role="presentation" class="completed">
                                    <a class="persistant-disabled" href=".php" title="Step 2">
                                        <span class="round-tab">2</span>
                                    </a>
                                </li> 
								<li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href=".php" title="Step 2">
                                        <span class="round-tab">3</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>	
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 text-center">
									<div class=" text-success" style="font-size:40px;font-weight:100">
										<i class="fa fa-check-circle-o" aria-hidden="true"></i>
									</div>
									<h3>Token Number : VMS0001<?php echo isset($d_id)?$d_id:''?></h3>
									<p> Your Request Is Being Processed.  You will be notified by email when processing is complete. </p>
                                </div>
								
                            </div>
                           
                            
                            
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- /.content -->
    <div class="p-5"></div>
</div>
<!-- /.content-wrapper -->

