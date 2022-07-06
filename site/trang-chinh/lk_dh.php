
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
            <?php if(isset($_SESSION['user'])){
                extract($_SESSION['user']);
            } ?>
            <aside>
                <div class="mo-ta">
                    <div class="avt">
                        <img src="../../admin/assets/images/avatars/<?=$anh_dd?>" width="100%" alt="">
                    </div>
                    <div class="name">
                        <p><?=$ho_va_ten?></p>
                        <a href="../trang-chinh/index.php?hosocanhan">Sửa hồ sơ</a>
                    </div>

                </div>
                <hr>
                <a href="../trang-chinh/index.php?quanlidonhang" id="xdh"><i class="far fa-file-alt"></i><span>Xem đơn hàng</span></a>
            </aside>
            <main>
                <div class="chi-tiet">
                    <form action="../trang-chinh/index.php">
                    <input type="text" name="id_donhang" placeholder="Tìm đơn hàng theo id" id="id-dh">
                    </form>
                    <hr id="hrt">
                    <?php foreach($items_ct_dh as $c){
                        extract($c);
                        ?>
                    <a href="../trang-chinh/index.php?ct-donhang&id_donhang=<?=$id_donhang?>" id="details"><div class="details">
                        <div class="img-details">
                            <img src="../../admin/assets/images/products/<?=$anh_sp?>" width="100%"
                            alt="">
                        </div>
                        <div class="text-detail">
                            <h5><?=$ten_sp?></h5>
                            <h5>Giá: <?=number_format($gia,0,'',".")?> VNĐ</h5>
                            <h5>Số lượng: <?=$so_luong?></h5>
                        </div>
                        <div class="tt-detail">
                            <span>Tổng tiền <p><?=number_format($tong_tien,0,'',".")?> VNĐ</p></span>
                        </div>
                        
                    </div></a>
                    <?php  } ?>
                    <hr>
                </div>

            </main>
        </div>



    </content>

    
</body>


</html>