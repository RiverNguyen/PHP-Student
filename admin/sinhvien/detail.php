<?php
if (is_array($student)) {
    extract($student);
}
$imgpath = "../assets/img/student/" . $img;
if (is_file($imgpath)) {
    $hinh = "<img src='" . $imgpath . "' style='height: 200px; margin: auto;'>";
} else {
    $hinh = "no photo";
}
?>

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Thông tin sinh viên</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-info">
                            <h4>Thông tin <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h4>
                        </div>
                        <div class="student-profile-head">
                            <div class="profile-bg-img">
                                <img src="https://wallpaperaccess.com/full/2109.jpg" style="height: 400px; object-fit: cover;" alt="Profile">
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="profile-user-box">
                                        <div class="profile-user-img">
                                            <img src="<?= $imgpath ?>" alt="Profile">
                                        </div>
                                        <div class="names-profiles">
                                            <h4><?= $name ?></h4>
                                            <h5><?= $mail ?></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 d-flex align-items-center">
                                    
                                </div>
                                <div class="col-lg-4 col-md-4 d-flex align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="student-personals-grp">
                            <div class="card">
                                <div class="card-body">
                                    <div class="heading-detail">
                                        <h4>Thông tin cá nhân:</h4>
                                    </div>
                                    <div class="personal-activity">
                                        <div class="personal-icons">
                                            <i class="feather-user"></i>
                                        </div>
                                        <div class="views-personal">
                                            <h4>Họ tên:</h4>
                                            <h5><?= $name ?></h5>
                                        </div>
                                    </div>
                                    <div class="personal-activity">
                                        <div class="personal-icons">
                                            <i class="feather-phone-call"></i>
                                        </div>
                                        <div class="views-personal">
                                            <h4>Số điện thoại:</h4>
                                            <h5><?= $phone ?></h5>
                                        </div>
                                    </div>
                                    <div class="personal-activity">
                                        <div class="personal-icons">
                                            <i class="feather-mail"></i>
                                        </div>
                                        <div class="views-personal">
                                            <h4>Email</h4>
                                            <h5><?= $mail ?></h5>
                                        </div>
                                    </div>
                                    <div class="personal-activity">
                                        <div class="personal-icons">
                                            <i class="feather-user"></i>
                                        </div>
                                        <div class="views-personal">
                                            <h4>Giới tính:</h4>
                                            <h5><?= $gender ?></h5>
                                        </div>
                                    </div>
                                    <div class="personal-activity">
                                        <div class="personal-icons">
                                            <i class="feather-calendar"></i>
                                        </div>
                                        <div class="views-personal">
                                            <h4>Ngày sinh</h4>
                                            <h5><?= $birth ?></h5>
                                        </div>
                                    </div>
                                    <div class="personal-activity mb-0">
                                        <div class="personal-icons">
                                            <i class="feather-map-pin"></i>
                                        </div>
                                        <div class="views-personal">
                                            <h4>Địa chỉ</h4>
                                            <h5><?= $address ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="student-personals-grp">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="heading-detail">
                                        <h4>Kĩ năng:</h4>
                                    </div>
                                    <div class="skill-blk">
                                        <div class="skill-statistics">
                                            <div class="skills-head">
                                                <h5>Photoshop</h5>
                                                <p>90%</p>
                                            </div>
                                            <div class="progress mb-0">
                                                <div class="progress-bar bg-photoshop" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="skill-statistics">
                                            <div class="skills-head">
                                                <h5>Code editor</h5>
                                                <p>75%</p>
                                            </div>
                                            <div class="progress mb-0">
                                                <div class="progress-bar bg-editor" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="skill-statistics mb-0">
                                            <div class="skills-head">
                                                <h5>Illustrator</h5>
                                                <p>95%</p>
                                            </div>
                                            <div class="progress mb-0">
                                                <div class="progress-bar bg-illustrator" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="student-personals-grp">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="heading-detail">
                                        <h4>Về bản thân</h4>
                                    </div>
                                    <div class="hello-park">
                                        <h5>Xin chào! Tôi là <?= $name ?></h5>
                                        <p>Tôi là một người đam mê về công nghệ và ngôn ngữ. Tôi thích khám phá những khía cạnh mới của thế giới thông qua sức mạnh của từ ngữ và mã lập trình. Với sự hiểu biết đa dạng về nhiều chủ đề, tôi thường xuyên tìm kiếm cơ hội để chia sẻ thông tin và học hỏi từ mọi người xung quanh..</p>
                                        <p>Ngoại lề công việc, tôi thường xuyên dành thời gian cho việc đọc sách, nghe nhạc và thưởng thức nghệ thuật. Tôi tin rằng mỗi ngày là một cơ hội mới để học hỏi và phát triển, và tôi luôn hứng thú với những thách thức mới để khám phá và vượt qua.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <!-- /Footer -->
</div>