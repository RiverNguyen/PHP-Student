<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Thêm ngành học</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-sm-12">

                <div class="card comman-shadow">
                    <div class="card-body">
                        <form action="index.php?act=add_major" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Thông tin <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Tên ngành học <span class="login-danger">*</span></label>
                                        <input class="form-control" name="name" type="text" placeholder="Điền tên ngành học...">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="student-submit">
                                        <input type="submit" name="save" class="btn btn-primary" value="Thêm mới"></input>
                                        <a href="index.php?act=list_major"><input type="button" name="save" class="btn btn-primary" value="Danh sách"></input></a>
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

        if (name === "") {
            alert("Vui lòng nhập tên ngành học");
            return false;
        }


        return true;
    }
</script>