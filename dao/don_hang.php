<?php
require_once 'pdo.php';

function don_hang_insert($id_khachhang, $ten_nguoinhan, $dc_giaohang, $sdt_nhanhang, $tongtien, $ngay_mua, $ghi_chu, $id_tt){
    $sql = "INSERT INTO don_hang (id_khachhang, ten_nguoinhan, dc_giaohang, sdt_nhanhang, tongtien, ngay_mua, ghi_chu, id_tt) VALUES('$id_khachhang', '$ten_nguoinhan', '$dc_giaohang', '$sdt_nhanhang', '$tongtien', '$ngay_mua', '$ghi_chu', '$id_tt')";
    pdo_execute($sql);
}
function ct_don_hang_insert($ten_sp, $anh_sp, $gia, $so_luong, $tong_tien, $id_donhang){
    $sql = "INSERT INTO ct_donhang (ten_sp, anh_sp, gia, so_luong, tong_tien,id_donhang) VALUES('$ten_sp', '$anh_sp', '$gia', '$so_luong', '$tong_tien', '$id_donhang')";
    pdo_execute($sql);
}
function don_hang_update($id_donhang, $id_khachhang, $ten_nguoinhan, $dc_giaohang, $sdt_nhanhang, $tongtien, $ngay_mua, $ghi_chu, $id_tt){
    $sql = "UPDATE don_hang SET id_khachhang='$id_khachhang', ten_nguoinhan='$ten_nguoinhan', dc_giaohang='$dc_giaohang', sdt_nhanhang='$sdt_nhanhang', tongtien='$tongtien', ngay_mua='$ngay_mua', ghi_chu='$ghi_chu', id_tt='$id_tt' where id_donhang='$id_donhang'";
    pdo_execute($sql);
}
function don_hang_delete($id_donhang){
    $sql = "DELETE FROM don_hang WHERE id_donhang ='$id_donhang'";
    if(is_array($id_donhang)){
        foreach ($id_donhang as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql);
    }
}
function don_hang_select_all(){
    $sql = "SELECT id_donhang, ten_nguoinhan, dc_giaohang, sdt_nhanhang, tongtien, ngay_mua, tt_donhang.tt_donhang FROM don_hang inner join tt_donhang on tt_donhang.id_tt=don_hang.id_tt";
    return pdo_query($sql);
}
function don_hang_select_all1(){
    $sql = "SELECT * from don_hang";
    return pdo_query($sql);
}

function don_hang_select_by_id($id_donhang){
    $sql = "SELECT * FROM don_hang WHERE id_donhang=?";
    return pdo_query_one($sql, $id_donhang);
}
function don_hang_exist($ten_danhmuc){
    $sql = "SELECT count(*) FROM danh_muc WHERE ten_danhmuc='$ten_danhmuc'";
    return pdo_query_value($sql) > 0;
}

function sl_dh(){
    $sql= "SELECT COUNT(id_donhang) sluong FROM don_hang";
    return pdo_query($sql);
   }
?>