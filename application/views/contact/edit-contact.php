

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Contacts
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Contacts</a></li>
            <li class="active">Edit Contact</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="mt-0 pull-left mb-0">Edit Contact</h3>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" id="defaultForm" method="post" action="<?php echo base_url('contact/editpost');?>">
                      <input type="hidden" name="c_id" id="c_id" value="<?php echo isset($edit_contact['c_id'])?$edit_contact['c_id']:''?>" >

							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Company Name</label>
                                        <input type=" text" class="form-control" name="company_name" placeholder="Enter Company Name" value="<?php echo isset($edit_contact['company_name'])?$edit_contact['company_name']:''?>" >
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Customer Name</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="customer_name" placeholder="Enter Customer Name" value="<?php echo isset($edit_contact['customer_name'])?$edit_contact['customer_name']:''?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Phone Number</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="phone_number" placeholder="Enter Phone number" value="<?php echo isset($edit_contact['phone_number'])?$edit_contact['phone_number']:''?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Email Id</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="email_id" placeholder="Enter Email Id" value="<?php echo isset($edit_contact['email_id'])?$edit_contact['email_id']:''?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">GST Number</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="gst_number" placeholder="Enter GST number" value="<?php echo isset($edit_contact['gst_number'])?$edit_contact['gst_number']:''?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" id="dvPassport">
                                    <div class="form-group">
                                        <label class=" control-label">Address</label>
                                        <div class="">
                                            <textarea type="text" class="form-control" id="theinput" name="address" placeholder="Enter Address"/><?php echo isset($edit_contact['address'])?$edit_contact['address']:''?></textarea>
                                        </div>
                                    </div>
                                </div>
								<?php if(isset($contact_list)&& count($contact_list)>0){?>
                                <div class="col-md-12" id="checked_hide">
                                    <div class="form-group">
                                        <label class="control-label" for="chkPassport">Saved Address</label>
                                        <div class="form-group">   
                                      									
                                           
                                            
											<?php foreach($contact_list as $list){?>
											 <div class="checkbox" >
											    	
                                                <label>
                                                    <input type="checkbox" id="chkPassport" name="save_address" value="<?php echo isset($list['address'])?$list['address']:''?>" <?php if ( $edit_contact['save_address']==$list['address'] ) { echo 'checked'; } ?> onchange="get_type(this.value);" >
                                                 
												   <?php echo isset($list['address'])?$list['address']:''?>
                                           
												</label>
												
                                            </div>
										 <?php }?>
										 
                                        </div>
                                    </div>
                                </div>
								<?php }?>
                            </div>
                            <br>
                            <ul class="list-inline text-center">
                                <li><button type="submit" class="btn btn-primary next-step" >Submit</button></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">

$(document).ready(function(){
    $('input[type="checkbox"]').click(function(){
       if ($(this).val() == "") {
        $("#theinput").show();
    } else {
        $("#theinput").hide();
    }
    });
});







$("#theinput").keyup(function () {
    if ($(this).val() == "") {
        $("#checked_hide").show();
    } else {
        $("#checked_hide").hide();
    }
});
	
    
    
	

	
	
	
   $(document).ready(function() {
     
      $('#defaultForm').bootstrapValidator({
   //      
          fields: {
   		
   		company_name:{
   		   validators: {
   				notEmpty: {
   					message: 'Company Name is required'
   				}
   			}
              },
   		customer_name:{
   		   validators: {
   				notEmpty: {
   					message: 'Customer Name is required'
   				}
   			}
              },
   		gst_number:{
			  validators: {
   				notEmpty: {
   					message: 'Gst Number is required'
   				}
   			}
              },			
					email_id: {
					validators: {
					  notEmpty: {
						  message: 'Email Id is required'
					  },
					  regexp: {
					  regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					  message: 'Please enter a valid email address. For example johndoe@domain.com.'
					  }
					}
					},
   		phone_number:{
   		  validators: {
   				notEmpty: {
   					message:'Phone Number is required'
   				},
   				regexp: {
   				regexp:  /^[0-9]{10}$/,
   				message:'Phone Number must be 10 digits'
   				}
   			}
              },
   		
		
		save_address: {
                validators: {
                    choice: {
                        min: 0,
                        max: 1,
                        message: 'Please choose one check address'
                    }
                }
            }
   		
   		
          }
      });
   
   });
</script>
<script>
	
   $(function () {
     $("#example1").DataTable();
     $('#example2').DataTable({
       "paging": true,
       "lengthChange": false,
       "searching": false,
       "ordering": true,
       "info": true,
       "autoWidth": false
     });
   });
</script>

