<div class="page-wrapper">

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
                                        <img src="../assets/img/aa.png" alt="Profile">
                                    </div>
                                    <div class="names-profiles">
                                        <h4><?= $_SESSION['user']['user'] ?></h4>
                                        <h5><?= $_SESSION['user']['mail'] ?></h5>
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
                                        <h4>Họ tên</h4>
                                        <h5><?= $_SESSION['user']['user'] ?></h5>
                                    </div>
                                </div>

                                <div class="personal-activity">
                                    <div class="personal-icons">
                                        <i class="feather-mail"></i>
                                    </div>
                                    <div class="views-personal">
                                        <h4>Email</h4>
                                        <h5><?= $_SESSION['user']['mail'] ?></h5>
                                    </div>
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