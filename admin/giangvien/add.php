<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Thêm giảng viên</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-sm-12">

                <div class="card comman-shadow">
                    <div class="card-body">
                        <form action="index.php?act=add_tea" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Thông tin <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Họ và tên <span class="login-danger">*</span></label>
                                        <input class="form-control" name="name" type="text" placeholder="Điền họ và tên...">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Giới tính <span class="login-danger">*</span></label>
                                        <select class="form-control" name="gender">
                                            <option>Chọn giới tính</option>
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                            <option>Khác</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Ngày sinh <span class="login-danger">*</span></label>
                                        <input name="birth" class="form-control" type="date" placeholder="DD-MM-YYYY">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Mail <span class="login-danger">*</span></label>
                                        <input name="mail" class="form-control" type="text" placeholder="Nhập địa chỉ mail...">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Ngành dạy <span class="login-danger">*</span></label>
                                        <select class="form-control" name="major">
                                            <option value="">Chọn ngành dạy</option>
                                            <?php foreach ($majorList as $major) : ?>
                                                <?php extract($major); ?>
                                                <option value="<?= $id ?>"><?= $name ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Số điện thoại </label>
                                        <input name="phone" class="form-control" type="text" placeholder="Nhập số điện thoại...">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Địa chỉ </label>
                                        <input name="address" class="form-control" type="text" placeholder="Nhập địa chỉ...">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                </div>
                                <div class="col-12 col-sm-4">
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group students-up-files">
                                        <label>Tải ảnh làm avatar</label>
                                        <div class="upload">
                                            <img style="max-width: 150px;" id="choose-image">
                                            <figcaption id="file-name"></figcaption>
                                            <label class="file-upload image-upbtn mb-0" for="upload-btn">
                                                Tải file <input name="img" type="file" id="upload-btn">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="student-submit">
                                        <input type="submit" name="save" class="btn btn-primary" value="Thêm mới"></input>
                                        <a href="index.php?act=list_tea"><input type="button" name="save" class="btn btn-primary" value="Danh sách"></input></a>
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
    function validateForm() {
        var name = document.getElementsByName("name")[0].value;
        var gender = document.getElementsByName("gender")[0].value;
        var birth = document.getElementsByName("birth")[0].value;
        var mail = document.getElementsByName("mail")[0].value;
        var major = document.getElementsByName("major")[0].value;
        var phone = document.getElementsByName("phone")[0].value;

        if (name === "") {
            alert("Họ và tên không được để trống");
            return false;
        }

        if (gender === "Chọn giới tính") {
            alert("Vui lòng chọn giới tính");
            return false;
        }

        if (birth === "") {
            alert("Ngày sinh không được để trống");
            return false;
        }

        // Date of birth validation
        var dob = new Date(birth);
        var currentDate = new Date();
        var maxDate = new Date(currentDate.getFullYear() - 18, currentDate.getMonth(), currentDate.getDate());

        if (dob >= currentDate || dob >= maxDate) {
            alert("Ngày sinh không hợp lệ. Giảng viên phải đủ 18 tuổi trở lên.");
            return false;
        }

        if (mail === "") {
            alert("Mail không được để trống");
            return false;
        }

        if (major === "") {
            alert("Vui lòng chọn ngành dạy");
            return false;
        }

        // Phone number validation
        var phoneRegex = /^\d{10}$/; // Assuming a 10-digit phone number
        if (phone !== "" && !phoneRegex.test(phone)) {
            alert("Số điện thoại không hợp lệ. Vui lòng nhập 10 chữ số.");
            return false;
        }

        return true;
    }
</script>