<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/css-site/main.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/css-site/gridsystem.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/css-site/responsive.css">
    <title>WATCH</title>
</head>
<body>
    <div class="wrapper">
        <!-- HEADER -->
        <?= require 'layout/header.php'; ?>

        <!-- CONTAINER -->
        <div class="container">
            <?= require $VIEW; ?>
        </div>

        <!-- FOOTER -->
        <footer class="footer-wrapper">
            <div class="gap-element" style="padding-top: 20px;"></div>
            <div class="grid wide footer-content">
                <div class="row no-gutters">
                    <div class="col l-3 m-3 c-12">
                        <div class="col-inner">
                            <h2 class="footer-heading">Liên kết</h2>
                            <ul class="footer-list">
                                <li><a href="#">Trang chủ</a></li>
                                <li><a href="#">Giới thiệu</a></li>
                                <li><a href="#">Đồng hồ nam</a></li>
                                <li><a href="#">Đồng hồ nữ</a></li>
                                <li><a href="#">Đồng hồ đôi</a></li>
                                <li><a href="#">Phụ kiện</a></li>
                                <li><a href="#">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col l-6 m-6 c-12 middle">
                        <div class="col-inner">
                            <div class="footer-logo">
                                <img src="<?= $CONTENT_URL ?>/images/img-site/logo.png" alt="Logo footer">
                            </div>
                            <p class="intro">Chúng tôi luôn không ngừng cố gắng, đem đến cho người tiêu dùng những
                                sản phẩm mới, chất lượng với giá thành phù hợp!
                            </p>
                            <div class="social">
                                <a href="https://www.facebook.com/sonne19040202"><img src="<?= $CONTENT_URL ?>/images/img-site/facebook.png" alt=""></a>
                                <a href="https://www.instagram.com/"><img src="<?= $CONTENT_URL ?>/images/img-site/instagram.png" alt=""></a>
                                <a href="https://www.tiktok.com/@sson_1904?lang=vi-VN"><img src="<?= $CONTENT_URL ?>/images/img-site/tiktok.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col l-3 m-3 c-12">
                        <div class="col-inner">
                            <h2 class="footer-heading">Thông tin liên hệ</h2>
                            <div class="footer-contact">
                                <p>Địa chỉ: 137 Nguyễn Thị Thập, Hòa Minh, Liên Chiểu, Đà Nẵng</p>
                                <p>Số điện thoại: 0901749631</p>
                                <p>Email: shopdongho@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="copyright-footer">
                        <p>© All rights reserved. Thiết kế website by Son Handsome</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="<?= $CONTENT_URL ?>/js/js-site/main.js"></script>
</body>
</html>