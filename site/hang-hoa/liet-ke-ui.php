<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="content">
          <div class="title">
            <h3>TÌM KIẾM SẢN PHẨM</h3>
          </div>
          <div class="sp">
            <div class="row align-items-start">
              <?php if(!empty($items)) {
              foreach($items as $item){
                extract($item);
              ?>
              <div class="col">
                <div class="sanpham">
                  <a href="../hang-hoa/chi-tiet.php?id_sanpham=<?=$id_sanpham?>"><img src="../../admin/assets/images/products/<?=$anh_sp?>" width="230px" height="228px" alt="">
                  <h4><?=$ten_sanpham?></h4>
                  <h5><?=number_format($gia, 0,'',",")?><u style="color: red;">đ</u></h5></a>
                  
                </div>
              </div>
              <?php
            }} else{?>
              <p style="color: red;">Không tìm thấy sản phẩm nào!</p>
            <?php } ?>

            <style>
              
            </style>
              <!-- <div class="col">
                <div class="sanpham">
                  <a href=""><img src="../assets/img/637643170642413961_samsung-galaxy-z-fold3-xanh-dd.jpg" alt="">
                  <h4>Samsung Galaxy Z Fold</h4>
                  <h5>45.990.000đ</h5></a>
                  
                </div>
              </div>
              <div class="col">
                <div class="sanpham">
                  <a href=""><img src="../assets/img/637643170642413961_samsung-galaxy-z-fold3-xanh-dd.jpg" alt="">
                  <h4>Samsung Galaxy Z Fold</h4>
                  <h5>45.990.000đ</h5></a>
                  
                </div>
              </div>
              <div class="col">
                <div class="sanpham">
                  <a href=""><img src="../assets/img/637643170642413961_samsung-galaxy-z-fold3-xanh-dd.jpg" alt="">
                  <h4>Samsung Galaxy Z Fold</h4>
                  <h5>45.990.000đ</h5></a>
                  
                </div> -->
              <!-- </div> -->
            </div>
          </div>
        </div>
      </div>
      <style>
          body{
              color: black;
          }
      </style>
</body>
</html>