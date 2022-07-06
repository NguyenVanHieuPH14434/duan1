
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
        <div class="ct-news">
          <div class="tieude">
              <h1><?=$tieu_de?></h1>
              <div class="time">
                  <p><?=$ngay_dang?></p>
              </div>
          </div>
          <hr>
          <div class="mo-ta">
              <p><?=$gioi_thieu?></p>
          </div>
          <hr>
          <div class="noi-dung">
              <p>
                  <?=$noi_dung?></p>
          </div>
          <hr>
          <div class="comment">
                      
            <div class="form-group green-border-focus">
                <h3>BÌNH LUẬN VỀ TIN TỨC</h3>
                <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
              </div>
            <input type="submit" value="Gửi"></div>
        </div>
        </div>
        
      </div>
</body>
</html>