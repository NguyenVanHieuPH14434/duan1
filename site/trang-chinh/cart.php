<?php
require_once '../../dao/pdo.php';

if (!isset($_SESSION['giohang'])) {
    $_SESSION['giohang'] = array();
}

if(isset($_GET['delid'])&&($_GET['delid']>=0)){
    array_splice($_SESSION['giohang'],$_GET['delid'],1);
 }
 
if(isset($_GET['act'])){
    function update_cart($add =false){
        foreach($_POST['so_luong'] as $id => $so_luong){
          
            if($so_luong ==0){
            unset($_SESSION['giohang'][$id]);
            }else{
                if($add){
                    $_SESSION['giohang'][$id] += $so_luong;
            }else{
                $_SESSION['giohang'][$id] = $so_luong;

            }
        }
    }
}
 switch ($_GET['act']) {
     case 'add':
       update_cart(true);
         break;
     case 'submit':
        if(isset($_POST['update'])){
        update_cart();
    }
         break;
     case 'delete':
        if(isset($_GET['id'])){
            unset($_SESSION['giohang'][$_GET['id']]);
        }
         break;
     
     default:
         # code...
         break;
 }
}

function sp_in(){
    $sql = "SELECT * FROM `san_pham` WHERE `id_sanpham` IN (".implode(',',array_keys($_SESSION['giohang'])).")";
    return pdo_query($sql);
}

if(!empty($_SESSION['giohang'])){
    $products = sp_in();
}else{
    $me = "Giỏ hàng trống!";
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
    <form action="index.php?cart&act=submit" method="post">
    <content>
    
    <div class="container" id="main">
        <div class="cart">
          <style>
              *{color: #ccc;}
              table, tr, th, td{
                  border: 1px solid #ccc;
              }
          </style>
            
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Tên sp</th>
                        <th>Ảnh</th>
                        <th>Giá</th>
                        <th>SL</th>
                        <th>Thành tiền</th>
                        <th>Action</th>
                    </tr>

                    <?php if(!empty($_SESSION['giohang'])){
    $products = sp_in();
                        $num = 1;
                    foreach($products as $row){

                     ?>
                    <tr>
                        <td><?=$num++?></td>
                        <td><?=$row['ten_sanpham']?></td>
                        <td><img src="../../admin/assets/images/products/<?=$row['anh_sp']?>" ></td>
                        <td><?=$row['gia']?></td>
                        <td><input name="so_luong[<?=$row['id_sanpham']?>]" value="<?=$_SESSION['giohang'][$row['id_sanpham']]?>" ></td>
                        <td><?=$row['gia'] * $_SESSION['giohang'][$row['id_sanpham']] ?></td>
                        <td><a href="index.php?cart&act=delete&id=<?=$row['id_sanpham']?>">Xóa</a></td>
                    </tr>
                    <?php }} ?>
                    <tr><td colspan="7"><?php if(isset($me)){
             echo "<h5 style='color:red; text-align:center;'>$me</h5>";
         } ?></td></tr>
              
                </table>
                <input style="margin-top: 15px;" type="submit" name="update" value="Cập nhật"/>
            
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
                        <a href="../trang-chinh/index.php?confirm"><button>Hoàn tất đặt hàng</button></a>
                    </div>
                    <?php } ?>
</body>

</html>