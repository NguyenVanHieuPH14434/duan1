

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/ct-sp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    #form{
        margin-left: 25px;
        margin-bottom: 10px;
    }
    #close{
        position:relative;
        top: -30px;
        left: 100px;
        border: 1px solid none;
        border-radius: 30px;
        background-color: crimson;
        padding: 3px 18px;
        width: 100px;
    }
    button{
        border: none;
        background-color: white;
    }
</style>
    <div class="comment">
        <h3>BÌNH LUẬN VỀ SẢN PHẨM</h3>
      <?php
     
        if (!isset($_SESSION['user'])) {
            echo '<b class="text-danger">Đăng nhập để bình luận về sản phẩm này</b>';
        } else {
        ?>
            <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
                <div class="form-group green-border-focus">
                <input type="hidden" name="reply" value="0">
                    <textarea class="form-control" name="noi_dung" id="exampleFormControlTextarea5" rows="3"></textarea>
                </div>
                <input type="submit" name="gui" value="Gửi">
    </form>
<?php
        } ?>
        <table>
        <?php 
            require_once '../../global.php';
            require '../../dao/binh_luan.php';
            require '../../dao/giohang.php';
            // if(exist_param('noi_dung')){
            if(isset($_POST['gui'])){
                $noi_dung = $_POST['noi_dung'];
                $reply = $_POST['reply'];
            if(isset($_SESSION['user'])){
                extract($_SESSION['user']);
            }
            $id_khachhang = $id_khachhang;
            $ngay_bl= date_format(date_create(),'Y-m-d');
           $id = bl_insert($noi_dung, $ngay_bl, $id_sanpham, $id_khachhang, $reply);
        } 

        if(isset($_POST['rep'])){
        // if(exist_param("noi_dung")){
            $noi_dung = $_POST['noi_dung'];
            $reply = $_POST['reply'];
        $id_khachhang = $id_khachhang;
        $ngay_bl= date_format(date_create(),'Y-m-d');
        binh_luan_insert($noi_dung, $ngay_bl, $id_sanpham, $id_khachhang, $reply);
    } 

        $show_bl = binh_luan_select_by_hang_hoa($id_sanpham);
        foreach($show_bl as $bl){
            echo '
            <tr>
                <td><span>'.$bl['noi_dung'].'</span></td>
                <td><span>'.$bl['ho_va_ten'].'</span></td>
                <td><span>'.$bl['ngay_bl'].'</span></td>
            </tr>
            <tr>
				<td colspan="3"><button onclick="reply(this);" style="color: red;">Reply</button></td>
			</tr>
			';
        }
        ?>
      </table>
      <div id="form-<?=$bl['id_binhluan']?>" class="row replyRow" style="display: none;">
                <form action="" method="post" >
                          <div class="form-group green-border-focus">
                              <input type="text" value="<?=$bl['id_binhluan']?>" name="reply">
                              <textarea class="form-control" name="noi_dung" id="exampleFormControlTextarea5" rows="3"></textarea>
                          </div>
                          <input type="submit" name="rep" value="Gửi">
                      </form>
                          <button onclick="$('.replyRow').hide();" style="color: white;" id="close">close</button>
                </div>
    </div>
</body>


<script>
 
function showReplyForm() {
 
    if (document.getElementById("form-"+ <?=$bl['id_binhluan']?>).style.display == "") {
        document.getElementById("form-"+ <?=$bl['id_binhluan']?>).style.display = "none";
    } else {
        document.getElementById("form-"+ <?=$bl['id_binhluan']?>).style.display = "";
    }
}

function hienThi(visible){
   var phi = document.getElementById("form")
   phi.style.display=visible? "block":"none";
}

function reply (caller){
    $(".replyRow").insertAfter($(caller));
    $(".replyRow").show();
}


 
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>