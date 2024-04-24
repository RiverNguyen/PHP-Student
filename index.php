<?php
ob_start();
session_start();

include "model/pdo.php";
include "model/user.php";
include "pages/header.php";
include "model/mail/index.php";
$mail = new Mailer();
if (isset($_GET['act']) && $_GET['act']) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sign-in':
            if (isset($_POST['sign-in']) && ($_POST['sign-in'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);

                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('Location: admin/index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại!";
                }
            }
            include "user/sign-in.php";
            break;

        case 'sign-up':
            if (isset($_POST['sign-up'])) {
                $mail = $_POST['mail'];
                $pass = $_POST['pass'];
                $user = $_POST['user'];
                insert_user($mail, $pass, $user);
                header("location: index.php?act=sign-in");
            }
            include "user/sign-up.php";
            break;

        case 'forgot-pass':
            if (isset($_POST['forgot']) && ($_POST['forgot'])) {
                $error = array();
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $code = substr(rand(0, 999999), 0, 6);
                    $title = "Quên mật khẩu";
                    $content = "Mã xác nhận của bạn là: <span style='color: red; font-weight: bold;'>" . $code . "</span>";
                    $mail->sendMail($title, $content, $email);
                    $_SESSION['mail'] = $email;
                    $_SESSION['code'] = $code;
                    header("Location: index.php?act=verification");
                } else {
                    $error['fail'] = "Email không tồn tại. Vui lòng kiểm tra lại!";
                }
            }
            include "user/forgot-pass.php";
            break;

        case 'verification':
            if (isset($_POST['verify']) && ($_POST['verify'])) {
                $error = array();
                $codeFromSession = isset($_SESSION['code']) ? $_SESSION['code'] : null;

                if ($_POST['text'] != $codeFromSession) {
                    $error['fail'] = "Mã xác nhận không đúng. Vui lòng kiểm tra lại!";
                } else {
                    header("Location: index.php?act=change-pass");
                }
            }
            include "user/verification.php";
            break;

        case 'change-pass':
            if (!isset($_SESSION['code']) || empty($_SESSION['mail'])) {

                header("Location: index.php?act=forgot-pass");
                exit();
            }
            if (isset($_POST['submit'])) {
                $error = array();

                $email = $_SESSION['mail'];
                $checkemail = checkemail($email);
                if (!is_array($checkemail)) {
                    $error['fail'] = "Email không tồn tại hoặc không xác nhận mã. Vui lòng kiểm tra lại!";
                } else {
                    if ($_POST['repass'] != $_POST['newpass']) {
                        $error['fail'] = "Mật khẩu không trùng khớp. Vui lòng kiểm tra lại!";
                    } else {
                        $error['success'] = "Đổi mật khẩu thành công!";
                        $email = $_SESSION['mail'];
                        $pass = $_POST['newpass'];
                        forgot_pass($email, $pass);
                        // Thêm mã JavaScript để hiển thị alert và chuyển hướng sau 2 giây
                        echo '<div style="display:none;">Content to prevent white screen</div>';
                        echo '<script>
                                                setTimeout(function() {
                                                    alert("Đổi mật khẩu thành công! Mời bạn đăng nhập lại!");
                                                    window.location.href = "index.php?act=sign-in";
                                                }, 500);
                                            </script>';
                        $_SESSION['code'] = [];
                        $_SESSION['mail'] = [];
                        exit(); // Đảm bảo dừng script sau lệnh chuyển hướng
                    }
                }
            }
            include "user/change-pass.php";
            break;
    }
} else {
    if (isset($_POST['sign-in']) && ($_POST['sign-in'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $checkuser = checkuser($user, $pass);

        if (is_array($checkuser)) {
            $_SESSION['user'] = $checkuser;
            header('Location: admin/index.php');
        } else {
            $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại!";
        }
    }
    include "user/sign-in.php";
}
include "pages/footer.php";
