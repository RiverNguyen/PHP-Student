<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left">
                    <img class="img-fluid" src="assets/img/login.png" alt="Logo">
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Đặt lại mật khẩu</h1>
                        <p class="account-subtitle">Hãy để chúng tôi giúp bạn</p>

                        <!-- Form -->
                        <form action="index.php?act=forgot-pass" method="post">
                            <div class="form-group">
                                <label>Nhập mail bạn đã đăng ký! <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="email">
                                <span class="profile-views"><i class="fas fa-envelope"></i></span>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary btn-block" name="forgot" type="submit" value="Đặt lại mật khẩu"></input>
                            </div>
                            <div class="form-group mb-0">
                                <a href="index.php?act=sign-in"><button class="btn btn-primary primary-reset btn-block" type="submit">Đăng nhập</button></a>
                            </div>
                        </form>
                        <br>
                        <?php if (isset($error['fail'])) : ?>
                            <div class="alert alert-danger">
                                <strong><?= $error['fail'] ?></strong>
                            </div>
                        <?php endif; ?>
                        <!-- /Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>