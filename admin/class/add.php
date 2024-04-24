<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Thêm lớp học</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-sm-12">

                <div class="card comman-shadow">
                    <div class="card-body">
                        <form action="index.php?act=add_class" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Thông tin <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-12 col-sm-5">
                                    <div class="form-group local-forms">
                                        <label>Tên lớp<span class="login-danger">*</span></label>
                                        <input class="form-control" name="name" type="text" placeholder="Điền tên lớp...">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-5">
                                    <div class="form-group local-forms">
                                        <label>Môn học <span class="login-danger">*</span></label>
                                        <select class="form-control subject" name="subject">
                                            <option value="">Chọn môn học</option>
                                            <?php foreach ($subjectList as $subject) : ?>
                                                <?php extract($subject); ?>
                                                <option value="<?= $id ?>"><?= $name ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Giảng viên <span class="login-danger">*</span></label>
                                        <select class="form-control subject" name="teacher">
                                            <option value="">Chọn giảng viên</option>
                                            <?php foreach ($teacherList as $teacher) : ?>
                                                <?php extract($teacher); ?>
                                                <option value="<?= $id ?>"><?= $name ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                </div>
                                <div class="col-12">
                                    <div class="student-submit">
                                        <input type="submit" name="save" class="btn btn-primary" value="Thêm mới"></input>
                                        <a href="index.php?act=list_class"><input type="button" name="save" class="btn btn-primary" value="Danh sách"></input></a>
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
    $(".select").select2({});

    function validateForm() {

        var className = document.getElementsByName('name')[0];
        var subject = document.getElementsByName('subject')[0];
        var teacher = document.getElementsByName('teacher')[0];

        if (className.value.trim() === '') {
            alert('Vui lòng nhập tên lớp.');
            return false;
        }

        if (subject.value === '') {
            alert('Vui lòng chọn môn học.');
            return false;
        }


        if (teacher.value === '') {
            alert('Vui lòng chọn giảng viên.');
            return false;
        }


        return true;
    }
</script>