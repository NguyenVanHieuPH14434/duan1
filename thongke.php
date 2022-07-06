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
    <!-- ennn -->

<?php
    $dataPoints = array(
	array("label" => "Điện thoại", "y" => 51.7),
	array("label" => "Laptop", "y" => 26.6),
	array("label" => "Phụ kiện", "y" => 13.9),
)
?>
<head>
	<script>
		window.onload = function() {


			var chart = new CanvasJS.Chart("chartContainer", {
				theme: "light2",
				animationEnabled: true,
				title: {
					text: "Thống kê"
				},
				data: [{
					type: "pie",
					indexLabel: "{y}",
					yValueFormatString: "#,##0.00\"%\"",
					indexLabelPlacement: "inside",
					indexLabelFontColor: "#36454F",
					indexLabelFontSize: 18,
					indexLabelFontWeight: "bolder",
					showInLegend: true,
					legendText: "{label}",
					dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
				}]
			});
			chart.render();

		}
	</script>
</head>

<body>
	<div id="chartContainer" style="height: 370px; width: 100%;"></div>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>