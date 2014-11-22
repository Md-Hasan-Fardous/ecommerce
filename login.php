<?php include('header.php');?>
	
		<section class="registration">
			<div class="container">
				<div class="row">
					<div class="col-md-12 reg_area">						
						<div class="reg">
							<div class="col-md-8 lft">
								<div class="reg_head">
									<div class="users_ic">
										<i class="fa fa-users"></i>
									</div>
									<h2>আপনার নতুন অ্যাকাউন্ট তৈরি</h2>
									<p>আপনার বিজ্ঞাপন এবং পছন্দের তালিকা একসাথে, <span>ফ্রি!</span></p>
								</div>
								
								<div class="crt_acc">
									<p><span>এখনও কোন একাউন্ট নেই?</span> <a class="btn btn-success" href="register.php">নতুন একাউন্ট তৈরী!</a></p>
								</div>
								
								<div class="some_des">
									<div class="col-md-6 lft">
										<i class="fa fa-book"></i>
										<p class="ttl">বিজ্ঞাপন দেয়া এবংপরিচালনা করা আরও সহজ!</p>
										<p class="des">আপনার বিজ্ঞাপনের ছবি দিন, বর্ণনা এবং দাম পরিবর্তন করুন। খুব দ্রুত ও সহজভাবে নতুন বিজ্ঞাপন পোস্ট করুন।</p>
									</div>
									<div class="col-md-6 rht">
										<i class="fa fa-pencil"></i>
										<p class="ttl">যেকোন কম্পিউটার থেকে আপনার সংরক্ষিত বিজ্ঞাপন দেখুন।</p>
										<p class="des">যেকোন কম্পিউটার থেকে আপনার একাউন্টে লগ ইন করুন এবং সংরক্ষিত বিজ্ঞাপনগুলো দেখুন।</p>
									</div>
								</div>
							</div>
							
							<div class="col-md-4 rht">
								<div class="login_ar">
									<p class="lgin">
										Login To Your Account
									</p>
									
									<form action="dashboard.php" method="post">
										<div class="form-group">
											<label for="username">Username</label>
											<input type="text" class="form-control" placeholder="Username">
										</div>
										<div class="form-group">
											<label for="password">Password</label>
											<input type="text" class="form-control" placeholder="Password">
										</div>
										<div class="checkbox">
											<label>
											  <input type="checkbox" name="rememberme"> Remember Me
											</label>
										</div>
										<button type="submit" class="btn btn-success">Login</button>
									</form>
									
									<p class="forgt_ps">
										<a href="forgot-password.php">Forgot Password?</a>
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

<?php include('footer.php');?>