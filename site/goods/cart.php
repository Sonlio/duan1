<?php
require '../../global.php';
require '../../dao/type.php';

$types = loai_select_all();
$VIEW = "goods/show-cart.php";
require '../layoutSmall.php';
?>