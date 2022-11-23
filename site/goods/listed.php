<?php
    require '../../global.php';
    require '../../dao/goods.php';
    require '../../dao/type.php';

    extract($_REQUEST);

    if(exist_param("ma_loai")){
        $products = san_pham_select_by_loai($ma_loai);
        $types = loai_select_all();
    }
    else if(exist_param("keywords")){
        $products = san_pham_select_keyword($keywords);
        $types = loai_select_all();
    }
    else{
        $products = san_pham_select_all();
        $types = loai_select_all();
    }

    $VIEW = "goods/listed-ui.php";
    require '../layoutSmall.php';

?>