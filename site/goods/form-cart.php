<!DOCTYPE html>
<html lang="en">
<body>
     <div class="form-cart">
        <div class="grid wide">
            <div class="row no-gutters">
                <div class="col l-12 m-12 c-12">
                    <?php
                        if(!isset($_SESSION['user'])) { ?>
                            <p class="user-have-account">Bạn đã có tài khoản? <a href="<?= $SITE_URL ?>/account/login.php">Ấn vào đây để đăng nhập</a></p>
                    <?php } ?>
                </div>
            </div>
            <form action="" class="form-checkout" method="post">
                <div class="row no-gutters">
                    <div class="col l-7 m-12 c-12">
                        <div class="wrapper-custommer-detail">
                            <div class="customer-detail">
                                <h3>Thông tin thanh toán</h3>
                                <?php if(isset($_SESSION['user'])) { ?>                         
                                    <div class="form-checkout-group">
                                        <label for="ten_kh">Tên <strong style="color: red;">*</strong></label>
                                        <input type="text" name="ten_kh" id="ten_kh" value="<?= $_SESSION['user']['ten_kh'] ?>">
                                    </div>
                                    <div class="form-checkout-group">
                                        <label for="sdt">Số điện thoại <strong style="color: red;">*</strong></label>
                                        <input type="text" name="sdt" id="sdt" value="<?= $_SESSION['user']['sdt'] ?>">
                                    </div>
                                    <div class="form-checkout-group">
                                        <label for="dia_chi">Địa chỉ <strong style="color: red;">*</strong></label>
                                        <input type="text" name="dia_chi" id="dia_chi" value="<?= $_SESSION['user']['dia_chi'] ?>">
                                    </div>
                                    <div class="form-checkout-group">
                                        <label for="email">Email <strong style="color: red;">*</strong></label>
                                        <input type="email" name="email" id="email" value="<?= $_SESSION['user']['email'] ?>">
                                    </div>
                                <?php } else { ?>
                                    <div class="form-checkout-group">
                                        <label for="ten_kh">Tên <strong style="color: red;">*</strong></label>
                                        <input type="text" name="ten_kh" id="ten_kh">
                                    </div>
                                    <div class="form-checkout-group">
                                        <label for="sdt">Số điện thoại <strong style="color: red;">*</strong></label>
                                        <input type="text" name="sdt" id="sdt">
                                    </div>
                                    <div class="form-checkout-group">
                                        <label for="dia_chi">Địa chỉ <strong style="color: red;">*</strong></label>
                                        <input type="text" name="dia_chi" id="dia_chi">
                                    </div>
                                    <div class="form-checkout-group">
                                        <label for="email">Email <strong style="color: red;">*</strong></label>
                                        <input type="email" name="email" id="email">
                                    </div>
                               <?php } ?>
                            </div>
                        </div>
                        <a href="<?= $SITE_URL ?>/account/register.php" class="new-account">Tạo tài khoản mới?</a>
                    </div>
                    <div class="col l-5 m-12 c-12">
                        <div class="wrapper-your-bill">
                            <div class="your-bill">
                                <h3>Đơn hàng của bạn</h3>
                                <table class="tb-your-bill">
                                    <thead>
                                        <tr>
                                            <th class="product-name-your-bill">Sản phẩm</th>
                                            <th class="product-total-your-bill">Tạm tính</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart-item">
                                            <td class="product-name-your-bill">Đồng hồ nam abc 
                                                <strong class="product-quantity-your-bill">× 1</strong>
                                            </td>
                                            <td class="product-total-your-bill">40,000,000 <span style="text-decoration: underline;">đ</span></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Tạm tính</th>
                                            <td class="product-total-your-bill">20,000,000 <span style="text-decoration: underline;">đ</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Tổng</th>
                                            <td class="product-total-your-bill">20,000,000 <span style="text-decoration: underline;">đ</span></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="btn-order">
                                    <button type="submit" name="order">Đặt hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
     </div>
</body>
</html>