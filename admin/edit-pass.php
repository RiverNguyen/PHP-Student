<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    
                    <div class="login-right">
                        <div class="login-right-wrap">
                            
                            <h2>Đổi mật khẩu</h2>
                            <!-- Form -->
                            <form action="index.php?act=edit-pass" method="post">
                                <div class="form-group">
                                    <label>Mật khẩu cũ <span class="login-danger">*</span></label>
                                    <input class="form-control" name="oldpass" type="password">
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu mới <span class="login-danger">*</span></label>
                                    <input class="form-control pass-input" name="newpass" type="password">
                                </div>
                                
                                <div class="form-group">
                                    <input type="hidden" name="pass" value="<?= $_SESSION['user']['pass'] ?>">
                                    <input type="hidden" name="id" value="<?= $_SESSION['user']['id'] ?>">
                                    <input class="btn btn-primary btn-block" name="save" type="submit" value="Đổi"></input>
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