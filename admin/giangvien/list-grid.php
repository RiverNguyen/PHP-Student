<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Danh sách giảng viên</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-sm-12">

                <div class="card card-table comman-shadow">
                    <div class="card-body pb-0">

                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Giảng viên</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="index.php?act=list_tea" class="btn btn-outline-gray me-2"><i class="feather-list"></i></a>
                                    <a href="index.php?act=list_tea_grid" class="btn btn-outline-gray me-2 active"><i class="feather-grid "></i></a>
                                    <a href="index.php?act=add_tea" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Header -->

                        <div class="student-pro-list">
                            <div class="row">
                                <?php foreach ($teacherList as $teacher) : ?>
                                    <?php
                                    extract($teacher);
                                    $editTea = "index.php?act=edit_tea&id=" . $id;
                                    $delTea = "index.php?act=del_tea&id=" . $id;
                                    $deltailTea = "index.php?act=teacher_detail&id=" . $id;
                                    $imgpath = "../assets/img/teacher/" . $img;
                                    ?>
                                    <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="student-box flex-fill">
                                                    <div class="student-img">
                                                        <a href="<?= $deltailTea ?>">
                                                            <img class="img-fluid" alt="Students Info" src="<?= $imgpath ?>">
                                                        </a>
                                                    </div>
                                                    <div class="student-content pb-0">
                                                        <h5><a href="<?= $deltailTea ?>"><?= $name ?></a></h5>
                                                        <h6>Giảng viên</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <!-- <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="student-box flex-fill">
                                                <div class="student-img">
                                                    <a href="student-details.html">
                                                        <img class="img-fluid" alt="Students Info" src="assets/img/profiles/avatar-04.jpg">
                                                    </a>
                                                </div>
                                                <div class="student-content pb-0">
                                                    <h5><a href="student-details.html">Levell Scott</a></h5>
                                                    <h6>Student</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="student-box flex-fill">
                                                <div class="student-img">
                                                    <a href="student-details.html">
                                                        <img class="img-fluid" alt="Students Info" src="assets/img/profiles/avatar-05.jpg">
                                                    </a>
                                                </div>
                                                <div class="student-content pb-0">
                                                    <h5><a href="student-details.html">Minnie</a></h5>
                                                    <h6>Student</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="student-box flex-fill">
                                                <div class="student-img">
                                                    <a href="student-details.html">
                                                        <img class="img-fluid" alt="Students Info" src="assets/img/profiles/avatar-06.jpg">
                                                    </a>
                                                </div>
                                                <div class="student-content pb-0">
                                                    <h5><a href="student-details.html">Lois A</a></h5>
                                                    <h6>Student</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="student-box flex-fill">
                                                <div class="student-img">
                                                    <a href="student-details.html">
                                                        <img class="img-fluid" alt="Students Info" src="assets/img/profiles/avatar-07.jpg">
                                                    </a>
                                                </div>
                                                <div class="student-content pb-0">
                                                    <h5><a href="student-details.html">Calvin</a></h5>
                                                    <h6>Student</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="student-box flex-fill">
                                                <div class="student-img">
                                                    <a href="student-details.html">
                                                        <img class="img-fluid" alt="Students Info" src="assets/img/profiles/avatar-08.jpg">
                                                    </a>
                                                </div>
                                                <div class="student-content pb-0">
                                                    <h5><a href="student-details.html">Charles Dickens</a></h5>
                                                    <h6>Student</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="student-box flex-fill">
                                                <div class="student-img">
                                                    <a href="student-details.html">
                                                        <img class="img-fluid" alt="Students Info" src="assets/img/profiles/avatar-09.jpg">
                                                    </a>
                                                </div>
                                                <div class="student-content pb-0">
                                                    <h5><a href="student-details.html">Joe Kelley</a></h5>
                                                    <h6>Student</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="student-box flex-fill">
                                                <div class="student-img">
                                                    <a href="student-details.html">
                                                        <img class="img-fluid" alt="Students Info" src="assets/img/profiles/avatar-10.jpg">
                                                    </a>
                                                </div>
                                                <div class="student-content pb-0">
                                                    <h5><a href="student-details.html">Charles Dickens</a></h5>
                                                    <h6>Student</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>