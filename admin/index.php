<?php
ob_start();
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: ../index.php');
}
include "../model/pdo.php";
include "../model/sinhvien.php";
include "../model/teacher.php";
include "../model/subject.php";
include "../model/class.php";
include "../model/major.php";
include "../model/score.php";
include "../model/user.php";
include "../model/statistical.php";

$studentCount = count_student();
$teacherCount = cout_teacher();
$classCount = count_class();
$goodStudent = count_good();
$dsthongke = thongke_student();
$dsthongke1 = thongke_teacher();
include "header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

        case 'edit-pass':
            if (isset($_POST['save']) && $_POST['save']) {
                $oldpass = $_POST['oldpass'];
                $newpass = $_POST['newpass'];
                $pass = $_POST['pass'];
                $id = $_POST['id'];
                if ($oldpass == $pass) {
                    change_pass($id, $newpass);
                    session_unset();
                    header('Location: index.php');
                    $thongbao = "Đổi mật khẩu thành công";
                } else {
                    $thongbao = "Mật khẩu cũ không đúng";
                }
            }
            include "edit-pass.php";
            break;

        case 'detail':
            include "detail.php";
            break;
        case 'add_major':
            if (isset($_POST['save']) && ($_POST['save'])) {
                $name = $_POST['name'];
                insert_major($name);
                $thongbao = "Thêm thành công";
            }
            include "major/add.php";
            break;

        case 'list_major':
            $majorList = loadall_major();
            include "major/list.php";
            break;

        case 'del_major':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                del_major($_GET['id']);
            }
            $majorList = loadall_major();
            include "major/list.php";
            break;

        case 'edit_major':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $major = loadone_major($_GET['id']);
            }
            include "major/update.php";
            break;

        case 'major_detail':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $majors = load_major_detail($_GET['id']);
            }
            include "major/detail.php";
            break;

        case 'update_major':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                update_major($id, $name);
            }
            $majorList = loadall_major();
            include "major/list.php";
            break;

        case 'list_stu':
            $studentList = loadall_student();
            include "sinhvien/list.php";
            break;

        case 'list_stu_grid':
            $studentList = loadall_student();
            include "sinhvien/list-grid.php";
            break;

        case 'add_stu':
            if (isset($_POST['save']) && ($_POST['save'])) {
                $name = $_POST['name'];
                $gender = $_POST['gender'];
                $birth = $_POST['birth'];
                $mail = $_POST['mail'];
                $major = $_POST['major'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $img = $_FILES['img']['name'];
                $target_dir = "../assets/img/student/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // File moved successfully.
                } else {
                }
                $thongbao = "Thêm thành công";
                insert_student($name, $gender, $birth, $mail, $major, $img, $address, $phone);
            }
            $majorList = loadall_major();
            include "sinhvien/add.php";
            break;

        case 'edit_stu':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $student = loadone_student($_GET['id']);
            }
            $majorList = loadall_major();
            include "sinhvien/update.php";
            break;

        case 'update_stu':
            if (isset($_POST['update']) && $_POST['update']) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $gender = $_POST['gender'];
                $birth = $_POST['birth'];
                $mail = $_POST['mail'];
                $major = $_POST['major'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $img = $_FILES['img']['name'];
                $target_dir = "../assets/img/student/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // File moved successfully.
                } else {
                }
                update_student($id, $name, $gender, $birth, $mail, $major, $img, $address, $phone);
            }
            $studentList = loadall_student();
            include "sinhvien/list.php";
            break;

        case 'del_stu':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                del_student($_GET['id']);
            }
            $studentList = loadall_student();
            include "sinhvien/list.php";
            break;

        case 'student_detail':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $student = loadone_student($_GET['id']);
            }
            include "sinhvien/detail.php";
            break;

        case 'add_tea':
            if (isset($_POST['save']) && $_POST['save']) {
                $name = $_POST['name'];
                $gender = $_POST['gender'];
                $birth = $_POST['birth'];
                $mail = $_POST['mail'];
                $major = $_POST['major'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $img = $_FILES['img']['name'];
                $target_dir = "../assets/img/teacher/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // File moved successfully.
                } else {
                }
                insert_teacher($name, $gender, $birth, $mail, $major, $phone, $address, $img);
                $thongbao = "Thêm thành công";
            }
            $majorList = loadall_major();
            include "giangvien/add.php";
            break;

        case 'list_tea':
            $teacherList = loadall_teacher();
            include "giangvien/list.php";
            break;

        case 'list_tea_grid':
            $teacherList = loadall_teacher();
            include "giangvien/list-grid.php";
            break;

        case 'teacher_detail':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $teacher = loadone_teacher($_GET['id']);
            }
            include "giangvien/detail.php";
            break;

        case 'del_tea':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                del_teacher($_GET['id']);
            }
            $teacherList = loadall_teacher();
            include "giangvien/list.php";
            break;

        case 'edit_tea':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $teacher = loadone_teacher($_GET['id']);
            }
            $majorList = loadall_major();
            include "giangvien/update.php";
            break;

        case 'update_tea':
            if (isset($_POST['update']) && $_POST['update']) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $gender = $_POST['gender'];
                $birth = $_POST['birth'];
                $mail = $_POST['mail'];
                $major = $_POST['major'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $img = $_FILES['img']['name'];
                $target_dir = "../assets/img/teacher/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // File moved successfully.
                } else {
                }
                update_teacher($id, $name, $gender, $birth, $mail, $major, $img, $address, $phone);
            }
            $teacherList = loadall_teacher();
            include "giangvien/list.php";
            break;

        case 'add_class':
            if (isset($_POST['save']) && $_POST['save']) {
                $name = $_POST['name'];
                $subject = $_POST['subject'];
                $teacher = $_POST['teacher'];
                insert_class($name, $subject, $teacher);
                $thongbao = "Thêm thành công";
            }
            $subjectList = loadall_subject();
            $teacherList = loadall_teacher();
            include "class/add.php";
            break;

        case 'list_class':
            $classList = loadall_class();
            include "class/list.php";
            break;

        case 'add_subject':
            if (isset($_POST['save']) && $_POST['save']) {
                $name = $_POST['name'];
                $credits = $_POST['credits'];
                insert_subject($name, $credits);
                $thongbao = "Thêm thành công";
            }
            include "subject/add.php";
            break;

        case 'list_subject':
            $subjectList = loadall_subject();
            include "subject/list.php";
            break;

        case 'del_subject':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                del_subject($_GET['id']);
            }
            $subjectList = loadall_subject();
            include "subject/list.php";
            break;

        case 'edit_subject':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $subject = loadone_subject($_GET['id']);
            }
            include "subject/update.php";
            break;

        case 'update_subject':
            if (isset($_POST['update']) && $_POST['update']) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $credits = $_POST['credits'];
                update_subject($id, $name, $credits);
            }
            $subjectList = loadall_subject();
            include "subject/list.php";
            break;


        case 'edit_class':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $class = loadone_class($_GET['id']);
            }
            $studentList = loadall_student();
            $teacherList = loadall_teacher();
            include "class/update.php";
            break;

        case 'change_name_class':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $class = loadone_class($_GET['id']);
            }
            include "class/change-name.php";
            break;

        case 'change-name':
            if (isset($_POST['save']) && $_POST['save']) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                update_name_class($id, $name);
            }
            $classList = loadall_class();
            include "class/list.php";
            break;

        case 'update_class':
            if (isset($_POST['save']) && $_POST['save']) {
                $id_class = $_POST['id_class'];
                $students = $_POST['students'];
                foreach ($students as $student) {
                    insert_student_class($id_class, $student);
                }
            }
            $classList = loadall_class();
            include "class/list.php";
            break;

        case 'class_detail':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $classList = load_class_detail($_GET['id']);
            }
            include "class/list-detail.php";
            break;

        case 'del_class':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                del_class($_GET['id']);
            }
            $classList = loadall_class();
            include "class/list.php";
            break;

        case 'list_score':
            $classList = loadall_class();
            include "score/list.php";
            break;

        case 'score_detail':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $scoreList = load_score_detail($_GET['id']);
            }
            include "score/list-detail.php";
            break;

        case 'edit_score':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $class = loadone_class($_GET['id']);
            }
            $studentList = load_student_score($_GET['id']);
            include "score/update.php";
            break;

        case 'update_score':
            if (isset($_POST['save']) && $_POST['save']) {
                $id_class = $_POST['id_class'];
                $id_student = $_POST['id_student'];
                $score1 = $_POST['score1'];
                $score2 = $_POST['score2'];
                insert_score($id_class, $id_student, $score1, $score2);
            }
            $classList = loadall_class();
            include "score/list.php";
            break;

        case 'choose_score':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $score = loadone_score($_GET['id']);
            }
            include "score/fix-score.php";
            break;

        case 'fix_score':
            if (isset($_POST['save']) && $_POST['save']) {
                $id = $_POST['id'];
                $id_student = $_POST['id_student'];
                $id_class = $_POST['id_ca$id_class'];
                $score1 = $_POST['score1'];
                $score2 = $_POST['score2'];
                update_score($id, $score1, $score2);
            }
            $classList = loadall_class();
            include "score/list.php";
            break;

        case 'del_stu_class':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                del_student_class($_GET['id']);
            }
            $classList = loadall_class();
            include "class/list.php";
            break;

        case 'log-out':
            session_unset();
            header('Location: index.php');
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
