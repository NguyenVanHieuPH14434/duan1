<?php
require '../../global.php';
require '../../dao/tin_tuc.php';
//-------------------------------//
extract($_REQUEST);
$tintuc = tin_tuc_select_by_id($id_tintuc);
extract($tintuc);


$VIEW_NAME = "tintuc/ct_tintuc.php";
require '../layout.php';
