<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../content/css/css-site/main.css">
    <link rel="stylesheet" href="../content/css/css-site/gridsystem.css">
    <link rel="stylesheet" href="../content/css/css-site/responsive.css">
    <title>WATCH</title>
</head>
<body>
    <div class="wrapper">
        <!-- HEADER -->
        <header class="header">
            <div class="grid">
                <!-- HEADER MENU -->
                <div class="header-menu">
                    <label for="checkbox-res"><i class="fa-solid fa-bars icon-show-menu l-0"></i></label>
                    <input hidden type="checkbox" class="checkbox-res" id="checkbox-res">
                    <label for="checkbox-res" class="overlay m-0 c-0 l-0"></label>
                    <div class="menu-res l-0">
                        <label for="checkbox-res" class="icon-close-res"><i class="fa-solid fa-xmark"></i></label>
                        <div class="wrapper-search-res">
                            <form action="" method="post" class="search-res">
                                <input class=ip-search-res type="text" value="" placeholder="Tìm kiếm...">
                                <button class="submit-search-res" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <ul class="main-menu-res">
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="#">Đồng hồ nam</a></li>
                            <li><a href="#">Đồng hồ nữ</a></li>
                            <li><a href="#">Đồng hồ đôi</a></li>
                            <li><a href="#">Phụ kiện</a></li>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#" class="icon-show-login">Đăng nhập</a></li>
                        </ul>
                    </div>
                    <div class="logo">
                        <a href="#"><img src="../content/images/img-site/logo.png" alt="Logo"></a>
                    </div>
                    <div class="header-nav m-0 c-0">
                        <!-- MAIN MENU -->
                        <ul class="main-menu">
                            <li><a href="#" class="link">Trang chủ</a></li>
                            <li><a href="#" class="link">Giới thiệu</a></li>
                            <li>
                                <a href="#" class="link">Sản phẩm</a>
                                <!-- CHILD MENU -->
                                <ul class="child-menu">
                                    <li><a href="">Đồng hồ nam</a></li>
                                    <li><a href="">Đồng hồ nữ</a></li>
                                    <li><a href="">Đồng hồ đôi</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="link">Phụ kiện</a></li>
                            <li><a href="#" class="link">Liên hệ</a></li>
                        </ul>
                    </div>
                    <!-- TOOLS -->
                    <div class="tools">
                        <ul class="tools-item">
                            <li>
                                <a class="icon-search m-0 c-0">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    <div class="wrapper-search">
                                        <form action="" method="post" class="search">
                                            <input class="ip-search" type="text">
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

                <!-- HEADER BANNER -->
                <div class="header-banner">
                    <div class="slider">
                        <i class="fa-solid fa-angle-left slider-prev"></i>
                        <div class="slider-wrapper">
                            <div class="slider-main">
                                <div class="slider-item">
                                    <img src="../content/images/img-site/banner1.jpg" alt="">
                                </div>
                                <div class="slider-item">
                                    <img src="../content/images/img-site/banner2.jpg" alt="">
                                </div>
                                <div class="slider-item">
                                    <img src="../content/images/img-site/banner3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right slider-next"></i>
                    </div>
                    <ol class="slider-dots">
                        <li class="slider-dot-item dot-selected" data-index="0"></li>
                        <li class="slider-dot-item" data-index="1"></li>
                        <li class="slider-dot-item" data-index="2"></li>
                    </ol>
                </div>
            </div>
        </header>

        <!-- CONTAINER -->
        <div class="container">
            <div class="grid wide">
                <!-- ĐỒNG HỒ NAM -->
                <div class="gap-element" style="padding-top: 50px;"></div>
                <div class="col l-12">
                    <h2 class="title-category">Đồng hồ nam</h2>
                </div>
                <div class="row no-gutters container-content">
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/dhn1.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Đồng hồ nam</p>
                                </div>
                                <div class="product-item-name">
                                    <p>Đồng hồ Louis Erard</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/dhn2.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Đồng hồ nam</p>
                                </div>
                                <div class="product-item-name">
                                    <p>Đồng hồ Louis Erard</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/dhn3.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Đồng hồ nam</p>
                                </div>
                                <div class="product-item-name">
                                    <p>Đồng hồ Louis Erard</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/dhn4.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Đồng hồ nam</p>
                                </div>
                                <div class="product-item-name">
                                    <p>Đồng hồ Louis Erard</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/dhn5.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Đồng hồ nam</p>
                                </div>
                                <div class="product-item-name">
                                    <p>Đồng hồ Louis Erard</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/dhn6.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Đồng hồ nam</p>
                                </div>
                                <div class="product-item-name">
                                    <p>Đồng hồ Louis Erard</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/dhn7.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Đồng hồ nam</p>
                                </div>
                                <div class="product-item-name">
                                    <p>Đồng hồ Louis Erard</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/dhn8.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Đồng hồ nam</p>
                                </div>
                                <div class="product-item-name">
                                    <p>Đồng hồ Louis Erard</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- ĐỒNG HỒ NỮ -->
                <div class="gap-element" style="padding-top: 50px;"></div>
                <div class="col l-12">
                    <h2 class="title-category">Đồng hồ nữ</h2>
                </div>
                <div class="row no-gutters content">
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/dhg1.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Đồng hồ nữ</p>
                                </div>
                                <div class="product-item-name">
                                    <p>ĐỒNG HỒ TISSOT T41.1.183.34 NỮ TỰ ĐỘNG DÂY INOX</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/dhg2.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Đồng hồ nữ</p>
                                </div>
                                <div class="product-item-name">
                                    <p>ĐỒNG HỒ TISSOT T41.1.183.34 NỮ TỰ ĐỘNG DÂY INOX</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/dhg3.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Đồng hồ nữ</p>
                                </div>
                                <div class="product-item-name">
                                    <p>ĐỒNG HỒ TISSOT T41.1.183.34 NỮ TỰ ĐỘNG DÂY INOX</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/dhg4.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Đồng hồ nữ</p>
                                </div>
                                <div class="product-item-name">
                                    <p>ĐỒNG HỒ TISSOT T41.1.183.34 NỮ TỰ ĐỘNG DÂY INOX</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/dhg5.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Đồng hồ nữ</p>
                                </div>
                                <div class="product-item-name">
                                    <p>ĐỒNG HỒ TISSOT T41.1.183.34 NỮ TỰ ĐỘNG DÂY INOX</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/dhg6.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Đồng hồ nữ</p>
                                </div>
                                <div class="product-item-name">
                                    <p>ĐỒNG HỒ TISSOT T41.1.183.34 NỮ TỰ ĐỘNG DÂY INOX</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/dhg7.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Đồng hồ nữ</p>
                                </div>
                                <div class="product-item-name">
                                    <p>ĐỒNG HỒ TISSOT T41.1.183.34 NỮ TỰ ĐỘNG DÂY INOX</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/dhg8.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Đồng hồ nữ</p>
                                </div>
                                <div class="product-item-name">
                                    <p>ĐỒNG HỒ TISSOT T41.1.183.34 NỮ TỰ ĐỘNG DÂY INOX</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- ĐỒNG HỒ ĐÔI -->
                <div class="gap-element" style="padding-top: 50px;"></div>
                <div class="col l-12">
                    <h2 class="title-category">Đồng hồ đôi</h2>
                </div>
                <div class="row no-gutters content">
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/dhd1.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Đồng hồ đôi</p>
                                </div>
                                <div class="product-item-name">
                                    <p>ĐỒNG HỒ ĐÔI CASIO MTP-E312D-7BVDF – LTP-E312D-4BVDF PIN DÂY INOX</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/dhd2.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Đồng hồ đôi</p>
                                </div>
                                <div class="product-item-name">
                                    <p>ĐỒNG HỒ ĐÔI CASIO MTP-E312D-7BVDF – LTP-E312D-4BVDF PIN DÂY INOX</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/dhd3.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Đồng hồ đôi</p>
                                </div>
                                <div class="product-item-name">
                                    <p>ĐỒNG HỒ ĐÔI CASIO MTP-E312D-7BVDF – LTP-E312D-4BVDF PIN DÂY INOX</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/dhd4.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Đồng hồ đôi</p>
                                </div>
                                <div class="product-item-name">
                                    <p>ĐỒNG HỒ ĐÔI CASIO MTP-E312D-7BVDF – LTP-E312D-4BVDF PIN DÂY INOX</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- PHỤ KIỆN -->
                <div class="gap-element" style="padding-top: 50px;"></div>
                <div class="col l-12">
                    <h2 class="title-category">Phụ kiện</h2>
                </div>
                <div class="row no-gutters content">
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/pk1.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Phụ kiện</p>
                                </div>
                                <div class="product-item-name">
                                    <p>HỘP LÊN DÂY CÓT TỰ ĐỘNG ZRC DOUBLE-WATCH WINDER EM03201</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/pk2.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Phụ kiện</p>
                                </div>
                                <div class="product-item-name">
                                    <p>HỘP LÊN DÂY CÓT TỰ ĐỘNG ZRC DOUBLE-WATCH WINDER EM03201</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/pk3.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Phụ kiện</p>
                                </div>
                                <div class="product-item-name">
                                    <p>HỘP LÊN DÂY CÓT TỰ ĐỘNG ZRC DOUBLE-WATCH WINDER EM03201</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col l-3 m-3 c-6">
                        <a href="#" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-10%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="../content/images/img-admin/img-products/pk4.png" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p>Phụ kiện</p>
                                </div>
                                <div class="product-item-name">
                                    <p>HỘP LÊN DÂY CÓT TỰ ĐỘNG ZRC DOUBLE-WATCH WINDER EM03201</p>
                                </div>
                                <div class="product-item-price">
                                    <del>20,217,000 đ</del>
                                    <p>18,195,300 đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
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
                                <img src="../content/images/img-site/logo.png" alt="Logo footer">
                            </div>
                            <p class="intro">Chúng tôi luôn không ngừng cố gắng, đem đến cho người tiêu dùng những
                                sản phẩm mới, chất lượng với giá thành phù hợp!
                            </p>
                            <div class="social">
                                <a href="https://www.facebook.com/sonne19040202"><img src="../content/images/img-site/facebook.png" alt=""></a>
                                <a href="https://www.instagram.com/"><img src="../content/images/img-site/instagram.png" alt=""></a>
                                <a href="https://www.tiktok.com/@sson_1904?lang=vi-VN"><img src="../content/images/img-site/tiktok.png" alt=""></a>
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

    <script src="../content/js/js-site/main.js"></script>
</body>
</html>