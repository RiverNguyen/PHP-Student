<?php
if (is_array($student)) {
    extract($student);
}
$imgpath = "../assets/img/student/" . $img;
if (is_file($imgpath)) {
    $hinh = "<img src='" . $imgpath . "' style='max-width: 150px; margin: auto;'>";
} else {
    $hinh = "no photo";
}
?>

<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Chỉnh sửa sinh viên</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-sm-12">

                <div class="card comman-shadow">
                    <div class="card-body">
                        <form action="index.php?act=update_stu" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Thông tin <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Họ và tên <span class="login-danger">*</span></label>
                                        <input class="form-control" name="name" value="<?= $name ?>" type="text" placeholder="Điền họ và tên...">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Giới tính <span class="login-danger">*</span></label>
                                        <select class="form-control" name="gender">
                                            <?php
                                            if (isset($gender) && ($gender == "Nam")) {
                                                echo "<option selected>Nam</option>";
                                            } else {
                                                echo "<option>Nam</option>";
                                            }
                                            if (isset($gender) && ($gender == "Nữ")) {
                                                echo "<option selected>Nữ</option>";
                                            } else {
                                                echo "<option>Nữ</option>";
                                            }
                                            if (isset($gender) && ($gender == "Khác")) {
                                                echo "<option selected>Khác</option>";
                                            } else {
                                                echo "<option>Khác</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Ngày sinh <span class="login-danger">*</span></label>
                                        <input name="birth" class="form-control" type="date" value="<?= $birth ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Mail <span class="login-danger">*</span></label>
                                        <input name="mail" class="form-control" type="text" value="<?= $mail ?>" placeholder="Nhập địa chỉ mail...">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Ngành học <span class="login-danger">*</span></label>
                                        <select class="form-control" name="major">
                                            <option value="" selected>Tất Cả</option>
                                            <?php foreach ($majorList as $major) : ?>
                                                <?php if ($id_major == $major['id']) $s = "selected";
                                                else $s = ""; ?>
                                                <option value="<?= $major['id'] ?>" <?= $s ?>><?= $major['name'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Số điện thoại </label>
                                        <input name="phone" class="form-control" value="<?= $phone ?>" type="text" placeholder="Nhập số điện thoại...">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <div class="form-group local-forms">
                                        <label>Địa chỉ </label>
                                        <input name="address" class="form-control" type="text" value="<?= $address ?>" placeholder="Nhập địa chỉ...">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group students-up-files">
                                        <div class="upload">
                                            <img style="max-width: 150px;" id="choose-image">
                                            <div class="mb-3" id="hinh-container">
                                                <?= $hinh ?>
                                            </div>
                                            <figcaption id="file-name"></figcaption>
                                            <label class="file-upload image-upbtn mb-0" for="upload-btn">
                                                Tải file <input name="img" type="file" id="upload-btn">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="student-submit">
                                        <input type="hidden" name="id" value="<?= $id ?>">
                                        <input type="submit" name="update" class="btn btn-primary" value="Lưu"></input>
                                    </div>
                                    <br>
                                    <div class="text-danger bold">
                                        <?php
                                        if (isset($thongbao) && ($thongbao != "")) {
                                            echo $thongbao;
                                        }
                                        ?>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('upload-btn').addEventListener('change', function() {
        document.getElementById('hinh-container').style.display = 'none';
    });
</script>