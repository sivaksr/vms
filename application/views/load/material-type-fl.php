<style>
.nopad {
	padding-left: 0 !important;
	padding-right: 0 !important;
}
/*image gallery*/
.image-checkbox {
	cursor: pointer;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	border: 4px solid transparent;
	margin-bottom: 0;
	outline: 0;
}
.image-checkbox input[type="checkbox"] {
	display: none;
}

.image-checkbox-checked {
	border-color: #4783B0;
}
.image-checkbox .fa {
  position: absolute;
  color: #4A79A3;
  background-color: #fff;
  padding: 10px;
  top: 0;
  right: 0;
}
.image-checkbox-checked .fa {
  display: block !important;
}
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Full Load
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="load-booking.php">Load Booking</a></li>
            <li><a href="#">Full Load</a></li>
            <li class="active">Material Type</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="mt-0 mb-0">Material Type</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="stepper">
                            <ul class="nav nav-tabs">
                                <li role="presentation" class="completed">
                                    <a class="persistant-disabled" href="full-load.php" title="Step 1">
                                        <span class="round-tab">1</span>
                                    </a>
                                </li>
                                <li role="presentation" class="completed">
                                    <a class="persistant-disabled" href="vechile-inforamtion-fl.php" title="Step 2">
                                        <span class="round-tab">2</span>
                                    </a>
                                </li>
                                <li role="presentation" class="active">
                                    <a class="persistant-disabled" href="material-type-fl.php" title="Step 3">
                                        <span class="round-tab">3</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="list-of-vechiles-fl.php" title="Step 4">
                                        <span class="round-tab">4</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="order-conformation-fl.php" title="Step 5">
                                        <span class="round-tab">5</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="payment-fl.php" title="Complete">
                                        <span class="round-tab">6</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="tab-content">
				<div >
					<div class="container">
					  <h3>Select Material Type</h3>
					  <form action="<?php echo base_url('load/material_type_post'); ?>" method="post">
						<input type="hidden" id="f_l_id" name="f_l_id" value="<?php echo isset($load_id)?$load_id:''; ?>">

						<?php foreach($material_type_list as $lis){ ?>
							<div class="col-md-2 nopad text-center">
								<label class="image-checkbox">
								  <img class="img-responsive" style="height:200px;width:200px;" src="<?php echo base_url('assets/material_type/'.$lis['material_type_img']); ?>"/>
								  <input type="checkbox" class="example" name="material_type" value="<?php echo isset($lis['m_t_id'])?$lis['m_t_id']:''; ?>" />
								  <i class="fa fa-check hidden"></i>
								</label>
								 <div><?php echo isset($lis['material_type_name'])?$lis['material_type_name']:''; ?></div>
							  </div>
						<?php } ?>
					 
						<div class="clearfix">&nbsp;</div>
						<div class="col-md-12"><button type="submit" class="btn btn-primary next-step">Save and continue</button></div>

					 </form>
					</div>
				
				
				</div>
                    
                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
$('input.example').on('change', function() {
    $('input.example').not(this).prop('checked', false);  
});
$(".image-checkbox").each(function () {
  if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
    $(this).addClass('image-checkbox-checked');
  }
  else {
    $(this).removeClass('image-checkbox-checked');
  }
});

// sync the state to the input
$(".image-checkbox").on("click", function (e) {
  $(this).toggleClass('image-checkbox-checked');
  var $checkbox = $(this).find('input[type="checkbox"]');
  $checkbox.prop("checked",!$checkbox.prop("checked"))

  e.preventDefault();
});
</script>