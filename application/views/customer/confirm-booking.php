<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Confirm Booking
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Confirm Booking</li>
      </ol>
    </section>

    <section class="content">
     <div class="panel with-nav-tabs panel-default">
                
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
							<div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Booking <h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
						<section>
        <div class="wizard">
            <form role="form">
                       <div class="row">
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Arrival Point</label>

								<div ">
						
								  <input type="text" class="form-control " name="username" placeholder="Enter Your Purpose" >
								</div>
								<!-- /.input group -->
							</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Destination point</label>
								<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter Your Purpose" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							 <div class="form-group">
							<label>Material type </label>
							<select class="form-control " style="width: 100%;">
							  
							  <option>Glass</option>
							  <option>Wood</option>
							  <option>
							  Plastic</option>
							 
							</select>
						  </div>
                        </div>
						<div class="col-md-2">
							 <div class="form-group">
							<label>Dimension </label>
							<select class="form-control " style="width: 100%;">
							  
							  <option>Inch</option>
							  <option>Meters</option>
							  <option>Feet</option>
							</select>
						  </div>
                        </div>
						<div class="col-md-4">
							<div class="form-group">
								<label class=" control-label">Enter Dimension</label>
								<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter Dimensions" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Weight </label>
								<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter Weight" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Number of items </label>
								<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter no of items" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Invoice value </label>
								<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter Invoice value" />
								</div>
							</div>
                        </div>
					   </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>Step 2</h3>
                        <div class="row">
							<div class="col-md-6">
							 <div class="form-group">
							<label>Select Vehicle</label>
							<select class="form-control " style="width: 100%;">
							  
							  <option>Tata Ace</option>
							  <option>Bolero Pick up</option>
							  <option>Tata 40</option>
							  <option>Eicher 14 Ft</option>
							  <option>Eicher 17 Ft</option>
							  <option>Eicher 19 Ft</option>
							  <option>20 Ft closed Containers</option>
							  <option>32 Ft closed Containers 7 to</option>
							  <option>32 Ft closed Containers  14 ton</option>
							  <option>Truck 19-ton</option>
							  <option>Taurus 16 ton</option>
							 
							</select>
						  </div>
                        </div>
						</div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Step 3</h3>
                        <div class="row">
							<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Enter pickup point </label>
								<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter pickup point" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Enter Drop point </label>
								<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter Drop point" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Booking Date:</label>

								<div class="input-group date">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="text" class="form-control pull-right datepicker" id="">
								</div>
								<!-- /.input group -->
							</div>
							</div>
							<div class="col-md-6">
							 <div class="form-group">
							<label>Goods types</label>
							<select class="form-control " style="width: 100%;">
							  
							  <option>Tata Ace</option>
							  <option>Bolero Pick up</option>
							  <option>Tata 40</option>
							  <option>Eicher 14 Ft</option>
							  <option>Eicher 17 Ft</option>
							  <option>Eicher 19 Ft</option>
							  <option>20 Ft closed Containers</option>
							  <option>32 Ft closed Containers 7 ton</option>
							  <option>32 Ft closed Containers  14 ton</option>
							  <option>Truck 19-ton</option>
							  <option>Taurus 16 ton</option>
							 
							</select>
						  </div>
						</div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Estimated Price</h3>
                        <table class="table table-bordered">
						<thead>
						  <tr>
							<th>Pickup Point</th>
							<th>Droping Point</th>
							<th>Distance</th>
							<th>Booking Date</th>
							<th>Weight</th>
							<th>Goods type</th>
							<th>Vehicle</th>
							<th>Estimated Price</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td>Kukatpalli</td>
							<td>Kadapa</td>
							<td>420KM</td>
							<td>01-01-2019</td>
							<td>3000 kg</td>
							<td>Glass</td>
							<td>Eicher 14 Ft</td>
							<td>6000 Rs</td>
						  </tr>
						  
						</tbody>
					  </table>
					  <ul class="list-inline pull-right">
                            
                            <li><button type="button" class="btn btn-success btn-info-full "> Continue for Payment</button></li>
                        </ul>
                    
                    <div class="clearfix"></div>
                
            </form>
        </div>
    </section>
				</div>
              </div>
            </div>
          </div>
        </div>
							
						</div>
                        <div class="tab-pane fade" id="tab2default">Default 2</div>
                        
                    </div>
                </div>
            </div>
      

     

      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
 $(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

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
  <?php include("footer.php"); ?>
  


  <script>
   //Date picker
    $('.datepicker').datepicker({
      autoclose: true
    });
</script>

 