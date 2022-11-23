<!DOCTYPE html>
<html lang="en">
<body>
    <div class="grid">
        <!-- HEADER MENU -->
        <div class=" header-menu ">
            <label for="checkbox-res"><i class="fa-solid fa-bars icon-show-menu l-0"></i></label>
            <input hidden type="checkbox" class="checkbox-res" id="checkbox-res">
            <label for="checkbox-res" class="overlay m-0 c-0 l-0"></label>
            <div class="menu-res l-0">
                <label for="checkbox-res" class="icon-close-res"><i class="fa-solid fa-xmark"></i></label>
                <div class="wrapper-search-res">
                    <form action="<?= $SITE_URL ?>/goods/listed.php" method="post" class="search-res" enctype="multipart/form-data">
                        <input class=ip-search-res name="keywords" type="text" value="" placeholder="Tìm kiếm...">
                        <button class="submit-search-res" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            
                <!-- MENU RESPONSIVE -->
                <ul class="main-menu-res">
                    <li><a href="<?= $SITE_URL ?>/main-page?homepage">Trang chủ</a></li>
                    <li><a href="<?= $SITE_URL ?>/main-page?about">Giới thiệu</a></li>
                    <?php
                        foreach($types as $type) {
                            extract($type);
                            $href = "$SITE_URL/goods/listed.php?ma_loai=$ma_loai";?>                             
                        <li><a href="<?= $href; ?>"><?= $ten_loai; ?></a></li>
                    <?php } ?>
                    <li><a href="<?= $SITE_URL ?>/main-page?contact">Liên hệ</a></li>
                    <li><a href="#" class="icon-show-login">Đăng nhập</a></li>
                </ul>
            </div>
            <div class="logo">
                <a href="<?= $SITE_URL ?>/main-page?homepage"><img src="<?= $CONTENT_URL ?>/images/img-site/logo.png" alt="Logo"></a>
            </div>
            <div class="header-nav m-0 c-0">

                <!-- MAIN MENU -->
                <ul class="main-menu">
                    <li><a href="<?= $SITE_URL ?>/main-page?homepage" class="link">Trang chủ</a></li>
                    <li><a href="<?= $SITE_URL ?>/main-page?about" class="link">Giới thiệu</a></li>
                    <li>
                        <a class="link">Sản phẩm</a>
                        <!-- CHILD MENU -->
                        <ul class="child-menu">
                            <?php
                                foreach($types as $type) {
                                    extract($type);
                                    $href = "$SITE_URL/goods/listed.php?ma_loai=$ma_loai";?>                             
                                <li><a href="<?= $href; ?>"><?= $ten_loai; ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li><a href="<?= $SITE_URL ?>/main-page?contact" class="link">Liên hệ</a></li>
                </ul>
            </div>

            <!-- TOOLS -->
            <div class="tools">
                <ul class="tools-item">
                    <li>
                        <a class="icon-search m-0 c-0">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <div class="wrapper-search">
                                <form action="<?= $SITE_URL ?>/goods/listed.php" method="post" class="search">
                                    <input class="ip-search" name="keywords" type="text">
                                    <button class="submit-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="icon-user m-0 c-0 icon-show-login"><i class="fa-solid fa-user"></i></a>
                    </li>
                    <li>
                        <a href="#" class="icon-cart"><i class="fa-sharp fa-solid fa-basket-shopping"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- LOGIN -->
        <div class="wrapper-login">
            <form action="" method="post" class="main-login">                   
                <i class="fa-solid fa-xmark icon-close-form-login"></i>
                <h2 class="title-login">Đăng nhập</h2>
                <div class="form-group">
                    <label class="label-control" for="username">Tên đăng nhập *</label>
                    <input class="form-control" type="text" placeholder="Tên đăng nhập" id="username">
                </div>
                <div class="form-group">
                    <label class="label-control" for="password">Mật khẩu *</label>
                    <input class="form-control"  type="password" placeholder="Mật khẩu" id="password">
                </div>
                <div class="form-btn">
                    <input class="btn-submit" type="submit" value="Đăng nhập">
                    <input class="ip-remember" type="checkbox" id="remember"> <label class="label-remember" for="remember">Ghi nhớ mật khẩu</label>
                </div>
                <p class="lost-pass"><a href="#">Quên mật khẩu?</a></p>
                <p class="register"><a href="#">Đăng ký</a></p>
            </form>
        </div>
    </div>
</body>
</html>