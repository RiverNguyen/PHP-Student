<?=
is_array($class) ? extract($class) : null;
?>
<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Thêm điểm</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-sm-12">

                <div class="card comman-shadow">
                    <div class="card-body">
                        <form action="index.php?act=update_score" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Thông tin <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Tên lớp<span class="login-danger">*</span></label>
                                        <input type="hidden" name="id_class" value="<?= $id ?>">
                                        <input class="form-control" name="name" type="text" value="<?= $name ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Sinh viên <span class="login-danger">*</span></label>
                                        <select class="form-control" name="id_student">
                                            <option value="">Chọn sinh viên</option>
                                            <?php foreach ($studentList as $student) : ?>
                                                <?php extract($student); ?>
                                                <option value="<?= $id_student ?>"><?= $name ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Điểm 1 <span class="login-danger">*</span></label>
                                        <input class="form-control" name="score1" type="text" placeholder="Điền điểm...">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Điểm 2 <span class="login-danger">*</span></label>
                                        <input class="form-control" name="score2" type="text" placeholder="Điền điểm...">
                                    </div>
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

<!-- Add this script inside your HTML file, preferably before the closing </body> tag -->

<script>
    function validateForm() {

        var idStudent = document.getElementsByName('id_student')[0];
        var score1 = document.getElementsByName('score1')[0];
        var score2 = document.getElementsByName('score2')[0];


        if (idStudent.value === '') {
            alert('Vui lòng chọn sinh viên.');
            return false;
        }


        var score1Value = parseFloat(score1.value);
        if (isNaN(score1Value) || score1Value <= 0 || score1Value > 10) {
            alert('Vui lòng nhập điểm 1 hợp lệ (lớn hơn 0 và nhỏ hơn 10).');
            return false;
        }


        var score2Value = parseFloat(score2.value);
        if (isNaN(score2Value) || score2Value <= 0 || score2Value > 10) {
            alert('Vui lòng nhập điểm 2 hợp lệ (lớn hơn 0 và nhỏ hơn 10).');
            return false;
        }

        return true;
    }
</script>