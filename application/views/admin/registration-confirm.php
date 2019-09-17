
<div class="view" style="background-image: url('<?php echo base_url();?>assets/vendor/img/search-bg.png'); background-repeat:repeat;">

    <!-- Mask & flexbox options-->
    <div class="card col-md-4 " style="position:absolute; top: 50%; left: 50%; -webkit-transform: translate(-50%,-50%); -ms-transform: translate(-50%,-50%);transform: translate(-50%,-50%);">
        <div class="position:relative">
            <form class="text-center  p-5" method="post" action="<?php echo base_url('admin/setpassword'); ?>">
			    <input type="hidden" id="a_id" name="a_id" value="<?php echo isset($a_id)?$a_id:''; ?>">
                <a href="<?php echo base_url('');?>"><img src="<?php echo base_url();?>assets/vendor/frontend/img/heading-img.png" class="" style="width:150px;height:auto;margin:0 auto;"></a>
                <p class="h4 mb-4">Create Password</p>
            
                <input type="password" id="newpwd" name="newpwd" class="form-control mb-4" placeholder="New Password">
                <input type="password" id="confirmpwd" name="confirmpwd" class="form-control mb-4" placeholder="Confirm Password">
                
                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit">Register</button>

                <!-- Register -->
                <p>Already a member?
                    <a href="<?php echo base_url('admin/login');?>">Login</a>
                </p>
            </form>
            <!-- Default form login -->
            <div class="" style="position:absolute;top:10px;">
                <a href="<?php echo base_url('');?>"> <i class="fa fa-arrow-left " style="font-size:20px;color:#aaa"> </i></a>
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

