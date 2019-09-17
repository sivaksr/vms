<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        
    </section>

    <section class="content">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="mt-0 mb-0">Vehicles List</h3>
                    </div>
                    <div class="col-md-8">
                        <div class="stepper">
                            <ul class="nav nav-tabs">
                                <li role="presentation" class="completed">
                                    <a class="persistant-disabled" href="" title="Step 1">
                                        <span class="round-tab">1</span>
                                    </a>
                                </li>
                                <li role="presentation" class="active">
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
					<div class="col-md-1 filters-list" style="cursor:pointer;">
						<i class="fa fa-filter" aria-hidden="true"> Filters</i> 
					</div>
                </div>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <form action="" method="">
                        <div class="row filters-content" style="display:none;">
							<div class="col-md-3">
								<div class="h4">
									Loading Time
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">7:30 AM – 12:00 PM</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">7:30 AM – 12:00 PM</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">7:30 AM – 12:00 PM</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">7:30 AM – 12:00 PM</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">7:30 AM – 12:00 PM</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">7:30 AM – 12:00 PM</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">7:30 AM – 12:00 PM</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">7:30 AM – 12:00 PM</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">7:30 AM – 12:00 PM</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">7:30 AM – 12:00 PM</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">7:30 AM – 12:00 PM</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">7:30 AM – 12:00 PM</label>
								</div>
								
							</div>	
							<div class="col-md-3">
								<div class="h4">
									Vechile Type</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">Small</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">Medium</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">Large</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">Ex-Large</label>
								</div>
							</div>	
							<div class="col-md-3">
								<div class="h4">
									Pickup Point</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">Kukatpaly</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">Ameerpet</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">Miyapur</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">Ex-Large</label>
								</div>
							</div>
							<div class="col-md-3">
								<div class="h4">
									Deliver Point</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">Guntur</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">Ameerpet</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">Miyapur</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">Ex-Large</label>
								</div>
							</div>
						</div></form>
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
                                                                <th class="">Vehicle Info</th>
                                                                <th class="">Capacity</th>
                                                                <th class="">Available Date / Time</th>
                                                                <th class="">Estimated Time</th>
                                                                <th class="">Rating</th>
                                                              
                                                                <th class="">Price</th>
																  <th class="">No.of Load - 2</th>
                                                                <th class="">   <a href="vechicle-confirm.php" class="btn btn-md btn-warning btn-xs">Book Now</a></th>
                                                            </tr>
                                                        </thead>

                                                    </table>
                                                </div>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
                                        <h4 class="panel-title vechiles-list">
                                            <!--<div class="expand">
                                                <div data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="right-arrow " style="">+</div>
                                            </div>-->
                                            <div class="table-responsive">
                                                <table width="100%">

                                                    <tbody class="row">
                                                        <tr>
                                                            <td class="bv-vechile-info ">
                                                                <p class="bvv-number">15820</p>
                                                                <div class="text-center">
                                                                    <i class="fa fa-truck fa-5x"></i>
                                                                    <br>
                                                                    <p class="bvv-name">TATA 1109</p>
                                                                </div>
                                                            </td>
                                                            <td class="bv-capacity ">
                                                                <p><i class="fa fa-balance-scale"></i> 16 Ton</p>
                                                                <p><i class="fa fa-arrows-h"></i> 18 fit</p>
                                                            </td>
                                                            <td class="bv-loading-dt ">
                                                                <div class="media">
                                                                    <i class="fa fa-calendar fa-2x mt-2"></i>
                                                                    <div class="media-body">
                                                                        <p class="">06:00 - 10:00 AM</p>
                                                                        <p class="pt-0">02/01/1995</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="bv ">
                                                                <p><i class="fa fa-clock-o"></i> 16 hrs</p>
                                                            </td>
                                                            <td class="bv-rating " style="width:100px;">
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
                                                            <td class=" ">
                                                                <h4>INR 6000.00</h4>
                                                            </td> 
															<td class=" ">
                                                               &nbsp;
                                                            </td>

                                                            <td class="bv-book ">
                                                                <a class="btn btn-md btn-warning">Add</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </h4>
										<div style="position:absolute;right:0;top:0px; width:60%">
									<div class="row">
										<div class="col-md-5">
											<h5 class="pull-right">Distance between Customer <i class="fa fa-user text-warning" aria-hidden="true"></i> </h5>
										</div>
										<div class="col-md-2">
									<div>&nbsp;</div>
											<div class="" style="height:3px;background-color:red; width:100%"></div>
											<h5 class="text-center ">5KM </h5>
										</div>
										<div class="col-md-5">
											<h5> <i class="fa fa-truck text-danger" aria-hidden="true"></i>    Driver</h5>
										</div>
									</div>
								</div>
                                        <div class="clearfix">&nbsp;</div>
                                    </div>

                                    <div id="collapse1" class="panel-collapse collapse">
                                        <div class="panel-body border-1px-ddd py-3 px-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a data-toggle="tab" href="#tab1">Reviews</a></li>
                                                        <li><a data-toggle="tab" href="#tab2">Features</a></li>
                                                        <li><a data-toggle="tab" href="#tab3">Vechile Images</a></li>
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
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                                    congue felis in faucibus.</p>
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
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                                    congue felis in faucibus.</p>
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
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                                    congue felis in faucibus.</p>
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
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
	$(".filters-list").click(function(){
  $(".filters-content").toggle();
});
</script>
<?php include("footer.php"); ?>