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
                    <h3>Hồ sơ của tôi</h3>
                    <h4>Quản lý thông tin hồ sơ để bảo mật tài khoản</h4>
                    <hr id="hr-ct">
                    <div class="ho-so-ca-nhan">
                        <div class="info">
                            <h4>Tên đăng nhập: <?=$username?></h4>
                        <h4>Họ và tên: <?=$ho_va_ten?></h4>
                        <h4>Email: <?=$email?></h4>
                        <h4>Số điện thoại: <?=$sdt?></h4>
                        </div>
                        <div class="avt-ct">
                           
                            <img src="../../admin/assets/images/avatars/<?=$anh_dd?>" width="80%" alt="">
                            <button>Chọn ảnh</button>
                        </div>
                    </div>
                </div>
                
            </main>
        </div>



    </content>
</body>

</html>
