<?php
require_once 'pdo.php';

function danh_muc_insert($ten_danhmuc){
    $sql = "INSERT INTO danh_muc(ten_danhmuc) VALUES(?)";
    pdo_execute($sql, $ten_danhmuc);
}
function danh_muc_update($id_danhmuc, $ten_danhmuc){
    $sql = "UPDATE danh_muc SET ten_danhmuc=? WHERE id_danhmuc=?";
    pdo_execute($sql, $ten_danhmuc, $id_danhmuc);
}
function danh_muc_delete($id_danhmuc){
    $sql = "DELETE FROM danh_muc WHERE id_danhmuc=?";
    if(is_array($id_danhmuc)){
        foreach ($id_danhmuc as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id_danhmuc);
    }
}
function danh_muc_select_all(){
    $sql = "SELECT * FROM danh_muc";
    return pdo_query($sql);
}
function danh_muc_select_all_count(){
    $sql = "SELECT * FROM danh_muc";
    return pdo_query($sql);
}
function danh_muc_select_by_id($id_danhmuc){
    $sql = "SELECT * FROM danh_muc WHERE id_danhmuc=?";
    return pdo_query_one($sql, $id_danhmuc);
}
function danh_muc_exist($ten_danhmuc){
    $sql = "SELECT count(*) FROM danh_muc WHERE ten_danhmuc='$ten_danhmuc'";
    return pdo_query_value($sql) > 0;
}
?>