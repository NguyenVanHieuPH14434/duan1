<body class="adminbody">

    <div id="main">
        <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">


                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Bình luận</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Trang chủ</li>
                                    <li class="breadcrumb-item active">Bình luận</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                            <div class="card mb-3">

                                <div class="card-header">
                                    <h3><i class="fa fa-envelope-o"></i> Tất cả bình luận</h3>
                                </div>
                                <!-- end card-header -->

                                <div class="card-body">



                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Bình luận</th>
                                                <th>Ngày bình luận</th>
                                                <th style="width:350px">Người dùng</th>
                                                <th style="width:120px">Chức năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php foreach($bl_show as $bl){
    extract($bl);
 ?>
                                            <tr>

                                                <td>
                                                    <p><?=$noi_dung?></p>
                                                </td>
                                                <td>
                                                    <?=$ngay_bl?>
                                                </td>
                                                <td>
                                                    <?=$username?>
                                                </td>

                                                <td>
                                                <a onclick="return confirm('Bạn có chắc muốn xoá')" href="index.php?act=xoa_bl&id_binhluan=<?=$id_binhluan?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                            } ?>
                                        </tbody>
                                    </table>



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