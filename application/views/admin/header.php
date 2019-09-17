<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VMS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/vendor/backend/img/heading-img.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/backend/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/backend/css/bootstrapValidator.min.css">
    <link href="<?php echo base_url(); ?>assets/vendor/css/custom.css" rel="stylesheet" type="text/css" /> 

	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/backend/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/backend/css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/backend/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/backend/css/AdminLTE.min.css">
        <link href="<?php echo base_url(); ?>assets/vendor/backend/css/custom.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/backend/css/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/backend/css/vms.css">
    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url(); ?>assets/vendor/backend/js/jquery-2.2.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/backend/js/bootstrapValidator.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url(); ?>assets/vendor/backend/js/bootstrap.min.js"></script>


</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->

<body class="hold-transition skin-blue fixed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="<?php echo base_url('dashboard');?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><img style="width:50px;height:auto;" src="<?php echo base_url(); ?>assets/vendor/backend/img/logo.png" /></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img style="width:100px;height:auto;" src="<?php echo base_url(); ?>assets/vendor/backend/img/logo.png" /></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->

            <nav class="navbar navbar-default nav_hover">
                <div class="container-fluid">
                    <div class="navbar-header">


                        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <i class="fa fa-arrow-down" aria-hidden="false" aria-hidden="true"></i>
                        </button>
                        <a class="navbar-brand" href="<?php echo base_url('dashboard'); ?>">
                            <p>VEHICLE MANAGEMNET SYSTEM </p>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="">
                                <a href="#" class="">
                                    <p>13456</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
<!--
                            <li><a href="#">text</a></li>
                            <li><a href="#">text</a></li>
                            <li><a href="#">text</a></li>
                            <li><a href="#">text</a></li>
                            <li><a href="#">text</a></li>
-->

                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<?php if($userdetails['profile_pic']!=''){ ?>
                                    <img src="<?php echo base_url('assets/profilepics/'.$userdetails['profile_pic']); ?>" class="user-image" alt="User Image">
                                  <?php }else{?>  
								<img src="<?php echo base_url();?>assets/vendor/admin/img/user.png" class="user-image" alt="User Image">
                              <?php }?>
									<span class="hidden-xs"><?php echo isset($userdetails['name'])?$userdetails['name']:'' ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
									<?php if($userdetails['profile_pic']!=''){ ?>
                                        <img src="<?php echo base_url('assets/profilepics/'.$userdetails['profile_pic']); ?>" class="img-circle" alt="User Image">
                                        <?php }else{?> 
									   <img src="<?php echo base_url();?>assets/vendor/admin/img/user.png" class="img-circle" alt="User Image">
                                         <?php }?> 
                                        <p>
                                           <?php echo isset($userdetails['name'])?$userdetails['name']:'' ?>
                                        </p>
                                    </li>

                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo base_url('profile');?>" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo base_url('dashboard/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </header>

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
					<?php if($userdetails['profile_pic']!=''){ ?>
                        <img src="<?php echo base_url('assets/profilepics/'.$userdetails['profile_pic']); ?>" class="img-circle" alt="User Image">
					<?php }else{ ?>
						<img src="<?php echo base_url();?>assets/vendor/admin/img/user.png" class="img-circle" alt="User Image">
                    <?php } ?>
					</div>
                    <div class="pull-left info">
                        <p><?php echo isset($userdetails['name'])?$userdetails['name']:'' ?></p>
                        <a href="<?php echo base_url('profile'); ?>"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
			
                <ul class="sidebar-menu">
					<?php if($userdetails['role']==1){?>
					<li class="treeview">
                        <a href="#">
                            <i class="fa fa-users"></i> <span>Owner</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('owner/add'); ?>"><i class="fa fa-circle-o"></i>Add</a></li>
                            <li><a href="<?php echo base_url('owner/index')?>"><i class="fa fa-circle-o"></i>List</a></li>
                        </ul>
                    </li>
					 
					<li class="treeview">
                        <a href="#">
                            <i class="fa fa-users"></i> <span>Driver</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('driver/add/'.base64_encode(1)); ?>"><i class="fa fa-circle-o"></i>Add Driver</a></li>
                            <li><a href="<?php echo base_url('driver/lists')?>"><i class="fa fa-circle-o"></i>Driver List</a></li>
                        </ul>
                    </li>
					<?php }else if($userdetails['role']==5){?>
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="treeview">
                        <a href="<?php echo base_url('dashboard');?>">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>					
                    <li class="treeview">
                        <a href="<?php echo base_url('contact/lists'); ?>">
                            <i class="fa fa-users"></i> <span>Contacts</span>                          
                        </a>                   
                    </li>
                    <li class="treeview">
                        <a href="load-booking.php">
                            <i class="fa fa-tasks" aria-hidden="true"></i> <span>Load Bookings</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="booking-summary.php">
                            <i class="fa fa-tasks" aria-hidden="true"></i> <span>Booking summary</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="insurance-provider.php">
                            <i class="fa fa-tasks" aria-hidden="true"></i> <span>Insurance Provider </span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="refer-earn.php">
                            <i class="fa fa-tasks" aria-hidden="true"></i> <span>Reference code</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="support.php">
                            <i class="fa fa-tasks" aria-hidden="true"></i> <span>Support</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="wallet.php">
                            <i class="fa fa-tasks" aria-hidden="true"></i> <span>Wallet</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="<?php echo base_url('profile');?>">
                            <i class="fa fa-user" aria-hidden="true"></i> <span>My Profile</span>
                        </a>
                    </li>
					<?php }else if($userdetails['role']==4){ ?>
					<li class="header">MAIN NAVIGATION</li>
                    <li class="treeview">
                        <a href="<?php echo base_url('dashboard');?>">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-tags"></i> <span>Category</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('category/add')?>"><i class="fa fa-circle-o"></i>Add Category</a></li>
                            <li><a href="<?php echo base_url('category/lists')?>"><i class="fa fa-circle-o"></i>Category List</a></li>
                        </ul>
                    </li>
					 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-tags"></i> <span>Sub Category</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('subcategory/add')?>"><i class="fa fa-circle-o"></i>Add Sub Category</a></li>
                            <li><a href="<?php echo base_url('subcategory/lists')?>"><i class="fa fa-circle-o"></i>Sub Category List</a></li>
                        </ul>
                    </li>
					
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-th-large"></i> <span>Menu</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('menu/add')?>"><i class="fa fa-circle-o"></i>Add Item</a></li>
                            <li><a href="<?php echo base_url('menu/lists')?>"><i class="fa fa-circle-o"></i>Items List</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="payments.php">
                            <i class="fa fa-money"></i> <span>Payments</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="<?php echo base_url('profile');?>">
                            <i class="fa fa-user"></i> <span>My Profile</span>
                        </a>
                    </li>
					
					<?php }?>
					
                </ul>
				
				
				
				
				
				
				
				
				
            </section>
            <!-- /.sidebar -->
        </aside>
		<?php if($this->session->flashdata('success')): ?>
				<div class="alert_msg1 animated slideInUp bg-succ">
				<?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
			<?php if($this->session->flashdata('error')): ?>
				<div class="alert_msg1 animated slideInUp bg-warn">
				<?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-warning ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>

        <!-- =============================================== -->