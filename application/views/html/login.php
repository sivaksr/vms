


<style>
.bv-form .help-block {
    margin-bottom: 0;
	color:red;
}
</style>
<div class="view" style="background-image: url(''<?php echo base_url(); ?>assets/vendor/frontend/img/banner1.jpg'); background-repeat:repeat;" >
   <!-- Mask & flexbox options-->
   <div class="card col-md-4 " style="position:absolute; top: 50%; left: 50%; -webkit-transform: translate(-50%,-50%); -ms-transform: translate(-50%,-50%);transform: translate(-50%,-50%);">
      <div class="position:relative">
        
		  <form id="defaultForm" method="post" class="form-horizontal   p-5" onsubmit="return validateForm(this);" action="<?php echo base_url('admin/loginpost');?>" enctype="multipart/form-data">
            <?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
			<a href="<?php echo base_url('');?>"><img src="<?php echo base_url(); ?>assets/vendor/img/heading-img.png" class="" style="width:150px;height:auto;margin:0 auto;"></a>
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
						
				 <div id="imgdiv" style="display: inline;"><img id="img" src="<?= base_url() ?>admin/getcapachaimage" /></div><img id="reload" src="<?= base_url() ?>img/reload.png" />


			<br><br>
                        <div class="col-lg-12">
						<div class="form-group">
                           <input type="text" class="form-control" name="captcha" id="captcha1"  placeholder="Enter Captcha ">
			<div id="capacha_error" class="error_alertbox" style="display:none; color: red;"></div>
                        </div>
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
//change CAPTCHA on each click or on refreshing page
$("#reload").click(function () {
	$("img#img").remove();
	var id = Math.random();
	$('<img id="img" src="<?= base_url() ?>admin/getcapachaimage?id=' + id + '"/>').appendTo("#imgdiv");
	id = '';
});

function validateForm(form) {
	var isValid = true;
	
         var email=document.getElementById("email").value;
   
		
      if(email==''){
	  document.getElementById('errormsg1').innerHTML = "email is rquired";
	  isValid =  false;
}else{
var   pattern=/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
             if(!pattern.test(email)){
			 document.getElementById("errormsg1").innerHTML="Please enter a valid email address. For example johndoe@domain.com.";	
			 isValid =  false;
}else{
document.getElementById('errormsg1').innerHTML='';
}	  			
}

var password=document.getElementById("password").value;
   
 
if(password==''){
		document.getElementById('errormsg2').innerHTML = "password  is rquired";
		isValid =  false;
		}else{
			var pattern =/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/; 
			if (!pattern.test(password)) {
				 document.getElementById('errormsg2').innerHTML = "6 to 11 characters"; 
				isValid =  false;
			}else{
				document.getElementById('errormsg2').innerHTML = '';
				}
		}			
 
		
	
	var flag = 0;
	var status = false;
	var captcha = $('#captcha1').val();
	if (captcha == '') {
		flag = 1;
		var error_text = 'Please enter Image Text.';
		$('#capacha_error').html(error_text);
		$('#capacha_error').show();
	}
	if (flag == 1)
	{
		return status;
	} else
	{
		$.ajax({
			type: "POST",
			url: "<?= base_url() ?>admin/checkcaptcha",
			global: false,
			data: {captcha: captcha},
			dataType: 'JSON',
			async: false, //blocks window close
			success: function (data) {
				if (data.error)
				{
					var error_text = 'Captcha Code does not Match Please check.';
					$('#capacha_error').html(error_text);
					$('#capacha_error').show();
					status = false;
				} else if (data.success)
				{
					status = true;
				}
			}
		});
		return status;
	}
}

   $(document).ready(function() {
       // Generate a simple captcha
       
   
       $('#').bootstrapValidator({
   //        live: 'disabled',
           message: 'This value is not valid',
           feedbackIcons: {
               valid: 'glyphicon glyphicon-ok',
               invalid: 'glyphicon glyphicon-remove',
               validating: 'glyphicon glyphicon-refresh'
           },
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