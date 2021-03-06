<?php 
require('top.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
?>
<!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner animate__animated animate__fadeInDown">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Profile</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        
		<!-- Start Contact Area -->
        <section class="htc__contact__area ptb--100 bg__white">
            <div class="container">
                <div class="row">
					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Profile</h2>
								</div>
							</div>
							<div class="col-xs-12">
								<form id="login-form" method="post">
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="name" id="name" placeholder="Your Name*" style="width:100%" value="<?php echo $_SESSION['USER_NAME']?>">
										</div><br>
										<div class="contact-box name">
											<input type="text" class="form-control" name="email" id="email" style="width:100%;" value="<?php echo $_SESSION['USER_EMAIL']?>"disabled>
										</div><br>
										<div class="contact-box name">
											<input type="text" name="mobile" id="mobile" style="width:100%" minlength="10" maxlength="10" value="<?php echo $_SESSION['USER_MOBILE']?>" >
										</div>
										<span class="field_error" id="name_error"></span>
									</div>
									
									<div class="contact-btn">
										<button type="button" class="fv-btn" onclick="update_profile()" id="btn_submit">Update</button>
										
									</div>
								</form>
								
								
								
							</div>
						</div> 
                
				</div>
				
				<div class="row">
					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Change Password</h2>
								</div>
							</div>
							<div class="col-xs-12">
								<form method="post" id="frmPassword">
									<div class="single-contact-form">
										<label class="password_label">Current Password</label>
										<div class="contact-box name">
											<input type="password" name="current_password" id="current_password" style="width:100%">
										</div>
										<span class="field_error" id="current_password_error"></span>
									</div>
									<div class="single-contact-form">
										<label class="password_label">New Password</label>
										<div class="contact-box name">
											<input type="password" name="new_password" id="new_password" style="width:100%">
										</div>
										<span class="field_error" id="new_password_error"></span>
									</div>
									<div class="single-contact-form">
										<label class="password_label">Confirm New Password</label>
										<div class="contact-box name">
											<input type="password" name="confirm_new_password" id="confirm_new_password" style="width:100%">
										</div>
										<span class="field_error" id="confirm_new_password_error"></span>
									</div>
									
									<div class="contact-btn">
										<button type="button" class="fv-btn" onclick="update_password()" id="btn_update_password">Update</button>
										
									</div>
								</form>
								
								
								
							</div>
						</div> 
                
				</div>
				

					
            </div>
        </section>
		<script>
		function update_profile(){
			$('.field_error').html('');
			var name = $('#name').val();
			var mobile = $('#mobile').val();
			if(name==''){
				$('#name_error').html('Please enter your name');
			}else if(mobile == ''){
				$('#name_error').html('Please enter your Mobile Number');
			}else{
				$('#btn_submit').html('Please wait...');
				$('#btn_submit').attr('disabled',true);
				$.ajax({
					url:'update_profile.php',
					type:'post',
					data: {
						name : name,
						mobile : mobile
					},
					success:function(result){
						$('#name_error').html(result);
						$('#btn_submit').html('Update');
						$('#btn_submit').attr('disabled',false);
					}
				})
			}
		}
		
		function update_password(){
			$('.field_error').html('');
			var current_password=$('#current_password').val();
			var new_password=$('#new_password').val();
			var confirm_new_password=$('#confirm_new_password').val();
			var is_error='';
			if(current_password==''){
				$('#current_password_error').html('Please enter password');
				is_error='yes';
			}if(new_password==''){
				$('#new_password_error').html('Please enter password');
				is_error='yes';
			}if(confirm_new_password==''){
				$('#confirm_new_password_error').html('Please enter password');
				is_error='yes';
			}
			
			if(new_password!='' && confirm_new_password!='' && new_password!=confirm_new_password){
				$('#confirm_new_password_error').html('Please enter same password');
				is_error='yes';
			}
			
			if(is_error==''){
				$('#btn_update_password').html('Please wait...');
				$('#btn_update_password').attr('disabled',true);
				$.ajax({
					url:'update_password.php',
					type:'post',
					data:'current_password='+current_password+'&new_password='+new_password,
					success:function(result){
						$('#current_password_error').html(result);
						$('#btn_update_password').html('Update');
						$('#btn_update_password').attr('disabled',false);
						$('#frmPassword')[0].reset();
					}
				})
			}
			
		}
		</script>
<?php require('footer.php')?>        