<?php
if (is_array($score)) {
    extract($score);
}

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
                        <form action="index.php?act=fix_score" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Thông tin <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Điểm 1 <span class="login-danger">*</span></label>
                                        <input class="form-control" name="score1" type="text" value="<?= $score1 ?>" placeholder="Điền điểm...">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Điểm 2 <span class="login-danger">*</span></label>
                                        <input class="form-control" name="score2" type="text" value="<?= $score2 ?>" placeholder="Điền điểm...">
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="student-submit">
                                        <input type="hidden" name="id_class" value="<?= $id_class ?>">
                                        <input type="hidden" name="id_student" value="<?= $id_student ?>">
                                        <input type="hidden" name="id" value="<?= $id ?>">
                                        <input type="submit" name="save" class="btn btn-primary" value="Thêm mới"></input>
                                        <a href="index.php?act=list_class"><input type="button"  name="save" class="btn btn-primary" value="Danh sách"></input></a>
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
</script>