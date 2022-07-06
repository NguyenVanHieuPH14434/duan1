<?php
    if(is_array($dh_one)){
        extract($dh_one);
    }
?>
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
                                    <h1 class="main-title float-left">Sửa đơn hàng</h1>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item">Trang chủ</li>
                                        <li class="breadcrumb-item">Đơn hàng</li>
                                        <li class="breadcrumb-item active">Sửa đơn hàng</li>
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
                                            <h3><i class="fa fa-check-square-o"></i> Sửa đơn hàng</h3>

                                        </div>

                                        <div class="card-body">

                                            <form autocomplete="off" action="index.php?act=sua-dh" method="POST">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Họ tên người nhận</label>
                                                        <input type="text" class="form-control" name="ten_nn" value="<?=$ten_nguoinhan?>" readonly >
                                                        <input type="hidden" class="form-control" name="id_dh" value="<?=$id_donhang?>" readonly>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Id Kh</label>
                                                        <input type="text" class="form-control" name="id_kh" value="<?=$id_khachhang?>" readonly >
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Ngày mua</label>
                                                        <input type="date" class="form-control" name="ngay_mua" value="<?=$ngay_mua?>" readonly id="inputPassword4">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Số điện thoại</label>
                                                        <input type="text" class="form-control" name="sdt_nh" value="<?=$sdt_nhanhang?>" readonly id="inputPassword4" >
                                                    </div>
                                                </div>
                                             
                                                <div class="form-group">
                                                    <label for="inputAddress">Địa chỉ</label>
                                                    <input type="text" class="form-control" name="dc_gh" value="<?=$dc_giaohang?>" readonly id="inputAddress" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress2">Tổng tiền</label>
                                                    <input type="text" class="form-control" name="tongtien" value="<?=$tongtien?>" readonly id="inputAddress2" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress">Ghi chú</label>
                                                    <input type="text" class="form-control" name="ghichu" value="<?=$ghi_chu?>" readonly id="inputAddress" >
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState">Trạng thái</label>
                                                        <select id="inputState" name="id_tt" class="form-control">
                                                            <option value="" >Chọn......</option>
                                                            <?php foreach($tt as $tt){
                                                                if($tt['id_tt']== $id_tt){
                                                                echo '<option selected value="'.$tt['id_tt'].'">'.$tt['tt_donhang'].'</option>';
                                                                }else{
                                                                    echo '<option value="'.$tt['id_tt'].'">'.$tt['tt_donhang'].'</option>';
                                                                }
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <button type="submit" name="btn-edit" class="btn btn-primary">Sửa</button>
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