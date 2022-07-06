<?php
require_once 'pdo.php';
function khach_hang_insert($username, $password, $ho_va_ten, $email, $sdt, $anh_dd, $vai_tro){
    $sql = "INSERT INTO khach_hang(username, password, ho_va_ten, email, sdt, anh_dd, vai_tro) VALUES (?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $username, $password, $ho_va_ten, $email, $sdt, $anh_dd, $vai_tro);
}
function khach_hang_update($id_khachhang, $username, $password, $ho_va_ten, $email, $sdt, $anh_dd, $vai_tro){
    if($anh_dd!=""){
        $sql = "UPDATE khach_hang SET username='$username', password='$password', ho_va_ten='$ho_va_ten', email='$email', sdt='$sdt', anh_dd='$anh_dd', vai_tro='$vai_tro==1' WHERE id_khachhang='$id_khachhang'";
    }else{
    $sql = "UPDATE khach_hang SET username='$username', password='$password', ho_va_ten='$ho_va_ten', email='$email', sdt='$sdt', vai_tro='$vai_tro==1' WHERE id_khachhang='$id_khachhang'";
    }
    pdo_execute($sql);
}
function khach_hang_delete($id_khachhang){
    $sql = "DELETE FROM khach_hang  WHERE id_khachhang=?";
    if(is_array($id_khachhang)){
        foreach ($id_khachhang as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id_khachhang);
    }
}
function khach_hang_select_all(){
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql);
}
function khach_hang_select_by_id($username){
    $sql = "SELECT * FROM khach_hang WHERE username=?";
    return pdo_query_one($sql, $username);
}
function khach_hang_exist($id_khachhang){
    $sql = "SELECT count(*) FROM khach_hang WHERE id_khachhang='$id_khachhang'";
    return pdo_query_value($sql) > 0;
}
function khach_hang_select_by_role($vai_tro){
    $sql = "SELECT * FROM khach_hang WHERE vai_tro=?";
    return pdo_query($sql, $vai_tro);
}
function khach_hang_change_password($id_khachhang, $mat_khau_moi){
    $sql = "UPDATE khach_hang SET password=? WHERE id_khachhang=?";
    pdo_execute($sql, $mat_khau_moi, $id_khachhang);
}


function checkuser($username, $password){
    $sql = "SELECT * from khach_hang where username='$username' AND password='$password'";
    $listlo=pdo_query_one($sql);
    return $listlo;
}

function sl_kh(){
    $sql= "SELECT COUNT(id_khachhang) sluong FROM khach_hang";
    return pdo_query($sql);
   }
?>