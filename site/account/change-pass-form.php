<!DOCTYPE html>
<html lang="en">
<body>
    <div class="grid wide">
        <div class="wrapper-login">
            <form action="change-pass.php" method="post" class="main-login">
                <h2 class="title-login">Đổi mật khẩu</h2>
                <?php echo "<h5>$MESSAGE</h5>"; ?>
                <div class="form-group">
                    <label class="label-control" for="username">Tên đăng nhập <strong style="color: red;">*</strong></label>
                    <input class="form-control" name="ma_kh" type="text" placeholder="Tên đăng nhập" id="username">
                </div>
                <div class="form-group">
                    <label class="label-control" for="pass-old">Mật khẩu cũ <strong style="color: red;">*</strong></label>
                    <input class="form-control" name="mat_khau"  type="password" placeholder="Mật khẩu cũ" id="pass-old">
                </div>
                <div class="form-group">
                    <label class="label-control" for="pass-new">Mật khẩu mới <strong style="color: red;">*</strong></label>
                    <input class="form-control" name="mat_khau2"  type="password" placeholder="Mật khẩu mới" id="pass-new">
                </div>
                <div class="form-group">
                    <label class="label-control" for="repass">Xác nhận mật khẩu mới <strong style="color: red;">*</strong></label>
                    <input class="form-control" name="mat_khau3"  type="password" placeholder="Xác nhận mật khẩu mới" id="repass">
                </div>
                <div class="form-btn">
                    <input class="btn-submit" name="btn_change" type="submit" value="Đổi mật khẩu">
                </div>
            </form>
        </div>
    </div>
</body>
</html>