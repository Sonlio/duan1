<!DOCTYPE html>
<html lang="en">
<body>
    <div class="show-cart">
        <div class="grid wide">
            <div class="row no-gutters">
                <div class="col l-7 m-12 c-12">
                    <form action="" method="post">
                        <div class="form-show-cart">
                            <table class="tb-form-show-cart">
                                <thead>
                                    <tr>
                                        <th class="name-product" colspan="3">SẢN PHẨM</th>
                                        <th class="price-product c-0">GIÁ</th>
                                        <th class="amount-product">SỐ LƯỢNG</th>
                                        <th class="total-product c-0">TẠM TÍNH</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tr-product">
                                        <td class="remove-product"><i class="fa-regular fa-circle-xmark"></i></td>
                                        <td class="img-product"><img src="<?= $CONTENT_URL ?>/images/img-admin/img-products/dhn1.png" alt=""></td>
                                        <td class="name-product">Đồng hồ nam 1</td>
                                        <td class="price-product"> 20,000,000 <span style="text-decoration: underline;">đ</span></td>
                                        <td class="amount-product">2</td>
                                        <td class="total-product">40,000,000 <span style="text-decoration: underline;">đ</span></td>
                                    </tr>
                                    <tr>
                                        <td class="td-continue-shopping" colspan="6">
                                            <div class="continue-shopping">
                                                <a href="<?= $SITE_URL ?>/goods/listed.php?continue_shopping" class="button-continue-shopping">← TIẾP TỤC XEM SẢN PHẨM</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>

                <div class="col l-5 m-12 c-12">
                    <div class="amount-show-cart">
                        <table class="tb1">
                            <thead>
                                <tr>
                                    <th class="name-product">CỘNG GIỎ HÀNG</th>
                                </tr>
                            </thead>
                        </table>
                        <table class="tb2">
                            <tbody>
                                <tr>
                                    <th>Tạm tính</th>
                                    <td>40,000,000 <span style="text-decoration: underline;">đ</span></td>
                                </tr>
                                <tr>
                                    <th>Tổng</th>
                                    <td>40,000,000 <span style="text-decoration: underline;">đ</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="checkout">
                            <a href="" class="button-checkout">TIẾN HÀNH THANH TOÁN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>