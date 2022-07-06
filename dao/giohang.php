<?php
require_once 'pdo.php';


function ct_donhang_insert($id_sp, $ten_sp, $anh_sp, $gia, $so_luong, $tong_tien, $id_donhang){
    $conn=pdo_get_connection();
    $sql = "INSERT INTO ct_donhang (id_sp, ten_sp, anh_sp, gia, so_luong, tong_tien, id_donhang) VALUES('$id_sp', '$ten_sp', '$anh_sp', '$gia', '$so_luong', '$tong_tien', '$id_donhang')";
    $conn->exec($sql);
    // pdo_execute($sql);
    // $last_id = $conn->lastInsertId();
    $conn = null;
    // return $last_id;
  
}
// update lại kho sp
function set_sl($sl_new, $id_sp){
    $sql = "UPDATE san_pham SET kho = '$sl_new' where id_sanpham = $id_sp";
    pdo_execute($sql);
}

function ct_donhang_select($id_khachhang){
    $sql = "SELECT ct.*, dh.id_khachhang FROM ct_donhang ct join don_hang dh on dh.id_donhang=ct.id_donhang where dh.id_khachhang = '$id_khachhang'";
    return pdo_query($sql);
}
function ct_donhang_select1($id_khachhang, $id_donhang){
    $sql = "SELECT ct.*, dh.id_khachhang FROM ct_donhang ct join don_hang dh on dh.id_donhang=ct.id_donhang where dh.id_khachhang = '$id_khachhang' and ct.id_donhang='$id_donhang'";
    return pdo_query($sql);
}
function donhang_select($id_donhang){
    $sql = "SELECT dh.*, ct.so_luong, ct.anh_sp, ct.gia, ct.ten_sp, ct.tong_tien, tt.tt_donhang FROM don_hang dh join ct_donhang ct on ct.id_donhang=dh.id_donhang join tt_donhang tt on tt.id_tt=dh.id_tt where dh.id_donhang='$id_donhang'";
    return pdo_query($sql);
}

function donhang_insert($id_khachhang, $ten_nguoinhan, $dc_giaohang, $sdt_nhanhang, $tongtien, $ngay_mua, $ghi_chu, $id_tt){
    $conn=pdo_get_connection();
    $sql = "INSERT INTO don_hang (id_khachhang, ten_nguoinhan, dc_giaohang, sdt_nhanhang, tongtien, ngay_mua, ghi_chu, id_tt) VALUES('$id_khachhang', '$ten_nguoinhan', '$dc_giaohang', '$sdt_nhanhang', '$tongtien', '$ngay_mua', '$ghi_chu', '$id_tt')";
    // pdo_execute($sql);
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    $conn = null;
    return $last_id;
  
}
function bl_insert($noi_dung, $ngay_bl, $id_sp_tt, $id_khachhang, $reply){
    $conn=pdo_get_connection();
    $sql = "INSERT INTO binh_luan(noi_dung, ngay_bl, id_sp_tt, id_khachhang, reply) VALUES ('$noi_dung','$ngay_bl','$id_sp_tt','$id_khachhang','$reply')";
    // pdo_execute($sql);
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    $conn = null;
    return $last_id;
  
}
function donhang_update($id_donhang, $ten_nguoinhan, $dc_giaohang, $sdt_nhanhang, $tong_tien, $ngay_mua, $ghi_chu, $id_tt){
    $conn=pdo_get_connection();
    $sql = "UPDATE don_hang SET ten_nguoinhan='$ten_nguoinhan', dc_giaohang='$dc_giaohang', sdt_nhanhang='$sdt_nhanhang', tong_tien='$tong_tien', ngay_mua='$ngay_mua', ghi_chu)='$ghi_chu', id_tt='$id_tt' where id_donhang='$id_donhang'";
    $conn->exec($sql);
    // pdo_execute($sql);
    // $last_id = $conn->lastInsertId();
    $conn = null;
    // return $last_id;
  
}
    function tongdonhang(){
        $tong=0;
        if(isset($_SESSION['giohang'])){
          if(sizeof($_SESSION['giohang'])>0){
            for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
               $tt= $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
               $tong+=$tt;
            }
        }
    }
    return $tong;
        } 


        function showw(){
            $ttt="";
            if(isset($_SESSION['giohang'])){
                $tong_tien=0;
                for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                    $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                    $tong_tien += $tt;
                    $ttt.= ' <tr>
                    <td>'.($i+1).'</td>
                    <td>'.$_SESSION['giohang'][$i][1].'</td>
                    <td><img src="../../admin/assets/images/products/'.$_SESSION['giohang'][$i][0].'" width="80px;" ></td>
                    <td>'.$_SESSION['giohang'][$i][3].'</td>
                    <td>'.$_SESSION['giohang'][$i][2].'</td>
                    <td>'.$tt.'</td>
                </tr>'; 
                }
    
            }
            return $ttt;
        }
?>