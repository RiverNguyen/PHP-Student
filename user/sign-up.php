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
						<h1>Đăng ký</h1>
						<p class="account-subtitle">Vui lòng điền thông tin đăng ký!</p>

						<!-- Form -->
						<form action="index.php?act=sign-up" method="post">
							<div class="form-group">
								<label>Tên tài khoản <span class="login-danger">*</span></label>
								<input class="form-control" name="user" type="text">
								<span class="profile-views"><i class="fas fa-user-circle"></i></span>
							</div>
							<div class="form-group">
								<label>Email <span class="login-danger">*</span></label>
								<input class="form-control" name="mail" type="text">
								<span class="profile-views"><i class="fas fa-envelope"></i></span>
							</div>
							<div class="form-group">
								<label>Mật khẩu <span class="login-danger">*</span></label>
								<input class="form-control pass-input" name="pass" type="password">
								<span class="profile-views feather-eye toggle-password"></span>
							</div>

							<div class=" dont-have">Đã có tài khoản? <a href="index.php?act=sign-in">Đăng nhập</a></div>
							<div class="form-group mb-0">
								<input class="btn btn-primary btn-block" type="submit" value="Đăng ký" name="sign-up"></input>
							</div>
						</form>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>