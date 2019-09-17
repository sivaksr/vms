<style>
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

<!--Carousel Wrapper-->
<!--<div class="view" style="background-image: url('img/slider2.png'); ">-->
<div class="view">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light " style="background-image: url('<?php echo base_url(); ?>assets/vendor/frontend/img/banner1.jpg');background-repeat: no-repeat; background-size: cover; ">
    </div>
    <!-- Mask & flexbox options-->

</div>
<!--/.Carousel Wrapper-->
<div style="position:absolute;top:55%;width:70%;-webkit-transform: translate(5%, -50%);
  transform: translate(20%, -50%);">
   
    <div class="card col-md-12 px-5 py-2 " style="background:#0009;" >
        <!--Card content-->
        <div class="card-body" style="padding:0;">
            <!-- Form -->
            <form name="">
			
					<div class="col-md-12" style="padding:0px;" >
					<div class=" row help-radio">
					<div class="col" >
						<label class="text-white" >
						   Full Load
						</label>
						<div class="full-load-bg">
							<input  type="radio" name="opt" checked>
						</div>
					</div>
					<div class="col ">
						<label class="text-white" >
						  Part Load 
						</label>
						<div class="part-load-bg">
							<input  type="radio" name="opt" checked>
						</div>
					</div>
					<div class="col ">
						<label class="text-white" >
						   Box Booking
						</label>
						<div class="box-load-bg">
							<input  type="radio" name="opt" checked>
						</div>
					</div>	
					<div class="col ">
						&nbsp;
					</div>
					<div class="col ">
						&nbsp;
					</div>
					<div class="col text-center">
					<a href="">
						<img src="<?php echo base_url(); ?>assets/vendor/frontend/img/live-tracking.png" alt="live tracking">
						<div class="text-white">
							Live Tracking
						</div>
					</a>
					</div>
					<div class="col  text-center">
					<a href="">
						<img src="<?php echo base_url(); ?>assets/vendor/frontend/img/raining.png" alt="raining">
						<div class="text-white">
							Rain Protection
						</div>
					</a>
					</div>	
					<div class="col text-center">
					<a href="">
						<img src="<?php echo base_url(); ?>assets/vendor/frontend/img/mobile-payment.png" alt="Mobile Payment ">
						<div class="text-white">
							Mobile Payment 
						</div>
					</a>
					</div>	
					<div class="col text-center">
					<a href="">
						<img src="<?php echo base_url(); ?>assets/vendor/frontend/img/experiance-driver.png" alt="Experiance Driver">
						<div class="text-white">
							Experiance Driver
						</div>
					</a>
					</div>
					</div>
					
				</div>
                <div class="row main-search">
                    <div class="form-group col-md-3 md-form " style="border-right:1px solid #ddd;background:#fff;">
                        <div class="ui-widget"><input style="border-right:0px;border-left:0px;border-top:0px;" class="form-control" id="tags" placeholder="Pickup point"></div>
                    </div>
                    <div class="form-group col-md-3 md-form " style="border-right:1px solid #ddd;background:#fff;">
                        <select class="browser-default custom-select" style="">
                            <option selected>Delivery Point</option>
                            <option value="1">Guntur</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3 md-form " style="background:#fff;">
                        <input id="datetimepicker1" type="text" class="form-control" placeholder="Date">
                    </div>
                    <div class=" col-md-3" style="padding:0px;margin-top:3px;">
                        <button  data-toggle="modal" data-target="#myModal" type="button" class="btn btn-indigo  btn-block" style="box-shadow:none; ">Find Price</button>
                    </div>
                </div>
            </form>
            <!-- Form -->
			<div>
			<a href="" class="pull-right text-white" data-toggle="modal" data-target="#register-modal">Registere Now</a>
			</div>
        </div>
    </div>
</div>
<main class="mt-5 pt-2">
    <div class="container">
        <div class="section-heading">
            <h2>Some <span>Text</span></h2>
            <span>
                <img src="<?php echo base_url(); ?>assets/vendor/frontend/img/heading-img.png" alt="Heading">
            </span>
        </div>
        <section class="text-center">
            <!--Grid row-->
            <div class="row mb-4 wow fadeIn">
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="<?php echo base_url(); ?>assets/vendor/frontend/img/st1.png" class="card-img-top" alt="">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Service 1</h4>
                            <!--Text-->
                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="<?php echo base_url(); ?>assets/vendor/frontend/img/st-2.jpg" class="card-img-top" alt="" style="height:190px;overflow:hidden;">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Service 2</h4>
                            <!--Text-->
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="<?php echo base_url(); ?>assets/vendor/frontend/img/st-3.jpg" class="card-img-top" alt="" style="height:190px;overflow:hidden;">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Service 3</h4>
                            <!--Text-->
                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </section>
        <!--Section: Cards-->
    </div>
    <div class="container">
        <div class="section-heading">
            <h2>Why <span>Book</span> With VMS</h2>
            <span>
                <img src="<?php echo base_url(); ?>assets/vendor/frontend/img/heading-img.png" alt="Heading">
            </span>
        </div>
        <section class="text-center">
            <!--Grid row-->
            <div class="row mb-4 wow fadeIn">
                <!--Grid column-->
                <div class="col mb-4">
                    <blockquote class="blockquote bq-primary text-left">
                        <p class="bq-title p-0">Our Mission</p>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum illo! Quidem, corporis at quae tempore nisi impedit cupiditate perferendis nesciunt, ex dolores doloremque!</p>
                    </blockquote>
                </div>
                <div class="col mb-4">
                    <blockquote class="blockquote bq-warning text-left">
                        <p class="bq-title p-0">Our Vision</p>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum illo! Quidem, corporis at quae tempore nisi impedit cupiditate perferendis nesciunt, ex dolores doloremque!</p>
                    </blockquote>
                </div>
                <div class="col mb-4">
                    <blockquote class="blockquote bq-success text-left">
                        <p class="bq-title p-0">Our Values</p>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum illo! Quidem, corporis at quae tempore nisi impedit cupiditate perferendis nesciunt, ex dolores doloremque!</p>
                    </blockquote>
                </div>
            </div>
            <!--Grid row-->
        </section>
        <!--Section: Cards-->
    </div>
</main>

<!-- Central Modal Small -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100" id="myModalLabel">Find Load</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <p class="pt-5 bold-text">Select Size</p>
                    </div>
                    <div class="col-8">
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
                <hr>
                <div class="row py-3">
                    <div class="col-4">
                        <p class="pt-3 bold-text">Vehicle Type</p>
                    </div>
                    <div class="col-8">
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
                <hr>
                <div class="row py-3">
                    <div class="col-4">
                        <p class="pt-3 bold-text">Select Material</p>
                    </div>
                    <div class="col-8">
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
            <div class="mb-3">
                <div class="row">
                    <div class="col-4 mx-auto">
                        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                    </div>
                    <div class="col-4 mx-auto">
                        <a href="booking.php" type="button" class="btn btn-primary btn-block">Search</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Central Modal Small -->


<!-- Focus Modal -->
<div class="modal fade" id="focusModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100" id="myModalLabel">Delivery Address</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addContactsForm" name="addContactsForm" action="" method="">
                    <div class="box-body">
                        <div class="col-md-12">

                            <div class="">
                                <table id="myTable" class="table table-list mb-0">
                                    <tbody>
                                        <tr class="row">
                                            <td class="bt-0 col-md-9">
                                                <input type="text" name="address" placeholder="Address" class="form-control" />
                                            </td>
                                            <td class="bt-0 col-md-3">
                                                <button type="button" class="btn btn-md" id="addRow">Add Row</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="mb-3">
                <hr>
                <div class="row">
                    <div class="col-4 mx-auto">
                        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                    </div>
                    <div class="col-4 mx-auto">
                        <a href="booking.php" type="button" class="btn btn-primary btn-block">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


 <script>
 
 $(function() {
				$("#tags").autocomplete({
                    source: [
			   
			   
			   
			   {
				   label: "India",
				   value: "India",
				    img: "HI",
					  
				 },
					{
					  label: "Australia",
					  value: "Australia",
					  img:" hello",
					  
					  }
					  ],
                    minLength: 1,
					focus: function( event, ui ) {
						
						return false;
					},
                    select: function(event, ui) {
						var str= ui.item.value;
						var res = str.split(",");
						$("#tags").val(res);
						return false;
                    },
                    html: true,
                    open: function(event, ui) {
                        $(".ui-autocomplete").css("z-index", 1000);
                    }
                  }).autocomplete("instance")._renderItem = function(ul, item) {
                    return $("<li><div><span>&nbsp;" + item.value + "</span> &nbsp;<i class='fa fa-check-square pull-right' aria-hidden='true'></i></div></li>").appendTo(ul);
                    //return $("<li><div><span>&nbsp;" + item.value + "</span> &nbsp;<input type='text'  val='" + item.img + "'/></div></li>").appendTo(ul);
                };
            });

  </script>
<script>
    $('#blogCarousel').carousel({
        interval: 2000
    });
    $('#blogCarousel1').carousel({
        interval: 4000
    });
</script>

<script>
    $('input:radio[name="types"]').change(function() {
        if (this.checked && this.value == 'partLoad') {
            $("#popupFocus").focus(function() {
                $("#popupFocus").attr("data-toggle", "modal");
                $("#popupFocus").attr("data-target", "#focusModal");
            });
        }
    });
</script>
<script>
    $(document).ready(function() {
        var counter = 0;

        $("#addRow").on("click", function() {
            var newRow = $("<tr class='row'>");
            var cols = "";

            cols += '<td class="col-md-9 bt-0"><input type="text" class="form-control" placeholder="Address" name="address' + counter + '"/></td>';

            cols += '<td class="col-md-3 bt-0"><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
            newRow.append(cols);
            $("table.table-list").append(newRow);
            counter++;
        });

        $("table.table-list").on("click", ".ibtnDel", function(event) {
            $(this).closest("tr").remove();
            counter -= 1
        });
    });
</script>