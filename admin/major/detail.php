<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Danh sách sinh viên</h3>
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
                                    <h3 class="page-title">Sinh viên</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="students.html" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
                                    <!-- <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a> -->
                                    <a href="index.php?act=add_major" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                        <th>Tên ngành</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($majors as $major) : ?>
                                        <?php
                                        extract($major);
                                        $deltailMajor = "index.php?act=major_detail&id=" . $id;
                                        $editMajor = "index.php?act=edit_major&id=" . $id;
                                        $delMajor = "index.php?act=del_major&id=" . $id;
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="form-check check-tables">
                                                    <input class="form-check-input" type="checkbox" value="something">
                                                </div>
                                            </td>
                                            <td><?= $id ?></td>
                                            <td>
                                                <h2 class="table-avatar"><?= $name ?></h2>
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
        document.querySelectorAll(".delete-major").forEach((deleteButton) => {
            deleteButton.addEventListener('click', (event) => {
                event.preventDefault();

                // Get the student ID from the data-student-id attribute
                const majorId = deleteButton.getAttribute('data-major-id');

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