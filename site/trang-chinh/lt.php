<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
</head>
<body>

<div class="container">
        <div class="content">
          <div class="title">
            <h2>Laptop</h2>
          </div>
          <div class="sp">
            <div class="row align-items-start">
            <?php foreach($itemslt as $dt){
                    extract($dt);
                  ?>
                  <div class="col">
                    <div class="sanpham">
                      <a href="../hang-hoa/chi-tiet.php?id_sanpham=<?=$id_sanpham?>"><img src="../../admin/assets/images/products/<?=$anh_sp?>" width="230px" height="228px" alt="">
                      <h4><?=$ten_sanpham?></h4>
                      <h5><?=number_format($gia, 0,'',".")?> VNĐ</h5></a>
                      
                    </div>
                  </div>
                  <?php
                } ?>
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
                  
                </div>
              </div>
              <div class="col">
                <div class="sanpham">
                  <a href=""><img src="../assets/img/637643170642413961_samsung-galaxy-z-fold3-xanh-dd.jpg" alt="">
                  <h4>Samsung Galaxy Z Fold</h4>
                  <h5>45.990.000đ</h5></a>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="sp">
            <div class="row align-items-start">
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
                  
                </div>
              </div>
            </div>
          </div>
          <div class="sp">
            <div class="row align-items-start">
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
                  
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
</body>
</html>