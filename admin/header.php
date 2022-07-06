<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Trang quản lý</title>
    <meta name="description" content="Bootstrap 4 Admin Theme | Pike Admin">
    <meta name="author" content="Pike Web Development - https://www.pikephp.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Switchery css -->
    <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" href="assets/plugins/trumbowyg/ui/trumbowyg.min.css">
    <!-- END CSS for this page -->

</head>

<body class="adminbody">

	<div id="main">

		<!-- top bar navigation -->
		<div class="headerbar">

			<!-- LOGO -->
			<div class="headerbar-left">
				<a href="index.php" class="logo"><img alt="Logo" src="assets/images/logo.png" /> <span>Admin</span></a>
			</div>

			<nav class="navbar-custom">

				<ul class="list-inline float-right mb-0">
					<li class="list-inline-item dropdown notif">
						<a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							<img src="assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
						</a>
						<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
							<!-- item-->
							<div class="dropdown-item noti-title">
								<h5 class="text-overflow"><small>Xin chào, admin</small> </h5>
							</div>
							<!-- item-->
							<a href="#" class="dropdown-item notify-item">
								<i class="fa fa-power-off"></i> <span>Đăng xuất</span>
							</a>
						</div>
					</li>

				</ul>
				<ul class="list-inline menu-left mb-0">
					<li class="float-left">
						<button class="button-menu-mobile open-left">
							<i class="fa fa-fw fa-bars"></i>
						</button>
					</li>
				</ul>

			</nav>

		</div>
		<!-- End Navigation -->


		<!-- Left Sidebar -->
		<div class="left main-sidebar">

			<div class="sidebar-inner leftscroll">

				<div id="sidebar-menu">

					<ul>
						<li class="submenu">
							<a class="active" href="index.php"><i class="fa fa-fw fa-bars"></i><span> Bảng điều khiển </span>
							</a>
						</li>

						<li class="submenu">
							<a href="index.php?act=sanpham"><i class="fa fa-shopping-cart bigfonts"></i><span> Sản phẩm </span> </a>
						</li>

						<li class="submenu">
							<a href="index.php?act=categori"><i class="fa fa-bookmark bigfonts"></i><span> Danh mục </span> </a>
						</li>

						<li class="submenu">
							<a href="index.php?act=user"><i class="fa fa-user bigfonts"></i><span> Người dùng </span> </a>
						</li>

						<li class="submenu">
							<a href="index.php?act=news"><i class="fa fa-newspaper-o bigfonts"></i><span> Tin tức </span> </a>
						</li>
						
						<li class="submenu">
							<a href="index.php?act=binhluan"><i class="fa fa-comment bigfonts"></i><span> Bình luận </span> </a>
						</li>
						<li class="submenu">
							<a href="index.php?act=tt_dh"><i class="fa fa-cart-arrow-down bigfonts"></i><span> Trạng thái đơn hàng </span> </a>
						</li>
						<li class="submenu">
							<a href="index.php?act=donhang"><i class="fa fa-cart-arrow-down bigfonts"></i><span> Đơn hàng </span> </a>
						</li>
						<li class="submenu">
							<a href="index.php?act=doanhthu"><i class="fa fa-cart-arrow-down bigfonts"></i><span> Doanh thu </span> </a>
						</li>
						<li class="submenu">
							<a href="index.php?act=banra"><i class="fa fa-cart-arrow-down bigfonts"></i><span> Thống kê sp bán ra </span> </a>
						</li>
						<li class="submenu">
							<a href="../index.php"><i class="fa fa-cart-arrow-down bigfonts"></i><span> WEBSITE </span> </a>
						</li>

					</ul>

					<div class="clearfix"></div>

				</div>

				<div class="clearfix"></div>

			</div>

		</div>