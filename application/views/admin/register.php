
<div class="view" style="background-image: url('<?php echo base_url();?>assets/vendor/img/search-bg.png'); background-repeat:repeat;">

    <!-- Mask & flexbox options-->
    <div class="card col-md-4 " style="position:absolute; top: 50%; left: 50%; -webkit-transform: translate(-50%,-50%); -ms-transform: translate(-50%,-50%);transform: translate(-50%,-50%);">
        <div class="position:relative">
            <form class="text-center  p-5" action="<?php echo base_url('admin/registerpost'); ?>" method="post" >
                <a href="<?php echo base_url(''); ?>"><img src="<?php echo base_url();?>assets/vendor/frontend/img/heading-img.png" class="" style="width:150px;height:auto;margin:0 auto;"></a>
                <p class="h4 mb-4">Register</p>
				<select class="form-control mb-4" name="role_id" id="role_id" required>
				<option value="">Select</option>
				<?php if(isset($roles) && count($roles)>0){
					foreach($roles as $lis){ ?>
					<option value="<?php echo $lis['role_id']; ?>"><?php echo $lis['role']; ?></option>
					<?php } ?>
					<?php } ?>
				</select>
                
                <input type="text" id="name" name="name" class="form-control mb-4" placeholder="Name" required>
                
                <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail" required>

                <input type="text" id="mobile" name="mobile" class="form-control mb-4" placeholder="Mobile Number" required>
                
                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit" name="form_submit">Next</button>

                <!-- Register -->
                <p>Already a member?
                    <a href="<?php echo base_url('admin/login'); ?>">Login</a>
                </p>
            </form>
            <!-- Default form login -->
            <div class="" style="position:absolute;top:10px;">
                <a href="<?php echo base_url(''); ?>"> <i class="fa fa-arrow-left " style="font-size:20px;color:#aaa"> </i></a>
            </div>

        </div>
    </div>
    <div class=" mdb-color lighten-5 py-3" style="position:fixed;width:100%;bottom:0;">
        <div class="container">
            <div class="row">
                <div class="co1-md-3 ">
                    &nbsp;
                </div>
                <div class="co1-md-6 mx-auto ">
                    <ul class="login-bottom">
                        <a href="#">
                            <li>Notices</li>
                        </a>
                        <a href="#">
                            <li>Terms & Conditions</li>
                        </a>
                        <a href="#">
                            <li>Privacy Policy</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

