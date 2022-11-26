<!DOCTYPE html>
<html lang="en">
<body>
    <div class="grid wide">
        <div class="wrapper-login">
            <form action="register.php" method="post" class="main-login" enctype="multipart/form-data">
                <h2 class="title-login">Đăng ký</h2>
                <?php echo "<h5>$MESSAGE</h5>"; ?>
                <div class="form-group">
                    <label class="label-control" for="username">Tên đăng nhập <strong style="color: red;">*</strong></label>
                    <input class="form-control" name="ma_kh" type="text" placeholder="Tên đăng nhập" id="username">
                </div>
                <div class="form-group">
                    <label class="label-control" for="name">Họ và tên <strong style="color: red;">*</strong></label>
                    <input class="form-control" name="ten_kh"  type="text" placeholder="Họ và tên" id="name">
                </div>
                <div class="form-group">
                    <label class="label-control" for="password">Mật khẩu <strong style="color: red;">*</strong></label>
                    <input class="form-control" name="mat_khau"  type="password" placeholder="Mật khẩu" id="password">
                </div>
                <div class="form-group">
                    <label class="label-control" for="rePassword">Xác nhận mật khẩu <strong style="color: red;">*</strong></label>
                    <input class="form-control" name="mat_khau2"  type="password" placeholder="Xác nhân mật khẩu" id="rePassword">
                </div>
                <div class="form-group">
                    <label class="label-control" for="photo">Hình ảnh <strong style="color: red;">*</strong></label>
                    <input class="form-control" name="up_hinh"  type="file" id="photo">
                </div>
                <div class="form-group">
                    <label class="label-control" for="sdt">Số điện thoại <strong style="color: red;">*</strong></label>
                    <input class="form-control" name="sdt"  type="text" placeholder="Số điện thoại" id="sdt">
                </div>
                <div class="form-group">
                    <label class="label-control" for="address">Địa chỉ <strong style="color: red;">*</strong></label>
                    <input class="form-control" name="dia_chi"  type="text" placeholder="Địa chỉ" id="address">
                </div>
                <div class="form-group">
                    <label class="label-control" for="email">Email <strong style="color: red;">*</strong></label>
                    <input class="form-control" name="email"  type="email" placeholder="Email" id="email">
                </div>
                <input type="hidden" value="0" name="vai_tro">
                <div class="form-btn">
                    <input class="btn-submit" name="btn_register" type="submit" value="Đăng ký">
                </div>
            </form>
        </div>
    </div>
</body>
</html>