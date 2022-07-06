<?php
require '../../global.php';
require '../../dao/san_pham.php';
//-------------------------------//

extract($_REQUEST);

if(exist_param("id_danhmuc")){
    $items = san_pham_select_by_danh_muc($_GET['id_danhmuc']);
    // $ten_lo = load_tenlo($ma_loai);
}
else if(exist_param("keywords")){
    $items = san_pham_select_keyword($keywords);
}
else{
    $items = san_pham_select_all();

}

$VIEW_NAME = "hang-hoa/liet-ke-ui.php";
require '../layout.php';
