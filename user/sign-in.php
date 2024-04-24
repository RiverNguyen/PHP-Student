<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left">
						<img class="img-fluid" src="assets/img/login.png" alt="Logo">
					</div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1>ĐHCN Đông Á</h1>
							<p class="account-subtitle">Cần tài khoản? <a href="index.php?act=sign-up">Đăng ký</a></p>
							<h2>Đăng nhập</h2>
							<!-- Form -->
							<form action="index.php?act=sign-in" method="post">
								<div class="form-group">
									<label>Username <span class="login-danger">*</span></label>
									<input class="form-control" name="user" type="text">
									<span class="profile-views"><i class="fas fa-user-circle"></i></span>
								</div>
								<div class="form-group">
									<label>Password <span class="login-danger">*</span></label>
									<input class="form-control pass-input" name="pass" type="password">
								</div>
								<div class="forgotpass">
									<div class="remember-me">
										<label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Nhớ mật khẩu
											<input type="checkbox" name="radio">
											<span class="checkmark"></span>
										</label>
									</div>
									<a href="index.php?act=forgot-pass">Quên mật khẩu?</a>
								</div>
								<div class="form-group">
									<input class="btn btn-primary btn-block" name="sign-in" type="submit" value="Đăng nhập"></input>
								</div>
							</form>
							<!-- /Form -->
							<br>
							<?php if (isset($thongbao)) : ?>
								<div class="alert alert-danger">
									<strong><?= $thongbao ?></strong>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>