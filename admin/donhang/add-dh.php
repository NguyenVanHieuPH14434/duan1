<body class="adminbody">
    <div id="main">
        <div id="main">
            <!-- End Sidebar -->
            <div class="content-page">

                <!-- Start content -->
                <div class="content">

                    <div class="container-fluid">


                        <div class="row">
                            <div class="col-xl-12">
                                <div class="breadcrumb-holder">
                                    <h1 class="main-title float-left">Thêm đơn hàng</h1>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item">Trang chủ</li>
                                        <li class="breadcrumb-item">Đơn hàng</li>
                                        <li class="breadcrumb-item active">Thêm đơn hàng</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="card mb-3">
                                        <div class="card-header">
                                            <h3><i class="fa fa-check-square-o"></i> Thêm đơn hàng</h3>
                                            
                                        </div>

                                        <div class="card-body">

                                            <form autocomplete="off" method="POST" action="index.php?act=add-dh">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Họ tên người nhận</label>
                                                        <input type="text" class="form-control" name="ten_nn" id="inputEmail4">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">id KH</label>
                                                        <select id="inputState" name="id_kh" class="form-control">
                                                            <option selected value="">Chọn......</option>
                                                            <?php foreach($kh as $kh){
                                                                extract($kh);
                                                                echo ' <option value="'.$id_khachhang.'" >'.$username.'</option>';
                                                            } ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Ngày mua</label>
                                                        <input type="date" name="ngay_mua" class="form-control" id="inputPassword4" >
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Số điện thoại</label>
                                                        <input type="text" class="form-control" name="sdt_nh" id="inputPassword4">
                                                    </div>
</div>
                                                <div class="form-group">
                                                    <label for="inputAddress">Địa chỉ</label>
                                                    <input type="text" class="form-control" name="dc_gh" id="inputAddress" placeholder="Hà nội">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress2">Tổng tiền</label>
                                                    <input type="text" class="form-control" name="tongtien" id="inputAddress2" placeholder="100.000 VNĐ">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress">Ghi chú</label>
                                                    <input type="text" name="ghichu" class="form-control" id="inputAddress" placeholder="Iphone 13 Promax">
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState">Trạng thái</label>
                                                        <select id="inputState" name="id_tt" class="form-control">
                                                            <option selected value="">Chọn......</option>
                                                            <?php foreach($tt as $tt){
                                                                extract($tt);
                                                                echo ' <option value="'.$id_tt.'" >'.$tt_donhang.'</option>';
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <button type="submit" name="btn-them" class="btn btn-primary">Thêm</button>
                                            </form>

                                        </div>
                                    </div><!-- end card-->
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