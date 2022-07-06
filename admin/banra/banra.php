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
                                       
                                        
                                        <h3><i class="fa fa-sitemap"></i> Sp bán ra</h3>
                                    </div>
                                    <!-- end card-header -->



                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID sp</th>
                                                    <th>Tên sp</th>
                                                    <th >Số lượng bán ra</th>
                                                    

                                                </tr>
                                            </thead>
                                            <?php
                                            foreach ($tk_sp as $lo) {
                                                extract($lo);
                                               
                                            ?>
                                                <tbody>

                                                    <tr>

                                                        <td>
                                                            <strong><?= $id_sp ?></strong><br />
                                                        </td>
                                                        <td>
                                                            <strong><?= $ten_sp ?></strong><br />
                                                        </td>

                                                       
                                                        <td><?=$top?> cái</td>
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
        <!-- END main -->
</body>

</html>