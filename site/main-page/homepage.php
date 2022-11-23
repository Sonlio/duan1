<!DOCTYPE html>
<html>
<body>
    <div class="grid wide">
        <?php
            foreach($types as $type){ ?>
                <div class="gap-element" style="padding-top: 50px;"></div>
                <div class="col l-12">
                    <h2 class="title-category"><?= $type['ten_loai'] ?></h2>
                </div>
                <div class="row no-gutters container-content">
                    <?php
                        foreach($products as $product) {
                            if($type['ma_loai'] == $product['ma_loai']) {?>
                            <div class="col l-3 m-3 c-6" id="col-product">
                                <a href="<?= $SITE_URL ?>/goods/detail.php?ma_sp=<?= $product['ma_sp'] ?>" class="product-item">
                                    <div class="content-product-item">
                                        <?php 
                                            if($product['giam_gia'] > 0) { ?>
                                                <div class="product-item-discount">
                                                    <span>-<?= $product['giam_gia']; ?>%</span>
                                                </div>
                                        <?php }
                                        ?>
                                        <div class="product-item-img">
                                            <img src="<?= $CONTENT_URL ?>/images/img-admin/img-products/<?= $product['hinh']; ?>" alt="">
                                        </div>
                                        <div class="product-item-name-category">
                                            <p><?= $type['ten_loai']; ?></p>
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
                    <?php } } ?>
                </div>
                <!-- <?php
                    $href = "$SITE_URL/goods/listed.php?ma_loai=$type[ma_loai]";
                    if(count($products) > 5){ ?>                             
                    <div class="show-more-product">
                        <a href="<?= $href; ?>">Xem thêm</a>
                    </div> -->
            <?php } } ?>
    </div>
</body>
</html>