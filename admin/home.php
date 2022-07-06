<body class="adminbody">

	<div id="main">
		<div class="content-page">

			<!-- Start content -->
			<div class="content">

				<div class="container-fluid">

					<div class="row">
						<div class="col-xl-12">
							<div class="breadcrumb-holder">
								<h1 class="main-title float-left">Bảng điều khiển</h1>
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item">Trang chủ</li>
									<li class="breadcrumb-item active">Bảng điều khiển</li>
								</ol>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- end row -->
					<div class="row">
						<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card-box noradius noborder bg-default">
								<i class="fa fa-file-text-o float-right text-white"></i>
								<h6 class="text-white text-uppercase m-b-20">Bình luận</h6>
								<h1 class="m-b-20 text-white counter"><?php foreach($sl_bl as $sl){
                                        echo $sl['sluong'];
                                    } ?></h1>
								<span class="text-white">Tổng số bình luận</span>
							</div>
						</div>

						<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card-box noradius noborder bg-warning">
								<i class="fa fa-bar-chart float-right text-white"></i>
								<h6 class="text-white text-uppercase m-b-20">Sản phẩm</h6>
								<h1 class="m-b-20 text-white counter"><?php foreach($sl_sp as $sl){
                                        echo $sl['sluong'];
                                    } ?></h1>
								<span class="text-white">Tổng số sản phẩm</span>
							</div>
						</div>

						<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card-box noradius noborder bg-info">
								<i class="fa fa-user-o float-right text-white"></i>
								<h6 class="text-white text-uppercase m-b-20">Tài khoản</h6>
								<h1 class="m-b-20 text-white counter"><?php foreach($sl_kh as $sl){
                                        echo $sl['sluong'];
                                    } ?></h1>
								<span class="text-white">Tổng số thành viên</span>
							</div>
						</div>

						<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card-box noradius noborder bg-danger">
								<i class="fa fa-cart-arrow-down float-right text-white"></i>
								<h6 class="text-white text-uppercase m-b-20">Đơn hàng</h6>
								<h1 class="m-b-20 text-white counter"><?php foreach($sl_dh as $sl){
                                        echo $sl['sluong'];
                                    } ?></h1>
								<span class="text-white">Đơn hàng</span>
							</div>
						</div>
					</div>
					
					<head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
          google.charts.load("current", {packages:["corechart"]});
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Loại', 'Số Lượng'],
                <?php
                foreach ($sl_sp_dm as $item){
                    echo "['$item[ten_danhmuc]',     $item[so_luong]],";
                }
                ?>
            ]);

            var options = {
              title: 'TỶ LỆ HÀNG HÓA',
              is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
          }
        </script>
    </head>
    <body>
        <h5 style="margin-bottom: 20px;">BIỂU ĐỒ THỐNG KÊ</h5>
        <div class="adminbody">
          <form action="">
        <div id="piechart_3d" style="width: 100%; height: 400px;"></div>
          </form>
        </div>
    </body>



					</html>
				</div>
				<!-- END container-fluid -->

			</div>
			<!-- END content -->

		</div>
		<!-- END content-page -->
		<?php include "footer.php" ?>
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

	<!-- App js -->
	<script src="assets/js/pikeadmin.js"></script>

	<!-- BEGIN Java Script for this page -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

	<!-- Counter-Up-->
	<script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

	<script>
		$(document).ready(function() {
			// data-tables
			$('#example1').DataTable();

			// counter-up
			$('.counter').counterUp({
				delay: 10,
				time: 600
			});
		});
	</script>

	<script>
		var ctx1 = document.getElementById("lineChart").getContext('2d');
		var lineChart = new Chart(ctx1, {
			type: 'bar',
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				datasets: [{
					label: 'Dataset 1',
					backgroundColor: '#3EB9DC',
					data: [10, 14, 6, 7, 13, 9, 13, 16, 11, 8, 12, 9]
				}, {
					label: 'Dataset 2',
					backgroundColor: '#EBEFF3',
					data: [12, 14, 6, 7, 13, 6, 13, 16, 10, 8, 11, 12]
				}]

			},
			options: {
				tooltips: {
					mode: 'index',
					intersect: false
				},
				responsive: true,
				scales: {
					xAxes: [{
						stacked: true,
					}],
					yAxes: [{
						stacked: true
					}]
				}
			}
		});


		var ctx2 = document.getElementById("pieChart").getContext('2d');
		var pieChart = new Chart(ctx2, {
			type: 'pie',
			data: {
				datasets: [{
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					label: 'Dataset 1'
				}],
				labels: [
					"Red",
					"Orange",
					"Yellow",
					"Green",
					"Blue"
				]
			},
			options: {
				responsive: true
			}

		});


		var ctx3 = document.getElementById("doughnutChart").getContext('2d');
		var doughnutChart = new Chart(ctx3, {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					label: 'Dataset 1'
				}],
				labels: [
					"Red",
					"Orange",
					"Yellow",
					"Green",
					"Blue"
				]
			},
			options: {
				responsive: true
			}

		});
	</script>
	<!-- END Java Script for this page -->

</body>

</html>