<body class="adminbody">

    <div id="main">
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
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                            <div class="card mb-3">

                                <div class="card-body">
                                <div class="clearfix"> <?php if(isset($MESSAGE)){
                                    echo "<p style='color:red;'>$MESSAGE</p>";
                                } ?></div>

                                <form action="index.php?act=add-sp" method="post" enctype="multipart/form-data">
                                        <div class="row">

                                            <div class="form-group col-xl-9 col-md-8 col-sm-12">
                                                <div class="form-group">
                                                    <label>Tên sp</label>
                                                    <input class="form-control" name="tensp" type="text" value="<?= isset($ten_sanpham)? $ten_sanpham:""?>">
                                                    <input class="form-control" name="so_luot_xem" value="0" type="hidden">
                                                </div>

                                                <div class="form-group">
                                                    <label>Mô tả</label>
                                                    <textarea rows="3" class="form-control editor" name="mota"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label>Ảnh sản phẩm</label><br />
                                                    <input type="file" name="anh_sp">
                                                </div>
                                                <div class="form-group">
                                                    <label>Kho</label><br />
                                                    <input type="text" name="kho">
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" name="btn-them" class="btn btn-primary">Thêm sản phẩm</button>
                                                    <a href="index.php?act=sanpham"><button type="button" class="btn btn-info">Quay lại</button></a>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-3 col-md-4 col-sm-12 border-left">
                                                <div class="form-group">
                                                    <label>Giá</label>
                                                    <input type="text" class="form-control" name="gia">
                                                <div class="form-group">
                                                    <label>Danh mục</label>
                                                    <select name="dm" class="form-control" >
                                                        <option value="">- Chọn -</option>
                                                        <?php foreach($dm as $dm){
                                                            extract($dm);
                                                            echo '<option value="'.$id_danhmuc.'">'.$ten_danhmuc.'</option>';
                                                        } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Ngày nhập</label><br />
                                                    <input type="date" class="form-control" name="ngay_nhap">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Chi tiết sp</label><br />
                                                   <textarea name="ct" class="form-control editor" id="" cols="30" rows="10"></textarea>
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

    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/moment.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/plugins/switchery/switchery.min.js"></script>

    <!-- App js -->
    <script src="assets/js/pikeadmin.js"></script>

    <!-- BEGIN Java Script for this page -->
    <script src="assets/plugins/trumbowyg/trumbowyg.min.js"></script>
    <script src="assets/plugins/trumbowyg/plugins/upload/trumbowyg.upload.js"></script>
    <script>
        $(document).ready(function() {
            'use strict';
            $('.editor').trumbowyg();
        });
    </script>
    <!-- END Java Script for this page -->

</body>

</html>