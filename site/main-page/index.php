<?php
require '../../global.php';

if(exist_param("about")){
    $VIEW = "main-page/about.php";
}
else if(exist_param("contact")){
    $VIEW = "main-page/contact.php";
}
else{
    require_once '../../dao/goods.php';
    require_once '../../dao/type.php';
    $products = san_pham_select_all();
    $types = loai_select_all();
    $VIEW = "main-page/homepage.php";
}

require '../layout.php';

?>
