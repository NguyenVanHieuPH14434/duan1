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
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                            <div class="card mb-3">

                                <div class="card-body">

                                    <form action="index.php?act=add-tt" method="post" enctype="multipart/form-data">
                                        <div class="row">

                                            <div class="form-group col-xl-9 col-md-8 col-sm-12">
                                                <div class="form-group">
                                                    <label>Tiêu đề</label>
                                                    <input class="form-control" name="tieude" type="text" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Nội dung</label>
                                                    <textarea rows="3" class="form-control editor" name="nd"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label>Ảnh bài viết</label><br />
                                                    <input type="file" name="anh_tt">
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" name="btn-them" class="btn btn-primary">Thêm bài viết</button>
                                                    <a href="index.php?act=news"><button type="button" class="btn btn-info">Quay lại</button></a>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-3 col-md-4 col-sm-12 border-left">
                                                <div class="form-group">
                                                    <label>Giới thiệu</label>
                                                    <textarea rows="1" class="form-control editor" name="gt"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Ngày đăng</label>
                                                    <input type="date" class="form-control" name="ngay_dang">
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
</body>

</html>