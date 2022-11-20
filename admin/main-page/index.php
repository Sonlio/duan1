<?php
    require_once "../../global.php";
    require_once "../../dao/statistic.php";

    // check_login();
    $VIEW = "main-page/chart.php";

    $items = thong_ke_khach_hang();
    require "../layout.php";
?>