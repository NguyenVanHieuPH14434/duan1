<?php
require 'global.php';
require 'dao/khach_hang.php';

extract($_REQUEST);



if(isset($_POST['btn_login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  // $check = checkuser($username, $password);
  $check = khach_hang_select_by_id($username);
  if($check){
    if($check['password']==$password){
    $_SESSION['user']=$check;
    header('location: ./site/trang-chinh/index.php?tt');
    }else{
      $MESSAGE = "Sai password";
    }
  }else{
    $MESSAGE = "Tài khoản không tồn tại";
  }
}else if(exist_param('btn_logoff')){
  // session_start();
  session_destroy();
  header("location: index.php");
  die;
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Đăng nhập</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./site/assets/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="./site/assets/img/RC_Collection_1000x1000.png" width="20%" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="./site/assets/img/logo-black.png" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Đăng nhập vào tài khoản của bạn</p>
              <form action="login.php" method="POST">
                  <div class="form-group">
                    <label for="user" class="sr-only">Tên đăng nhập</label>
                    <input type="text" name="username" class="form-control" value="<?= isset($username)? $username:''?>" placeholder="Tên đăng nhập">
                  </div>
                  <div class="form-group mb-4">
                    <label for="user" class="sr-only">Mật khẩu</label>
                    <input type="password" name="password"  class="form-control" placeholder="***********">
                  </div>
                  <?php if(isset($MESSAGE)){
                    echo '<h6 style="color: red;">'.$MESSAGE.'</h6>';
                  } ?>
                  <input name="btn_login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Đăng nhập">
                </form>
                
                <p class="login-card-footer-text">Nếu bạn chưa có tài khoản <a href="./sign-up.php" class="text-reset">Đăng kí ngay !</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Điều khoản sử dụng.</a>
                  <a href="#!">Chính sách bảo mật</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
