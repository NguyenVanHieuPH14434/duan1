<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/tintuc.css">
  <title>Document</title>
</head>
<body>
  
  <div class="container">
    <div class="title">
      <h2>TIN TỨC</h2>
    </div>
    <?php foreach($itemstt as $tt){
      extract($tt);
     ?>
    <div class="news">
        <a href="../tintuc/chitiet.php?id_tintuc=<?=$id_tintuc?>">
        <div class="news-ct">
            <div class="image">
              <img src="../../admin/assets/images/tintuc/<?=$anh_tt?>" width="230px" alt="">
            </div>
            <div class="text">          
                          <p id="title-news"><?=$tieu_de?></p>
                              <p id="mota"><?=$gioi_thieu?></p>
                          <p id="ngaydang"><?=$ngay_dang?></p>    
            </div>
        </div></a>
        <?php
      } ?>
        <!-- <hr>
        <a href="../tintuc/chitiet.php">
          <div class="news-ct">
              <div class="image">
                <img src="../assets/img/image 10.png" alt="">
              </div>
              <div class="text">          
                            <p id="title-news">Chia sẻ bạn cách ghim tin nhắn trên Messenger
                                cực đơn giản</p>
                                <p id="mota">Bạn muốn ghim tin nhắn quan trọng của Messenger để đảm bảo liên lạc đó luôn được ưu tiên nhưng không biết làm thế nào? FPTShop sẽ hướng dẫn các bạn cách thực hiện.</p>
                            <p id="ngaydang">3 giờ trước</p>    
              </div>
          </div></a>
          <hr>
          <a href="../tintuc/chitiet.php">
              <div class="news-ct">
                  <div class="image">
                    <img src="../assets/img/image 10.png" alt="">
                  </div>
                  <div class="text">          
                                <p id="title-news">Chia sẻ bạn cách ghim tin nhắn trên Messenger
                                    cực đơn giản</p>
                                    <p id="mota">Bạn muốn ghim tin nhắn quan trọng của Messenger để đảm bảo liên lạc đó luôn được ưu tiên nhưng không biết làm thế nào? FPTShop sẽ hướng dẫn các bạn cách thực hiện.</p>
                                <p id="ngaydang">3 giờ trước</p>    
                  </div>
              </div></a>
              <hr> -->
    </div>
    
  </div>

</body>
</html>