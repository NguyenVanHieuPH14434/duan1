<?php
require_once 'pdo.php';
function thong_ke_binh_luan(){
    $sql = "SELECT id_binhluan, noi_dung, ngay_bl, khach_hang.username from binh_luan inner join khach_hang on khach_hang.id_khachhang=binh_luan.id_khachhang";
    return pdo_query($sql);
}

function thong_ke_doanh_thu_thang(){
    $sql = "SELECT month(ngay_mua) month, sum(tongtien) sumtt from don_hang group by month(ngay_mua)";
    return pdo_query($sql);
}
function thong_ke_doanh_thu_thang1(){
    $sql = "SELECT month(ngay_mua) month, sum(tongtien) sumtt, count(id_donhang) s_luong from don_hang where month(ngay_mua)=month(ngay_mua) and id_tt=2 group by month(ngay_mua);";
    return pdo_query($sql);
}

function thong_ke_hang_hoa(){
    $sql = "SELECT dm.id_danhmuc, dm.ten_danhmuc,
             COUNT(*) so_luong
             FROM san_pham sp 
             JOIN danh_muc dm ON dm.id_danhmuc=sp.id_danhmuc 
             GROUP BY dm.id_danhmuc, dm.ten_danhmuc";
    return pdo_query($sql);
}
?>