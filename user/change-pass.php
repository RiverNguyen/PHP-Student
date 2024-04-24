<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2024 03:59:22 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>ĐHCN Đông Á - Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Fontfamily -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <!-- Pe7 CSS -->
    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style1.css">
</head>

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
                            <h1>Đặt lại mật khẩu</h1>
                            <p class="account-subtitle">Cần tài khoản? <a href="index.php?act=sign-up">Đăng ký</a></p>
                            <!-- Form -->
                            <form action="index.php?act=change-pass" method="post">
                                <div class="form-group">
                                    <label>Mật khẩu mới <span class="login-danger">*</span></label>
                                    <input class="form-control" name="newpass" type="password">
                                </div>
                                <div class="form-group">
                                    <label>Nhập lại mật khẩu <span class="login-danger">*</span></label>
                                    <input class="form-control pass-input" name="repass" type="password">
                                </div>

                                <div class="form-group">
                                    <input class="btn btn-primary btn-block" name="submit" type="submit" value="Lưu"></input>
                                </div>
                            </form>
                            <!-- /Form -->
                            <br>
                            <?php if (isset($error['fail'])) : ?>
                                <div class="alert alert-danger">
                                    <strong><?= $error['fail'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>