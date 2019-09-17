<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Full Load
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url('load'); ?>">Load Booking</a></li>
            <li class="active">Full Load</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="mt-0 mb-0">Basic load</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="stepper">
                            <ul class="nav nav-tabs">
                                <li role="presentation" class="active">
                                    <a class="persistant-disabled" href="<?php echo base_url('load/full/'.base64_encode(1));?>" title="Step 1">
                                        <span class="round-tab">1</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="javascript:void(0);" title="Step 2">
                                        <span class="round-tab">2</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="javascript:void(0);" title="Step 3">
                                        <span class="round-tab">3</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="javascript:void(0);" title="Step 4">
                                        <span class="round-tab">4</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="javascript:void(0);" title="Step 5">
                                        <span class="round-tab">5</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="javascript:void(0);" title="Complete">
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
                    <form id="defaultForm" name="defaultForm" action="<?php echo base_url('load/fullloadpost'); ?>" method="post">
                       <?php $csrf = array(
										'name' => $this->security->get_csrf_token_name(),
										'hash' => $this->security->get_csrf_hash()
								); ?>
								<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
								<input type="hidden" name="load_type" value="<?php echo isset($type)?$type:''; ?>" />
						<div class="box-body">
                            <div class="col-md-12">

                                <div class="table-responsive">
                                    <table id="myTable" class="table table-list" style="margin-bottom:0px;">
                                        <thead>
                                            <tr>
												<th>Loading Point</th>
                                                <th>Droping Point</th>
                                                <th>Date</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="mb-0">
                                                <td>
                                                    <div class="form-group">
                                                            <input type="text" class="form-control" name="loading_point[]" placeholder="Enter Your Loading  point" />
                                                    </div>
                                                </td>
												<td>
                                                    <div class="form-group">
                                                            <input type="text" class="form-control" name="droping_point[]" placeholder="Enter Your Droping  point" />
                                                    </div>
                                                </td>
												<td>
                                                    <div class="form-group">
                                                            <input type="date" class="form-control pull-right datepicker" name="date[]" >
                                                    </div>
                                                </td>
                                                <td>
												<?php if(isset($type) && $type==2){ ?>
                                                    <button type="button" class="btn btn-md" id="addRow">Add Row</button>
												<?php } ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                              
                            </div>
                       
                        <ul class="list-inline pull-right">
						 <li><button type="submit" class="btn btn-primary next-step" >Submit</button></li>
                        </ul>
                    </form>
					 </div>
                </div>

            </div>
       
    </section>
    <!-- /.content -->
	 </div>

<!-- /.content-wrapper -->
<script>
    $(document).ready(function() {
        var counter = 0;

        $("#addRow").on("click", function() {
            var newRow = $("<tr>");
            var cols = "";

            cols += '<td><div class="form-group"><input type="text" class="form-control"  name="loading_point[]"  placeholder="Enter Your Loading  point"/></div></td>';
            
            cols += '<td><div class="form-group"><input type="text" class="form-control" name="droping_point[]" placeholder="Enter Your Droping  point" /></div></td>';
			
            cols += '<td><div class="form-group"><input type="date" class="form-control" name="date[]" placeholder="Enter Date" /></div></td>';

            cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
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
<script>
 $(document).ready(function() {
     
      $('#defaultForm').bootstrapValidator({
   //      
          fields: {
   		
   		'loading_point[]':{
   		   validators: {
   				notEmpty: {
   					message: 'Loading Point is required'
   				}
   			}
              },
   		'droping_point[]':{
   		   validators: {
   				notEmpty: {
   					message: 'Droping Point is required'
   				}
   			}
              },
   		'date[]':{
   		   validators: {
   				notEmpty: {
   					message: 'Date is required'
   				}
   			}
              }
   		
   		
          }
      });
   
   });
</script>

<script>
    
</script>