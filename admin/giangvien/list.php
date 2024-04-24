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
                    <div class="card-body">

                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Giảng viên</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="students.html" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
                                    <a href="index.php?act=list_tea_grid" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a>
                                    <!-- <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a> -->
                                    <a href="index.php?act=add_tea" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Header -->

                        <div class="table-responsive">
                            <table id="example" class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>
                                            <div class="form-check check-tables">
                                                <input class="form-check-input" type="checkbox" value="something">
                                            </div>
                                        </th>
                                        <th>ID</th>
                                        <th>Họ và tên</th>
                                        <th>Giới tính</th>
                                        <th>Ngành dạy</th>
                                        <th>Sinh năm</th>
                                        <th>Mail</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ</th>
                                        <th style="padding-left: 140px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($teacherList as $teacher) : ?>
                                        <?php
                                        extract($teacher);
                                        $editTea = "index.php?act=edit_tea&id=" . $id;
                                        $delTea = "index.php?act=del_tea&id=" . $id;
                                        $deltailTea = "index.php?act=teacher_detail&id=" . $id;
                                        $imgpath = "../assets/img/teacher/" . $img;
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="form-check check-tables">
                                                    <input class="form-check-input" type="checkbox" value="something">
                                                </div>
                                            </td>
                                            <td><?= $id ?></td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="<?= $deltailTea ?>" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="<?= $imgpath ?>" alt="User Image"></a>
                                                    <a href="<?= $deltailTea ?>"><?= $name ?></a>
                                                </h2>
                                            </td>
                                            <td><?= $gender ?></td>
                                            <td><?= $major ?></td>
                                            <td><?= $birth ?></td>
                                            <td><?= $mail ?></td>
                                            <td><?= $phone ?></td>
                                            <td><?= $address ?></td>
                                            <td>
                                                <div class="actions justify-content-center">
                                                    <a href="<?= $deltailTea ?>" class="btn btn-sm bg-success-light me-2">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="<?= $editTea ?>" class="btn btn-sm bg-danger-light me-2">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                    <a href="<?= $delTea ?>" class="btn btn-sm bg-danger-light delete-teacher" data-teacher-id="<?= $id ?>">
                                                        <i class="feather-delete"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll(".delete-teacher").forEach((deleteButton) => {
            deleteButton.addEventListener('click', (event) => {
                event.preventDefault();

                // Get the student ID from the data-student-id attribute
                const teacherId = deleteButton.getAttribute('data-teacher-id');

                Swal.fire({
                    title: 'Bạn có muốn xoá ?',
                    text: "Sau khi bạn xoá thì sẽ không thể khôi phục được",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Có, xoá nó đi!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Đã xoá!',
                            'Bạn đã xoá thành công.',
                            'success'
                        );

                        setTimeout(() => {
                            window.location.href = deleteButton.getAttribute('href');
                        }, 800);
                    }
                });
            });
        });
    </script>