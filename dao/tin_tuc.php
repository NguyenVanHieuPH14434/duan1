<?php
require_once 'pdo.php';

function tin_tuc_insert($tieu_de, $gioi_thieu, $noi_dung, $ngay_dang, $anh_tt){
    $sql = "INSERT INTO tin_tuc(tieu_de, gioi_thieu, noi_dung, ngay_dang, anh_tt) VALUES(?, ?, ?, ?, ?)";
    pdo_execute($sql, $tieu_de, $gioi_thieu, $noi_dung, $ngay_dang, $anh_tt);
}
function tin_tuc_update($id_tintuc, $tieu_de, $gioi_thieu, $noi_dung, $ngay_dang, $anh_tt){
    if($anh_tt!=""){
    $sql = "UPDATE tin_tuc SET tieu_de='$tieu_de', gioi_thieu='$gioi_thieu', noi_dung='$noi_dung', ngay_dang='$ngay_dang', anh_tt='$anh_tt' WHERE id_tintuc='$id_tintuc'";
}else{
        $sql = "UPDATE tin_tuc SET tieu_de='$tieu_de', gioi_thieu='$gioi_thieu', noi_dung='$noi_dung', ngay_dang='$ngay_dang' WHERE id_tintuc='$id_tintuc'";

    }
    pdo_execute($sql);
}
function tin_tuc_delete($id_tintuc){
    $sql = "DELETE FROM tin_tuc WHERE id_tintuc=?";
    if(is_array($id_tintuc)){
        foreach ($id_tintuc as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id_tintuc);
    }
}
function tin_tuc_select_all(){
    $sql = "SELECT * FROM tin_tuc";
    return pdo_query($sql);
}
function tin_tuc_select_by_id($id_tintuc){
    $sql = "SELECT * FROM tin_tuc WHERE id_tintuc='$id_tintuc'";
    return pdo_query_one($sql);
}
function tin_tuc_exist($tieu_de){
    $sql = "SELECT count(*) FROM tin_tuc WHERE tieu_de='$tieu_de'";
    return pdo_query_value($sql) > 0;
}
?>