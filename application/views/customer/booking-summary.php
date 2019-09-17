<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Booking Summary
        </h1>
        <ol class="breadcrumb">
            <li><a href="booking-summary.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Booking Summary</li>
        </ol>
    </section>

    <section class="content">
        <div class="box box-body">
             <div class="col-md-12 b-vans">
                                <div class="panel-group" >
                                    
                                    <div style="border:1px solid #ddd;margin-top:5px;">
                                    <div class="panel-heading " style="background:#ddd;position:relative;border:1px solid #ddd;">
                                        <h4 class="panel-title vechiles-list">
                                           Booking ID : <span class="text-warning"> VMS15820 </span>
										   <span class="pull-right"><button class="btn btn-warning btn-xs">Edit</button></span>
                                        </h4>
                                        
                                    </div>   
									<div class="panel-body py-4">
									<div class="col-md-8 col-md-offset-2">
									<div class="row">
										<div class="col-md-4">
											<h4 >Loading point <i class="fa fa-thumb-tack" aria-hidden="true"></i></h4>
											<div>22-06-2019 10.15 Am</div>
										</div>
										<div class="col-md-4">
											<div class="mt-2" style="height:3px;background-color:red; width:100%"></div>
											<h5 class="text-center mt-1">5KM </h5>
										</div>
										<div class="col-md-4">
											<h4> <i class="fa fa-truck text-danger" aria-hidden="true"></i>    Delivery Point</h4>
											<div>23-06-2019 10.15 Am</div>
										</div>
									</div>
									</div>
									<div class="col-md-2">
										<h4>On way</h4>
									</div>
									<div class="clearfix">&nbsp;</div>
									<div class="clearfix">&nbsp;</div>

                                        <div class="table-responsive ">
                                                <table class ="table-bordered table" width="100%">

                                                    <tbody class="row">
                                                     <tr>
                                                              
                                                                <th class="">Lorry No</th>
                                                                <th class="">Bilti No	</th>
                                                                <th colspan="2" class="">Driver info	</th>
                                                                <th class="">Vehicle Info</th>
                                                                <th class="">Capacity</th>
                                                              
                                                                <th class="">Rating</th>
                                                                <th class="">Price</th>
                                                                <th class="">Status</th>
                                                            </tr>
                                                        <tr>
                                                            
															<td class="bv-vechile-info ">
                                                                AP04 AP 6382
                                                            </td> 
															<td class="bv-vechile-info ">
                                                               Bilti6666
                                                            </td>
															<td colspan="2" class="bv-vechile-info ">
                                                               <div>Sivakumar reddy</div>
                                                               <div>8500226782</div>
                                                            </td>  
															<td rowspan="4" class="bv-vechile-info ">
                                                                <p class="bvv-number">15820</p>
                                                                <div class="text-center">
                                                                    <i class="fa fa-truck fa-5x"></i>
                                                                    <br>
                                                                    <p class="bvv-name">TATA 1109</p>
                                                                </div>
                                                            </td>
                                                            <td rowspan="4" class="bv-capacity ">
                                                                <p><i class="fa fa-balance-scale"></i> 16 Ton</p>
                                                                <p><i class="fa fa-arrows-h"></i> 18 fit</p>
                                                            </td>
                                                        
                                                            <td rowspan="4" class="bv-rating">
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
                                                            <td rowspan="4" class="bv-price ">
                                                                <h4>INR 2000.00</h4>
                                                            </td>
                                                            <td rowspan="4" class="">
                                                                <div class="mt-2">
																<a class="btn btn-warning btn-xs" href="">Track Order</a>
															   </div>
															    <div class="mt-2">
                                                               <a class="btn btn-danger btn-xs" href="">Cancel Order</a>
															    </div>
																 <div class="mt-2">
                                                               <a class="btn btn-info btn-xs" href="">Download</a>
															    </div>
																 <div class="mt-2">
                                                               <a class="btn btn-success btn-xs" href="">Payment</a>
															    </div>
																 <div class="mt-2">
                                                               <a class="btn btn-info btn-xs" href="">Details</a>
															    </div>
																 <div class="mt-2">
                                                               <a class="btn btn-warning btn-xs" href="">Support</a>
															    </div>
                                                            </td>
                                                        </tr>
														<tr>
															<td colspan="4"> <button class="btn btn-primary btn-xs pull-right">Edit</button></td>
														</tr>
														<tr>
															<th>Insurance Policy No</th>
															<th>Invoice No</th>
															<th>Invoice Amt</th>
															<th>Download policy</th>
														</tr>
														<tr>
															<td> VMS0001</td>
															<td> VMSIN0001</td>
															<td> 30000</td>
															<td> <button class="btn btn-primary btn-xs">Download</button></td>
														</tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                    </div>
                                    
                                    
                                    
                                   
                                </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include("footer.php"); ?>