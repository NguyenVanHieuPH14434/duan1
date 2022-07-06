<?php
require '../../global.php';
require '../../dao/san_pham.php';
//-------------------------------//

extract($_REQUEST);

// // Truy vấn mặt hàng theo mã
$hang_hoa = san_pham_select_by_id($id_sanpham);
extract($hang_hoa);

// // Tăng số lượt xem lên 1
san_pham_tang_so_luot_xem($id_sanpham);

// $VIEW_NAME = "hang-hoa/chi-tiet-ui.php";
$VIEW_NAME = "hang-hoa/ct_hh.php";
require '../layout.php';
