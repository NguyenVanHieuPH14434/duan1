

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/ct-sp.css">
    <title>Document</title>
</head>

<body>
    <style>table, tr, td, span{color: black;}
    table{
        width: 100%;
        text-align: center;
        margin-bottom: 20px;
    }
    td:nth-child(1){
        height: 25px;
        text-align: left;
        width: 80%;
    }
    td:nth-child(2){
        width: 12%;
    }
    td:nth-child(3){
        width: 8%;
    }
</style>
    <div class="comment">
        <h3>BÌNH LUẬN VỀ SẢN PHẨM</h3>
        <table>
        <?php 
            require '../../dao/binh_luan.php';
            if(exist_param('noi_dung')){
            if(isset($_SESSION['user'])){
                extract($_SESSION['user']);
            }
            $id_khachhang = $id_khachhang;
            $ngay_bl= date_format(date_create(),'Y-m-d');
            binh_luan_insert($noi_dung, $ngay_bl, $id_sanpham, $id_khachhang);
        } 
        if(isset($_GET['id_sanpham'])){
            $id_sanpham = $_GET['id_sanpham'];
        }
        $show_bl = binh_luan_select_by_hang_hoa($id_sanpham);
        foreach($show_bl as $bl){
            echo '
            <tr>
                <td><span>'.$bl['noi_dung'].'</span></td>
                <td><span>'.$bl['ho_va_ten'].'</span></td>
                <td><span>'.$bl['ngay_bl'].'</span></td>
            </tr>';
        }
        ?>
      </table>
      <?php
        if (!isset($_SESSION['user'])) {
            echo '<b class="text-danger">Đăng nhập để bình luận về sản phẩm này</b>';
        } else {
        ?>
            <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
                <div class="form-group green-border-focus">

                    <textarea class="form-control" name="noi_dung" id="exampleFormControlTextarea5" rows="3"></textarea>
                </div>
                <input type="submit" value="Gửi">
    </form>
<?php
        } ?>
    </div>
</body>

</html>