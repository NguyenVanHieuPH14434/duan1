<?php
require '../../dao/don_hang.php';
require '../../dao/giohang.php';
require '../../mail/sendmail.php';

    if(isset($_POST['muahang'])){
        $ten_nguoinhan = $_POST['ten_nguoinhan'];
        $dc_giaohang = $_POST['dc_giaohang'];
        $sdt_nhanhang = $_POST['sdt_nhanhang'];
        $ghi_chu = $_POST['ghi_chu'];
        if(isset($_SESSION['user'])){
            extract($_SESSION['user']);
        }
        $id_khachhang = $id_khachhang; 
        $ngay_mua = date("y/m/d");
        $id_tt = 1;
        $tongtien = tongdonhang();

        $id_donhang = donhang_insert($id_khachhang, $ten_nguoinhan, $dc_giaohang, $sdt_nhanhang, $tongtien, $ngay_mua, $ghi_chu, $id_tt);

        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
            $ten_sp = $_SESSION['giohang'][$i][1];
            $anh_sp = $_SESSION['giohang'][$i][0];
            $gia = $_SESSION['giohang'][$i][2];
            $so_luong = $_SESSION['giohang'][$i][3];
            $kho = $_SESSION['giohang'][$i][5];
            $tong_tien = $gia * $so_luong;
            $id_sp = $_SESSION['giohang'][$i][4];
            $sl_new = $kho - $so_luong;
            ct_donhang_insert($id_sp, $ten_sp, $anh_sp, $gia, $so_luong, $tong_tien, $id_donhang);
            set_sl($sl_new, $id_sp);
        }
        $ttkh = '
        <h2>Đặt hàng thành công</h2>
        <h3>MÃ đơn hàng: '.$id_donhang.'</h3>
        <h3>Thông tin nhận hàng</h3>
         <table>
        <tr>
            <th>Họ tên: </th>
            <th>'.$ten_nguoinhan.'</th>
        </tr>
        <tr>
            <th>SDT: </th>
            <th>'.$sdt_nhanhang.'</th>
        </tr>
        <tr>
            <th>DC: </th>
            <th>'.$dc_giaohang.'</th>
        </tr>
        <tr>
            <th>Ghi chú: </th>
            <th> '.$ghi_chu.'</th>
        </tr>
    </table>';
    
    $tieude = "Đặt hàng thành công!";
    $noidung .="Cảm ơn quý khách đã đặt hàng với mã đơn hàng : ".$id_donhang."!";
    $noidung .="
    <table border='1' style='width: 650px;'>
<tr>
<th>STT</th>
<th>Tên sp</th>
<th>Số lượng</th>
<th>Đơn giá</th>
</tr>";
    for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
        $noidung .="
           <tr>
            <td>".($i+1)."</td>
            <td>".$_SESSION["giohang"][$i][1]."</td>
            <td>".$_SESSION["giohang"][$i][3]."</td>
            <td>".$_SESSION["giohang"][$i][2]."</td>
        </tr>"; 
        }
        $noidung .= "
        <tr>
        <td colspan='4'>END</td>
    </tr>
        </table>";
      
    $maildh = $_SESSION['user']['email'];
    $mail = new Mailer;
    $mail->dathang($tieude, $noidung, $maildh);
    $ttgh=showw();
    unset($_SESSION['giohang']);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/giohang.css">
    <title>Document</title>
</head>
<body>

   
    <?php echo $ttkh; ?>
    <h3>Giỏ hàng</h3>
    <table border="1" >
        <tr>
            <th>STT</th>
            <th>Tên sp</th>
            <th>Ảnh sp</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Thành tiền</th>
        </tr>
        <?php echo $ttgh; ?>
        <tr>
            <td colspan="">Tổng tiền</td>
            <td colspan="5"><?=$tongtien?></td>
        </tr>
    </table>
    
    <style>
        /* *{
            color: black;
        } */
        body,table, tr, td, th, h2, h3{
            color: black;

        }
        th,td{
            border: 1px solid #ccc;
        }
    </style>
</body>
</html>