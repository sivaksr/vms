<style>
    ul li{
	list-style-type:none;
}
.select_vms {
	    border-top: 0px solid black;
	    border-right: 0px solid black;
	    border-left: 0px solid black;
    
}
.text-white {
	color:#fff;
	font-weight:400;
}
.full-load-bg{
	background:#23b14d;
	padding-left:5px;
}
.part-load-bg{
	background:#ff7e26;
	padding-left:5px;
}
.box-load-bg{
	background:#fef200;
	padding-left:5px;
}
.help-radio .col-md-2{
	padding-left:0px;
	padding-right:0px;
	width:12%
}
 #myModal .list-inline-item{
        margin-left: 5px;
        padding: 5px;
    }
    .list-inline-item.active{
        border: 1px solid red;
        color: red;
        padding: 5px;
    }
	.full-load-bg{
	background:#23b14d;
	padding:3px 5px;
}
.part-load-bg{
	background:#ff7e26;
	padding:3px 5px;
}
.box-load-bg{
	background:#fef200;
	padding:3px 5px;
}
.help-radio > .col{
	padding-left:0px;
	padding-right:0px;
	
	
}
</style>
<div class="content-wrapper ">


    
    <section class=" bg-breadcumb">
        <div class="row">
            <div class="col-md-6 bottom-nav1">
                <ul class="pad-breadcumb">
                    <li class="icon_size1">
						<a href="<?php echo base_url('dashboard'); ?>">
                            <i class="fa fa-dashboard"></i> <span>Home</span>
						</a>
					</li>
				</ul>
            </div>
            <div class=" col-md-6">
				<ul class="bottom-nav">
					<li class="icon_size1">
						<i class="fa fa-heart" aria-hidden="true"></i>
                        <i class="fa fa-heart" aria-hidden="true"></i>
                        <i class="fa fa-heart" aria-hidden="true"></i>
                        <i class="fa fa-heart" aria-hidden="true"></i>
                        <i class="fa fa-heart-o" aria-hidden="true"></i></li>
                    <li>
                        <p>3.0</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
	<div>
	<img src="<?php echo base_url(); ?>assets/vendor/backend/img/bg-back.png" class="img-responsive" style="max-height:200px;width:100%">
	</div>
    <section class="content">
	
        <!-- Info boxes -->
        <div>
	
    <div class="card col-md-10 col-md-offset-1 " style="background:#000000cf;padding-top:8px;">
       
        <div class="card-body" style="padding-right:2%;padding-left:2%">
		
            <!-- Form -->
            <form name="">
				<div class="mb-1 row help-radio">
					<div class="col-md-2 ">
						<label class="text-white" >
						   Full Load
						</label>
						<div class="full-load-bg">
							<input  type="radio" name="opt" checked>
						</div>
					</div>
					<div class="col-md-2 ">
						<label class="text-white" >
						  Part Load 
						</label>
						<div class="part-load-bg">
							<input  type="radio" name="opt" checked>
						</div>
					</div>
					<div class="col-md-2 ">
						<label class="text-white" >
						   Box Booking
						</label>
						<div class="box-load-bg">
							<input  type="radio" name="opt" checked>
						</div>
					</div>
					
				</div>
                <div class="row "style="" >
                <div>
                    <div class=" col-md-3 " style="border-right:1px solid #ddd;background:#fff;">
                        <select class="form-control select_vms" style="">
                            <option selected disabled>Pickup Point</option>
                            <option value="1">Kukatpaly</option>
                            <option value="2">Ameerpet</option>
                            <option value="3">Miyapur</option>
                        </select>
                    </div>
                    <div class=" col-md-3" style="border-right:1px solid #ddd;background:#fff;">
                        <select class="form-control select_vms" style="">
                            <option selected>Delivery Point</option>
                            <option value="1">Guntur</option>
                        </select>
                    </div>
                    <div class="col-md-3" style="background:#fff;">
                        <input type="text" class="form-control datetimepicker1 select_vms" placeholder="Date">
                    </div>
                    <div class=" col-md-3" style="padding:0px;">
                        <a data-toggle="modal" data-target="#search-index" ><button style="border-radius:0px;" type="button" class="btn btn-danger btn-block" >Search</button></a>
                    </div>
                    </div>
					<div class="">
						
					</div>
                </div>
            </form>
            <!-- Form -->
        </div>
    </div>
</div>
        
        
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
	<div class="modal fade" id="search-index" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Find Load</h4>
        </div>
       <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <p class="pt-5 bold-text">Select Size</p>
                    </div>
                    <div class="col-md-8">
                        <ul class="list-inline">
                            <li class="list-inline-item text-center">
                                <i class="fa fa-truck fa-2x"></i><br>
                                <span>Small</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-truck fa-3x"></i><br>
                                <span>Medium</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-truck fa-4x"></i><br>
                                <span>Large</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-truck fa-5x"></i><br>
                                <span>Extra Large</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr style="margin:0;">
                <div class="row py-3">
                    <div class="col-md-4">
                        <p class="pt-3 bold-text">Vehicle Type</p>
                    </div>
                    <div class="col-md-8">
                        <ul class="list-inline">
                            <li class="list-inline-item text-center">
                                <i class="fa fa-truck fa-3x"></i><br>
                                <span>Open</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-truck fa-3x"></i><br>
                                <span>Container</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-truck fa-3x"></i><br>
                                <span>Troller</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-truck fa-3x"></i><br>
                                <span>Some Type</span>
                            </li>
                        </ul>
                    </div>
                </div>
               <hr style="margin:0;">
                <div class="row py-3">
                    <div class="col-md-4">
                        <p class="pt-3 bold-text">Select Material</p>
                    </div>
                    <div class="col-md-8">
                        <ul class="list-inline">
                            <li class="list-inline-item text-center active">
                                <i class="fa fa-archive fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-car fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-cog fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-cubes fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                        </ul>
                        <ul class="list-inline">
                            <li class="list-inline-item text-center">
                                <i class="fa fa-leaf fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-flask fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-fire-extinguisher fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-home fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                        </ul>
                        <ul class="list-inline">
                            <li class="list-inline-item text-center">
                                <i class="fa fa-leanpub fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-pagelines fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-lightbulb-o fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-tint fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <div class="modal-footer">
          <a href="vechilelist.php" type="button" class="btn btn-primary" >Search</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<script type="text/javascript">
    $(function() {
        $('.datetimepicker1').datetimepicker();
    });
</script>
