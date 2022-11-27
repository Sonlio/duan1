<?php
require '../../global.php';
require '../../dao/type.php';

if(exist_param('btn_show_cart')) {
    $types = loai_select_all();
    $VIEW = "goods/show-cart.php";
}
else if(exist_param('btn_form_cart')) {
    $types = loai_select_all();
    $VIEW = "goods/form-cart.php";
}

require '../layoutSmall.php';
?>