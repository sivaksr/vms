
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Load Booking
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Loads</li>
            <li class="active">Load Booking</li>
        </ol>
    </section>
<section class="content">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-body border-1px-ddd py-3 px-4">
					<div class="row">
						<div class="col-md-12">
							<ul class="nav nav-tabs">
								
								<li>	<a data-toggle="tab" href="#tab1">Manage Bookings</a>
								</li>
								<li>	<a data-toggle="tab" href="#tab2">Cancel Bookings</a>
								</li>
								<li>	<a data-toggle="tab" href="#tab3">Deliver Bookings</a>
								</li>
							</ul>
							<div class="tab-content">
								<!-- tab one --->
								

											<div id="tab1" class="tab-pane fade in active">
											<section class="content">
											   <h3>Manage Bookings</h3>
											   <div class="panel with-nav-tabs panel-default">
											   <?php if(isset($booking_list) && count($booking_list)>0){ ?>
											   <?php foreach($booking_list as $lis){ ?>
												  <div class="panel-body ">
													 <div class="tab-content">
														<form action="" method="">
														   <div class="row">
															  <div class="col-md-12 b-vans ">
																 <div class="panel-group row-sec" id="accordion">
																	<div class="panel panel-default">
																	   <div class="panel-heading">
																		  <h4 class="panel-title ">
																			 <div class="table-responsive">
																				<table width="100%">
																				   <thead class="black white-text row">
																					  <tr>
																						 <th class="col-md-1">Date/time</th>
																						 <th class="col-md-2">Booking Information</th>
																						 <th class="col-md-2">Load/Board Point </th>
																						 <th class="col-md-2">Service-info</th>
																						 <th class="col-md-2">Customer Option</th>
																						 <th class="col-md-1">Status</th>
																						 <th class="col-md-1">Action</th>
																					  </tr>
																				   </thead>
																				</table>
																			 </div>
																		  </h4>
																	   </div>
																	</div>
																	<div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
																	   <h4 class="panel-title vechiles-list">
																		  <div class="expand" >
																			 <div data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="right-arrow " style="">+</div>
																			 <div class="form-group">
																				<a href="#">
																				<button type="button" class="btn btn-default btn-sm btn-block toggle-vechile-info-btn1 more_button right-arrow2">more information<i class="fa fa-arrow-down" aria-hidden="true"></i></button>
																				</a>
																			 </div>
																		  </div>
																		  <div class="table-responsive table_res">
																			 <table width="100%">
																				<tbody class="row">
																				   <tr>
																					  <td class="bv-vechile-info col-md-2">
																						 <div class="bvv-text form-group"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo isset($lis['date'])?$lis['date']:''; ?></div>
																						 <div class="bvv-text form-group"><i class="fa fa-calendar" aria-hidden="true"></i> 11 : 30 AM</div>
																					  </td>
																					  <td class="bv-capacity col-md-2">
																						 <table>
																							<thead></thead>
																							<tbody>
																							   <tr>
																								  <th>BookingID</th>
																								  <td>: <?php echo isset($lis['f_l_id'])?$lis['f_l_id']:''; ?></td>
																							   </tr>
																							   <tr>
																								  <th>InvoiceNo </th>
																								  <td>: 9856345</td>
																							   </tr>
																							   <tr>
																								  <th>Lorry No</th>
																								  <td>: TS67</td>
																							   </tr>
																							   <tr>
																								  <th>Way Bill No </th>
																								  <td>: 45673</td>
																							   </tr>
																							   <tr>
																								  <th>Billti No </th>
																								  <td>: 98567</td>
																							   </tr>
																							</tbody>
																						 </table>
																					  </td>
																					  <td class="bv-loading-dt col-md-2">
																						 <table>
																							<thead></thead>
																							<tbody>
																							<?php if(isset($lis['droping_list']) && count($lis['droping_list'])>0){ ?>
																							   <tr>
																								  <th>Date</th>
																								  <th>Loading Point</th>
																								  <th>Boarding Point</th>
																							   </tr>
																								   <?php foreach($lis['droping_list'] as $l){ ?>
																								   <tr>
																									  <td><?php echo isset($l['date'])?$l['date']:''; ?></td>
																									  <td><?php echo isset($l['loading_point'])?$l['loading_point']:''; ?></td>
																									  <td><?php echo isset($l['droping_point'])?$l['droping_point']:''; ?></td>
																								   </tr>
																								   <?php } ?>
																							   <?php } ?>
																							   
																							   <tr>
																								  <th colspan="2">Route Info:</th>
																							   </tr>
																							   <tr>
																								  <td>Hyderabad</td>
																								  <td>:Bangalore</td>
																							   </tr>
																							</tbody>
																						 </table>
																					  </td>
																					  <td class="bv-capacity col-md-2">
																						 <table>
																							<thead></thead>
																							<tbody>
																							   <tr>
																								  <th>Size</th>
																								  <td>: 20cm</td>
																							   </tr>
																							   <tr>
																								  <th>Type </th>
																								  <td>: steel</td>
																							   </tr>
																							   <tr>
																								  <th>Capacity</th>
																								  <td>: 5</td>
																							   </tr>
																							</tbody>
																						 </table>
																					  </td>
																					  <td class="bv-capacity col-md-2">
																						 <table>
																							<thead></thead>
																							<tbody>
																							   <tr>
																								  <th></th>
																								  <th>Date</th>
																								  <th>Time</th>
																							   </tr>
																							   <tr>
																								  <td>Hyderabad</td>
																								  <td>08/05/2019</td>
																								  <td>11:00AM</td>
																							   </tr>
																							   <tr>
																								  <td>Bangalore</td>
																								  <td>09/05/2019</td>
																								  <td>05:00PM</td>
																							   </tr>
																							   <tr>
																								  <td colspan="3">
																									 <p><i class="fa fa-clock-o"></i> 16 hrs</p>
																								  </td>
																							   </tr>
																							</tbody>
																						 </table>
																					  </td>
																					  <td class="bv-capacity col-md-2">
																						 <div class="form-group">
																							<p><?php if($lis['status']==1){ echo "Pending";}else if($lis['status']==2){ echo "Accept"; }else if($lis['status']==3){ echo "Reject"; }else if($lis['status']==4){ echo "Refund"; } else if($lis['status']==5){ echo "Cancel"; }else if($lis['status']==6){ echo "Delivered"; }else if($lis['status']==7){ echo "Pickup"; }else if($lis['status']==8){ echo "Onthe way"; } ?></p>
																						 </div>
																					  </td>
																					  <td class="bv-capacity col-md-2">
																					  	<div class="form-group"><a href="<?php echo base_url('loadmanage/status/'.base64_encode($lis['f_l_id']).'/'.base64_encode(2)); ?>"><button type="button" class="btn btn-default btn-sm btn-block confirmation" >Accept</button></a></div>
																						 <div class="form-group"><button type="button" class="btn btn-default btn-sm btn-block" data-toggle="modal" data-target="#myModal">View Details</button></div>
																						 <div class="modal fade" id="myModal" role="dialog">
																							<div class="modal-dialog">
																							   <!-- Modal content-->
																							   <div class="modal-content">
																								  <div class="modal-header btn-danger">
																									 <button type="button" class="close" data-dismiss="modal">&times;</button>
																									 <h4 class="modal-title">Vehicle Details</h4>
																								  </div>
																								  <div class="modal-body table-responsive">
																									 <table class="table table-bordered" style="width:100%">
																										<thead></thead>
																										<tbody class="row">
																										   <tr>
																											  <th>Owner Name</th>
																											  <td>: Venkateswarlu</td>
																										   </tr>
																										   <tr>
																											  <th>Reg No</th>
																											  <td>: TS67</td>
																										   </tr>
																										   <tr>
																											  <th>Modal No</th>
																											  <td>: TATA 1109</td>
																										   </tr>
																										   <tr>
																											  <th>Driver Name</th>
																											  <td>: Ragendra<a href="#"  data-toggle="modal" data-target="#edit_vehicle"><i class="fa fa-pencil-square-o fa" aria-hidden="true"></i></a></td>
																										   </tr>
																										   <tr>
																											  <th>Billti No </th>
																											  <td>: 98567</td>
																										   </tr>
																										</tbody>
																									 </table>
																								  </div>
																								  <div class="modal-footer">
																									 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																								  </div>
																							   </div>
																							</div>
																						 </div>
																						 <div class="form-group"><a href="<?php echo base_url('loadmanage/status/'.base64_encode($lis['f_l_id']).'/'.base64_encode(3)); ?>" class="btn btn-default btn-sm btn-block confirmation" >Reject</a></div>
																						 <div><a href="<?php echo base_url('loadmanage/status/'.base64_encode($lis['f_l_id']).'/'.base64_encode(4)); ?>"><button type="button" class="btn btn-default btn-sm btn-block confirmation">Refund</button></a></div>
																					  </td>
																				   </tr>
																				</tbody>
																			 </table>
																			 <div style="display:none" id="toggle-vechile-info1">
																				<table width="100%">
																				   <tbody class="row">
																					  <tr>
																						 <td class="bv-vechile-info col-md-1">&nbsp;</td>
																						 <td class="bv-capacity col-md-2">&nbsp;</td>
																						 <td class="bv-rating col-md-2">&nbsp;</td>
																						 <td class="bv-capacity col-md-2">
																							<table>
																							   <thead></thead>
																							   <tbody class="row">
																								  <tr>
																									 <td>15000/-</td>
																									 <td>5000/-</td>
																								  </tr>
																								  <tr>
																									 <td>10000/-</td>
																									 <td>3000/-</td>
																								  </tr>
																								  <tr>
																									 <td>12000/-</td>
																									 <td>3500/-</td>
																								  </tr>
																								  <tr>
																									 <td>9000/-</td>
																									 <td>1500/-</td>
																								  </tr>
																								  <tr>
																									 <td>10000/-</td>
																									 <td>3000/-</td>
																								  </tr>
																								  <tr>
																									 <td>12000/-</td>
																									 <td>3500/-</td>
																								  </tr>
																								  <tr>
																									 <td>9000/-</td>
																									 <td>1500/-</td>
																								  </tr>
																							   </tbody>
																							</table>
																						 </td>
																						 <td class="bv-capacity col-md-1">&nbsp;</td>
																						 <td class="bv-capacity col-md-1">&nbsp;</td>
																						 <td class=" col-md-2">
																							<div class="form-group"><button type="button" class="btn btn-default btn-sm btn-block">Print Tax Invoice</button></div>
																							<div class="form-group"><button type="button" class="btn btn-default btn-sm btn-block" >On Way</button></div>
																							<div class="form-group"><button type="button" class="btn btn-default btn-sm btn-block" >Reject</button></div>
																							<div><a href="#"><button type="button" class="btn btn-default btn-sm btn-block">Cance1</button></a></div>
																						 </td>
																						 <!--<td class="bv-book col-md-1"><a href="order-conformation-fl.php" class="btn btn-md btn-warning">Book Now</a></td>-->
																					  </tr>
																				   </tbody>
																				</table>
																			 </div>
																		  </div>
																	   </h4>
																	</div>
																	<div id="collapse1" class="panel-collapse collapse">
																	   <div class="panel-body border-1px-ddd py-3 px-4">
																		  <div class="row">
																			 <div class="col-md-12">
																				<ul class="nav nav-tabs">
																				   <li class="active"><a data-toggle="tab" href="#tab1_load">Reviews</a>
																				   </li>
																				   <li><a data-toggle="tab" href="#tab2_load">Features</a>
																				   </li>
																				   <li><a data-toggle="tab" href="#tab3_load">Vechile Images</a>
																				   </li>
																				</ul>
																				<div class="tab-content">
																				   <div id="tab1_load" class="tab-pane fade in active">
																					  <div class="media mt-10">
																						 <div class="media-left">
																							<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																						 </div>
																						 <div class="media-body">
																							<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																							<div class="rating mb-0">
																							   <ul class="list-inline">
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																								  </li>
																							   </ul>
																							</div>
																							<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																						 </div>
																					  </div>
																					  <div class="media mt-10">
																						 <div class="media-left">
																							<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																						 </div>
																						 <div class="media-body">
																							<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																							<div class="rating mb-0">
																							   <ul class="list-inline">
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																								  </li>
																							   </ul>
																							</div>
																							<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																						 </div>
																					  </div>
																					  <div class="media mt-10">
																						 <div class="media-left">
																							<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																						 </div>
																						 <div class="media-body">
																							<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																							<div class="rating mb-0">
																							   <ul class="list-inline">
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																								  </li>
																							   </ul>
																							</div>
																							<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																						 </div>
																					  </div>
																				   </div>
																				   <div id="tab2_load" class="tab-pane fade">
																					  <p class="mt-10">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
																					  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
																				   </div>
																				   <div id="tab3_load" class="tab-pane fade">
																					  <div class="mt-10">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
																					  </div>
																				   </div>
																				</div>
																			 </div>
																		  </div>
																	   </div>
																	</div>
																	<br>
																	<!-- One Vechile -->
																 </div>
															  </div>
														   </div>
														</form>
													 </div>
												  </div>
												  <?php } ?>
												  <?php }else{ ?>
												  <div>No data</div>
												  <?php } ?>
											   </div>
											</section>
											</div


								<!-- tab one --->
								<!-- tab two --->
								
								
									<div id="tab2" class="tab-pane fade">
										<section class="content">
										   <h3>Cancel Bookings</h3>
										   <div class="panel with-nav-tabs panel-default">
										   <?php if(isset($cancel_list) && count($cancel_list)>0){ ?>
											   <?php foreach($cancel_list as $lis){ ?>
												  <div class="panel-body ">
													 <div class="tab-content">
														<form action="" method="">
														   <div class="row">
															  <div class="col-md-12 b-vans ">
																 <div class="panel-group row-sec" id="accordion">
																	<div class="panel panel-default">
																	   <div class="panel-heading">
																		  <h4 class="panel-title ">
																			 <div class="table-responsive">
																				<table width="100%">
																				   <thead class="black white-text row">
																					  <tr>
																						 <th class="col-md-1">Date/time</th>
																						 <th class="col-md-2">Booking Information</th>
																						 <th class="col-md-2">Load/Board Point </th>
																						 <th class="col-md-2">Service-info</th>
																						 <th class="col-md-2">Customer Option</th>
																						 <th class="col-md-1">Status</th>
																					  </tr>
																				   </thead>
																				</table>
																			 </div>
																		  </h4>
																	   </div>
																	</div>
																	<div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
																	   <h4 class="panel-title vechiles-list">
																		  <div class="expand" >
																			 <div data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="right-arrow " style="">+</div>
																			 <div class="form-group">
																				<a href="#">
																				<button type="button" class="btn btn-default btn-sm btn-block toggle-vechile-info-btn1 more_button right-arrow2">more information<i class="fa fa-arrow-down" aria-hidden="true"></i></button>
																				</a>
																			 </div>
																		  </div>
																		  <div class="table-responsive table_res">
																			 <table width="100%">
																				<tbody class="row">
																				   <tr>
																					  <td class="bv-vechile-info col-md-2">
																						 <div class="bvv-text form-group"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo isset($lis['date'])?$lis['date']:''; ?></div>
																						 <div class="bvv-text form-group"><i class="fa fa-calendar" aria-hidden="true"></i> 11 : 30 AM</div>
																					  </td>
																					  <td class="bv-capacity col-md-2">
																						 <table>
																							<thead></thead>
																							<tbody>
																							   <tr>
																								  <th>BookingID</th>
																								  <td>: <?php echo isset($lis['f_l_id'])?$lis['f_l_id']:''; ?></td>
																							   </tr>
																							   <tr>
																								  <th>InvoiceNo </th>
																								  <td>: 9856345</td>
																							   </tr>
																							   <tr>
																								  <th>Lorry No</th>
																								  <td>: TS67</td>
																							   </tr>
																							   <tr>
																								  <th>Way Bill No </th>
																								  <td>: 45673</td>
																							   </tr>
																							   <tr>
																								  <th>Billti No </th>
																								  <td>: 98567</td>
																							   </tr>
																							</tbody>
																						 </table>
																					  </td>
																					  <td class="bv-loading-dt col-md-2">
																						 <table>
																							<thead></thead>
																							<tbody>
																							<?php if(isset($lis['droping_list']) && count($lis['droping_list'])>0){ ?>
																							   <tr>
																								  <th>Date</th>
																								  <th>Loading Point</th>
																								  <th>Boarding Point</th>
																							   </tr>
																								   <?php foreach($lis['droping_list'] as $l){ ?>
																								   <tr>
																									  <td><?php echo isset($l['date'])?$l['date']:''; ?></td>
																									  <td><?php echo isset($l['loading_point'])?$l['loading_point']:''; ?></td>
																									  <td><?php echo isset($l['droping_point'])?$l['droping_point']:''; ?></td>
																								   </tr>
																								   <?php } ?>
																							   <?php } ?>
																							   
																							   <tr>
																								  <th colspan="2">Route Info:</th>
																							   </tr>
																							   <tr>
																								  <td>Hyderabad</td>
																								  <td>:Bangalore</td>
																							   </tr>
																							</tbody>
																						 </table>
																					  </td>
																					  <td class="bv-capacity col-md-2">
																						 <table>
																							<thead></thead>
																							<tbody>
																							   <tr>
																								  <th>Size</th>
																								  <td>: 20cm</td>
																							   </tr>
																							   <tr>
																								  <th>Type </th>
																								  <td>: steel</td>
																							   </tr>
																							   <tr>
																								  <th>Capacity</th>
																								  <td>: 5</td>
																							   </tr>
																							</tbody>
																						 </table>
																					  </td>
																					  <td class="bv-capacity col-md-2">
																						 <table>
																							<thead></thead>
																							<tbody>
																							   <tr>
																								  <th></th>
																								  <th>Date</th>
																								  <th>Time</th>
																							   </tr>
																							   <tr>
																								  <td>Hyderabad</td>
																								  <td>08/05/2019</td>
																								  <td>11:00AM</td>
																							   </tr>
																							   <tr>
																								  <td>Bangalore</td>
																								  <td>09/05/2019</td>
																								  <td>05:00PM</td>
																							   </tr>
																							   <tr>
																								  <td colspan="3">
																									 <p><i class="fa fa-clock-o"></i> 16 hrs</p>
																								  </td>
																							   </tr>
																							</tbody>
																						 </table>
																					  </td>
																					  <td class="bv-capacity col-md-2">
																						 <div class="form-group">
																							<p><?php if($lis['status']==1){ echo "Pending";}else if($lis['status']==2){ echo "Accept"; }else if($lis['status']==3){ echo "Reject"; }else if($lis['status']==4){ echo "Refund"; } else if($lis['status']==5){ echo "Cancel"; }else if($lis['status']==6){ echo "Delivered"; }else if($lis['status']==7){ echo "Pickup"; }else if($lis['status']==8){ echo "Onthe way"; } ?></p>
																						 </div>
																					  </td>
																					  
																				   </tr>
																				</tbody>
																			 </table>
																			 <div style="display:none" id="toggle-vechile-info1">
																				<table width="100%">
																				   <tbody class="row">
																					  <tr>
																						 <td class="bv-vechile-info col-md-1">&nbsp;</td>
																						 <td class="bv-capacity col-md-2">&nbsp;</td>
																						 <td class="bv-rating col-md-2">&nbsp;</td>
																						 <td class="bv-capacity col-md-2">
																							<table>
																							   <thead></thead>
																							   <tbody class="row">
																								  <tr>
																									 <td>15000/-</td>
																									 <td>5000/-</td>
																								  </tr>
																								  <tr>
																									 <td>10000/-</td>
																									 <td>3000/-</td>
																								  </tr>
																								  <tr>
																									 <td>12000/-</td>
																									 <td>3500/-</td>
																								  </tr>
																								  <tr>
																									 <td>9000/-</td>
																									 <td>1500/-</td>
																								  </tr>
																								  <tr>
																									 <td>10000/-</td>
																									 <td>3000/-</td>
																								  </tr>
																								  <tr>
																									 <td>12000/-</td>
																									 <td>3500/-</td>
																								  </tr>
																								  <tr>
																									 <td>9000/-</td>
																									 <td>1500/-</td>
																								  </tr>
																							   </tbody>
																							</table>
																						 </td>
																						 <td class="bv-capacity col-md-1">&nbsp;</td>
																						 <td class="bv-capacity col-md-1">&nbsp;</td>
																						 <td class=" col-md-2">
																							<div class="form-group"><button type="button" class="btn btn-default btn-sm btn-block">Print Tax Invoice</button></div>
																							<div class="form-group"><button type="button" class="btn btn-default btn-sm btn-block" >On Way</button></div>
																							<div class="form-group"><button type="button" class="btn btn-default btn-sm btn-block" >Reject</button></div>
																							<div><a href="#"><button type="button" class="btn btn-default btn-sm btn-block">Cance1</button></a></div>
																						 </td>
																						 <!--<td class="bv-book col-md-1"><a href="order-conformation-fl.php" class="btn btn-md btn-warning">Book Now</a></td>-->
																					  </tr>
																				   </tbody>
																				</table>
																			 </div>
																		  </div>
																	   </h4>
																	</div>
																	<div id="collapse1" class="panel-collapse collapse">
																	   <div class="panel-body border-1px-ddd py-3 px-4">
																		  <div class="row">
																			 <div class="col-md-12">
																				<ul class="nav nav-tabs">
																				   <li class="active"><a data-toggle="tab" href="#tab1_load">Reviews</a>
																				   </li>
																				   <li><a data-toggle="tab" href="#tab2_load">Features</a>
																				   </li>
																				   <li><a data-toggle="tab" href="#tab3_load">Vechile Images</a>
																				   </li>
																				</ul>
																				<div class="tab-content">
																				   <div id="tab1_load" class="tab-pane fade in active">
																					  <div class="media mt-10">
																						 <div class="media-left">
																							<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																						 </div>
																						 <div class="media-body">
																							<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																							<div class="rating mb-0">
																							   <ul class="list-inline">
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																								  </li>
																							   </ul>
																							</div>
																							<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																						 </div>
																					  </div>
																					  <div class="media mt-10">
																						 <div class="media-left">
																							<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																						 </div>
																						 <div class="media-body">
																							<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																							<div class="rating mb-0">
																							   <ul class="list-inline">
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																								  </li>
																							   </ul>
																							</div>
																							<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																						 </div>
																					  </div>
																					  <div class="media mt-10">
																						 <div class="media-left">
																							<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																						 </div>
																						 <div class="media-body">
																							<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																							<div class="rating mb-0">
																							   <ul class="list-inline">
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																								  </li>
																							   </ul>
																							</div>
																							<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																						 </div>
																					  </div>
																				   </div>
																				   <div id="tab2_load" class="tab-pane fade">
																					  <p class="mt-10">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
																					  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
																				   </div>
																				   <div id="tab3_load" class="tab-pane fade">
																					  <div class="mt-10">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
																					  </div>
																				   </div>
																				</div>
																			 </div>
																		  </div>
																	   </div>
																	</div>
																	<br>
																	<!-- One Vechile -->
																 </div>
															  </div>
														   </div>
														</form>
													 </div>
												  </div>
												  <?php } ?>
												  <?php }else{ ?>
												  <div>No data</div>
												  <?php } ?>
										   </div>
										</section>
									</div>


												<div id="tab3" class="tab-pane fade">
													<section class="content">
													   <h3>Deliver Bookings</h3>
													   <div class="panel with-nav-tabs panel-default">
														 <?php if(isset($delivery_list) && count($delivery_list)>0){ ?>
											   <?php foreach($delivery_list as $lis){ ?>
												  <div class="panel-body ">
													 <div class="tab-content">
														<form action="" method="">
														   <div class="row">
															  <div class="col-md-12 b-vans ">
																 <div class="panel-group row-sec" id="accordion">
																	<div class="panel panel-default">
																	   <div class="panel-heading">
																		  <h4 class="panel-title ">
																			 <div class="table-responsive">
																				<table width="100%">
																				   <thead class="black white-text row">
																					  <tr>
																						 <th class="col-md-1">Date/time</th>
																						 <th class="col-md-2">Booking Information</th>
																						 <th class="col-md-2">Load/Board Point </th>
																						 <th class="col-md-2">Service-info</th>
																						 <th class="col-md-2">Customer Option</th>
																						 <th class="col-md-1">Status</th>
																					  </tr>
																				   </thead>
																				</table>
																			 </div>
																		  </h4>
																	   </div>
																	</div>
																	<div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
																	   <h4 class="panel-title vechiles-list">
																		  <div class="expand" >
																			 <div data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="right-arrow " style="">+</div>
																			 <div class="form-group">
																				<a href="#">
																				<button type="button" class="btn btn-default btn-sm btn-block toggle-vechile-info-btn1 more_button right-arrow2">more information<i class="fa fa-arrow-down" aria-hidden="true"></i></button>
																				</a>
																			 </div>
																		  </div>
																		  <div class="table-responsive table_res">
																			 <table width="100%">
																				<tbody class="row">
																				   <tr>
																					  <td class="bv-vechile-info col-md-2">
																						 <div class="bvv-text form-group"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo isset($lis['date'])?$lis['date']:''; ?></div>
																						 <div class="bvv-text form-group"><i class="fa fa-calendar" aria-hidden="true"></i> 11 : 30 AM</div>
																					  </td>
																					  <td class="bv-capacity col-md-2">
																						 <table>
																							<thead></thead>
																							<tbody>
																							   <tr>
																								  <th>BookingID</th>
																								  <td>: <?php echo isset($lis['f_l_id'])?$lis['f_l_id']:''; ?></td>
																							   </tr>
																							   <tr>
																								  <th>InvoiceNo </th>
																								  <td>: 9856345</td>
																							   </tr>
																							   <tr>
																								  <th>Lorry No</th>
																								  <td>: TS67</td>
																							   </tr>
																							   <tr>
																								  <th>Way Bill No </th>
																								  <td>: 45673</td>
																							   </tr>
																							   <tr>
																								  <th>Billti No </th>
																								  <td>: 98567</td>
																							   </tr>
																							</tbody>
																						 </table>
																					  </td>
																					  <td class="bv-loading-dt col-md-2">
																						 <table>
																							<thead></thead>
																							<tbody>
																							<?php if(isset($lis['droping_list']) && count($lis['droping_list'])>0){ ?>
																							   <tr>
																								  <th>Date</th>
																								  <th>Loading Point</th>
																								  <th>Boarding Point</th>
																							   </tr>
																								   <?php foreach($lis['droping_list'] as $l){ ?>
																								   <tr>
																									  <td><?php echo isset($l['date'])?$l['date']:''; ?></td>
																									  <td><?php echo isset($l['loading_point'])?$l['loading_point']:''; ?></td>
																									  <td><?php echo isset($l['droping_point'])?$l['droping_point']:''; ?></td>
																								   </tr>
																								   <?php } ?>
																							   <?php } ?>
																							   
																							   <tr>
																								  <th colspan="2">Route Info:</th>
																							   </tr>
																							   <tr>
																								  <td>Hyderabad</td>
																								  <td>:Bangalore</td>
																							   </tr>
																							</tbody>
																						 </table>
																					  </td>
																					  <td class="bv-capacity col-md-2">
																						 <table>
																							<thead></thead>
																							<tbody>
																							   <tr>
																								  <th>Size</th>
																								  <td>: 20cm</td>
																							   </tr>
																							   <tr>
																								  <th>Type </th>
																								  <td>: steel</td>
																							   </tr>
																							   <tr>
																								  <th>Capacity</th>
																								  <td>: 5</td>
																							   </tr>
																							</tbody>
																						 </table>
																					  </td>
																					  <td class="bv-capacity col-md-2">
																						 <table>
																							<thead></thead>
																							<tbody>
																							   <tr>
																								  <th></th>
																								  <th>Date</th>
																								  <th>Time</th>
																							   </tr>
																							   <tr>
																								  <td>Hyderabad</td>
																								  <td>08/05/2019</td>
																								  <td>11:00AM</td>
																							   </tr>
																							   <tr>
																								  <td>Bangalore</td>
																								  <td>09/05/2019</td>
																								  <td>05:00PM</td>
																							   </tr>
																							   <tr>
																								  <td colspan="3">
																									 <p><i class="fa fa-clock-o"></i> 16 hrs</p>
																								  </td>
																							   </tr>
																							</tbody>
																						 </table>
																					  </td>
																					  <td class="bv-capacity col-md-2">
																						 <div class="form-group">
																							<p><?php if($lis['status']==1){ echo "Pending";}else if($lis['status']==2){ echo "Accept"; }else if($lis['status']==3){ echo "Reject"; }else if($lis['status']==4){ echo "Refund"; } else if($lis['status']==5){ echo "Cancel"; }else if($lis['status']==6){ echo "Delivered"; }else if($lis['status']==7){ echo "Pickup"; }else if($lis['status']==8){ echo "Onthe way"; } ?></p>
																						 </div>
																					  </td>
																					  
																				   </tr>
																				</tbody>
																			 </table>
																			 <div style="display:none" id="toggle-vechile-info1">
																				<table width="100%">
																				   <tbody class="row">
																					  <tr>
																						 <td class="bv-vechile-info col-md-1">&nbsp;</td>
																						 <td class="bv-capacity col-md-2">&nbsp;</td>
																						 <td class="bv-rating col-md-2">&nbsp;</td>
																						 <td class="bv-capacity col-md-2">
																							<table>
																							   <thead></thead>
																							   <tbody class="row">
																								  <tr>
																									 <td>15000/-</td>
																									 <td>5000/-</td>
																								  </tr>
																								  <tr>
																									 <td>10000/-</td>
																									 <td>3000/-</td>
																								  </tr>
																								  <tr>
																									 <td>12000/-</td>
																									 <td>3500/-</td>
																								  </tr>
																								  <tr>
																									 <td>9000/-</td>
																									 <td>1500/-</td>
																								  </tr>
																								  <tr>
																									 <td>10000/-</td>
																									 <td>3000/-</td>
																								  </tr>
																								  <tr>
																									 <td>12000/-</td>
																									 <td>3500/-</td>
																								  </tr>
																								  <tr>
																									 <td>9000/-</td>
																									 <td>1500/-</td>
																								  </tr>
																							   </tbody>
																							</table>
																						 </td>
																						 <td class="bv-capacity col-md-1">&nbsp;</td>
																						 <td class="bv-capacity col-md-1">&nbsp;</td>
																						 <td class=" col-md-2">
																							<div class="form-group"><button type="button" class="btn btn-default btn-sm btn-block">Print Tax Invoice</button></div>
																							<div class="form-group"><button type="button" class="btn btn-default btn-sm btn-block" >On Way</button></div>
																							<div class="form-group"><button type="button" class="btn btn-default btn-sm btn-block" >Reject</button></div>
																							<div><a href="#"><button type="button" class="btn btn-default btn-sm btn-block">Cance1</button></a></div>
																						 </td>
																						 <!--<td class="bv-book col-md-1"><a href="order-conformation-fl.php" class="btn btn-md btn-warning">Book Now</a></td>-->
																					  </tr>
																				   </tbody>
																				</table>
																			 </div>
																		  </div>
																	   </h4>
																	</div>
																	<div id="collapse1" class="panel-collapse collapse">
																	   <div class="panel-body border-1px-ddd py-3 px-4">
																		  <div class="row">
																			 <div class="col-md-12">
																				<ul class="nav nav-tabs">
																				   <li class="active"><a data-toggle="tab" href="#tab1_load">Reviews</a>
																				   </li>
																				   <li><a data-toggle="tab" href="#tab2_load">Features</a>
																				   </li>
																				   <li><a data-toggle="tab" href="#tab3_load">Vechile Images</a>
																				   </li>
																				</ul>
																				<div class="tab-content">
																				   <div id="tab1_load" class="tab-pane fade in active">
																					  <div class="media mt-10">
																						 <div class="media-left">
																							<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																						 </div>
																						 <div class="media-body">
																							<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																							<div class="rating mb-0">
																							   <ul class="list-inline">
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																								  </li>
																							   </ul>
																							</div>
																							<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																						 </div>
																					  </div>
																					  <div class="media mt-10">
																						 <div class="media-left">
																							<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																						 </div>
																						 <div class="media-body">
																							<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																							<div class="rating mb-0">
																							   <ul class="list-inline">
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																								  </li>
																							   </ul>
																							</div>
																							<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																						 </div>
																					  </div>
																					  <div class="media mt-10">
																						 <div class="media-left">
																							<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																						 </div>
																						 <div class="media-body">
																							<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																							<div class="rating mb-0">
																							   <ul class="list-inline">
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																								  </li>
																								  <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																								  </li>
																							   </ul>
																							</div>
																							<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																						 </div>
																					  </div>
																				   </div>
																				   <div id="tab2_load" class="tab-pane fade">
																					  <p class="mt-10">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
																					  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
																				   </div>
																				   <div id="tab3_load" class="tab-pane fade">
																					  <div class="mt-10">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
																						 <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
																					  </div>
																				   </div>
																				</div>
																			 </div>
																		  </div>
																	   </div>
																	</div>
																	<br>
																	<!-- One Vechile -->
																 </div>
															  </div>
														   </div>
														</form>
													 </div>
												  </div>
												  <?php } ?>
												  <?php }else{ ?>
												  <div>No data</div>
												  <?php } ?>
														 
													   </div>
													</section>
												</div>


							</div>
						</div>
					</div>
				
			</div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
$(document).ready(function() {
            $('.confirmation').on('click', function() {
                return confirm('Are you sure of deleting category?');
            });
        });
	$(document).ready(function(){
	  $(".toggle-vechile-info-btn1").click(function(){
	    $("#toggle-vechile-info1").toggle();
	  });
	});
	$(document).ready(function(){
	  $(".toggle-vechile-info-btn2").click(function(){
	    $("#toggle-vechile-info2").toggle();
	  });
	});
	$(document).ready(function(){
	  $(".toggle-vechile-info-btn3").click(function(){
	    $("#toggle-vechile-info3").toggle();
	  });
	});
</script>
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
<script>
    $(document).ready(function() {
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function(e) {

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        });
        $(".prev-step").click(function(e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }

    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }
</script>

<script>
    //Date picker
    $('.datepicker').datepicker({
        autoclose: true
    });
</script>	