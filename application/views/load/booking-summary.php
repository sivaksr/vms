
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Booking Summary
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Booking Summary</li>
        </ol>
    </section>

    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="tab-content">
                    <form action="" method="">
                        <div class="row">
                            <div class="col-md-12 b-vans">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title ">

                                                <div class="table-responsive">
                                                    <table width="100%">
                                                        <thead class="black white-text row">
                                                            <tr>
                                                                <th class="col-md-2">Vehicle Info</th>
                                                                <th class="col-md-2">Capacity</th>
                                                                <th class="col-md-2">Loading Date / Time</th>
                                                                <th class="col-md-1">Duration</th>
                                                                <th class="col-md-2">Rating</th>
                                                                <th class="col-md-2">Price</th>
                                                                <th class="col-md-1">Status</th>
                                                            </tr>
                                                        </thead>

                                                    </table>
                                                </div>
                                            </h4>
                                        </div>

                                    </div>
									<?php if(isset($booking_list) && count($booking_list)>0){ ?>
									<?php foreach($booking_list as $list){ ?>
                                    <div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
                                        <h4 class="panel-title vechiles-list">
                                            <div class="table-responsive">
                                                <table width="100%">

                                                    <tbody class="row">
                                                        <tr>
                                                            <td class="bv-vechile-info col-md-2">
                                                                <p class="bvv-number"><?php echo isset($list['model_no'])?$list['model_no']:''; ?></p>
                                                                <div class="text-center">
                                                                    <i class="fa fa-truck fa-5x"></i>
                                                                    <br>
                                                                    <p class="bvv-name"><?php echo isset($list['rc_number'])?$list['rc_number']:''; ?></p>
                                                                </div>
                                                            </td>
                                                            <td class="bv-capacity col-md-2">
                                                                <p><i class="fa fa-balance-scale"></i> <?php echo isset($list['v_fuel_capacity'])?$list['v_fuel_capacity']:''; ?></p>
                                                                <p><i class="fa fa-arrows-h"></i> 18 fit</p>
                                                            </td>
                                                            <td class="bv-loading-dt col-md-2">
                                                                <div class="media">
                                                                    <i class="fa fa-calendar fa-2x mt-2"></i>
                                                                    <div class="media-body">
                                                                        <p class="">06:00 - 10:00 AM</p>
                                                                        <p class="pt-0"><?php echo isset($list['date'])?$list['date']:''; ?></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="bv col-md-1">
                                                                <p><i class="fa fa-clock-o"></i> 16 hrs</p>
                                                            </td>
                                                            <td class="bv-rating col-md-2">
                                                                <p>4.5</p>
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                                </ul>
                                                                <p class="text-mute">359 Reviews</p>
                                                                <p class="text-success">520 Load</p>
                                                            </td>
                                                            <td class="bv-price col-md-2">
                                                                <h4>INR 2000.00</h4>
                                                            </td>
                                                            <td class="col-md-1">
                                                                <span class="text-red"><?php if($list['status']==1){ echo "Pending"; }else if($list['status']==2){ echo "Accept"; }else if($list['status']==3){ echo "Reject"; }else if($list['status']==4){ echo "Rerefund"; }else if($list['status']==5){ echo "Cancle"; } ?></span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </h4>
                                        <div class="clearfix">&nbsp;</div>
                                    </div>
                                    
                                    <br>
                                    <?php } ?>
                                    <?php } ?>
                                   
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

