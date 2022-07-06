<body class="adminbody">
    <div id="main">
        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">


                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Đơn hàng</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Trang chủ</li>
                                    <li class="breadcrumb-item active">Đơn hàng</li>
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
                                    <span class="pull-right"><a href="index.php?act=add-dh" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Thêm đơn hàng</a></span>
                                    <h3><i class="fa fa-file-text-o"></i> Tất cả đơn hàng</h3>
                                </div>
                                <!-- end card-header -->

                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table id="example3" class="table table-bordered table-hover display">
                                            <thead>
                                                <tr>
                                                    <th>Mã đơn hàng</th>
                                                    <th>Tên khách hàng</th>
                                                    <th>Số điện thoại</th>
                                                    <th>Ngày mua</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Tổng tiền</th>
                                                    <th>Trạng thái</th>
                                                    <th>Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($dh_show as $dh){
                                                    extract($dh);
                                                    $suadh = "index.php?act=suadh&id_donhang=".$id_donhang."";
                                                    $xoadh = "index.php?act=xoa-dh&id_donhang=".$id_donhang."";
                                                  
                                                 ?>
                                                <tr>
                                                    <td><?=$id_donhang?></td>
                                                    <td><?=$ten_nguoinhan?></td>
                                                    <td><?=$sdt_nhanhang?></td>
                                                    <td><?=$ngay_mua?></td>
                                                    
                                                    <td><?=$dc_giaohang?></td>
                                                    <td><?=number_format($tongtien,0,'',".")?> VNĐ</td>
                                                    <td><?=$tt_donhang?></td>
                                                    <td>
                                                        <span><a href="<?=$suadh?>"><button type="button" class="btn btn-success">Sửa</button></a></span>
                                                        <span><a onclick="return confirm('Bạn có chắc muốn xoá')" href="<?=$xoadh?>"><button type="button" class="btn btn-warning">Xoá</button></a></span>
                                                    </td>
                                                </tr>
                                                <?php
                                            } ?>

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
    <!-- END main -->
</body>

</html>