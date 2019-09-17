<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
            Driver
        </h1>
		<ol class="breadcrumb">
			<li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li>Listing</li>
			<li class="active">Driver</li>
		</ol>
	</section>
	<section class="content">
		<div class="panel with-nav-tabs panel-default">
			<div class="panel-heading">
				<h4 class="m-0 pull-left">Driver</h4>
				<span class="pull-right"><a href="<?php echo base_url('driver/add'); ?>" class="btn btn-primary btn-sm">+ Add driver</a></span>
				<div class="clearfix">&nbsp;</div>
			</div>
			<?php if(isset($drivers_list) && count($drivers_list)>0){ ?>
			<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title ">
                                                <div class="table-responsive">
                                                    <table width="100%">
                                                        <thead class="black white-text row">
                                                            <tr>
                                                                <th class="col-md-3">Driver Info</th>
                                                                <th class="col-md-2">Basic info</th>
																<th class="col-md-3">Rating</th>
                                                                <th class="col-md-2">Driver</th>
                                                                <th class="col-md-2">Action</th>
                                                            </tr>
                                                        </thead>

                                                    </table>
                                                </div>
                                            </h4>
										</div>
									</div>
		<?php $cnt=1;foreach($drivers_list as $list){ ?>
			<div class="panel-body ">
				<div class="tab-content">
					<form action="" method="">
						<div class="row">
							<div class="col-md-12 b-vans ">
								<div class="panel-group row-sec" id="accordion">
									
									<div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
										<h4 class="panel-title vechiles-list">
                                            <div class="expand" id="expand_content">
                                                <div data-toggle="collapse" data-parent="#accordion" data-target="#collapse1" class="right-arrow " style="">+</div>
                                            </div>
                                            <div class="table-responsive">
                                                <table width="100%">

                                                    <tbody class="row">
                                                        <tr>
                                                            <td class="bv-vechile-info col-md-2">
                                                                <div class="bvv-text"><?php echo isset($list['name'])?$list['name']:''; ?> </div>
																<div class="bvv-number"><?php echo isset($list['mobile_num'])?$list['mobile_num']:''; ?></div>
                                                                <div class="text-center">
																<?php if($list['material_icon']!=''){ ?>
                                                                    <img height="100px" width="100px" src="<?php echo base_url('assets/driver/'.$list['material_icon']); ?>">
																<?php }else{ ?>
																	<img src="<?php echo base_url(); ?>assets/vendor/backend/img/user.png">
																<?php } ?>
                                                                </div>
                                                            </td>
                                                            <td class="bv-capacity col-md-2">
															<table>
															<thead></thead>
															<tbody>
															<tr>
															<th>DL No</th>
															<td>: <?php echo isset($list['driving_lic_no'])?$list['driving_lic_no']:''; ?></td>
															</tr>
															<tr>
															<th>RTO Permission </th>
															<td>: <?php echo isset($list['rto_permission'])?$list['rto_permission']:''; ?></td>
															</tr>
															<tr>
															<th>Vehicle </th>
															<td>: <?php echo isset($list['m_type'])?$list['m_type']:''; ?></td>
															</tr>
															<tr>
															<th>Experience </th>
															<td>: <?php echo isset($list['experience'])?$list['experience']:''; ?></td>
															</tr>
															<tr>
															<th>Address </th>
															<td>: <?php echo isset($list['address'])?$list['address']:''; ?></td>
															</tr>
															</tbody>
															</table>
                                                             
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
                                                            <td class="bv-capacity col-md-2">
                                                                <div class="form-group bvv-text">Vehicle type : <?php echo isset($list['vehicle_type'])?$list['vehicle_type']:''; ?></div>
                                                                <div class="form-group bvv-text">Salary : <?php echo isset($list['salary'])?$list['salary']:''; ?></div>
																
                                                            </td>
                                                            <td class="bv-capacity col-md-2">
																<div class="form-group"><button type="button" class="btn btn-default btn-sm btn-block" disabled><?php if($list['status']==1){ echo "Active"; }else{ echo "Deactive"; } ?></button></div>
																<div class="form-group"><button type="button" class="btn btn-default btn-sm btn-block" data-toggle="modal" data-target="#myModal<?php echo $cnt; ?>">Details</button></div>

  <!-- Modal -->
  <div class="modal fade" id="myModal<?php echo $cnt; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header btn-danger">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Driver Details</h4>
        </div>
        <div class="modal-body table-responsive">
		<table class="table-bordered" style="width:100%">
		<thead></thead>
		<tbody class="row">
		<tr>
		<th>Owner Name</th>
          <td>: <?php echo isset($list['name'])?$list['name']:''; ?></td>
		  </tr>
		<tr>
		<th>Mobile No</th>
          <td>: <?php echo isset($list['mobile_num'])?$list['mobile_num']:''; ?></td>
		  </tr>
		  <tr>
		<th>DL No</th>
          <td>: <?php echo isset($list['driving_lic_no'])?$list['driving_lic_no']:''; ?></td>
		  </tr>
		  <tr>
		<th>RTO Permission</th>
          <td>: <?php echo isset($list['rto_permission'])?$list['rto_permission']:''; ?></td>
		  </tr>
		  <tr>
		<th>Vehicle</th>
          <td>: <?php echo isset($list['m_type'])?$list['m_type']:''; ?></td>
		  </tr>
		  <tr>
          <th>Experience</th>
          <td>: <?php echo isset($list['experience'])?$list['experience']:''; ?></td>
		  </tr>
		  <tr>
          <th>Address</th>
          <td>: <?php echo isset($list['address'])?$list['address']:''; ?></td>
		  </tr>
		  <tr>
          <th>Rating </th>
		  <td>: 4.3</td>
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
  <div class="form-group"><a href="<?php echo base_url('driver/edit/'.base64_encode($list['d_id'])); ?>"><button type="button" class="btn btn-default btn-sm btn-block">Edit</button></a></div>
  <div class="form-group"><a href="<?php echo base_url('driver/delete/'.base64_encode($list['d_id'])); ?>"><button type="button" class="btn btn-default btn-sm btn-block confirmation">Delete</button></a></div>
	</td>
                                                            

                                                            <!--<td class="bv-book col-md-1">
                                                                <a href="order-conformation-fl.php" class="btn btn-md btn-warning">Book Now</a>
                                                            </td>-->
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </h4>
										
									</div>
									<div id="collapse1" class="panel-collapse collapse">
										<div class="panel-body border-1px-ddd py-3 px-4">
											<div class="row">
												<div class="col-md-12">
													<ul class="nav nav-tabs">
														<li class="active"><a data-toggle="tab" href="#tab1">Reviews</a>
														</li>
														<li><a data-toggle="tab" href="#tab2">Features</a>
														</li>
														<li><a data-toggle="tab" href="#tab3">Vechile Images</a>
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
														<div id="tab2" class="tab-pane fade">
															<p class="mt-10">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
															<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
														</div>
														<div id="tab3" class="tab-pane fade">
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
			
			<?php $cnt++;} ?>
			<?php } ?>
	
</div>
</section>
<!-- /.content -->
<div class="p-5"></div>
</div>
<!-- /.content-wrapper -->
<script>
  $('.confirmation').on('click', function() {
        return confirm('Are you sure of deleting?');
      });
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
