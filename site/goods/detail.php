<?php
require '../../global.php';
require '../../dao/goods.php';
require '../../dao/type.php';

extract($_REQUEST);

// Truy vấn mặt hàng theo mã
$product = san_pham_select_by_id($ma_sp);
$types = loai_select_all();
extract($product);

$VIEW = "goods/detail-ui.php";

require '../layoutSmall.php';

?>