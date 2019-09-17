


<style>
.bv-form .help-block {
    margin-bottom: 0;
	color:red;
}
</style>
<div class="view" style="background-image: url('<?php echo base_url(); ?>assets/vendor/frontend/img/search-bg.png'); background-repeat:repeat;" >
   <!-- Mask & flexbox options-->
   <div class="card col-md-4 " style="position:absolute; top: 50%; left: 50%; -webkit-transform: translate(-50%,-50%); -ms-transform: translate(-50%,-50%);transform: translate(-50%,-50%);">
      <div class="position:relative">
        
		  <form id="defaultForm" method="post" class="form-horizontal   p-5" action="<?php echo base_url('admin/loginpost');?>" enctype="multipart/form-data">
            <?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
			<a href="<?php echo base_url('');?>"><img src="<?php echo base_url(); ?>assets/vendor/frontend/img/heading-img.png" class="" style="width:150px;height:auto;margin:0 auto;"></a>
					<p class="h4 mb-4 text-center">Login</p>
						<div class="form-group">
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="email" id="email" placeholder="enter your email" value="<?php echo $this->input->cookie('username');?>" /><span style="color:red" id="errormsg1"></span><br>
                            </div>
                        </div>
						<div class="form-group">
                            <div class="col-lg-12">
                                <input type="password" class="form-control" name="password"  id="password" placeholder="enter Password" value="<?php echo $this->input->cookie('password');?>"/><span style="color:red" id="errormsg2"></span><br>
                            </div>
                        </div>

                     <div class="row" >
                        <label class="col-sm-3 control-label" id="captchaOperation"></label>
						 <div class="col-lg-12 form-group">
							   <input type="text" class="form-control" name="captcha" id="captcha1"  placeholder="Enter Captcha ">
						</div>
                    </div>   
           
            <div class="d-flex justify-content-around mt-2">
               <div>
                  <!-- Remember me -->
				  <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
				  <div class="custom-control custom-checkbox">
			<?php if($this->input->cookie('remember')!=''){ ?>
              <input type="checkbox"   name="remember_me" checked value="1"> Remember Me
			   <?php } else{ ?>
				<input type="checkbox"   name="remember_me" value="1"> Remember Me
			  <?php } ?>
                
            </div>
				  
				  
                  
               </div>
               <div>
                  <!-- Forgot password -->
                  <a href="<?php echo base_url('admin/forgotpassword');?>">Forgot password?</a>
               </div>
            </div>
            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>
            <!-- Register -->
            <p>Not a member?
               <a href="<?php echo base_url('admin/register');?>">Register</a>
            </p>
         </form>
         <!-- Default form login -->
         <div class="" style="position:absolute;top:10px;">
            <a href="<?php echo base_url('');?>"><i class="fa fa-arrow-left " style="font-size:20px;color:#aaa"> </i></a>
         </div>
      </div>
   </div>
   <div class=" mdb-color lighten-5 py-3" style="position:fixed;width:100%;bottom:0;" >
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
<script type="text/javascript">

   $(document).ready(function() {
       function randomNumber(min, max) {
	        return Math.floor(Math.random() * (max - min + 1) + min);
	    };
	    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));
	
       $('#defaultForm').bootstrapValidator({
   
           fields: {
               
					email: {
					validators: {
					  notEmpty: {
						  message: 'Email is required'
					  },
					  regexp: {
					  regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					  message: 'Please enter a valid email address. For example johndoe@domain.com.'
					  }
					}
					},
               password: {
               validators: {
					notEmpty: {
						message: 'Password is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Password wont allow <> [] = % '
					}
				}
            }, captcha: {
	                validators: {
	                    callback: {
	                        message: 'Wrong answer',
	                        callback: function(value, validator) {
	                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
	                            return value == sum;
	                        }
	                    }
	                }
	            }
                    
               
           }
       });
   
       // Validate the form manually
       $('#validateBtn').click(function() {
           $('#defaultForm').bootstrapValidator('validate');
       });
   
       $('#resetBtn').click(function() {
           $('#defaultForm').data('bootstrapValidator').resetForm(true);
       });
   });
</script>