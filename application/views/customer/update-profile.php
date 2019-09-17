<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border"> <a href="<?php echo base_url('profile'); ?>" type="button" class="btn btn-info btn-sm pull-right">Back</a>
						<h3 class="mt-0 mb-0">Update Profile</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<div style="padding:20px;">
						<form id="defaultForm" method="post" class="" action="<?php echo base_url('profile/editpost'); ?>" enctype="multipart/form-data">
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Registration No</label>
									<div class="">
										<p><?php echo isset($u_d['a_id'])?$u_d['a_id']:''; ?></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Gst</label>
									<div class="">
										<input type="text" class="form-control" onkeyup="get_gst_details(this.value);" name="gst" value="<?php echo isset($u_d['gst'])?$u_d['gst']:''; ?>" />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Pan</label>
									<div class="">
										<input type="mail" class="form-control" name="pan" value="<?php echo isset($u_d['pan'])?$u_d['pan']:''; ?>" />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Name</label>
									<div class="">
										<input type="text" class="form-control" name="name" id="mobile_number" value="<?php echo isset($u_d['name'])?$u_d['name']:''; ?>" />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Company Name</label>
									<div class="">
										<input type="text" class="form-control" name="company_name" id="company_name" value="<?php echo isset($u_d['company_name'])?$u_d['company_name']:''; ?>" />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Mobile Number</label>
									<div class="">
										<input type="text" class="form-control" name="mobile_number" id="mobile_number" value="<?php echo isset($u_d['mobile_number'])?$u_d['mobile_number']:''; ?>" />
									</div>
								</div>
							</div>
							<div class="row">
							<div class="col-md-6 mx-4">
								<div class="form-group">
									<label class=" control-label">Email Id</label>
									<div class="">
										<input type="text" class="form-control" name="email" id="email" value="<?php echo isset($u_d['email'])?$u_d['email']:''; ?>" />
									</div>
								</div>
							</div>
							<div class="col-md-6 mx-4">
								<div class="form-group">
									<label class=" control-label">Address</label>
									<div class="">
										<input type="text" class="form-control" name="address" id="address" value="<?php echo isset($u_d['address'])?$u_d['address']:''; ?>" />
									</div>
								</div>
							</div>
							</div>
						
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Billing Address</label>
									<div class="">
										<textarea class="form-control" name="c_b_add" id="c_b_add"><?php echo isset($checked_b_a['address'])?$checked_b_a['address']:''; ?></textarea>
										<input type="hidden" name="c_b_lat" id="c_b_lat" value="">
										<input type="hidden" name="c_b_long" id="c_b_long" value="">
									</div>
								</div>
							<div style="position:relative">	
								<a style="position: absolute;left:12px;bottom:-10px;" data-toggle="modal" data-target="#billingloation" href="">Add More</a>
								<a style="position: absolute;right:12px;bottom:-10px;" data-toggle="modal" data-target="#billingloation" href="">Set location</a>
							</div>
							<?php if(isset($c_b_a) && count($c_b_a)>0){ ?>
								<?php foreach($c_b_a as $li){ ?>
								<span id="add_id<?php echo $li['b_id']; ?>">
									<p class="mt-5">
										<div class="checkbox">
													<?php if($li['current']==1){ ?>
														 <label><input type="checkbox" checked class="chk" name="b_id" value="<?php echo $li['b_id']; ?>"><?php echo isset($li['address'])?$li['address']:''; ?></label>
													<?php }else{ ?>
														<label><input type="checkbox" class="chk" name="b_id" value="<?php echo $li['b_id']; ?>"><?php echo isset($li['address'])?$li['address']:''; ?></label>
													<?php } ?>											</div>
									</p>
										<div class="pull-right">
										<a href="javascript:void(0)" onclick="remove_b_add(<?php echo $li['b_id']; ?>);"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
									</div>
									</span>
								<?php } ?>
							<?php } ?>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Godan Address</label>
									<div class="">
										<textarea class="form-control" name="c_g_add" id="c_g_add"><?php echo isset($checked_g_a['address'])?$checked_g_a['address']:''; ?></textarea>
										<input type="hidden" name="c_g_lat" id="c_g_lat" value="">
										<input type="hidden" name="c_g_long" id="c_g_long" value="">
									</div>
								</div>
								<div style="position:relative">	
									<a style="position: absolute;left:12px;bottom:-10px;" data-toggle="modal" data-target="#godanloation" href="">Add More</a>
									<a style="position: absolute;right:12px;bottom:-10px;" data-toggle="modal" data-target="#godanloation" href="">Set location</a>
									
								</div>
								<?php if(isset($c_g_a) && count($c_g_a)>0){ ?>
									<?php foreach($c_g_a as $li){ ?>
										<span id="g_add_id<?php echo $li['g_id']; ?>">
											<p class="mt-5">
												<div class="checkbox">
													<?php if($li['current']==1){ ?>
														 <label><input type="checkbox" checked class="g_chk" name="g_id" value="<?php echo $li['g_id']; ?>"><?php echo isset($li['address'])?$li['address']:''; ?></label>
													<?php }else{ ?>
														<label><input type="checkbox" class="g_chk" name="g_id" value="<?php echo $li['g_id']; ?>"><?php echo isset($li['address'])?$li['address']:''; ?></label>
													<?php } ?>
												</div>
											</p>
											<div class="pull-right">
												<!--<a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a> &nbsp; &nbsp;-->
												<a href="javascript:void(0)" onclick="remove_g_add(<?php echo $li['g_id']; ?>);"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
											</div>
										</span>
										<?php } ?>
								<?php } ?>
							</div>
							
							<div class="clearfix">&nbsp;</div>
							<div class="col-md-6 mt-5">
								<div class="row">
									<div class="form-group col-md-9">
										<label class=" control-label">Profile</label>
										<div class="">
											<input type="file" class="form-control" name="profile_pic" id="profile_pic" value="" />
										</div>
									</div>
									<?php if($u_d['profile_pic']!=''){ ?>
									<div class="col-md-3">
										<label class=" control-label">Present pic</label>
										<div class="">
											<img style="width:30px;height:30px;" src="<?php echo base_url('assets/profilepics/'.$u_d['profile_pic']); ?>">
										</div>
									</div>
									<?Php } ?>
								</div>
							</div>
							<div class="clearfix">&nbsp;</div>
							<div class="form-group">
								<div class="pull-right mr-3">
									<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Save Changes</button>
								</div>
							</div>
						</form>
						<div class="clearfix">&nbsp;</div>
					</div>
				</div>
				<!-- /.box -->
			</div>
		</div>
		<!-- /.row -->
	</section>

</div>


	<div class="modal fade" id="billingloation" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Billing Address</h4>
        </div>
        <div class="modal-body">
			<div id="myMap" style="width:100%;"></div>
			<input id="bill_address" name="bill_address" id="get_billing_loc" type="text" style="width:100%;"/><br/>
			<input type="text" id="latitude" value="" placeholder="Latitude"/>
			<input type="text" id="longitude" value="" placeholder="Longitude"/>
			<style>
			#myMap {
			   height: 350px;
			   width: 680px;
			}
			</style>
			<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBHTMjAK03abscfm6m00ddeFAVcj58lSaM">
			</script>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
			</script>
			<script type="text/javascript">
				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(showPosition);
				} else { 
						x.innerHTML = "Geolocation is not supported by this browser.";
				}
			function showPosition(position) {
				var latitude = position.coords.latitude;
				var longitude = position.coords.longitude;
				$('#latitude').val(latitude);
				$('#longitude').val(longitude);

			}
			//alert($('#latitude').val());
			var map;
			var marker;
			var myLatlng = new google.maps.LatLng($('#latitude').val(),$('#longitude').val());
			var geocoder = new google.maps.Geocoder();
			var infowindow = new google.maps.InfoWindow();
			function initialize(){
			var mapOptions = {
			zoom: 18,
			center: myLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
			};

			map = new google.maps.Map(document.getElementById("myMap"), mapOptions);

			marker = new google.maps.Marker({
			map: map,
			position: myLatlng,
			draggable: true 
			}); 

			geocoder.geocode({'latLng': myLatlng }, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
			if (results[0]) {
			$('#latitude,#longitude').show();
			$('#bill_address').val(results[0].formatted_address);
			$('#latitude').val(marker.getPosition().lat());
			$('#longitude').val(marker.getPosition().lng());
			infowindow.setContent(results[0].formatted_address);
			infowindow.open(map, marker);
			}
			}
			});

			google.maps.event.addListener(marker, 'dragend', function() {

			geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
			if (results[0]) {
			$('#bill_address').val(results[0].formatted_address);
			$('#latitude').val(marker.getPosition().lat());
			$('#longitude').val(marker.getPosition().lng());
			infowindow.setContent(results[0].formatted_address);
			infowindow.open(map, marker);
			}
			}
			});
			});

			}
			google.maps.event.addDomListener(window, 'load', initialize);
			</script>
        </div>
        <div class="modal-footer">
          <a href="javascript:void(0);" type="button" onclick="get_billing_loc();" class="btn btn-primary" >Use Location</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  <!-- Godan Address popup -->
  <div class="modal fade" id="godanloation" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Godan Address</h4>
        </div>
        <div class="modal-body">
			<div id="GodanAddress" style="width:100%;"></div>
			<input id="godan_address" name="godan_address" id="get_billing_loc" type="text" style="width:100%;"/><br/>
			<input type="text" id="g_latitude" value="" placeholder="Latitude"/>
			<input type="text" id="g_longitude" value="" placeholder="Longitude"/>
			<style>
			#GodanAddress {
			   height: 350px;
			   width: 680px;
			}
			</style>			
			<script type="text/javascript">
				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(showPosition);
				} else { 
						x.innerHTML = "Geolocation is not supported by this browser.";
				}
			function showPosition(position) {
				var g_latitude = position.coords.latitude;
				var g_longitude = position.coords.longitude;
				$('#g_latitude').val(g_latitude);
				$('#g_longitude').val(g_longitude);

			}
			alert('Geolocation is supported by this browser');
			var map;
			var marker;
			var myLatlng = new google.maps.LatLng($('#g_latitude').val(),$('#g_longitude').val());
			var geocoder = new google.maps.Geocoder();
			var infowindow = new google.maps.InfoWindow();
			function initialize(){
					var mapOptions = {
						zoom: 18,
						center: myLatlng,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					};

					map = new google.maps.Map(document.getElementById("GodanAddress"), mapOptions);

					marker = new google.maps.Marker({
						map: map,
						position: myLatlng,
						draggable: true 
					}); 
					geocoder.geocode({'latLng': myLatlng }, function(results, status) {
						if (status == google.maps.GeocoderStatus.OK) {
							if (results[0]) {
								$('#g_latitude,#g_longitude').show();
								$('#godan_address').val(results[0].formatted_address);
								$('#g_latitude').val(marker.getPosition().lat());
								$('#g_longitude').val(marker.getPosition().lng());
								infowindow.setContent(results[0].formatted_address);
								infowindow.open(map, marker);
							}
						}
					});

					google.maps.event.addListener(marker, 'dragend', function() {
						geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
							if (status == google.maps.GeocoderStatus.OK) {
								if (results[0]) {
									$('#godan_address').val(results[0].formatted_address);
									$('#g_latitude').val(marker.getPosition().lat());
									$('#g_longitude').val(marker.getPosition().lng());
									infowindow.setContent(results[0].formatted_address);
									infowindow.open(map, marker);
								}
							}
						});
					});

			}
			google.maps.event.addDomListener(window, 'load', initialize);
			</script>
        </div>
        <div class="modal-footer">
          <a href="javascript:void(0);" type="button" onclick="get_godan_loc();" class="btn btn-primary" >Use Location</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 
  <script>
  $('input.chk').on('change', function() {
    $('input.chk').not(this).prop('checked', false);  
}); 
$('input.g_chk').on('change', function() {
    $('input.g_chk').not(this).prop('checked', false);  
});
  function get_billing_loc(){
	$('#c_b_add').val($('#bill_address').val());  
	$('#c_b_long').val($('#longitude').val());  
	$('#c_b_lat').val($('#latitude').val());  
  } 
  function get_godan_loc(){
	$('#c_g_add').val($('#godan_address').val());  
	$('#c_g_long').val($('#g_longitude').val());  
	$('#c_g_lat').val($('#g_latitude').val());  
  }
  function remove_b_add(id){
	 if(id!=''){
		jQuery.ajax({
					url: "<?php echo base_url('profile/remove_c_b_add');?>",
					data: {
						b_id:id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
						if(data.msg==1){
							 $('#add_id'+id).hide();
						}
					}
			});
	  } 
  }
  function remove_g_add(id){
	 if(id!=''){
		jQuery.ajax({
					url: "<?php echo base_url('profile/remove_c_g_add');?>",
					data: {
						g_id:id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {					
						if(data.msg==1){
							 $('#g_add_id'+id).hide();
						}
					}
			});
	  } 
  }
  function get_gst_details(id){
	  if(id!=''){
		jQuery.ajax({
					url: "<?php echo base_url('profile/get_gst_details');?>",
					data: {
						gst: id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
						if(data.msg==1){
							 $('#countdisplaying').show();
							 $('#address').empty();
							 $('#company_name').empty();
							 $('#address').val(data.adds);
							 $('#company_name').val(data.c_nam);
	
						}
						
						
					}
			});
	  }			
  }
  </script>
  