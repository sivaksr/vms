<style>
	#pic{
	    display: none;
	}
	.newbtn{
	    cursor: pointer;
	}
	#blah{
	    max-width:100px;
	    height:100px;
	    margin-top:20px;
	}
	.emp-profile{
	    padding: 3%;
	    margin-top: 3%;
	    margin-bottom: 3%;
	    border-radius: 0.5rem;
	    background: #fff;
	}
	.profile-img{
	    text-align: center;
	}
	.profile-img img{
	    width: 70%;
	    height: 100%;
	}
	.profile-img .file {
	    position: relative;
	    overflow: hidden;
	    margin-top: -20%;
	    width: 70%;
	    border: none;
	    border-radius: 0;
	    font-size: 15px;
	    background: #212529b8;
	}
	.profile-img .file input {
	    position: absolute;
	    opacity: 0;
	    right: 0;
	    top: 0;
	}
	.profile-head h5{
	    color: #333;
	}
	.profile-head h6{
	    color: #0062cc;
	}
	.profile-edit-btn{
	    border: none;
	    border-radius: 1.5rem;
	    width: 70%;
	    padding: 2%;
	    font-weight: 600;
	    color: #6c757d;
	    cursor: pointer;
	}
	.proile-rating{
	    font-size: 12px;
	    color: #818182;
	    margin-top: 5%;
	}
	.proile-rating span{
	    color: #495057;
	    font-size: 15px;
	    font-weight: 600;
	}
	.profile-head .nav-tabs{
	    margin-bottom:5%;
	}
	.profile-head .nav-tabs .nav-link{
	    font-weight:600;
	    border: none;
	}
	.profile-head .nav-tabs .nav-link.active{
	    border: none;
	    border-bottom:2px solid #0062cc;
	}
	.profile-work{
	    padding: 14%;
	    margin-top: -15%;
	}
	.profile-work p{
	    font-size: 12px;
	    color: #818182;
	    font-weight: 600;
	    margin-top: 10%;
	}
	.profile-work a{
	    text-decoration: none;
	    color: #495057;
	    font-weight: 600;
	    font-size: 14px;
	}
	.profile-work ul{
	    list-style: none;
	}
	.profile-tab label{
	    font-weight: 600;
	}
	.profile-tab p{
	    font-weight: 600;
	    color: #0062cc;
	}
</style>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
            Profile
        </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard" aria-hidden="true"></i>Home</a>
			</li>
			<li class="active">Profile</li>
		</ol>
	</section>
	<section class="content">
		<div class="">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="mt-0 mb-0 pull-left">Personal Info</h3>
							<span class="pull-right"><a href="<?php echo base_url('owner/index'); ?>" class="btn btn-primary btn-sm">Back</a></span>
							<div class="clearfix">&nbsp;</div>
						</div>
						<form method="post">
							<div class="row" style="background-image: url('<?php echo base_url(); ?>assets/vendor/backend/img/background.png')">
								<div class="col-md-4" style="">
									<div class="profile-img">
									<?php if($ow_details['profile_pic']!=''){ ?>
										<img src="<?php echo base_url('assets/profilepics/'.$ow_details['profile_pic']); ?>" alt="" />
									<?php }else{ ?>
										<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt="" />
									<?php } ?>
									
									</div>
								</div>
								<div class="col-md-6">
									<div class="profile-head">
										<h1>
                                        <?php echo isset($ow_details['name'])?$ow_details['name']:''; ?>
                                    </h1>
										<h3>
                                        <?php echo isset($ow_details['role_name'])?$ow_details['role_name']:''; ?>
                                    </h3>
									</div>
								</div>
							</div>
							<div class=" row ">
								<div class="col-md-10 col-md-offset-1 table-responsive">
									<table class="table">
										<tbody>
											<tr>
												<td>Registration No:</td>
												<td><?php echo isset($ow_details['a_id'])?$ow_details['a_id']:''; ?></td>
											</tr>
											<tr>
												<td>Gst:</td>
												<td><?php echo isset($ow_details['gst'])?$ow_details['gst']:''; ?></td>
											</tr>
											<tr>
												<td>Pan</td>
												<td><?php echo isset($ow_details['pan'])?$ow_details['pan']:''; ?></td>
											</tr>
											<tr>
												<tr>
													<td>Name</td>
												<td><?php echo isset($ow_details['name'])?$ow_details['name']:''; ?></td>
												</tr>
												<tr>
													<td>Company Name:</td>
												<td><?php echo isset($ow_details['company_name'])?$ow_details['company_name']:''; ?></td>
												</tr>
												<tr>
													<td>Mobile number:</td>
												<td><?php echo isset($ow_details['mobile_number'])?$ow_details['mobile_number']:''; ?></td>
												</tr>
												<tr>
													<td>Email Id</td>
												<td><?php echo isset($ow_details['email'])?$ow_details['email']:''; ?></td>
												</tr>
												<tr>
													<td>Address</td>
												<td><?php echo isset($ow_details['address'])?$ow_details['address']:''; ?></td>
												</tr>
												<tr>
													<td>Billing Address</td>
													<td><?php echo isset($ow_details['billing_add'])?$ow_details['billing_add']:''; ?></td>
												</tr>
													<tr>
													<td>Godan Address</td>
													<td><?php echo isset($ow_details['godan_add'])?$ow_details['godan_add']:''; ?></td>
												</tr>
										</tbody>
									</table>
								</div>
							</div>
						</form>
					</div>
	</section>
	<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<script>
	function f_submit(){
		var x = document.getElementsByTagName("form");
			x[0].submit();// Form submission
		document.getElementById("imag_sub").submit();
	}
	</script>
