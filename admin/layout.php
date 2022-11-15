<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/css-admin/main.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/css-admin/form.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/css-admin/list.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/css-admin/responsive.css">
    <title>QUẢN TRỊ</title>
</head>
<body>
    <div class="container">
        <!-- LAYOUT LEFT -->
        <div class="layout-left hide">
            <div class="sidebar-title">
                <a href="<?= $ADMIN_URL ?>/main-page"><img src="<?= $CONTENT_URL ?>/images/img-admin/logo.png" alt="Logo"></a>
            </div>
            <div class="sidebar-profile">
                <div class="profile-pic">
                    <img src="<?= $CONTENT_URL ?>/images/img-admin/01bf78dd4b72bc2ce563.jpg" alt="">
                </div>
                <div class="profile-info">
                    <span>Xin chào</span>
                    <h3>sonlvpd05507</h3>
                </div>
            </div>
            <!-- SIDEBAR MENU -->
            <div class="sidebar-menu">
                <div class="menu-section">
                    <h3>Tổng quan</h3>
                    <!-- PARENTS MENU -->
                    <ul class="nav-side-menu">
                        <li><a href="<?= $ADMIN_URL ?>/main-page" class="link active"><i class="fa-solid fa-house-user"></i>Trang chủ</a></li>
                        <li>
                            <a class="link"><label for="dropdown-product"><i class="fa-solid fa-bars"></i>Sản phẩm<i class="fa-solid fa-caret-down"></i></label></a>
                            <input hidden type="checkbox" id="dropdown-product" class="dropdown-product">
                            <!-- CHILD MENU -->
                            <ul class="nav-child-menu">
                                <li><a href="<?= $ADMIN_URL ?>/type">Quản lý loại</a></li>
                                <li><a href="<?= $ADMIN_URL ?>/brand">Quản lý hãng</a></li>
                                <li><a href="<?= $ADMIN_URL ?>/goods">Quản lý sản phẩm</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= $ADMIN_URL ?>/customer" class="link"><i class="fa-solid fa-user"></i>Khách hàng</a></li>
                        <li><a href="<?= $ADMIN_URL ?>/customer" class="link"><i class="fa-solid fa-screwdriver-wrench"></i>Nhân viên</a></li>
                        <li><a href="<?= $ADMIN_URL ?>/comment" class="link"><i class="fa-solid fa-comment"></i>Bình luận</a></li>
                        <li>
                            <a class="link"><label for="dropdown-bill"><i class="fa-sharp fa-solid fa-briefcase"></i>Đơn hàng<i class="fa-solid fa-caret-down"></i></label></a>
                            <input hidden type="checkbox" id="dropdown-bill" class="dropdown-bill">
                            <!-- CHILD MENU -->
                            <ul class="nav-child-menu">
                                <li><a href="<?= $ADMIN_URL ?>/bill">Quản lý đơn hàng</a></li>
                                <li><a href="<?= $ADMIN_URL ?>/billdetail">Quản lý chi tiết đơn hàng</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- LAYOUT RIGHT -->
        <div class="layout-right">
            <div class="top-nav">
                <div class="nav-menu">
                    <!-- HEADER -->
                    <div class="nav-menu-info">
                        <label for="checkbox_responsive"><i class="fa-solid fa-list show-list show"></i></label>
                        <input type="checkbox" hidden class="checkbox_responsive" id="checkbox_responsive">
                        <label for="checkbox_responsive" class="responsive_overlay"></label>
                        <!-- SIDEBAR RESPONSIVE -->
                        <div class="nav-side-menu-responsive">
                            <label for="checkbox_responsive" class="icon_close_responsive"><i class="fa-solid fa-xmark"></i></label>
                            <div class="sidebar-title">
                                <a href="<?= $ADMIN_URL ?>/main-page"><img src="<?= $CONTENT_URL ?>/images/img-admin/logo.png" alt="Logo"></a>
                            </div>
                            <li><a href="<?= $ADMIN_URL ?>/main-page" class="link active"><i class="fa-solid fa-house-user"></i>Trang chủ</a></li>
                            <li>
                                <a class="link"><label for="dropdown-product-responsive"><i class="fa-solid fa-bars"></i>Sản phẩm <i class="fa-solid fa-caret-down"></i></label></a>
                                <input hidden type="checkbox" id="dropdown-product-responsive" class="dropdown-product-responsive">
                                <!-- CHILD MENU RESPONSIVE -->                      
                                <ul class="nav-child-menu-responsive">
                                    <li><a href="<?= $ADMIN_URL ?>/type">Quản lý loại</a></li>
                                    <li><a href="<?= $ADMIN_URL ?>/brand">Quản lý hãng</a></li>
                                    <li><a href="<?= $ADMIN_URL ?>/goods">Quản lý sản phẩm</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= $ADMIN_URL ?>/customer" class="link"><i class="fa-solid fa-user"></i>Khách hàng</a></li>
                            <li><a href="<?= $ADMIN_URL ?>/customer" class="link"><i class="fa-solid fa-screwdriver-wrench"></i>Nhân viên</a></li>
                            <li><a href="<?= $ADMIN_URL ?>/comment" class="link"><i class="fa-solid fa-comment"></i>Bình luận</a></li>
                            <li>
                                <a class="link"><label for="dropdown-bill-responsive"><i class="fa-sharp fa-solid fa-briefcase"></i>Đơn hàng<i class="fa-solid fa-caret-down"></i></label></a>
                                <input hidden type="checkbox" id="dropdown-bill-responsive" class="dropdown-bill-responsive">
                                <!-- CHILD MENU RESPONSIVE -->
                                <ul class="nav-child-menu-responsive">
                                    <li><a href="<?= $ADMIN_URL ?>/bill">Quản lý đơn hàng</a></li>
                                    <li><a href="<?= $ADMIN_URL ?>/billdetail">Quản lý chi tiết đơn hàng</a></li>
                                </ul>
                            </li>
                        </div>
                        <!-- INFO USER -->
                        <div class="nav-menu-info-link">
                            <div class="info-pic">
                                <img src="<?= $CONTENT_URL ?>/images/img-admin/01bf78dd4b72bc2ce563.jpg" alt="">
                            </div>
                            <div class="info-name">
                                <span>sonlvpd05507</span>
                            </div>
                            <i class="fa-solid fa-caret-down"></i>
                            <ul class="nav-menu-log">
                                <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i>Đăng xuất</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MAIN LAYOUT RIGHT -->
            <div class="main-layout-right">
                <?php require $VIEW; ?>
            </div>
        </div>
    </div>

    <script src="<?= $CONTENT_URL ?>/js/js-admin/main.js"></script>
</body>
</html>