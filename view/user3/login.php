
<style>
	.page-banner-area {
		background: rgba(0, 0, 0, 0) url(http://localhost/laptopbaongoc_mvc/file/1920-400-1.jpg) no-repeat scroll center center;
	}
	</style>
	<!-- PAGE-CONTENT START -->
    <section class="page-content">
			<!-- PAGE-BANNER START -->
			<div class="page-banner-area  margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-banner-menu">
								<h2 class="page-banner-title">Login</h2>
								<ul>
									<li><a href="index.html">home</a></li>
									<li>Login</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- PAGE-BANNER END -->
			<!-- LOGIN-AREA START -->
			<div class="lognin-area">
				<div class="container">
					<div class="row">
						<!-- Registered-Customers Start -->
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<form action="?controller=user3&act=check_login" method="POST">
								<div class="registered-customers">
									<h2 class="login-title">If you have an account with us, Please log in.</h2>
									<div class="registered">
										<!-- <p>If you have an account with us, Please log in.</p> -->
										<?php echo @$data['thongbao'] ?>
										<div class="row">
											<div class="col-md-12">
												<input type="text" class="custom-form" name="user" placeholder="My User !!! " />
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<input type="password" name="pass" class="custom-form" placeholder="Password" />
											</div>
										</div>
										
										<p style="text-align:right;"><label class="forgot"><a href="?controller=user3&act=forgotpassword">Forgot your password?</a></label></p>
										<p><input name="remem" value="1" type="checkbox"> <label class="forgot"> Remember the account</label></p>
										<input type="submit" name='login' class="custom-submit-2" value="login" />
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-3"></div>
						<!-- Registered-Customers End -->
						<!-- <div class="col-md-6">
							<form action="#">
								<div class="new-customers">
									<h2 class="login-title">NEW CUSTOMERS</h2>
									<div class="row">
										<div class="col-sm-6">
											<input type="text" class="custom-form" placeholder="First Name" />
										</div>
										<div class="col-sm-6">
											<input type="text" class="custom-form" placeholder="Last Name" />
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<input type="text" class="custom-form" placeholder="Address" />
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<select class="custom-select custom-form">
												<option>City</option>
												<option>Dhaka</option>
												<option>New York</option>
												<option>London</option>
												<option>Melbourne</option>
											</select>
										</div>
										<div class="col-sm-6">
											<select class="custom-select custom-form">
												<option>Country</option>
												<option>Bangladesh</option>
												<option>United States</option>
												<option>United Kingdom</option>
												<option>Australia</option>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<input type="text" class="custom-form" placeholder="Phone Number" />
										</div>
										<div class="col-sm-6">
											<select class="custom-select custom-form">
												<option>Post Code</option>
												<option>012345</option>
												<option>0123456</option>
												<option>01234567</option>
												<option>012345678</option>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<input class="custom-form" type="text" placeholder="Email" name="email" />
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<input class="custom-form" type="password" placeholder="Password" />
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<input class="custom-form" type="password" placeholder="Confirm Password" />
										</div>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" checked="checked" name="create-account"/>
											Sign up for our newsletter!
										</label>
										<label>
											<input type="checkbox" name="billing-address"/>
											Receive special offers from our partners!
										</label>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<input type="submit" class="custom-form custom-submit no-margin" value="register" />
										</div>
										<div class="col-sm-6">
											<input type="submit" class="custom-form custom-submit no-margin" value="clear" />
										</div>
									</div>
								</div>
							</form>
						</div> -->
					</div>
				</div>
			</div>
			<!-- LOGIN-AREA END -->
			<!-- BRAND-LOGO-AREA START -->
			<!-- <div class="brand-logo-area margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-12">
							<div class="brand-brief">
								<h2 class="border-left-right">they are with us</h2>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
							</div>
						</div>
						<div class="col-md-7 col-sm-12">
							<div class="brand-logo fix">
								<div class="single-logo">
									<img src="<?=template_user3_path?>/img/brand/1.png" alt="" />
								</div>
								<div class="single-logo">
									<img src="<?=template_user3_path?>/img/brand/2.png" alt="" />
								</div>
								<div class="single-logo">
									<img src="<?=template_user3_path?>/img/brand/3.png" alt="" />
								</div>
								<div class="single-logo">
									<img src="<?=template_user3_path?>/img/brand/4.png" alt="" />
								</div>
								<div class="single-logo">
									<img src="<?=template_user3_path?>/img/brand/5.png" alt="" />
								</div>
								<div class="single-logo">
									<img src="<?=template_user3_path?>/img/brand/6.png" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<!-- BRAND-LOGO-AREA END -->
		</section>
		<!-- PAGE-CONTENT END -->