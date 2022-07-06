<?php
require_once 'pdo.php';

function insert_tt_donhang($tt_donhang){
    $sql = "INSERT INTO tt_donhang  (tt_donhang) VALUES (?)";
    pdo_execute($sql, $tt_donhang);
}
function edit_tt_donhang($tt_donhang, $id_tt){
    $sql = "UPDATE tt_donhang SET tt_donhang='$tt_donhang' WHERE id_tt='$id_tt'";
    pdo_execute($sql);
}
function select_tt_donhang(){
    $sql = "SELECT * From tt_donhang";
   return pdo_query($sql);
}
function select_tt_donhang1(){
    $sql = "SELECT ttd.*, count(*) sl_d From tt_donhang ttd join don_hang dh on dh.id_tt=ttd.id_tt group by ttd.id_tt, ttd.tt_donhang";
   return pdo_query($sql);
}
function tt_dh_delete($id_tt){
    $sql = "DELETE FROM tt_donhang WHERE id_tt=?";
    if(is_array($id_tt)){
        foreach ($id_tt as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id_tt);
    }
}

?>