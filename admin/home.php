<!-- Page Wrapper -->
<div class="page-wrapper">

    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Xin chào, <?= $_SESSION['user']['user'] ?>!</h3>

                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <!-- Overview Section -->
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Số sinh viên</h6>
                                <h3><?= $studentCount ?></h3>
                            </div>
                            <div class="db-icon">
                                <img src="../assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Số giảng viên</h6>
                                <h3><?= $teacherCount ?></h3>
                            </div>
                            <div class="db-icon">
                                <img src="../assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Học sinh giỏi</h6>
                                <h3><?= $goodStudent ?></h3>
                            </div>
                            <div class="db-icon">
                                <img src="../assets/img/icons/dash-icon-02.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Số lớp học</h6>
                                <h3><?= $classCount ?></h3>
                            </div>
                            <div class="db-icon">
                                <img src="../assets/img/icons/dash-icon-03.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Overview Section -->

        <div class="row">
            <div class="col-md-12 col-lg-6">

                <!-- Revenue Chart -->
                <div class="card card-chart">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="card-title">Số sinh viên</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="piechart_3d_1" style="width: 900px; height: 500px;"></div>

                        </div>
                    </div>

                </div>


            </div>

            <div class="col-md-12 col-lg-6">

                <div class="card card-chart">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="card-title">Số giảng viên</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="piechart_3d_2" style="width: 900px; height: 500px;"></div>
                    </div>
                </div>

            </div>
        </div>


    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {
            // First Chart
            var data1 = google.visualization.arrayToDataTable([
                ['Ngành học', 'Số lượng'],
                <?php foreach ($dsthongke as $thongke) : ?>
                    <?php extract($thongke); ?>['<?= $name ?>', <?= $number ?>],
                <?php endforeach; ?>
            ]);

            var options1 = {
                title: 'BIỂU ĐỒ SỐ SINH VIÊN THEO NGÀNH HỌC',
                is3D: true,
            };

            var chart1 = new google.visualization.PieChart(document.getElementById('piechart_3d_1'));
            chart1.draw(data1, options1);

            var data2 = google.visualization.arrayToDataTable([
                ['Ngành học', 'Số lượng'],
                <?php foreach ($dsthongke1 as $thongke) : ?>
                    <?php extract($thongke); ?>['<?= $name ?>', <?= $number ?>],
                <?php endforeach; ?>
            ]);

            var options2 = {
                title: 'BIỂU ĐỒ SỐ GIẢNG VIÊN THEO NGÀNH HỌC',
                is3D: true,
            };

            var chart2 = new google.visualization.PieChart(document.getElementById('piechart_3d_2'));
            chart2.draw(data2, options2);
        }
    </script>