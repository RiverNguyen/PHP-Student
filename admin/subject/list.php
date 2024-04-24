<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Danh sách môn học</h3>
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
                                    <h3 class="page-title">Môn học</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    
                                    <!-- <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a> -->
                                    <a href="index.php?act=add_subject" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                        <th>Tên môn học</th>
                                        <th>Số tín chỉ</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($subjectList as $subject) : ?>
                                        <?php
                                        extract($subject);
                                        $editSubject = "index.php?act=edit_subject&id=" . $id;
                                        $delSubject = "index.php?act=del_subject&id=" . $id;
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
                                                    <?= $name ?>
                                                </h2>
                                            </td>
                                            <td><?= $credits ?></td>
                                            <td>
                                                <div class="actions" style="justify-content: start;">
                                                    <a href="<?= $editSubject ?>" class="btn btn-sm bg-danger-light me-2">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                    <a href="<?= $delSubject ?>" class="btn btn-sm bg-danger-light delete-subject" data-subject-id="<?= $id ?>">
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
        document.querySelectorAll(".delete-subject").forEach((deleteButton) => {
            deleteButton.addEventListener('click', (event) => {
                event.preventDefault();

                // Get the student ID from the data-student-id attribute
                const studentId = deleteButton.getAttribute('data-subject-id');

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