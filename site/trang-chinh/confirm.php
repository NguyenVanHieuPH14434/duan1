<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giỏ hàng</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/giohang.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
</head>

<body>

  <content>
    <div class="container" id="confirm">


      <form action="index.php?don-hang" method="post">
        <div class="confirm">
          <h2>Địa chỉ giao hàng</h2>
          <div class="form-gruop">
            <label for="name" class="">Họ và tên</label> <br>
            <input type="text" name="ten_nguoinhan" id="hoten" placeholder="VD: Thẩm Đức"> <br>
            <hr>

            <label for="sdt" class="">Số điện thoại</label> <br>
            <input type="text" name="sdt_nhanhang" id="sdt" placeholder="VD: 0859155323"> <br>
            <hr>
            <label for="diachi" class="">Địa chỉ giao hàng</label> <br>
            <input type="text" name="dc_giaohang" id="diachi" placeholder="VD: Cao Bằng"> <br>
            <hr>
            <label for="ghichu" class="">Ghi chú</label> <br>
            <input type="text" name="ghi_chu" id="ghichu" placeholder="Ghi chú"> <br>
            <hr>
          </div>
        </div>
        <div class="btn-cart">
          <a href="../trang-chinh/index.php?trang-chu"><input type="button" name="continue" id="continue" value="Tiếp tục mua hàng"></a>
          <input type="submit" name="muahang" id="finish" value="Hoàn tất đặt hàng">
        </div>
      </form>

    </div>
  </content>


</body>

</html>