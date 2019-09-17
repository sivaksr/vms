<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
            Vehicle
        </h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url('dashboard'); ?>">	<i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li>Listing</li>
			<li class="active">Vehicle</li>
		</ol>
	</section>
	<section class="content">
		<div class="panel with-nav-tabs panel-default">
			<div class="panel-heading">
				<h4 class="m-0 pull-left">Select your module</h4>
				<span class="pull-right">
					<a href="<?php echo base_url('vehicle/add'); ?>" class="btn btn-primary btn-sm">+ Add Vehicle</a>
				</span>
				<div class="clearfix">&nbsp;</div>
			</div>
			<?php if(isset($vehicle_list) && count($vehicle_list)>0){ ?>
			<div class="panel panel-default ">
										<div class="panel-heading">
											<h4 class="panel-title ">
												<div class="table-responsive">
													<table width="100%">
														<thead class="black white-text row">
															<tr>
																<th class="col-md-2">Vehicle Info</th>
																<th class="col-md-2">Capacity</th>
																<th class="col-md-2">Rating</th>
																<th class="col-md-2">Driver</th>
																<th class="col-md-2">Action</th>
															</tr>
														</thead>
													</table>
												</div>
											</h4>
										</div>
									</div>
			<?php $cnt=1;foreach($vehicle_list as $lis){ ?>
			<div class="panel-body ">
				<div class="tab-content">
					<form action="" method="">
						<div class="row">
							<div class="col-md-12 b-vans ">
								<div class="panel-group row-sec" id="accordion">
									
									<div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
										<h4 class="panel-title vechiles-list">
											<div class="expand" id="expand_content">
												<div data-toggle="collapse" data-parent="#accordion" data-target="#collapse1<?php echo $cnt; ?>" class="right-arrow " style="">+</div>
											</div>
											<div class="table-responsive">
												<table width="100%">
													<tbody class="row">
														<tr>
															<td class="bv-vechile-info col-md-2">
																<div class="bvv-text"><?php echo isset($lis['o_name'])?$lis['o_name']:''; ?></div>
																<div class="bvv-number"><?php echo isset($lis['r_no'])?$lis['r_no']:''; ?></div>
																	<div class="text-center">
																		<i class="fa fa-truck fa-5x"></i>
																		<br>
																		<p class="bvv-name"><?php echo isset($lis['engine_no'])?$lis['engine_no']:''; ?></p>
																	</div>
																</td>
																<td class="bv-capacity col-md-2">
																	<table>
																		<thead></thead>
																		<tbody>
																			<tr>
																				<th>Registration Number </th>
																				<td>: <?php echo isset($lis['v_r_no'])?$lis['v_r_no']:''; ?></td>
																			</tr>
																			<tr>
																				<th>Height</th>
																				<td>: <?php echo isset($lis['high'])?$lis['high']:''; ?></td>
																			</tr>
																			<tr>
																				<th>Length</th>
																				<td>: <?php echo isset($lis['length'])?$lis['length']:''; ?></td>
																			</tr>
																			<tr>
																				<th>Width </th>
																				<td>: <?php echo isset($lis['width'])?$lis['width']:''; ?></td>
																			</tr>
																			
																			<tr>
																				<th>Manufacturer Name</th>
																				<td>: <?php echo isset($lis['v_manu_name'])?$lis['v_manu_name']:''; ?></td>
																			</tr>
																			<tr>
																				<th>Insurance </th>
																				<td>: <?php if($lis['insurance_img']!=''){ echo "Yes";}else{ echo "No"; } ?></td>
																			</tr>
																			<tr>
																				<th>Pollution</th>
																				<td>: <?php if($lis['pollution_img']!=''){ echo "Yes";}else{ echo "No"; } ?></td>
																			</tr>
																			<tr>
																				<th>RC </th>
																				<td>: <?php if($lis['rc_img']!=''){ echo "Yes";}else{ echo "No"; } ?></td>
																			</tr>
																		</tbody>
																	</table>
																</td>
																<td class="bv-rating col-md-2">
																	<p>4.5</p>
																	<ul class="list-inline">
																		<li class="list-inline-item">
																			<i class="fa fa-star"></i>
																		</li>
																		<li class="list-inline-item">
																			<i class="fa fa-star"></i>
																		</li>
																		<li class="list-inline-item">
																			<i class="fa fa-star"></i>
																		</li>
																		<li class="list-inline-item">
																			<i class="fa fa-star"></i>
																		</li>
																		<li class="list-inline-item">
																			<i class="fa fa-star-half-o"></i>
																		</li>
																	</ul>
																	<p class="text-mute">359 Reviews</p>
																	<p class="text-success">520 Load</p>
																</td>
																<td class="bv-capacity col-md-2">
																	<div class="form-group bvv-text">
																		Name : <?php echo isset($lis['dname'])?$lis['dname']:''; ?> <a href="#"  data-toggle="modal" data-target="#edit_vehicle<?php echo $cnt; ?>"><i class="fa fa-pencil-square-o fa" aria-hidden="true"></i></a>
																	
																	
																	</div>
																	<table>
																		<thead></thead>
																		<tbody class="row">
																			<tr>
																				<th>Driving Licence No </th>
																				<td><?php echo isset($lis['d_lic_num'])?$lis['d_lic_num']:''; ?></td>
																			</tr>
																			<tr>
																				<th>Driver id </th>
																				<td><?php echo isset($lis['driver_id'])?$lis['driver_id']:''; ?></td>
																			</tr>
																			
																		</tbody>
																	</table>
																</td>
																<td class="bv-capacity col-md-2">
																	<div class="form-group">
																		<button type="button" class="btn btn-default btn-sm btn-block"  disabled><?php if($lis['status']==1){ echo "Active";}else{ echo "Deactive";} ?></button>
																	</div>
																	<div class="form-group">
																		<button type="button" class="btn btn-default btn-sm btn-block" data-toggle="modal" data-target="#myModal<?php echo $cnt; ?>">Details</button>
																	</div>
																	<!-- Modal -->
																	<div class="modal fade" id="myModal<?php echo $cnt; ?>" role="dialog">
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
													<td>: <?php echo isset($lis['o_name'])?$lis['o_name']:''; ?></td>
												</tr>
												<tr>
													<th>Reg No</th>
													<td>: <?php echo isset($lis['r_no'])?$lis['r_no']:''; ?></td>
												</tr>
												<tr>
													<th>Registration No</th>
													<td>: <?php echo isset($lis['v_r_no'])?$lis['v_r_no']:''; ?></td>
												</tr>
												<tr>
													<th>Height</th>
													<td>: <?php echo isset($lis['high'])?$lis['high']:''; ?></td>
												</tr>	<tr>
													<th>Length</th>
													<td>: <?php echo isset($lis['length'])?$lis['length']:''; ?></td>
												</tr>
												<tr>
													<th>Width</th>
													<td>: <?php echo isset($lis['width'])?$lis['width']:''; ?></td>
												</tr>
												
												<tr>
													<th>Wheel Type</th>
													<td>: <?php echo isset($lis['vehicle_type'])?$lis['vehicle_type']:''; ?></td>
												</tr>
												<tr>
													<th>Rating</th>
													<td>: 4.3</td>
												</tr>
												<tr>
													<th>Road Permit</th>
													<td>: <?php if($lis['road_permit']!=''){ echo "Yes";}else{ echo "No"; } ?></td>
												</tr>
												<tr>
													<th>Insurance</th>
													<td>: <?php if($lis['insurance_img']!=''){ echo "Yes";}else{ echo "No"; } ?></td>
												</tr>
												<tr>
													<th>Fitness</th>
													<td>: <?php if($lis['fitness_img']!=''){ echo "Yes";}else{ echo "No"; } ?></td>
												</tr>
												<tr>
													<th>Pollution</th>
													<td>: <?php if($lis['pollution_img']!=''){ echo "Yes";}else{ echo "No"; } ?></td>
												</tr>
												<tr>
													<th>Rc</th>
													<td>: <?php if($lis['rc_img']!=''){ echo "Yes";}else{ echo "No"; } ?></td>
												</tr>
												<tr>
													<th>Fuel Capacity</th>
													<td>: <?php echo isset($lis['fuel_cap'])?$lis['fuel_cap']:''; ?></td>
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
						<div class="modal fade" id="edit_vehicle<?php echo $cnt; ?>" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header btn-danger">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Driver List</h4>
									</div>
									<div class="modal-body table-responsive">
										<table id="example" class="table table-striped table-bordered " style="width:100%">
											<thead>
												<tr>
													<th>Driver Name</th>
													<th>DL Number</th>
													<th>Rating</th>
													<th>Select</th>
												</tr>
											</thead>
											<tbody>
											<?php if(isset($driver_list) && count($driver_list)>0){ ?>
												<?php foreach($driver_list as $li){ ?>
												<tr>
													<td><?php echo $li['name']; ?></td>
													<td><?php echo $li['d_lic_num']; ?></td>
													<td>4.2</td>
													<td><input type="checkbox" onclick="d_check(<?php echo $lis['v_id']; ?>,<?php echo $li['d_id']; ?>)" class="d_l_c" name="d_id" id="d_id" value="<?php echo $li['d_id']; ?>"></td>
												</tr>
												<?php } ?>
											<?php } ?>
												
												
												</tfoot>
										</table>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<a href="<?php echo base_url('vehicle/edit/'.base64_encode($lis['v_id'])); ?>">
								<button type="button" class="btn btn-default btn-sm btn-block">Edit</button>
							</a>
						</div>
						<div class="form-group">
							<a href="#">
								<button type="button" class="btn btn-default btn-sm btn-block">Track</button>
							</a>
						</div>
						<div class="form-group">
							<a href="javascript:void(0);">
								<button type="button" class="btn btn-default btn-sm btn-block toggle-vechile-info<?php echo $cnt; ?>">more information</button>
							</a>
						</div>
						</td>
						</tr>
						</tbody>
						</table>
						<div style="display:none" id="toggle-vechile-info<?php echo $cnt; ?>">
							<table width="100%">
								<tbody class="row">
									<tr>
										<td class="bv-vechile-info col-md-2">&nbsp;</td>
										<td class="bv-capacity col-md-2">&nbsp;</td>
										<td class="bv-rating col-md-2">&nbsp;</td>
										<td class="bv-capacity col-md-2">
											<table>
												<thead></thead>
												<tbody class="row">
													<tr>
														<th>Registration No</th>
														<td>: <?php echo isset($lis['v_r_no'])?$lis['v_r_no']:''; ?></td>
													</tr><tr>
														<th>Model Name and number </th>
														<td>: <?php echo isset($lis['v_m_name_num'])?$lis['v_m_name_num']:''; ?></td>
													</tr><tr>
														<th>No of Wheel</th>
														<td>: <?php echo isset($lis['no_of_wheel'])?$lis['no_of_wheel']:''; ?></td>
													</tr><tr>
														<th>No of Axel</th>
														<td>: <?php echo isset($lis['no_of_axel'])?$lis['no_of_axel']:''; ?></td>
													</tr><tr>
														<th>Chassis No</th>
														<td>: <?php echo isset($lis['chassis_no'])?$lis['chassis_no']:''; ?></td>
													</tr><tr>
														<th>Engine No</th>
														<td>: <?php echo isset($lis['engine_no'])?$lis['engine_no']:''; ?></td>
													</tr>
												</tbody>
											</table>
										</td>
										<td class="bv-capacity col-md-2">&nbsp;</td>
										<!--<td class="bv-book col-md-1"><a href="order-conformation-fl.php" class="btn btn-md btn-warning">Book Now</a></td>-->
									</tr>
								</tbody>
							</table>
						</div>
				</div>
				</h4>
			</div>
			<div id="collapse1<?php echo $cnt; ?>" class="panel-collapse collapse">
				<div class="panel-body border-1px-ddd py-3 px-4">
					<div class="row">
						<div class="col-md-12">
							<ul class="nav nav-tabs">
								<li class="active">	<a data-toggle="tab" href="#tab1">Reviews</a>
								</li>
								<li>	<a data-toggle="tab" href="#tab2">Features</a>
								</li>
								<li>	<a data-toggle="tab" href="#tab3<?php echo $cnt; ?>">Vechile Images</a>
								</li>
							</ul>
							<div class="tab-content">
								<div id="tab1" class="tab-pane fade in active">
									<div class="media mt-10">
										<div class="media-left">
											<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
										</div>
										<div class="media-body">
											<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
											<div class="rating mb-0">
												<ul class="list-inline">
													<li class="list-inline-item mr-0">	<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item mr-0">	<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item mr-0">	<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item mr-0">	<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item mr-0">	<i class="fa fa-star-half-o"></i>
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
													<li class="list-inline-item mr-0">	<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item mr-0">	<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item mr-0">	<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item mr-0">	<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item mr-0">	<i class="fa fa-star-half-o"></i>
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
													<li class="list-inline-item mr-0">	<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item mr-0">	<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item mr-0">	<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item mr-0">	<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item mr-0">	<i class="fa fa-star-half-o"></i>
													</li>
												</ul>
											</div>
											<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
										</div>
									</div>
								</div>
								<div id="tab2" class="tab-pane fade">
									<p class="mt-10">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
									<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
								</div>
								<div id="tab3<?php echo $cnt; ?>" class="tab-pane fade">
									<div class="mt-10">
										<?php if(isset($lis['img_list']) && count($lis['img_list'])>0){ ?>
											<?php foreach($lis['img_list'] as $li){ ?>
												<img width="50px;" height="50px;" class="mr-3 img-thumbnail" src="<?php echo base_url('assets/vehicle/'.$li['img_name']); ?>" alt="<?php echo isset($li['img_org_name'])?$li['img_org_name']:''; ?>">
											<?php } ?>
										<?php } ?>
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
<script>
$(document).ready(function(){
	  $(".toggle-vechile-info<?php echo $cnt; ?>").click(function(){
	    $("#toggle-vechile-info<?php echo $cnt; ?>").toggle();
	  });
	});
</script>
<?php $cnt++;} ?>

<?php } ?>

</div>
</section>
<!-- /.content -->
<div class="p-5"></div>
</div>
<!-- /.content-wrapper -->
<script>
function d_check(vid,did){
	jQuery.ajax({
				url: "<?php echo base_url('Vehicle/update_drive');?>",
				data: {
					v_id:vid,
					d_id:did,
				},
				dataType: 'json',
				type: 'POST',
				success: function (data) {
					if(data.msg==1){
						 location.reload(); 
					}						
				}
		});
}
	    $('.d_l_c').on('change', function() {
		    $('.d_l_c').not(this).prop('checked', false);  
		});
	$(document).ready(function(){
	  $(".toggle-vechile-info-btn").click(function(){
	    $("#toggle-vechile-info").toggle();
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
	var coll = document.getElementsByClassName("collapsible");
	var i;
	
	for (i = 0; i < coll.length; i++) {
	  coll[i].addEventListener("click", function() {
	    this.classList.toggle("active");
	    var content = this.nextElementSibling;
	    if (content.style.maxHeight){
	      content.style.maxHeight = null;
	    } else {
	      content.style.maxHeight = content.scrollHeight + "px";
	    } 
	  });
	}
</script>
<script>
	$(document).ready(function() {
	    $('#example').DataTable();
	} )
</script>
