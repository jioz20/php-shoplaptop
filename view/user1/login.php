<?php
// xem_arr($_POST);
?>
<form method="post" action="?controller=user1&act=login" class="register-form">
<body class="full-screen login">
    <div class="wrapper">
        <div class="page-header" style="background-image: url('<?=template_user1_path?>/assets/img/sections/bruno-abatti.jpg');">
            <div class="filter"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <div class="card card-register">
                            <h3 class="card-title">Welcome</h3>
                                <label>Email</label>
                                <!-- <input type="email" name="email" class="form-control no-border" placeholder="Email"> -->
                                <input type="text" name="user" value="" class="form-control no-border" placeholder="Email">
                                <label>Password</label>
								<input type="password" name="passwords"  value="" class="form-control no-border" placeholder="Password">
								<div class="form-check">
                                <label class="form-check-label">
									<input class="form-check-input"  name="checkbox" type="checkbox" value="1">
										Remember Account
									<span class="form-check-sign"></span>
									</label>
								</div>
                                <button class="btn btn-danger btn-block btn-round">Register</button>
                            <div class="forgot">
                                <a href="#paper-kit" class="btn btn-link btn-danger">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="demo-footer text-center">
					<h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
				</div>
            </div>
        </div>
    </div>
</body>
</form>