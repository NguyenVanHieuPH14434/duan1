<body class="adminbody">

    <div id="main">

        <div id="main">
            <div class="content-page">

                <!-- Start content -->
                <div class="content">

                    <div class="container-fluid">


                        <div class="row">
                            <div class="col-xl-12">
                                <div class="breadcrumb-holder">
                                    <h1 class="main-title float-left">Doanh thu</h1>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item">Trang chủ</li>
                                        <li class="breadcrumb-item active">Doanh thu</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                                <div class="card mb-3">

                                    <div class="card-header">
                                       
                                        
                                        <h3><i class="fa fa-sitemap"></i> Doanh thu</h3>
                                    </div>
                                    <!-- end card-header -->



                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Tháng</th>
                                                    <th >Doanh thu</th>
                                                    <th >Số lượng đơn hàng</th>

                                                </tr>
                                            </thead>
                                            <?php
                                            $tongdt = 0;
                                            $tong_dh = 0;
                                            foreach ($tk_dt as $lo) {
                                                extract($lo);
                                                $tongdt += $sumtt;
                                                $tong_dh +=$s_luong; 
                                            ?>
                                                <tbody>

                                                    <tr>

                                                        <td>
                                                            <strong>Tháng: <?= $month ?></strong><br />
                                                        </td>

                                                        <td><?=number_format($sumtt,0,'',".")?> VNĐ</td>
                                                        <td><?=$s_luong?> Đơn</td>
                                                    </tr>
                                            <?php
                                            } ?>
                                                    <tr>
                                                        <td><b>Tổng doanh thu</b></td>
                                                        <td><?=number_format($tongdt,0,'',".")?> VNĐ</td>
                                                        <td><b>Tổng số đơn: </b><?=$tong_dh?> Đơn</td>
                                                    </tr>
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
        <!-- END main -->
</body>

</html>