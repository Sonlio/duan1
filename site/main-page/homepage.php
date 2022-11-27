<!DOCTYPE html>
<html>
<body>
    <div class="grid wide">
        <!-- SẢN PHẨM MỚI -->
        <div class="gap-element" style="padding-top: 50px;"></div>
        <div class="col l-12">
            <h2 class="title-category">Sản phẩm mới</h2>
        </div>
        <div class="row no-gutters container-content">
            <?php
                foreach($products as $product) { 
                    if($product == $products[8]) break;?>
                    <div class="col l-3 m-3 c-6" id="col-product">
                        <a href="<?= $SITE_URL ?>/goods/detail.php?ma_sp=<?= $product['ma_sp'] ?>" class="product-item">
                            <div class="content-product-item">
                                <!-- <?php 
                                    if($product['giam_gia'] > 0) { ?>
                                        <div class="product-item-discount">
                                            <span>-<?= $product['giam_gia']; ?>%</span>
                                        </div>
                                <?php } ?> -->
                                <div class="product-item-img">
                                    <img src="<?= $CONTENT_URL ?>/images/img-admin/img-products/<?= $product['hinh']; ?>" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p><?= $product['ten_loai']; ?></p>
                                </div>
                                <div class="product-item-name">
                                    <p><?= $product['ten_sp']; ?></p>
                                </div>
                                <div class="product-item-price">
                                    <!-- <?php
                                        if($product['giam_gia'] > 0) { ?>
                                            <del><?=  number_format($product['don_gia'], 0, ',', '.');  ?> đ</del>
                                    <?php } ?> -->
                                    <p><?= number_format($product['don_gia'] - ($product['don_gia'] * ($product['giam_gia'] / 100)), 0, ',', '.'); ?> đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
        </div>
    </div>

    <!-- AD -->
    <div class="wrapper-ad">
        <div class="grid wide">
            <div class="row no-gutters container-content">
                <div class="col l-4 m-4 c-12 col-box-ad">
                    <div class="box-ad">
                        <div class="icon-box-ad"><i class="fa-solid fa-truck"></i></div>
                        <div class="content-box-ad">
                            <h3>Miễn phí giao hàng</h3>
                            <p>Miễn phí giao hàng khi bạn mua hàng tại Watch áp dụng cho tất cả các sản phẩm</p>
                        </div>
                    </div>
                </div>
                <div class="col l-4 m-4 c-12 col-box-ad">
                    <div class="box-ad">
                        <div class="icon-box-ad"><i class="fa-sharp fa-solid fa-gift"></i></div>
                        <div class="content-box-ad">
                            <h3>Quà tặng đặc biệt</h3>
                            <p>Nhận phiếu giảm giá khi mua hàng trong tháng sinh nhật</p>
                        </div>
                    </div>
                </div>
                <div class="col l-4 m-4 c-12 col-box-ad">
                    <div class="box-ad">
                        <div class="icon-box-ad"><i class="fa-solid fa-piggy-bank"></i></div>
                        <div class="content-box-ad">
                            <h3>Tiết kiệm khi mua ở Watch</h3>
                            <p>Nhiều sản phẩm được giảm giá sốc cho quý khách hàng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid wide">
        <!-- SẢN PHẨM ĐƯỢC GIẢM GIÁ -->
        <div class="gap-element" style="padding-top: 10px;"></div>
        <div class="col l-12">
            <h2 class="title-category">Sản phẩm giảm giá</h2>
        </div>
        <div class="row no-gutters container-content">
            <?php
                $i = 0;
                foreach($products as $product) {
                    if($product['giam_gia'] > 0) { 
                        if($i == 8) break;?>
                    <div class="col l-3 m-3 c-6" id="col-product">
                        <a href="<?= $SITE_URL ?>/goods/detail.php?ma_sp=<?= $product['ma_sp'] ?>" class="product-item">
                            <div class="content-product-item">
                                <div class="product-item-discount">
                                    <span>-<?= $product['giam_gia']; ?>%</span>
                                </div>
                                <div class="product-item-img">
                                    <img src="<?= $CONTENT_URL ?>/images/img-admin/img-products/<?= $product['hinh']; ?>" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p><?= $product['ten_loai']; ?></p>
                                </div>
                                <div class="product-item-name">
                                    <p><?= $product['ten_sp']; ?></p>
                                </div>
                                <div class="product-item-price">
                                    <?php
                                        if($product['giam_gia'] > 0) { ?>
                                            <del><?=  number_format($product['don_gia'], 0, ',', '.');  ?> đ</del>
                                    <?php } ?>
                                    <p><?= number_format($product['don_gia'] - ($product['don_gia'] * ($product['giam_gia'] / 100)), 0, ',', '.'); ?> đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php $i++; } } 
                $href = "$SITE_URL/goods/listed.php?giam_gia";
                if(count($products) > 8) {?>                             
        </div>
        <div class="show-more-product">
            <a href="<?= $href; ?>">Xem thêm</a>
        </div> <?php } ?>
    </div>

        <!-- AD -->
        <div class="wrapper-ad2">
            <div class="row no-gutters container-content">
                <div class="col l-6 m-6 c-12">
                    <div class="box-ad2">
                        <div class="bg-box-ad2"></div>
                        <div class="box-text-ad2">
                            <h2>
                                <span>
                                    <strong>Romance <br> in the air</strong>
                                </span>
                            </h2>
                            <h4>Wear your style <br> with verve & attitude</h4>
                        </div>
                    </div>
                </div>
                <div class="col l-6 m-6 c-12">
                    <div class="box-ad3">
                        <div class="bg-box-ad3"></div>
                        <div class="box-text-ad2">
                            <h2>
                                <span>
                                    <strong>Analog &<br>Digital</strong>
                                </span>
                            </h2>
                            <h4>Smart watches<br>Latest fashion statement</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="grid wide">
        <!-- SẢN PHẨM XEM NHIỀU NHẤT -->
        <div class="col l-12">
            <h2 class="title-category">Sản phẩm xem nhiều nhất</h2>
        </div>
        <div class="row no-gutters container-content">
            <?php
                foreach($viewProducts as $product) { ?>
                    <div class="col l-3 m-3 c-6" id="col-product">
                        <a href="<?= $SITE_URL ?>/goods/detail.php?ma_sp=<?= $product['ma_sp'] ?>" class="product-item">
                            <div class="content-product-item">
                                <!-- <?php 
                                    if($product['giam_gia'] > 0) { ?>
                                        <div class="product-item-discount">
                                            <span>-<?= $product['giam_gia']; ?>%</span>
                                        </div>
                                <?php } ?> -->
                                <div class="product-item-img">
                                    <img src="<?= $CONTENT_URL ?>/images/img-admin/img-products/<?= $product['hinh']; ?>" alt="">
                                </div>
                                <div class="product-item-name-category">
                                    <p><?= $product['ten_loai']; ?></p>
                                </div>
                                <div class="product-item-name">
                                    <p><?= $product['ten_sp']; ?></p>
                                </div>
                                <div class="product-item-price">
                                    <!-- <?php
                                        if($product['giam_gia'] > 0) { ?>
                                            <del><?=  number_format($product['don_gia'], 0, ',', '.');  ?> đ</del>
                                    <?php } ?> -->
                                    <p><?= number_format($product['don_gia'] - ($product['don_gia'] * ($product['giam_gia'] / 100)), 0, ',', '.'); ?> đ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
        </div>
    </div>
</body>
</html>