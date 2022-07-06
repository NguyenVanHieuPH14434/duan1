

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí đơn hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/hosocanhan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
</head>

<body>
    <!-- phần chính -->
    <content>
        <!-- slide -->
        <!-- ------------------ -->
        <!-- layout các mục gồm sản phẩm -->
        <div class="container" id="main">
        
            <aside>
                <div class="mo-ta">
                    <div class="avt">
                        <img src="../../admin/assets/images/avatars/<?=$_SESSION['user']['anh_dd']?>" width="100%" alt="">
                    </div>
                    <div class="name">
                        <p><?=$_SESSION['user']['ho_va_ten']?></p>
                        <a href="../trang-chinh/index.php?capnhattk">Sửa hồ sơ</a>
                    </div>
                   
                </div> 
                <hr>
                <a href="../trang-chinh/index.php?quanlidonhang&id_khachhang=<?=$_SESSION['user']['id_khachhang']?>" id="xdh"><i class="far fa-file-alt"></i><span>Xem đơn hàng</span></a>
                <?php
                    if($_SESSION['user']['vai_tro'] == TRUE){
                        echo "<li id='li'><a href='../../admin/index.php'>Quản trị website</a></li>";
                    }
                ?>
                   <style>
                      #li a{
                           text-decoration: none;
                          font-size: 23px;
                          margin-left: 34px;
                       }
                       
                   </style>
            </aside>
            <main>
                <div class="chi-tiet">
                <?php foreach($items_ctdh as $ctdh){
                    extract($ctdh);
               ?>
                  <div class="ctdh">
                       <div class="anh">
                        <img src="../../admin/assets/images/products/<?=$anh_sp?>" width="100%" alt="">
                       </div>
                       <div class="thongtin">
                           <h4><?=$ten_sp?></h4>
                           <h4><?=number_format($gia,0,'',".")?> VNĐ</h4>
                           <h4>Số lượng: <?=$so_luong?></h4>
                           <h4>Mã đơn hàng: <?=$id_donhang?></h4>
                           <h4>Tên khách hàng: <?=$ten_nguoinhan?></h4>
                           <h4>Trạng thái đơn hàng: <?=$tt_donhang?></h4>
                           <h4>Địa chỉ giao hàng: <?=$dc_giaohang?></h4>
                           <h4>Số điện thoại nhận hàng: <?=$sdt_nhanhang?></h4>
                           <h4>Ngày mua hàng: <?=$ngay_mua?></h4>
                           <h4>Ghi chú: <?=$ghi_chu?></h4>
                           <span>Tổng tiền: <p><?=number_format($tong_tien,0,'',".")?> VNĐ</p></span>
                       </div>
                  </div>
                  <?php
                } ?>
                  <div class="tong-tien">
                    
                  </div>
                    
                </div>
                
            </main>
        </div>



    </content>
</body>

</html>
