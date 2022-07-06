<?php
require_once 'pdo.php';
function binh_luan_insert($noi_dung, $ngay_bl, $id_sp_tt, $id_khachhang, $reply){
    $sql = "INSERT INTO binh_luan(noi_dung, ngay_bl, id_sp_tt, id_khachhang, reply) VALUES (?,?,?,?,?)";
    pdo_execute($sql, $noi_dung, $ngay_bl, $id_sp_tt, $id_khachhang, $reply);
}
function binh_luan_update($noi_dung, $ngay_bl, $id_sp_tt, $id_khachhang, $id_binhluan){
    $sql = "UPDATE binh_luan SET noi_dung=?, ngay_bl=?, id_sp_tt=?, id_khachhang=? WHERE id_binhluan=?";
    pdo_execute($sql,$noi_dung, $ngay_bl, $id_sp_tt, $id_khachhang, $id_binhluan);
}
function binh_luan_delete($id_binhluan){
    $sql = "DELETE FROM binh_luan WHERE id_binhluan=?";
    if(is_array($id_binhluan)){
        foreach ($id_binhluan as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id_binhluan);
    }
}
function binh_luan_select_all(){
    $sql = "SELECT * FROM binh_luan bl ORDER BY ngay_bl DESC";
    return pdo_query($sql);
}
function binh_luan_select_all_id_sp($id_sanpham){
    $sql = "SELECT * FROM binh_luan bl where id_sanpham='$id_sanpham' ORDER BY ngay_bl DESC";
    return pdo_query($sql);
}
function binh_luan_select_by_id($id_binhluan){
    $sql = "SELECT * FROM binh_luan WHERE id_binhluan=?";
    return pdo_query_one($sql, $id_binhluan);
}
function binh_luan_exist($id_binhluan){
    $sql = "SELECT count(*) FROM binh_luan WHERE id_binhluan=?";
    return pdo_query_value($sql, $id_binhluan) > 0;
}
function binh_luan_select_by_hang_hoa($id_sanpham){
    $sql = "SELECT b.*, h.ten_sanpham, k.ho_va_ten FROM binh_luan b JOIN san_pham h ON h.id_sanpham=b.id_sp_tt join khach_hang k on k.id_khachhang = b.id_khachhang where id_sp_tt='$id_sanpham' ORDER BY ngay_bl DESC";
    return pdo_query($sql, );
}
function binh_luan_select_by_hang_hoa_kh($id_sp_tt,$id_khachhang){
    $sql = "SELECT b.*, h.ten_sanpham, kh.ho_va_ten FROM binh_luan b JOIN san_pham h ON h.id_sanpham=b.id_sp_tt join khach_hang kh on kh.id_khachhang=b.id_khachhang WHERE b.id_sp_tt=? and b.id_khachhang=? ORDER BY ngay_bl DESC";
    return pdo_query($sql, $id_sp_tt,$id_khachhang);
}

function sl_bl(){
    $sql= "SELECT COUNT(id_binhluan) sluong FROM binh_luan";
    return pdo_query($sql);
   }
?>