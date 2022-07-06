<?php
require '../../global.php';


if(exist_param("dt")){
    require_once '../../dao/san_pham.php';
    $itemsdt = san_pham_select_by_danh_muc(3);
    $VIEW_NAME = "trang-chinh/dt.php";
}
else if(exist_param("lt")){
    require_once '../../dao/san_pham.php';
    $itemslt = san_pham_select_by_danh_muc(1);
    $VIEW_NAME = "trang-chinh/lt.php";
}
else if(exist_param("tt")){
    require_once '../../dao/tin_tuc.php';
    $itemstt = tin_tuc_select_all();
    $VIEW_NAME = "trang-chinh/tt.php";
}
else if(exist_param("pk")){
    require_once '../../dao/san_pham.php';
    $itemspk = san_pham_select_by_danh_muc1(4);
    $VIEW_NAME = "trang-chinh/pk.php";
}
else if(exist_param("gio-hang")){
    // require_once '../../dao/san_pham.php';
    // $itemspk = san_pham_select_by_danh_muc1(4);
    $VIEW_NAME = "trang-chinh/gio-hang.php";
}
else if(exist_param("cart")){
    // require_once '../../dao/san_pham.php';
    // $itemspk = san_pham_select_by_danh_muc1(4);
    $VIEW_NAME = "trang-chinh/cart.php";
}
else if(exist_param("hosocanhan")){
    // require_once '../../dao/san_pham.php';
    // $itemspk = san_pham_select_by_danh_muc1(4);
    $VIEW_NAME = "trang-chinh/hosocanhan.php";
}
else if(exist_param("quanlidonhang")){
    require_once '../../dao/giohang.php';
    $items_ct_dh = ct_donhang_select($_SESSION['user']['id_khachhang']);
    $VIEW_NAME = "trang-chinh/quanlidonhang.php";
}
else if(exist_param("ct-donhang")){
    require_once '../../dao/giohang.php';
    $items_ctdh = donhang_select($_GET['id_donhang']);
    $VIEW_NAME = "trang-chinh/ct-donhang.php";
}
else if(exist_param("id_donhang")){
    require_once '../../dao/giohang.php';
    $items_ct_dh = ct_donhang_select1($_SESSION['user']['id_khachhang'] ,$_GET['id_donhang']);
    $VIEW_NAME = "trang-chinh/lk_dh.php";
}
else if(exist_param("confirm")){
    // require_once '../../dao/san_pham.php';
    // $itemspk = san_pham_select_by_danh_muc1(4);
    $VIEW_NAME = "trang-chinh/confirm.php";
}
else if(exist_param("don-hang")){
    // require_once '../../dao/san_pham.php';
    // $itemspk = san_pham_select_by_danh_muc1(4);
    $VIEW_NAME = "trang-chinh/don-hang.php";
}
else if(exist_param("capnhattk")){
    // require_once '../../global.php';
require_once '../../dao/khach_hang.php';
extract($_REQUEST);
    if(isset($_POST['edit'])){
        $username =$_POST['username'];
        $password = $_POST['password'];
        $ho_va_ten = $_POST['ho_va_ten'];
        $email = $_POST['email'];
        $id_khachhang = $_POST['id_khachhang'];
        $sdt = $_POST['sdt'];
        $anh_dd = $_FILES['anh_dd']['name'];
        $vai_tro = $_POST['vai_tro'];
        $up_file = "../../admin/assets/images/avatars/";
        $up = $up_file . basename($_FILES['anh_dd']['name']);
        $avt = $anh_dd;
 
        if($_FILES['anh_dd']['size']>0){
          
            move_uploaded_file($_FILES['anh_dd']['tmp_name'], $up);
     
        }else{
            $avt=$_POST['anh'];
        }
        khach_hang_update($id_khachhang, $username, $password, $ho_va_ten, $email, $sdt, $avt, $vai_tro);
        $_SESSION['user']['ho_va_ten']=$ho_va_ten;
        $_SESSION['user']['anh_dd']=$avt;
        header('location: ../trang-chinh/index.php?hosocanhan');
        }
  
    // require_once '../../dao/san_pham.php';
    // $itemspk = san_pham_select_by_danh_muc1(4);
    $VIEW_NAME = "trang-chinh/capnhattk.php";
}
else{
    require_once '../../dao/san_pham.php';
    $itemslt = san_pham_select_by_danh_muc1(1);
    $itemsdt = san_pham_select_by_danh_muc1(3);
    $itemspk = san_pham_select_by_danh_muc1(4);
    // $itemss = san_pham_select_all();
    $itemss = san_pham_select_so_luot_xem();
    $VIEW_NAME = "trang-chinh/trang-chu.php";
}

require '../layout.php';
