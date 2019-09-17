
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
        <h1>
            Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard" aria-hidden="true"></i>Home</a></li>
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
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 " align="center">
                                    <div>
                                        <label class=newbtn>
										<?php if($userdetails['profile_pic']!=''){ ?>
                                            <img id="blah" alt="" src="<?php echo base_url('assets/profilepics/'.$userdetails['profile_pic']); ?>" class="img-circle img-responsive">
										<?php }else{?>
								<img id="blah" alt="User Pic" src="<?php echo base_url(); ?>assets/vendor/admin/img/user.png" class="img-circle img-responsive">
                                    <?php }?>
										<h3 class="profile-username">
								<?php echo isset($userdetails['role_name'])?$userdetails['role_name']:''?>
										
								</h3>
                                        </label>
                                    </div>
                                </div>


                                <div class=" col-md-9 col-lg-9 ">
                                    <table class="table table-user-information">
                                        <tbody>
                                            <tr>
                                                <td>Name:</td>
                                                <td><?php echo isset($userdetails['name'])?$userdetails['name']:''?></td>
                                            </tr>
                                            <tr>
                                                <td>Contact number:</td>
                                                <td><?php echo isset($userdetails['mobile_number'])?$userdetails['mobile_number']:''?></td>
                                            </tr>
                                            <tr>
                                                <td>Email Id</td>
                                                <td><?php echo isset($userdetails['email'])?$userdetails['email']:''?></td>
                                            </tr>

                                            <tr>
                                            


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