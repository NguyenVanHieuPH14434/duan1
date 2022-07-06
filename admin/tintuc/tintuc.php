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
                                <h1 class="main-title float-left">Tin tức</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Trang chủ</li>
                                    <li class="breadcrumb-item active">Tin tức</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                            <div class="card mb-3">

                                <div class="card-header">
                                    <span class="pull-right"><a href="index.php?act=add-tt" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Thêm bài viết</a></span>
                                    <h3><i class="fa fa-file-text-o"></i> Tất cả bài viết</h3>
                                </div>
                                <!-- end card-header -->

                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Bài viết</th>
                                                    <th style="width: 90px;">Ảnh</th>
                                                    <th>Giới thiệu</th>
                                                    <th style="width:130px">Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($tt_show as $tt) {
                                                    extract($tt);
                                                    $suatt = "index.php?act=suatt&id_tintuc=" . $id_tintuc . "";
                                                    $xoatt = "index.php?act=xoatt&id_tintuc=" . $id_tintuc . "";
                                                ?>
                                                    <tr>
                                                    <td>
                                                           
                                                            <h5><?= $tieu_de ?></h5> <br> <?= $ngay_dang ?>
                                                           
                                                        </td>
                                                        <td>
                                                            <span style="float: left; margin-right:10px;"><img alt="image" style="max-width:140px; height:auto;" src="assets/images/tintuc/<?= $anh_tt ?>" /></span>
                                                            
                                                        </td>
                                                        <td>
                                                           
                                                            <h5><?= $gioi_thieu ?></h5>
                                                           
                                                        </td>
                                                        <td>
                                                            <a href="<?= $suatt ?>" class="btn btn-primary btn-sm" data-placement="top" data-toggle="tooltip" data-title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            <a onclick="return confirm('Bạn có chắc muốn xoá')" href="<?= $xoatt ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>


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