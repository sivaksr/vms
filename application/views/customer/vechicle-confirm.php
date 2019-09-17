<?php include( "header.php"); ?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header"></section>
	<section class="content">
		<div class="panel with-nav-tabs panel-default">
			<div class="panel-heading">
				<div class="row">
					<div class="col-md-3">
						<h3 class="mt-0 mb-0">Vehicle Ids</h3>
					</div>
					<div class="col-md-9">
						<div class="stepper">
							<ul class="nav nav-tabs">
								<li role="presentation" class="completed">
									<a class="persistant-disabled" href="customer-search.php" title="Step 1"> <span class="round-tab">1</span>
									</a>
								</li>
								<li role="presentation" class="completed">
									<a class="persistant-disabled" href="vechilelist.php" title="Step 2"> <span class="round-tab">2</span>
									</a>
								</li>
								<li role="presentation" class="active">
									<a class="persistant-disabled" href="#" title="Step 3"> <span class="round-tab">3</span>
									</a>
								</li>
								<li role="presentation" class="disabled">
									<a class="persistant-disabled" href="#" title="Step 4"> <span class="round-tab">4</span>
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
								<div class="payment-success">
									<div class="row">
										<div class="col-lg-6 card col-md-offset-3">
											<div class="text-center">	<i class="fa fa-check-circle fa-5x" style="color:#34bc9b" aria-hidden="true"></i>
												<h3>Booking Id : VMS001</h3>
												<h5>You successfully created your booking</h5>
											</div>
											<div class="table-responsive">
												<table class="table table-striped">
													<thead></thead>
													<tbody>
														<tr>
															<td>Distance</td>
															<th>500Kms</th>
														</tr>
														<tr>
															<td>Tax</td>
															<th>18%</th>
														</tr>
														<tr>
															<td>Special Charges</td>
															<th>1000</th>
														</tr>
														<tr>
															<td>Toll Gate</td>
															<th>500</th>
														</tr>
														<tr>
															<td>Total Amount</td>
															<th>10000</th>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label>Type Of Payment</label>
													&nbsp; &nbsp;  <input type="radio" /> Cash
													&nbsp; &nbsp; <input type="radio" /> Online Payment 
													<!-- /.input group -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<ul class="list-inline pull-right">
								<li><a href="payment-vechicle.php" type="button" class="btn btn-primary next-step">Procced to Payment</a>
								</li>
							</ul>
					</form>
					</div>
				</div>
			</div>
	</section>
	<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<?php include( "footer.php"); ?>