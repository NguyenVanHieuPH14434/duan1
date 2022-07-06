<?php
include '../global.php';
include '../dao/pdo.php';
    include '../dao/danh_muc.php';
    include '../dao/san_pham.php';
    include '../dao/khach_hang.php';
    include '../dao/binh_luan.php';
    include '../dao/tin_tuc.php';
    include '../dao/thong_ke.php';
    include '../dao/tt_donhang.php';
    include '../dao/don_hang.php';
    include '../dao/giohang.php';
     
    check_login();

    include "header.php";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            //sản phẩm
            case 'sanpham':
                $row_count = pdo_query_value("SELECT count(*) FROM san_pham");
                $sp_page = ceil($row_count/4);
                $sl_sp=sl_sp();
                $sp=san_pham_select_all1();
                include "sanpham/sanpham.php";
                break;
            case 'add-sp':
                if(isset($_POST['btn-them'])){
                    $ten_sanpham=$_POST['tensp'];
                    $anh_sp=$_FILES['anh_sp']['name'];
                    $mo_ta=$_POST['mota'];
                    $so_luot_xem=$_POST['so_luot_xem'];
                    $id_danhmuc=$_POST['dm'];
                    $kho=$_POST['kho'];
                    $gia=$_POST['gia'];
                    $ngay_nhap= $_POST['ngay_nhap'];
                    $chi_tiet_sp = $_POST['ct'];
                    $up = "assets/images/products/";
                    $up_file = $up . basename($_FILES['anh_sp']['name']);
                    if(empty($ten_sanpham)){
                        $MESSAGE = "Tên sản phẩm không được trống!";
                    }elseif(empty($ten_danhmuc)){
                        $MESSAGE = "Danh mục không được trống!";
                    }elseif(empty($gia)){
                        $MESSAGE = "Giá sản phẩm không được trống!";
                    }elseif(empty($mo_ta)){
                        $MESSAGE = "Thông số kyc thuật không được trống!";
                    }elseif(empty($chi_tiet_sp)){
                        $MESSAGE = "Mô tả sản phẩm không được trống!";
                    }
                    else{
                    if(move_uploaded_file($_FILES['anh_sp']['tmp_name'], $up_file)){

                    }else{

                    }
                    san_pham_insert($ten_sanpham, $anh_sp, $mo_ta, $id_danhmuc,$kho, $gia, $ngay_nhap, $chi_tiet_sp, $so_luot_xem);
                    $MESSAGE="Thêm sản phẩm thành công";
                }
                }
                $dm=danh_muc_select_all();
                include "sanpham/add-sp.php";
                break;
                case 'xoa_sp':
                    if (isset($_GET['id_sanpham'])) {
                        $id_sp = $_GET['id_sanpham'];
                        san_pham_delete($id_sp);
                    }
                    $sp = san_pham_select_all1();
                    include "sanpham/sanpham.php";
                    break;
                    case 'suasp':
                        if (isset($_GET['id_sanpham'])) {
                            $id_sanpham = $_GET['id_sanpham'];
                            $sp=san_pham_select_by_id($id_sanpham);
                        }
                        $dm = danh_muc_select_all();
                        include "sanpham/edit-sp.php";
                        break;
            case 'edit-sp':
                if(isset($_POST['btn-edit'])){
                    $ten_sanpham=$_POST['tensp'];
                    $anh_sp=$_FILES['anh_sp']['name'];
                    $mo_ta=$_POST['mota'];
                    $so_luot_xem=$_POST['so_luot_xem'];
                    $id_danhmuc=$_POST['dm'];
                    $kho=$_POST['kho'];
                    $gia=$_POST['gia'];
                    $ngay_nhap= $_POST['ngay_nhap'];
                    $chi_tiet_sp = $_POST['ct'];
                    $id_sanpham = $_POST['id_sp'];
                    $up = "assets/images/products/";
                    $up_file = $up . basename($_FILES['anh_sp']['name']);
                    if(move_uploaded_file($_FILES['anh_sp']['tmp_name'], $up_file)){

                    }else{

                    }
                    san_pham_update($id_sanpham, $ten_sanpham, $anh_sp, $mo_ta, $id_danhmuc, $kho, $gia, $ngay_nhap, $chi_tiet_sp, $so_luot_xem);
                    $MESSAGE="Thành công";
                }
                $dm=danh_muc_select_all();
                include "sanpham/edit-sp.php";
                break;
                //end sp

                //danh mục
            case 'categori':
                if(isset($_POST['btn-them'])){
                    $ten_danhmuc = $_POST['ten'];
                    if(empty($ten_danhmuc)){
                        $MESSAGE = "Tên danh mục không được trống!";
                    }else{
                    danh_muc_insert($ten_danhmuc);
                    $MESSAGE="Thêm thành công!";
                    }
                }else
                if (isset($_POST['btn-capnhat'])) {
                    $ten_danhmuc = $_POST['ten'];
                    $id_danhmuc = $_POST['id_danhmuc'];
                    if(empty($ten_danhmuc)){
                        $MESSAGE = "Tên danh mục không được trống!";
                    }else{
                    danh_muc_update($id_danhmuc,$ten_danhmuc);
                    $MESSAGE="Cập nhật thành công!";
                    }
                }
               $dm=danh_muc_select_all_count();
                include "danhmuc/categori.php";
                break;
                case 'xoalo':
                    if (isset($_GET['id_danhmuc'])) {
                        $id_danhmuc = $_GET['id_danhmuc'];
                        danh_muc_delete($id_danhmuc);
                        $MESSAGE="Xóa thành công!";
                    }
                    $dm = danh_muc_select_all_count();
                    include "danhmuc/categori.php";
                    break;
                    //end danh mục

                    //khách hàng
            case 'user':
                if(isset($_POST['btn-them'])){
                $username =$_POST['username'];
                $password = $_POST['pass'];
                $ho_va_ten = $_POST['hoten'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $anh_dd = $_FILES['anh_dd']['name'];
                $vai_tro = $_POST['vai_tro'];
                $up_file = "assets/images/avatars/";
                $up = $up_file . basename($_FILES['anh_dd']['name']);
                if(move_uploaded_file($_FILES['anh_dd']['tmp_name'], $up)){

                }else{

                }
                khach_hang_insert($username, $password, $ho_va_ten, $email, $sdt, $anh_dd, $vai_tro);
                }

                if(isset($_POST['btn-edit'])){
                    $username =$_POST['username'];
                    $password = $_POST['pass'];
                    $ho_va_ten = $_POST['hoten'];
                    $email = $_POST['email'];
                    $id_khachhang = $_POST['id_kh'];
                    $sdt = $_POST['sdt'];
                    $anh_dd = $_FILES['anh_dd']['name'];
                    $vai_tro = $_POST['vai_tro'];
                    $up_file = "assets/images/avatars/";
                    $up = $up_file . basename($_FILES['anh_dd']['name']);
                    if(move_uploaded_file($_FILES['anh_dd']['tmp_name'], $up)){
    
                    }else{
    
                    }
                    khach_hang_update($id_khachhang, $username, $password, $ho_va_ten, $email, $sdt, $anh_dd, $vai_tro);
                    }
                $kh_show=khach_hang_select_all();
                include "khachhang/user.php";
                break;
                case 'xoakh':
                    if (isset($_GET['id_khachhang'])) {
                        $id_khachhang = $_GET['id_khachhang'];
                        khach_hang_delete($id_khachhang);
                    }
                    $kh_show = khach_hang_select_all();
                    include "khachhang/user.php";
                    break;
                    //end khách hàng

                    //tin tức
            case 'news':
                $tt_show = tin_tuc_select_all();
                include "tintuc/tintuc.php";
                break;
            case 'add-tt':
                if(isset($_POST['btn-them'])){
                $tieu_de = $_POST['tieude'];
                $gioi_thieu = $_POST['gt'];
                $noi_dung = $_POST['nd'];
                $ngay_dang = $_POST['ngay_dang'];
                $anh_tt = $_FILES['anh_tt']['name'];
                $up = "assets/images/tintuc/";
                $up_file= $up. basename($_FILES['anh_tt']['name']);
                if(move_uploaded_file($_FILES['anh_tt']['tmp_name'],$up_file)){

                }else{

                }
                tin_tuc_insert($tieu_de, $gioi_thieu, $noi_dung, $ngay_dang, $anh_tt);
                }
                include "tintuc/add-tt.php";
                break;
                case 'xoatt':
                    if (isset($_GET['id_tintuc'])) {
                        $id_tintuc = $_GET['id_tintuc'];
                        tin_tuc_delete($id_tintuc);
                    }
                    $tt_show = tin_tuc_select_all();
                    include "tintuc/tintuc.php";
                    break;
                    case 'suatt':
                        if (isset($_GET['id_tintuc'])) {
                            $id_tintuc = $_GET['id_tintuc'];
                            $tt_one=tin_tuc_select_by_id($id_tintuc);
                        }
                        include "tintuc/edit-tt.php";
                        break;
            case 'edit-tt':
                if(isset($_POST['btn-edit'])){
                    $tieu_de = $_POST['tieude'];
                    $id_tintuc = $_POST['id_tintuc'];
                    $gioi_thieu = $_POST['gt'];
                    $noi_dung = $_POST['nd'];
                    $ngay_dang = $_POST['ngay_dang'];
                    $anh_tt = $_FILES['anh_tt']['name'];
                    $up = "assets/images/tintuc/";
                    $up_file= $up. basename($_FILES['anh_tt']['name']);
                    if(move_uploaded_file($_FILES['anh_tt']['tmp_name'],$up_file)){
    
                    }else{
    
                    }
                    tin_tuc_update($id_tintuc, $tieu_de, $gioi_thieu, $noi_dung, $ngay_dang, $anh_tt);
                    }
                    $tt_one=tin_tuc_select_by_id($id_tintuc);
                include "tintuc/edit-tt.php";
                break;
                //end tin tức

                //bình luận
            case 'binhluan':
                $kh = khach_hang_select_all();
                $bl_show= thong_ke_binh_luan();
                include "binhluan/binhluan.php";
                break;
                case 'xoa_bl':
                    if(isset($_GET['id_binhluan'])){
                        $id_binhluan = $_GET['id_binhluan'];
                        binh_luan_delete($id_binhluan);
                    }
                    $kh = khach_hang_select_all();
                     $bl_show = thong_ke_binh_luan();
                     include "binhluan/binhluan.php";
                     break;
                //end bình luận

                //đơn hàng
            case 'donhang':
                $dh_show = don_hang_select_all();
                include "donhang/donhang.php";
                break;
            case 'add-dh':
                if(isset($_POST['btn-them'])){
                $ten_nguoinhan = $_POST['ten_nn'];
                $id_khachhang = $_POST['id_kh'];
                $dc_giaohang = $_POST['dc_gh'];
                $sdt_nhanhang = $_POST['sdt_nh'];
                $tongtien = $_POST['tongtien'];
                $ngay_mua = $_POST['ngay_mua'];
                $ghi_chu = $_POST['ghichu'];
                $id_tt = $_POST['id_tt'];
                
                don_hang_insert($id_khachhang, $ten_nguoinhan, $dc_giaohang, $sdt_nhanhang, $tongtien, $ngay_mua, $ghi_chu, $id_tt);
                }
                $tt = select_tt_donhang();
                $kh = khach_hang_select_all();
                include "donhang/add-dh.php";
                break;
                case 'xoa-dh':
                   if(isset($_GET['id_donhang'])){
                       $id_donhang = $_GET['id_donhang'];
                       don_hang_delete($id_donhang);
                   }
                    $dh_show = don_hang_select_all();
                    include "donhang/donhang.php";
                    break;
                    case 'suadh':
                        if (isset($_GET['id_donhang'])) {
                            $id_donhang = $_GET['id_donhang'];
                            $dh_one= don_hang_select_by_id($id_donhang);
                        }
                        $tt = select_tt_donhang();
                        include "donhang/sua-dh.php";
                        break;
            case 'sua-dh':
                if(isset($_POST['btn-edit'])){
                    $ten_nguoinhan = $_POST['ten_nn'];
                    $id_donhang = $_POST['id_dh'];
                    $id_khachhang = $_POST['id_kh'];
                    $dc_giaohang = $_POST['dc_gh'];
                    $sdt_nhanhang = $_POST['sdt_nh'];
                    $tongtien = $_POST['tongtien'];
                    $ngay_mua = $_POST['ngay_mua'];
                    $ghi_chu = $_POST['ghichu'];
                    $id_tt = $_POST['id_tt'];
                    
                    don_hang_update($id_donhang, $id_khachhang, $ten_nguoinhan, $dc_giaohang, $sdt_nhanhang, $tongtien, $ngay_mua, $ghi_chu, $id_tt);
                    }
                    $tt = select_tt_donhang();
                include "donhang/sua-dh.php";
                break;
                //end đơn hàng

                //tt đơn hàng
                case 'tt_dh':
                    if(isset($_POST['btn-them'])){
                        $tt_donhang = $_POST['tt_dh'];
                        insert_tt_donhang($tt_donhang);
                        $MESSAGE="Thành công";
                    }elseif
                    
                    (isset($_POST['btn-edit'])) {
                        $tt_donhang = $_POST['tt_dh'];
                        $id_tt = $_POST['id_tt'];
                        edit_tt_donhang($tt_donhang, $id_tt);
                    }
                   $tt_dh=select_tt_donhang();
                    include "tt_donhang/tt_dh.php";
                    break;
                    case 'xoatt_dh':
                        if (isset($_GET['id_tt'])) {
                            $id_tt = $_GET['id_tt'];
                            tt_dh_delete($id_tt);
                        }
                        $tt_dh = select_tt_donhang();
                        include "tt_donhang/tt_dh.php";
                        break;
                    //end tt_dh

                    //thống kê doanh thu
                    case 'doanhthu':
                        $tk_dt = thong_ke_doanh_thu_thang1();
                        include "doanhthu/doanhthu.php";
                        break;

                        //end thống kê doanh thu
                        case 'banra':
                            $tk_sp = sp_ban_duoc_nhieu();
                            include "banra/banra.php";
                            break;
            default:
            $sl_sp=sl_sp();
            $sl_kh = sl_kh();
            $sl_dh=sl_dh();
            $sl_bl=sl_bl();
            $sl_sp_dm=thong_ke_hang_hoa();
       
                include "home.php";
                break;
        }
    }else{
        $sl_sp=sl_sp();
        $sl_kh = sl_kh();
        $sl_dh=sl_dh();
        $sl_bl=sl_bl();
        $sl_sp_dm=thong_ke_hang_hoa();
        include "home.php";
    }
    include "footer.php";

?>