<?php
    if(is_array($sp)){
        extract($sp);
    }
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Trang quản lý</title>
	<meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
	<meta name="author" content="Pike Web Development - https://www.pikephp.com">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Bootstrap CSS -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- Font Awesome CSS -->
	<link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

	<!-- Custom CSS -->
	<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

	<!-- BEGIN CSS for this page -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" />
	<!-- END CSS for this page -->

</head>
<body class="adminbody">
    <div id="main">
        <!-- End Sidebar -->
        <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">


                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Thêm sản phẩm</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Trang chủ</li>
                                    <li class="breadcrumb-item">Sản phẩm</li>
                                    <li class="breadcrumb-item active">Thêm sản phẩm</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                            <div class="card mb-3">

                                <div class="card-body">

                                    <form action="index.php?act=edit-sp" method="post" enctype="multipart/form-data">
                                        <div class="row">

                                            <div class="form-group col-xl-9 col-md-8 col-sm-12">
                                                <div class="form-group">
                                                    <label>Tên sp</label>
                                                    <input class="form-control" name="tensp" type="text"  value="<?=$ten_sanpham?>" required>
                                                    <input class="form-control" name="id_sp" type="hidden"  value="<?=$id_sanpham?>" >
                                                    <input class="form-control" name="so_luot_xem" value="<?=$so_luot_xem?>" type="hidden">
                                                </div>

                                                <div class="form-group">
                                                    <label>Mô tả</label>
                                                    <textarea rows="3" class="form-control editor" name="mota"><?=$mo_ta?></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label>Ảnh sản phẩm</label><br />
                                                    <input type="file" name="anh_sp">
                                                   <img src="assets/images/products/<?=$anh_sp?>" width="80px" alt="">
                                                  
                                                </div>
                                                <div class="form-group">
                                                    <label>Kho </label><br />
                                                    <input type="text" value="<?=$kho?>"  name="kho">
                                                  
                                                  
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" name="btn-edit" class="btn btn-primary">Sửa sản phẩm</button>
                                                    <a href="index.php?act=sanpham"><button type="button" class="btn btn-info">Quay lại</button></a>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-3 col-md-4 col-sm-12 border-left">
                                                <div class="form-group">
                                                    <label>Giá</label>
                                                    <input type="text" class="form-control" name="gia" value="<?=$gia?>">
                                                <div class="form-group">
                                                    <label>Danh mục</label>
                                                    <select name="dm" class="form-control" required>
                                                        <option  value="">- Chọn -</option>
                                                        <?php foreach($dm as $dm){
                                                            if($dm['id_danhmuc']==$id_danhmuc){
                                                            echo ' <option selected value="'.$dm['id_danhmuc'].'">'.$dm['ten_danhmuc'].'</option>';
                                                            }else{
                                                                echo ' <option value="'.$dm['id_danhmuc'].'">'.$dm['ten_danhmuc'].'</option>';
                                                            }
                                                        } ?>
                                                       
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Ngày nhập</label><br />
                                                    <input type="date" class="form-control" name="ngay_nhap" value="<?=$ngay_nhap?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Chi tiết sp</label><br />
                                                    <textarea name="ct" class="form-control editor" id="" cols="30" rows="10"><?=$chi_tiet_sp?></textarea>
                                                </div>

                                            </div>

                                        </div><!-- end row -->
                                    </form>

                                </div>
                                <!-- end card-body -->

                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->



                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
        <!-- END content-page -->
    </div>
    <!-- END main -->
</body>

</html>