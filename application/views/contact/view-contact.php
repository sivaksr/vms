
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

</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <span class="pull-left"><a href="<?php echo base_url('contact/lists'); ?>" class="btn btn-primary btn-sm">BACK</a></span>
      <br><br>
		<h1>
          
           Contacts
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard" aria-hidden="true"></i>Home</a></li>
           <li><a href="#">Contacts</a></li>
			<li class="active">View Contact</li>
        </ol>
    </section>

    <section class="content">

        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         <h3 class="mt-0 mb-0 pull-left">View Contact</h3>
							<div class="clearfix">&nbsp;</div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                


                                <div class=" col-md-9 col-lg-9 ">
                                    <table class="table table-user-information">
                                        <tbody>
                                            <tr>
                                                <td>Company Name:</td>
                                                <td><?php echo isset($view_contact['company_name'])?$view_contact['company_name']:''?></td>
                                            </tr>
                                            <tr>
                                                <td>Customer Name:</td>
                                                <td><?php echo isset($view_contact['customer_name'])?$view_contact['customer_name']:''?></td>
                                            </tr>
											 <tr>
                                                <td>Phone Number:</td>
                                                <td><?php echo isset($view_contact['phone_number'])?$view_contact['phone_number']:''?></td>
                                            </tr>
											<tr>
                                                <td>Email Id</td>
                                                <td><?php echo isset($view_contact['email_id'])?$view_contact['email_id']:''?></td>
                                            </tr>
											
                                            <tr>
                                                <td>GST Number</td>
                                                <td><?php echo isset($view_contact['gst_number'])?$view_contact['gst_number']:''?></td>
                                            </tr>

                                            <tr>
                                            <tr>
                                                <td>Address</td>
                                                <td><?php echo isset($view_contact['address'])?$view_contact['address']:''?></td>
                                            </tr>
                                          <tr>
                                                <td>Saved Address</td>
                                                <td><?php echo isset($view_contact['save_address'])?$view_contact['save_address']:''?></td>
                                            </tr>

                                        </tbody>
                                    </table>


                                </div>
                            </div>
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
    $('.newbtn').bind("click", function() {
        $('#pic').click();
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>