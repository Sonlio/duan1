<!DOCTYPE html>
<html lang="en">
<body>
        <div class="grid wide">
            <!-- ĐỒNG HỒ NAM -->
            <div class="gap-element" style="padding-top: 50px;"></div>
            <div class="col l-12">
                <h2 class="title-category">Đồng hồ nam</h2>
            </div>
            <div class="row no-gutters container-content">
                    <?php
                        foreach($items as $item) {
                            extract($item); ?>
                            <div class="col l-3 m-3 c-6">
                                <a href="#" class="product-item">
                                    <div class="content-product-item">
                                        <div class="product-item-discount">
                                            <span>-<?= $giam_gia; ?>%</span>
                                        </div>
                                        <div class="product-item-img">
                                            <img src="<?= $CONTENT_URL ?>/images/img-admin/img-products/<?= $hinh; ?>" alt="">
                                        </div>
                                        <div class="product-item-name-category">
                                            <p><?= $ten_loai; ?></p>
                                        </div>
                                        <div class="product-item-name">
                                            <p><?= $ten_sp; ?></p>
                                        </div>
                                        <div class="product-item-price">
                                            <del><?= $don_gia; ?> đ</del>
                                            <p><?= $don_gia; ?> đ</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                    <?php } ?>
                <!-- <div class="col l-3 m-3 c-6">
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
                </div> -->
            </div>
        </div>
</body>
</html>