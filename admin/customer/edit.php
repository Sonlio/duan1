<!DOCTYPE html>
<html>
<body>
    <div class="wrap">
        <div class="col">
            <div class="panel">
                <div class="title-panel">
                    <h2>Cập nhật thông tin khách hàng và nhân viên</h2>
                    <ul class="title-panel-right">
                        <a href="index.php" class="btn-title-panel-right">Thêm mới</a>
                    </ul>
                </div>
                <div class="content-panel">
                    <br>
                    <form action="index.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label" for="id_customer">Mã khách hàng <strong>*</strong></label>
                            <input class="form-control readonly" readonly type="text" name="ma_kh" id="id_customer" placeholder=" " value="<?= $ma_kh ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="name_customer">Tên khách hàng <strong>*</strong></label>
                            <input type="text" class="form-control" name="ten_kh" id="name_customer" placeholder=" " value="<?= $ten_kh ?>"> <br>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="pass_customer">Mật khẩu <strong>*</strong></label>
                            <input type="password" class="form-control" name="mat_khau" id="pass_customer" placeholder=" " value="<?= $mat_khau ?>"> <br>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="confirm_pass_customer">Xác nhận mật khẩu <strong>*</strong></label>
                            <input type="password" class="form-control" name="mat_khau2" id="confirm_pass_customer" placeholder=" " value="<?= $mat_khau ?>"> <br>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="pic_customer">Hình ảnh <strong>*</strong></label>
                            <input type="file" class="form-control" name="up_hinh" id="pic_customer"> <br>
                        </div>
                        <span class="update-pic"><?= $hinh ?></span>
                        <div class="form-group">
                            <label class="control-label" for="tel_customer">Di động <strong>*</strong></label>
                            <input type="text" class="form-control" name="sdt" id="tel_customer" placeholder=" " value="<?= $sdt ?>"> <br>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="address_customer">Địa chỉ <strong>*</strong></label>
                            <input type="text" class="form-control" name="dia_chi" id="address_customer" placeholder=" " value="<?= $dia_chi ?>"> <br>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email_customer">Email <strong>*</strong></label>
                            <input type="email" class="form-control" name="email" id="email_customer" placeholder=" " value="<?= $email ?>"> <br>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="">Vai trò <strong>*</strong></label>
                            <div class="border-radio">
                                <input type="radio" class="form-control-radio"  name="vai_tro" value="0" <?php echo !$vai_tro?'checked':'' ?> id="customer"><label for="customer">Khách hàng</label>
                                <input type="radio" class="form-control-radio" name="vai_tro" value="1" <?php echo $vai_tro?'checked':'' ?> id="admin"> <label for="admin">Nhân viên</label>
                            </div>
                        </div>
                        <div class="form-group-btn">
                            <button type="submit" name="btn_update" class="btn_success">Cập nhật</button>
                            <button type="reset" class="btn_success_reset">Nhập lại</button>
                            <a href="index.php?btn_list" class="btn_list">Danh sách</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>