<?php
require_once 'pdo.php';
function san_pham_insert($ten_sanpham, $anh_sp, $mo_ta, $id_danhmuc, $kho, $gia, $ngay_nhap, $chi_tiet_sp, $so_luot_xem){
    $sql = "INSERT INTO san_pham(ten_sanpham, anh_sp, mo_ta, id_danhmuc, kho, gia, ngay_nhap, chi_tiet_sp, so_luot_xem) VALUES (?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $ten_sanpham, $anh_sp, $mo_ta, $id_danhmuc, $kho, $gia, $ngay_nhap, $chi_tiet_sp, $so_luot_xem);
}
function san_pham_update($id_sanpham, $ten_sanpham, $anh_sp, $mo_ta, $id_danhmuc, $kho, $gia, $ngay_nhap, $chi_tiet_sp, $so_luot_xem){
    if($anh_sp!=""){
    $sql = "UPDATE san_pham SET ten_sanpham='$ten_sanpham', anh_sp='$anh_sp', mo_ta=' $mo_ta', id_danhmuc='$id_danhmuc', kho='$kho', gia='$gia', ngay_nhap='$ngay_nhap', chi_tiet_sp='$chi_tiet_sp', so_luot_xem='$so_luot_xem' WHERE id_sanpham='$id_sanpham'";
}else{
    $sql = "UPDATE san_pham SET ten_sanpham='$ten_sanpham', mo_ta=' $mo_ta', id_danhmuc='$id_danhmuc', kho='$kho', gia='$gia', ngay_nhap='$ngay_nhap', chi_tiet_sp='$chi_tiet_sp', so_luot_xem='$so_luot_xem' WHERE id_sanpham='$id_sanpham'";

}
    pdo_execute($sql);
}
function san_pham_delete($id_sanpham){
    $sql = "DELETE FROM san_pham WHERE id_sanpham='$id_sanpham'";
    if(is_array($id_sanpham)){
        foreach ($id_sanpham as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql);
    }
}
function san_pham_select_all(){
    $sql = "SELECT * FROM san_pham";
    return pdo_query($sql);
}
function san_pham_select_all2(){
    $sql = "SELECT * FROM san_pham limit 0,4";
    return pdo_query($sql);
}
function san_pham_select_all1(){
    $one_page = 4;
    if(!isset($_GET['trang'])){
        $trang = 1;
    }else{
        $trang = $_GET['trang'];
    }
    $page = ($trang - 1)*$one_page;
    $sql = "SELECT id_sanpham, ten_sanpham, anh_sp, mo_ta, danh_muc.ten_danhmuc, gia, chi_tiet_sp, so_luot_xem, kho FROM san_pham inner join danh_muc on danh_muc.id_danhmuc=san_pham.id_danhmuc limit $page,$one_page";
    return pdo_query($sql);
}
function san_pham_select_by_id($id_sanpham){
    $sql = "SELECT * FROM san_pham WHERE id_sanpham=?";
    return pdo_query_one($sql, $id_sanpham);
}
function san_pham_exist($id_sanpham){
    $sql = "SELECT count(*) FROM san_pham WHERE id_sanpham=?";
    return pdo_query_value($sql, $id_sanpham) > 0;
}
function san_pham_tang_so_luot_xem($id_sanpham){
    $sql = "UPDATE san_pham SET so_luot_xem = so_luot_xem + 1 WHERE id_sanpham=?";
    pdo_execute($sql, $id_sanpham);
}
function san_pham_select_so_luot_xem(){
    $sql = "SELECT * FROM san_pham WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 4";
    return pdo_query($sql);
}
function san_pham_kho(){
    $sql = "SELECT * FROM san_pham WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 4";
    return pdo_query($sql);
}
function sp_ban_duoc_nhieu(){
    $sql = "SELECT id_sp, ten_sp, SUM(so_luong) top FROM `ct_donhang` GROUP by id_sp ORDER by top DESC";
    return pdo_query($sql);
}

function san_pham_select_by_danh_muc($id_danhmuc){
    $sql = "SELECT * FROM san_pham WHERE id_danhmuc=?";
    return pdo_query($sql, $id_danhmuc);
}
function san_pham_select_by_danh_muc1($id_danhmuc){
    $sql = "SELECT * FROM san_pham WHERE id_danhmuc=? order by ngay_nhap Limit 0,4";
    return pdo_query($sql, $id_danhmuc);
}
function san_pham_select_keyword($keyword){
    $sql = "SELECT * FROM san_pham sp "
            . " JOIN danh_muc dm ON dm.id_danhmuc=sp.id_danhmuc "
            . " WHERE ten_sanpham LIKE ? OR ten_danhmuc LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}

function san_pham_select_page(){
    $item_per_page = 4;
    $currun_page = 1;
    $offset = ($currun_page - 1) * $item_per_page;
    $sql = "SELECT * FROM san_pham order by id_sanpham ASC LIMIT ".$item_per_page." OFFSET '$offset'";
    $row_count = pdo_query_value("SELECT count(*) FROM san_pham");
    return pdo_query($sql);
}


function load_ten_dm($id_danhmuc){
    if($id_danhmuc>0){
      $sql = "SELECT * from danh_muc where id_danhmuc = $id_danhmuc";
      $sp=pdo_query_one($sql);
      extract($sp);
      return $ten_danhmuc;
    }else{
        return "";
    }
  }

  function sl_sp(){
   $sql= "SELECT COUNT(id_sanpham) sluong FROM san_pham";
   return pdo_query($sql);
  }
  function sl_sp_dm($id_danhmuc){
   $sql= "SELECT COUNT(id_sanpham) sluong FROM san_pham where id_danhmuc = '$id_danhmuc'";
   return pdo_query($sql);
  }

  

?>