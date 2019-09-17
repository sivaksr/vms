<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border"> <a href="profile.php" type="button" class="btn btn-info btn-sm pull-right">Back</a>
						<h3 class="mt-0 mb-0">Update Profile</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<div style="padding:20px;">
						<form id="defaultForm" method="post" class="" action="update-profile.php">
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Registration No</label>
									<div class="">
										<p>123456</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Gst</label>
									<div class="">
										<input type="text" class="form-control" name="username" value="850022xxxx" />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Pan</label>
									<div class="">
										<input type="mail" class="form-control" name="username" value="customer1@gmail.com" />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Name</label>
									<div class="">
										<input type="text" class="form-control" name="username" value="Rajendra" />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Company Name</label>
									<div class="">
										<input type="text" class="form-control" name="username" value="Prachatech" />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Mobile Number</label>
									<div class="">
										<input type="text" class="form-control" name="username" value="872345xxxx" />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Email Id</label>
									<div class="">
										<input type="text" class="form-control" name="username" value="prachatech@gmail.com" />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Billing Address</label>
									<div class="">
										<textarea class="form-control"></textarea>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Godan Address</label>
									<div class="">
										<textarea class="form-control"></textarea>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="form-group col-md-9">
										<label class=" control-label">Profile</label>
										<div class="">
											<input type="file" class="form-control" name="username" value="Prachatech" />
										</div>
									</div>
									<div class="col-md-3">
										<label class=" control-label">Present pic</label>
										<div class="">
											<img style="width:30px;height:30px;" src="../img/user.png">
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix">&nbsp;</div>
							<div class="form-group">
								<div class="pull-right mr-3">
									<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Save Changes</button>
								</div>
							</div>
						</form>
						<div class="clearfix">&nbsp;</div>
					</div>
				</div>
				<!-- /.box -->
			</div>
		</div>
		<!-- /.row -->
	</section>
</div>
<script type="text/javascript">
	$(document).ready(function() {
	        $(".select2").select2();
	        // Generate a simple captcha
	        function randomNumber(min, max) {
	            return Math.floor(Math.random() * (max - min + 1) + min);
	        };
	        $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));
	
	        $('#defaultForm').bootstrapValidator({
	            //        live: 'disabled',
	            message: 'This value is not valid',
	            feedbackIcons: {
	                valid: 'glyphicon glyphicon-ok',
	                invalid: 'glyphicon glyphicon-remove',
	                validating: 'glyphicon glyphicon-refresh'
	            },
	            fields: {
	                firstName: {
	                    group: '.col-lg-4',
	                    validators: {
	                        notEmpty: {
	                            message: 'The first name is required and cannot be empty'
	                        }
	                    }
	                },
	                lastName: {
	                    group: '.col-lg-4',
	                    validators: {
	                        notEmpty: {
	                            message: 'The last name is required and cannot be empty'
	                        }
	                    }
	                },
	                username: {
	                    message: 'The username is not valid',
	                    validators: {
	                        notEmpty: {
	                            message: 'The username is required and cannot be empty'
	                        },
	                        stringLength: {
	                            min: 6,
	                            max: 30,
	                            message: 'The username must be more than 6 and less than 30 characters long'
	                        },
	                        regexp: {
	                            regexp: /^[a-zA-Z0-9_\.]+$/,
	                            message: 'The username can only consist of alphabetical, number, dot and underscore'
	                        },
	                        remote: {
	                            type: 'POST',
	                            url: 'remote.php',
	                            message: 'The username is not available'
	                        },
	                        different: {
	                            field: 'password,confirmPassword',
	                            message: 'The username and password cannot be the same as each other'
	                        }
	                    }
	                },
	                email: {
	                    validators: {
	                        emailAddress: {
	                            message: 'The input is not a valid email address'
	                        }
	                    }
	                },
	                password: {
	                    validators: {
	                        notEmpty: {
	                            message: 'The password is required and cannot be empty'
	                        },
	                        identical: {
	                            field: 'confirmPassword',
	                            message: 'The password and its confirm are not the same'
	                        },
	                        different: {
	                            field: 'username',
	                            message: 'The password cannot be the same as username'
	                        }
	                    }
	                },
	                confirmPassword: {
	                    validators: {
	                        notEmpty: {
	                            message: 'The confirm password is required and cannot be empty'
	                        },
	                        identical: {
	                            field: 'password',
	                            message: 'The password and its confirm are not the same'
	                        },
	                        different: {
	                            field: 'username',
	                            message: 'The password cannot be the same as username'
	                        }
	                    }
	                },
	                birthday: {
	                    validators: {
	                        date: {
	                            format: 'YYYY/MM/DD',
	                            message: 'The birthday is not valid'
	                        }
	                    }
	                },
	                gender: {
	                    validators: {
	                        notEmpty: {
	                            message: 'The gender is required'
	                        }
	                    }
	                },
	                'languages[]': {
	                    validators: {
	                        notEmpty: {
	                            message: 'Please specify at least one language you can speak'
	                        }
	                    }
	                },
	                'programs[]': {
	                    validators: {
	                        choice: {
	                            min: 2,
	                            max: 4,
	                            message: 'Please choose 2 - 4 programming languages you are good at'
	                        }
	                    }
	                },
	                captcha: {
	                    validators: {
	                        callback: {
	                            message: 'Wrong answer',
	                            callback: function(value, validator) {
	                                var items = $('#captchaOperation').html().split(' '),
	                                    sum = parseInt(items[0]) + parseInt(items[2]);
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
