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
			<li><a href="index.php"><i class="fa fa-dashboard" aria-hidden="true"></i>Home</a>
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
							<span class="pull-right"><a href="<?php echo base_url('profile/edit'); ?>" class="btn btn-primary btn-sm">Update / Edit</a></span>
							<div class="clearfix">&nbsp;</div>
						</div>
						<form method="post">
							<div class="row" >
								<div class="col-md-4" style="background-image: url('../img/background.png');height:400px;">
									<div class="profile-img">
										<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt="" />
										<div class="file btn btn-lg btn-primary">Change Photo
											<input type="file" name="file" />
										</div>
									</div>
									<div class="profile-head text-center">
										<h1>
                                        Kshiti Ghelani
                                    </h1>
										<h3>
                                        Customer
                                    </h3>
									</div>
								</div>
								<div class="col-md-8 table-responsive">
									<table class="table">
										<tbody>
											<tr>
												<td>Registration No:</td>
												<td>123456</td>
											</tr>
											<tr>
												<td>Gst:</td>
												<td>850022xxxx</td>
											</tr>
											<tr>
												<td>Pan</td>
												<td>45676845xxxx</td>
											</tr>
											<tr>
												<tr>
													<td>Name</td>
													<td>Rajendra</td>
												</tr>
												<tr>
													<td>Company Name:</td>
													<td>Prachatech</td>
												</tr>
												<tr>
													<td>Mobile number:</td>
													<td>850022xxxx</td>
												</tr>
												<tr>
													<td>Email Id</td>
													<td>customer1@gamil.com</td>
												</tr>
												<tr>
													<tr>
														<td>Billing Address</td>
														<td>Pistha House Fortune signature</td>
													</tr>
													<tr>
														<tr>
															<td>Godan Address</td>
															<td>Pistha House Fortune signature</td>
														</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class=" row ">
								
							</div>
						</form>
					</div>
	</section>
	<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
