<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>VMS</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/vendor/frontend/img/heading-img.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/frontend/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendor/frontend/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo base_url(); ?>assets/vendor/frontend/css/style.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/frontend/css/custom.css" rel="stylesheet">
	 <link href="<?php echo base_url(); ?>assets/vendor/frontend/css/jquery-ui.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/frontend/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/frontend/js/jquery-3.3.1.min.js"></script>
	 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <style type="text/css">
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331 !important;
            }
        }
		.states-ul .dropdown, .dropleft, .dropright, .dropup {
    position: static;
	left:0;
	
}
.dropdown-menu {
	    transform: none !important;
		margin-top:70px;
		width:70%;
}
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="fixed-top">
        <!---->
        <nav class="navbar  navbar-expand-lg navbar-dark scrolling-navbar">

            <div class="container" style="padding:0px;margin:0px;max-width:100%">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <strong><img style="width:60px;height:auto;" class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/frontend/img/logo.png"></strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link"><i class="fa fa-phone" aria-hidden="true"></i>
                                +91 9437887793
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item login-cust">
                            <ul class="nav navbar-nav ">
                                <li class="dropdown show-on-hover">
                                    <a href="<?php echo base_url('admin/login'); ?>" class=" btn  btn-sm " style="background-color: transparent;color:#fff;border:1px solid #fff;" > <i class="fa fa-user-plus mr-2"></i>Login / Signup</a>
                                   
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item mx-2 top-icons">
                            <a href="" class="nav-link btn-sm">
                                <i class="fa fa-apple" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="nav-item mx-2 top-icons">
                            <a href="" class="nav-link btn-sm">
                                <i class="fa fa-android" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item mx-2 top-icons">
                            <a href="" class="nav-link btn-sm">
                                <i class="fa fa-handshake-o" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="" style="background:#000;color:#fff;padding:6px;margin-top:40px;height:35px;">
        <div class="container" style="max-width:100%">
            <div class="row">
                <ul class="states-ul">
                    <li>
                        <div class="dropdown" style="">
                            <a class=" dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ODISHA1
                            </a>
                            <div style="min-width:650px;min-height:450px;background-color: #e4e4e4f5;position:relative; " class="dropdown-menu" aria-labelledby="dropdownMenu2" >
                               <div class="row"> 
								   <div class="col-md-12"> 
										<div class="district-modal-li px-4 biswajit-mn ">
										<h3 class="py-3">ODISHA</h3>
										<div class="mt-4">
											<h5 style="text-decoration:underline">Top Business Hub</h5>
											<div class="row mt-4">
												<div class="col-md-3">
													<a href="">Bhubaneswar</a>
												</div>
												<div class="col-md-3">
													<a href="">Cuttack </a>
												</div>
												<div class="col-md-3">
													<a href="">Barhampur</a>
												</div>
												<div class="col-md-3">
													<a href="">Rourkela </a>
												</div>
												<div class="col-md-3">
													<a href="">Sambelpur </a>
												</div>
												<div class="col-md-3">
													<a href="">Jeypore</a>
												</div>
											</div>
										</div>
										<div class="mt-4">
											<h5 style="text-decoration:underline">District</h5>
											<div class="row mt-4">
												<div class="col-md-3">
													<a href="">Bhubaneswar</a>
												</div>
												<div class="col-md-3">
													<a href="">Cuttack</a>
												</div>
											
												<div class="col-md-3">
													<a href="">BarhampurRourkela</a>
												</div>
												<div class="col-md-3">
													&nbsp;
												</div>
												<div class="col-md-3">
													<a href="">Sambelpur</a>
												</div>
												<div class="col-md-3">
													<a href="">Khordha  </a>
												</div>
												<div class="col-md-3">
													<a href="">Ganjan</a>
												</div>
												<div class="col-md-3">
													&nbsp;
												</div>
												<div class="col-md-3">
													<a href="">Malkangiri</a>
												</div>
												<div class="col-md-3">
													<a href="">Korapur</a>
												</div>
												<div class="col-md-3">
													<a href="">Kandhamal</a>
												</div>
												<div class="col-md-3">
													&nbsp;
												</div>
												<div class="col-md-3">
													<a href="">Bhadrak  </a>
												</div>
												<div class="col-md-3">
													<a href="">Baleswar</a>
												</div>
												<div class="col-md-3">
													<a href="">Mayurbhanj</a>
												</div>
												<div class="col-md-3">
													&nbsp;
												</div>
												<div class="col-md-3">
													<a href="">Nuapada</a>
												</div>
												<div class="col-md-3">
													<a href="">Kandhamal</a>
												</div>
											</div>
										</div>
										<div class="mt-4 bg-f5f5f5 ">
										
											<div class="row mt-4">
												<div class="col-md-6 ">
													Business
												</div>
												<div class="col-md-6">
													Fleet’s
												</div>
												
												<div class="col-md-6 text-center">
													<h2> 1,09,500 lak  </h2>
												</div>
												<div class="col-md-6 text-center" >
													<h2 > 60,452 Fleet</h2>
												</div>
											</div>
										</div>
										</div>
									</div>
								</div>
								<div style="position:absolute;bottom:0;right:0;">
									<img style="height:350px;" src="<?php echo base_url(); ?>assets/vendor/frontend/img/sidebar-dropdown.png" alt="wheel">
								</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a class=" dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Andhra Pradesh
                            </a>
                            <div style="min-width:650px;min-height:450px;background-color: #e4e4e4f5;position:relative; " class="dropdown-menu" aria-labelledby="dropdownMenu2" >
                               <div class="row"> 
								   <div class="col-md-12"> 
										<div class="district-modal-li px-4 biswajit-mn ">
										<h3 class="py-3">Andhra Pradesh</h3>
										<div class="mt-4">
											<h5 style="text-decoration:underline">Top Business Hub</h5>
											<div class="row mt-4">
												<div class="col-md-3">
													<a href="">Bhubaneswar</a>
												</div>
												<div class="col-md-3">
													<a href="">Cuttack </a>
												</div>
												<div class="col-md-3">
													<a href="">Barhampur</a>
												</div>
												<div class="col-md-3">
													<a href="">Rourkela </a>
												</div>
												<div class="col-md-3">
													<a href="">Sambelpur </a>
												</div>
												<div class="col-md-3">
													<a href="">Jeypore</a>
												</div>
											</div>
										</div>
										<div class="mt-4">
											<h5 style="text-decoration:underline">District</h5>
											<div class="row mt-4">
												<div class="col-md-3">
													<a href="">Bhubaneswar</a>
												</div>
												<div class="col-md-3">
													<a href="">Cuttack</a>
												</div>
											
												<div class="col-md-3">
													<a href="">BarhampurRourkela</a>
												</div>
												<div class="col-md-3">
													&nbsp;
												</div>
												<div class="col-md-3">
													<a href="">Sambelpur</a>
												</div>
												<div class="col-md-3">
													<a href="">Khordha  </a>
												</div>
												<div class="col-md-3">
													<a href="">Ganjan</a>
												</div>
												<div class="col-md-3">
													&nbsp;
												</div>
												<div class="col-md-3">
													<a href="">Malkangiri</a>
												</div>
												<div class="col-md-3">
													<a href="">Korapur</a>
												</div>
												<div class="col-md-3">
													<a href="">Kandhamal</a>
												</div>
												<div class="col-md-3">
													&nbsp;
												</div>
												<div class="col-md-3">
													<a href="">Bhadrak  </a>
												</div>
												<div class="col-md-3">
													<a href="">Baleswar</a>
												</div>
												<div class="col-md-3">
													<a href="">Mayurbhanj</a>
												</div>
												<div class="col-md-3">
													&nbsp;
												</div>
												<div class="col-md-3">
													<a href="">Nuapada</a>
												</div>
												<div class="col-md-3">
													<a href="">Kandhamal</a>
												</div>
											</div>
										</div>
										<div class="mt-4 bg-f5f5f5 ">
										
											<div class="row mt-4">
												<div class="col-md-6 ">
													Business
												</div>
												<div class="col-md-6">
													Fleet’s
												</div>
												
												<div class="col-md-6 text-center">
													<h2> 1,09,500 lak  </h2>
												</div>
												<div class="col-md-6 text-center" >
													<h2 > 60,452 Fleet</h2>
												</div>
											</div>
										</div>
										</div>
									</div>
									
								</div>
								<div style="position:absolute;bottom:0;right:0;">
									<img style="height:350px;" src="img/sidebar-dropdown.png" alt="wheel">
								</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a class=" dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Telangana
                            </a>
                           <div style="min-width:650px;min-height:450px;background-color: #e4e4e4f5;position:relative; " class="dropdown-menu" aria-labelledby="dropdownMenu2" >
                               <div class="row"> 
								  <div class="col-md-12"> 
										<div class="district-modal-li px-4 biswajit-mn ">
										<h3 class="py-3">Telangana</h3>
										<div class="mt-4">
											<h5 style="text-decoration:underline">Top Business Hub</h5>
											<div class="row mt-4">
												<div class="col-md-3">
													<a href="">Bhubaneswar</a>
												</div>
												<div class="col-md-3">
													<a href="">Cuttack </a>
												</div>
												<div class="col-md-3">
													<a href="">Barhampur</a>
												</div>
												<div class="col-md-3">
													<a href="">Rourkela </a>
												</div>
												<div class="col-md-3">
													<a href="">Sambelpur </a>
												</div>
												<div class="col-md-3">
													<a href="">Jeypore</a>
												</div>
											</div>
										</div>
										<div class="mt-4">
											<h5 style="text-decoration:underline">District</h5>
											<div class="row mt-4">
												<div class="col-md-3">
													<a href="">Bhubaneswar</a>
												</div>
												<div class="col-md-3">
													<a href="">Cuttack</a>
												</div>
											
												<div class="col-md-3">
													<a href="">BarhampurRourkela</a>
												</div>
												<div class="col-md-3">
													&nbsp;
												</div>
												<div class="col-md-3">
													<a href="">Sambelpur</a>
												</div>
												<div class="col-md-3">
													<a href="">Khordha  </a>
												</div>
												<div class="col-md-3">
													<a href="">Ganjan</a>
												</div>
												<div class="col-md-3">
													&nbsp;
												</div>
												<div class="col-md-3">
													<a href="">Malkangiri</a>
												</div>
												<div class="col-md-3">
													<a href="">Korapur</a>
												</div>
												<div class="col-md-3">
													<a href="">Kandhamal</a>
												</div>
												<div class="col-md-3">
													&nbsp;
												</div>
												<div class="col-md-3">
													<a href="">Bhadrak  </a>
												</div>
												<div class="col-md-3">
													<a href="">Baleswar</a>
												</div>
												<div class="col-md-3">
													<a href="">Mayurbhanj</a>
												</div>
												<div class="col-md-3">
													&nbsp;
												</div>
												<div class="col-md-3">
													<a href="">Nuapada</a>
												</div>
												<div class="col-md-3">
													<a href="">Kandhamal</a>
												</div>
											</div>
										</div>
										<div class="mt-4 bg-f5f5f5 ">
										
											<div class="row mt-4">
												<div class="col-md-6 ">
													Business
												</div>
												<div class="col-md-6">
													Fleet’s
												</div>
												
												<div class="col-md-6 text-center">
													<h2> 1,09,500 lak  </h2>
												</div>
												<div class="col-md-6 text-center" >
													<h2 > 60,452 Fleet</h2>
												</div>
											</div>
										</div>
										</div>
									</div>
									
								</div>
								<div style="position:absolute;bottom:0;right:0;">
									<img style="height:350px;"" src="img/sidebar-dropdown.png" alt="wheel">
								</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a class=" dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                West Bengal
                            </a>
                          <div style="min-width:650px;min-height:450px;background-color: #e4e4e4f5;position:relative; " " class="dropdown-menu" aria-labelledby="dropdownMenu2" >
                               <div class="row"> 
								   <div class="col-md-12"> 
										<div class="district-modal-li px-4 biswajit-mn ">
										<h3 class="py-3"> West Bengal</h3>
										<div class="mt-4">
											<h5 style="text-decoration:underline">Top Business Hub</h5>
											<div class="row mt-4">
												<div class="col-md-3">
													<a href="">Bhubaneswar</a>
												</div>
												<div class="col-md-3">
													<a href="">Cuttack </a>
												</div>
												<div class="col-md-3">
													<a href="">Barhampur</a>
												</div>
												<div class="col-md-3">
													<a href="">Rourkela </a>
												</div>
												<div class="col-md-3">
													<a href="">Sambelpur </a>
												</div>
												<div class="col-md-3">
													<a href="">Jeypore</a>
												</div>
											</div>
										</div>
										<div class="mt-4">
											<h5 style="text-decoration:underline">District</h5>
											<div class="row mt-4">
												<div class="col-md-3">
													<a href="">Bhubaneswar</a>
												</div>
												<div class="col-md-3">
													<a href="">Cuttack</a>
												</div>
											
												<div class="col-md-3">
													<a href="">BarhampurRourkela</a>
												</div>
												<div class="col-md-3">
													&nbsp;
												</div>
												<div class="col-md-3">
													<a href="">Sambelpur</a>
												</div>
												<div class="col-md-3">
													<a href="">Khordha  </a>
												</div>
												<div class="col-md-3">
													<a href="">Ganjan</a>
												</div>
												<div class="col-md-3">
													&nbsp;
												</div>
												<div class="col-md-3">
													<a href="">Malkangiri</a>
												</div>
												<div class="col-md-3">
													<a href="">Korapur</a>
												</div>
												<div class="col-md-3">
													<a href="">Kandhamal</a>
												</div>
												<div class="col-md-3">
													&nbsp;
												</div>
												<div class="col-md-3">
													<a href="">Bhadrak  </a>
												</div>
												<div class="col-md-3">
													<a href="">Baleswar</a>
												</div>
												<div class="col-md-3">
													<a href="">Mayurbhanj</a>
												</div>
												<div class="col-md-3">
													&nbsp;
												</div>
												<div class="col-md-3">
													<a href="">Nuapada</a>
												</div>
												<div class="col-md-3">
													<a href="">Kandhamal</a>
												</div>
											</div>
										</div>
										<div class="mt-4 bg-f5f5f5 ">
										
											<div class="row mt-4">
												<div class="col-md-6 ">
													Business
												</div>
												<div class="col-md-6">
													Fleet’s
												</div>
												
												<div class="col-md-6 text-center">
													<h2> 1,09,500 lak  </h2>
												</div>
												<div class="col-md-6 text-center" >
													<h2 > 60,452 Fleet</h2>
												</div>
											</div>
										</div>
										</div>
									</div>
									
								</div>
								<div style="position:absolute;bottom:0;right:0;">
									<img style="height:350px;" src="img/sidebar-dropdown.png" alt="wheel">
								</div>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="col-md-8 ml-auto">
                    <div class="pull-right">
                        <a class="h5" href="cart.php">
                            <i class="fa fa-cart-arrow-down text-white" aria-hidden="true"></i>
                        </a> &nbsp; &nbsp;<a class="h5" href="#">
                            <i class="fa fa fa-bell  text-white" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Navbar -->