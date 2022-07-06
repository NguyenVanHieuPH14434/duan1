<?php
  if($kho == 10){
    $mes = "Sắp hết hàng!";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chi tiết sản phẩm</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link rel="stylesheet" href="../assets/css/ct-sp.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      </head>
<body>
    <div class="container" style="margin-bottom: 30px;">

        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="preview-pic">
                            <div class="tab-pane active" id="pic-1"><img src="../../admin/assets/images/products/<?=$anh_sp?>" width="100%" /></div>
                           
                        </div>
                        

                    </div>
                    <div class="details col-md-6">
                        <h2 class="product-title" style="font-weight: bolder;"><?=$ten_sanpham?></h2>
                        <div class="mo_ta">
                            <p>
                               <?=$mo_ta?></p>
                        </div>
                        <form action="../trang-chinh/index.php?gio-hang" method="post">
                        <?php if($kho>0){
?>
                        <div class="quantity">
                            <div class="input-group" style="width: 150px;">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus" data-field="">
                                        <span class="glyphicon glyphicon-minus"><i class="fas fa-angle-down"></i></span>
                                    </button>
                                </span>
                                <input type="text" id="quantity" name="so_luong" class="form-control input-number" value="1" min="1" max="<?=$kho?>">
                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                    <span class="glyphicon glyphicon-plus"><i class="fas fa-angle-up"></i></span>
                                  </button>
                                </span>
                              </div>
                            </div>
              
<div><label style="color: red;">Kho:<?=$kho?></label></div>
<p style="color: red;"><?php if(isset($mes)){echo $mes;} ?></p>
                        <h4 class="price">Giá bán: <span><?=number_format($gia,0,'',".")?> VNĐ</span></h4>
                       

                        <div class="action">
                              <input type="hidden" name="ten_sp" value="<?=$ten_sanpham?>">
                              <input type="hidden" name="gia" value="<?=$gia?>">
                              <input type="hidden" name="id_sanpham" value="<?=$id_sanpham?>">
                              <input type="hidden" name="anh_sp" value="<?=$anh_sp?>">
                              <input type="hidden" name="kho" value="<?=$kho?>">
                           
                            <button class="add-to-cart btn btn-dark" type="submit" name="addcart" style="padding: 10px 20px;">Thêm vào giỏ</button>
                      
                          </form>
                          <?php
                            } else{?>
                            <div><label style="color: red;">Hết hàng</label></div>
                            <?php }?>
                        </div>
                    </div>
                    <div class="product-details">
                        <h1 style="margin-top: 50px;">Chi tiết sản phẩm</h1>
        <!-- <p class="details" style="font-size: 14px; margin-top: 20px;">Gập mở linh hoạt, màn hình lớn hơn nhưng lại nhỏ gọn hơn
            Với một màn hình gập, Samsung Galaxy Z Fold3 5G đã giải quyết bài toán đưa màn hình lớn lên một chiếc điện thoại di động. Trong trạng thái gập, Galaxy Z Fold3 5G thậm chí còn nhỏ hơn một chiếc smartphone thông thường, dễ dàng cho vào túi xách, túi quần, sử dụng bằng một tay.
            
            Còn khi bạn mở màn hình gập, mọi thứ sẽ trở nên sống động hơn bao giờ hết với kích thước lớn tới 7,6 inch. Hơn nữa, đây còn là màn hình tỉ lệ vuông, cho diện tích sử dụng lớn gấp đôi so với smartphone thông thường.
            Màn hình ngoài tiện lợi
            Ngay cả khi trong trạng thái gập, bạn vẫn hoàn toàn có thể sử dụng Samsung Galaxy Z Fold3 5G bình thường với màn hình ngoài kích thước 6,2 inch. Chất lượng của màn hình này cũng đứng trong top đầu hiện nay với công nghệ Dynamic AMOLED 2X, tần số quét 120Hz, hiển thị tuyệt đẹp và siêu mượt mà.
            
            Màn hình ngoài cho phép bạn sử dụng điện thoại tiện lợi hơn, trong những trường hợp cần thao tác nhanh bằng một tay mà không cần phải mở màn hình lớn.</p> -->
            <p><?=$chi_tiet_sp?></p>
                    </div>
                </div>
            </div>
                    <!-- <div class="comment">
                        
                        <div class="form-group green-border-focus">
                            <h3>BÌNH LUẬN VỀ SẢN PHẨM</h3>
                            <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                          </div>
                        <input type="submit" value="Gửi">
                    </div> -->
                    <?php require 'bl_sp.php'; ?>
                    
                    <?php require 'hang-cung-loai.php'; ?>
                    <!-- <div class="splq">
                        <h3>SẢN PHẨM LIÊN QUAN</h3>
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
                
           

        </div>
        <h1 style="margin-top: 50px;">Chi tiết sản phẩm</h1>
        <p class="details" style="font-size: 14px; margin-top: 20px;"></p>
        <h1 style="text-align: center; font-weight: bolder;">Sản phẩm liên quan</h1> -->
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
  integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
  integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="../assets/js/quantity.js"></script>
</html>