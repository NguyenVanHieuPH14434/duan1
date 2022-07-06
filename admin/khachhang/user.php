<body class="adminbody">

    <div id="main">
        <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">


                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Người dùng</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Trang chủ</li>
                                    <li class="breadcrumb-item active">Người dùng</li>
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
                                    <span class="pull-right"><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_add_user"><i class="fa fa-user-plus" aria-hidden="true"></i> Thêm người dùng</button></span>
                                    <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_add_user" aria-hidden="true" id="modal_add_user">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <form action="index.php?act=user" method="post" enctype="multipart/form-data">


                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Thêm người dùng</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Họ và tên</label>
                                                                    <input class="form-control" name="hoten" type="text" required />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Tài khoản</label>
                                                                    <input class="form-control" name="username" type="text" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Mật khẩu</label>
                                                                    <input class="form-control" name="pass" type="text" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Email</label>
                                                                    <input class="form-control" name="email" type="email" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Sđt</label>
                                                                    <input class="form-control" name="sdt" type="number" required />
                                                                </div>
                                                            </div>
                                            

                                                        </div>

                                                        <div class="row">

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Quyền</label>
                                                                    <input type="radio" checked name="vai_tro" value="0" id="">Khách hàng
                                                                    <input type="radio" name="vai_tro" value="1" id="">Admin
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="form-group">
                                                            <label>Ảnh người dùng</label> <br />
                                                            <input type="file" name="anh_dd">
                                                        </div>

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" name="btn-them" class="btn btn-primary">Add user</button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <h3><i class="fa fa-user"></i> Tất cả người dùng</h3>
                                </div>
                                <!-- end card-header -->

                                <div class="card-body">


                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="width:50px">ID</th>
                                                    <th>Tên người dùng</th>
                                                    <th>Email</th>
                                                    <th>Ảnh</th>
                                                    <th style="width:130px">Quyền</th>
                                                    <th style="width:120px">Hành động</th>
                                                </tr>
                                            </thead>
                                            <?php foreach($kh_show as $kh){
                                                extract($kh);
                                             ?>
                                            <tbody>

                                                <tr>
                                                    <th>
                                                        <?=$id_khachhang?></th>
                                                        <td><strong><?=$ho_va_ten?></strong></td>
                                                        <td><small><?=$email?></small></td>
                                                    <td>
                                                        <span style="float: left; margin-right:10px;"><img alt="image" style="max-width:40px; height:auto;" src="assets/images/avatars/<?=$anh_dd?>" /></span>

                                                        
                                                    </td>

                                                    <td><?=$vai_tro?'Admin':'Khách hàng'?></td>
                                                    <td>
                                                        <a href="index.php?act=user&id_khachhang<?=$id_khachhang?>" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#user<?=$id_khachhang?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                        <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="user<?=$id_khachhang?>">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">

                                                                    <form action="index.php?act=user" method="post" enctype="multipart/form-data">


                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Sửa người dùng</h5>
                                                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
                                                                        </div>

                                                                        <div class="modal-body">

                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="form-group">
                                                                                        <label>Họ và tên</label>
                                                                                        <input class="form-control" name="hoten" type="text" value="<?=$ho_va_ten?>" required />
                                                                                        <input class="form-control" name="id_kh" type="hidden" value="<?=$id_khachhang?>" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label>Tài khoản</label>
                                                                                        <input class="form-control" name="username" type="text" value="<?=$username?>" required />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label>Mật khẩu</label>
                                                                                        <input class="form-control" name="pass" type="text" value="<?=$password?>" required />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label>Email</label>
                                                                                        <input class="form-control" name="email" type="email"  value="<?=$email?>" required />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label>Sdt</label>
                                                                                        <input class="form-control" name="sdt" type="text" value="<?=$sdt?>" required />
                                                                                    </div>
                                                                                </div>


                                                                            </div>

                                                                            <div class="row">

                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label>Quyền</label>
                                                                                       <input type="radio" name="vai_tro" <?= !$vai_tro?'checked':''?> value="0" id="">Khách hàng
                                                                                       <input type="radio" name="vai_tro" <?= $vai_tro?'checked':''?> value="1" id="">Admin
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="form-group">
                                                                                <label>Ảnh người dùng</label> <br />
                                                                                <input type="file" name="anh_dd">
                                                                                <img src="assets/images/avatars/<?=$anh_dd?>" width="80px" alt="">
                                                                            </div>

                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button type="submit" name="btn-edit" class="btn btn-primary">Sửa</button>
                                                                        </div>

                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a  onclick="return confirm('Bạn có chắc muốn xoá')" href="index.php?act=xoakh&id_khachhang=<?=$id_khachhang?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <?php

}  ?>
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