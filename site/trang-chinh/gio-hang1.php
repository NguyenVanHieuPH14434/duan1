<?php
if (!isset($_SESSION['giohang'])) {
    $_SESSION['giohang'] = [];
}
if(isset($_GET['delid'])&&($_GET['delid']>=0)){
    array_splice($_SESSION['giohang'],$_GET['delid'],1);
 }
 
if (isset($_POST['addcart'])) {
    $ten_sp = $_POST['ten_sp'];
    $so_luong = $_POST['so_luong'];
    $gia = $_POST['gia'];
    $kho = $_POST['kho'];
    $anh_sp = $_POST['anh_sp'];
if($so_luong>$kho){
 
}else{
    $fl = 0;
    for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
        if($_SESSION['giohang'][$i][1]==$ten_sp){
            $fl=1;
            $sl_new = $so_luong + $_SESSION['giohang'][$i][3];
            $_SESSION['giohang'][$i][3] = $sl_new;
        }
    }
    if($fl==0){
    $cart = [$anh_sp, $ten_sp, $gia, $so_luong];
    $_SESSION['giohang'][] = $cart;
    }
}
}

function showgh()
{
    if (isset($_SESSION['giohang'])) {
        $tong = 0;
        for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
            $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
            $tong += $tt;
            echo '<div class="container-fliud">
            <div class="wrapper row">
                <div class="cart-1">
                    <div class="pic-cart">
                        <img src="../../admin/assets/images/products/'.$_SESSION['giohang'][$i][0].'" width="80%" alt="">
                    </div>
                    <div class="text-cart">
                        <h3>'.$_SESSION['giohang'][$i][1].'</h3>
                        <h2>'.number_format($_SESSION['giohang'][$i][2],0,'',".").' VNĐ</h2>
                        <h4 class="can">Custom Engrave</h4>
                        <h4>“Happy | Birthday | from”</h4>
                    </div>
                    <div class="package">
                        <a href="index.php?gio-hang&&delid='.$i.'"><i class="far fa-trash-alt"></i></a>
                        <div class="input-group" style="width: 120px;" id="group">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus" data-field="">
                                    <span class="glyphicon glyphicon-minus">-</span>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="so_luong['.$_SESSION['giohang'][$i][1].']" class="form-control input-number" value="'.$_SESSION['giohang'][$i][3].'" min="1" max="100">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                    <span class="glyphicon glyphicon-plus">+</span>
                                </button>
                            </span>
                        </div>
                        <div class="price">
                            <p>'.number_format($tt,0,'',".").' VNĐ </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <hr>';
        }
        
        echo ' 
        <div class="text">
            <span>Tổng tiền: <p>'.number_format($tong,0,'',".").' VNĐ</p></span>
        </div>';
        
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/giohang.css">
    <title>Document</title>
</head>

<body>
    <form action="index.php?gio-hang&act=submit" method="post">
    <content>
    
    <div class="container" id="main">
        <div class="cart">
            
            <?php showgh(); ?>
            <?php var_dump($_POST) ?>
            <input type="submit" name="update" value="Cập nhật"/>
          <?php if(isset($me)){
              echo "<h5 style='color:red;'>$me</h5>";
          } ?>
            <!-- <div class="container-fliud">
                <div class="wrapper row">
                    <div class="cart-1">
                        <div class="pic-cart">
                            <img src="../assets/img/637643170642413961_samsung-galaxy-z-fold3-xanh-dd.jpg" width="80%" alt="">
                        </div>
                        <div class="text-cart">
                            <h3>Samsung Galaxy Z Fold 3</h3>
                            <h2>44.990.000 VNĐ</h2>
                            <h4 class="can">Custom Engrave</h4>
                            <h4>“Happy | Birthday | from”</h4>
                        </div>
                            <div class="package">
                                <a href=""><i class="far fa-trash-alt"></i></a>
                                <div class="input-group" style="width: 120px;" id="group">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus" data-field="">
                                            <span class="glyphicon glyphicon-minus">-</span>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="0" min="1" max="100">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                            <span class="glyphicon glyphicon-plus">+</span>
                                        </button>
                                    </span>
                                </div>
                                <div class="price">
                                    <p>44.990.000 VNĐ </p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <hr> -->
                <!-- <div class="confirm">
                    <div class="text">
                        <span>Tổng tiền: <p>44.990.000 VNĐ</p></span>
                    </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </content>
</form>
                    <?php if(!isset($_SESSION['user'])){
                        echo '<h4 style="color:red; text-align:center;">Đăng nhập để đặt hàng</h4>';
                    }else{ 
                        ?>
                    <div class="btn-ht">
                        <a href="../trang-chinh/index.php?confirm"><button type="submit" name="order" >Hoàn tất đặt hàng</button></a>
                    </div>
                    <?php } ?>
</body>

</html>