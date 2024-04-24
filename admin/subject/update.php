<?php
is_array($subject) ? extract($subject) : null;
?>

<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Chỉnh sửa môn học</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-sm-12">

                <div class="card comman-shadow">
                    <div class="card-body">
                        <form action="index.php?act=update_subject" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Thông tin <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Tên môn<span class="login-danger">*</span></label>
                                        <input class="form-control" name="name" type="text" placeholder="Điền tên môn học..." value="<?= $name ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                </div>
                                <div class="col-12 col-sm-4">
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Số tín chỉ <span class="login-danger">*</span></label>
                                        <input name="credits" class="form-control" type="text" placeholder="Nhập số tín chỉ..." value="<?= $credits ?>">
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