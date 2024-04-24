<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2024 03:55:08 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>ĐHCN Đông Á</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/e/e8/Logo_Tr%C6%B0%E1%BB%9Dng_%C4%90%E1%BA%A1i_h%E1%BB%8Dc_C%C3%B4ng_ngh%E1%BB%87_%C4%90%C3%B4ng_%C3%81_2015.png">

	<!-- Fontfamily -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
	<!-- Bootstrap CSS -->
	<!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css"> -->

	<!-- Feathericon CSS -->
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="../assets/plugins/feather/feather.css">

	<!-- Pe7 CSS -->
	<link rel="stylesheet" href="../assets/plugins/icons/flags/flags.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="../assets/css/he.css">
	<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.2/dist/sweetalert2.min.css
" rel="stylesheet">
	<!-- Main CSS -->
	<link rel="stylesheet" href="../assets/css/style1.css">
	<script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
	<script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
	<script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
	<script defer src="../assets/js/table.js"></script>

</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<div class="header">

			<!-- Logo -->
			<div class="header-left">
				<a href="index.php" class="logo">
					<img src="https://th.bing.com/th/id/R.0817126611cc693f68435675bca86bbc?rik=B9x5tONXuBHyMw&riu=http%3a%2f%2fvietnamteachingjobs.com%2fwp-content%2fuploads%2fwpjobboard%2fjob%2f16086%2fcompany-logo%2flogo-vector.png&ehk=kCb08SU2kkYBniTNSBfzfGRS1QZMA7Is2azNFaUwI4w%3d&risl=&pid=ImgRaw&r=0" alt="Logo">
				</a>
				<a href="index.php" class="logo logo-small">
					<img src="https://cdn1.vieclam24h.vn/upload/files_cua_nguoi_dung/logo/2020/08/26/6141423_vieclam24h_1598415607.jpg" alt="Logo" width="30" height="30">
				</a>
			</div>
			<!-- /Logo -->

			<div class="menu-toggle">
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fas fa-bars"></i>
				</a>
			</div>

			<!-- Search Bar -->
			<div class="top-nav-search">
				<form>
					<input type="text" class="form-control" placeholder="Search here">
					<button class="btn" type="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>
			<!-- /Search Bar -->

			<!-- Mobile Menu Toggle -->
			<a class="mobile_btn" id="mobile_btn">
				<i class="fas fa-bars"></i>
			</a>
			<!-- /Mobile Menu Toggle -->

			<!-- Header Right Menu -->
			<ul class="nav user-menu">

				<!-- User Menu -->
				<li class="nav-item dropdown has-arrow new-user-menus">
					<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
						<div class="user-img">
							<img class="rounded-circle" src="../assets/img/aa.png" width="31" alt="Người đẹp">
							<div class="user-text">
								<h6><?= $_SESSION['user']['user'] ?></h6>
							</div>
						</div>
					</a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm">
								<img src="../assets/img/aa.png" alt="User Image" class="avatar-img rounded-circle">
							</div>
							<div class="user-text">
								<h6>Người đẹp</h6>
								<p class="text-muted mb-0">Administrator</p>
							</div>
						</div>
						<a class="dropdown-item" href="index.php?act=detail">Cá nhân</a>
						<a class="dropdown-item" href="index.php?act=edit-pass">Đổi mật khẩu</a>
						<a class="dropdown-item" href="index.php?act=log-out">Thoát</a>
					</div>
				</li>
				<!-- /User Menu -->

			</ul>
			<!-- /Header Right Menu -->

		</div>
		<!-- /Header -->

		<!-- Sidebar -->
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="menu-title">
							<h6>Main menu</h6>
						</li>
						<li class="submenu active">
							<a href="#"><i class="feather-grid"></i><span>Bảng Admin</span></a>
						</li>
						<li class="submenu">
							<a href="#"><i class="fas fa-clipboard-list"></i> <span>Quản lí ngành</span> <span class="menu-arrow"></span></a>
							<ul>
								<li><a href="index.php?act=list_major">Danh sách</a></li>
								<li><a href="index.php?act=add_major">Thêm ngành</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fas fa-graduation-cap"></i> <span>Sinh viên</span> <span class="menu-arrow"></span></a>
							<ul>
								<li><a href="index.php?act=list_stu">Danh sách sinh viên</a></li>
								<li><a href="index.php?act=add_stu">Thêm sinh viên</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fas fa-chalkboard-teacher"></i> <span>Giảng viên</span> <span class="menu-arrow"></span></a>
							<ul>
								<li><a href="index.php?act=list_tea">Danh sách giảng viên</a></li>
								<li><a href="index.php?act=add_tea">Thêm giảng viên</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fas fa-building"></i> <span>Quản lí lớp học</span> <span class="menu-arrow"></span></a>
							<ul>
								<li><a href="index.php?act=list_class">Danh sách lớp học</a></li>
								<li><a href="index.php?act=add_class">Thêm lớp học</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fas fa-book-reader"></i> <span>Quản lí môn học</span> <span class="menu-arrow"></span></a>
							<ul>
								<li><a href="index.php?act=list_subject">Danh sách môn học</a></li>
								<li><a href="index.php?act=add_subject">Thêm môn học</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fas fa-clipboard"></i> <span>Quản lí điểm</span> <span class="menu-arrow"></span></a>
							<ul>
								<li><a href="index.php?act=list_score">Danh sách lớp</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>