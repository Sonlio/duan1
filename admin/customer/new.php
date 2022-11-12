<!DOCTYPE html>
<html>
<body>
    <div class="wrap">
        <div class="col">
            <div class="panel">
                <div class="title-panel">
                    <h2>Thêm khách hàng mới</h2>
                </div>
                <div class="content-panel">
                    <br>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label" for="id_customer">Mã khách hàng <strong>*</strong></label>
                            <input class="form-control" type="text" name="id_customer" id="id_customer" placeholder=" ">
                            <label for="" class="label-field">Mã khách hàng</label>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="name_customer">Tên khách hàng <strong>*</strong></label>
                            <input type="text" class="form-control" name="name_customer" id="name_customer" placeholder=" "> <br>
                            <label for="" class="label-field">Tên khách hàng</label>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="pass_customer">Mật khẩu <strong>*</strong></label>
                            <input type="password" class="form-control" name="pass_customer" id="pass_customer" placeholder=" "> <br>
                            <label for="" class="label-field">Mật khẩu</label>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="confirm_pass_customer">Xác nhận mật khẩu <strong>*</strong></label>
                            <input type="password" class="form-control" name="confirm_pass_customer" id="confirm_pass_customer" placeholder=" "> <br>
                            <label for="" class="label-field">Xác nhận mật khẩu</label>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="pic_customer">Hình ảnh <strong>*</strong></label>
                            <input type="file" class="form-control" name="pic_customer" id="pic_customer"> <br>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="tel_customer">Di động <strong>*</strong></label>
                            <input type="text" class="form-control" name="tel_customer" id="tel_customer" placeholder=" "> <br>
                            <label for="" class="label-field">Di động</label>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="address_customer">Địa chỉ <strong>*</strong></label>
                            <input type="text" class="form-control" name="address_customer" id="address_customer" placeholder=" "> <br>
                            <label for="" class="label-field">Địa chỉ</label>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email_customer">Email <strong>*</strong></label>
                            <input type="email" class="form-control" name="email_customer" id="email_customer" placeholder=" "> <br>
                            <label for="" class="label-field">Email</label>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="">Vai trò <strong>*</strong></label>
                            <div class="border-radio">
                                <input type="radio" class="form-control-radio" name="role" id="admin" checked> <label for="admin">Nhân viên</label>
                                <input type="radio" class="form-control-radio" name="role" id="customer"> <label for="customer">Khách hàng</label>
                            </div>
                        </div>
                        <div class="form-group-btn">
                            <button type="submit" name="btn_insert" class="btn_success">Lưu lại</button>
                            <button type="reset" name="btn_insert" class="btn_success_reset">Nhập lại</button>
                            <a href="list.php" class="btn_list">Danh sách</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>