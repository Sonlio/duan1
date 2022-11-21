<!DOCTYPE html>
<html>
<body>
    <div class="wrap">
        <div class="col">
            <div class="panel">
                <div class="title-panel">
                    <h2>Cập nhật sản phẩm</h2>
                    <ul class="title-panel-right">
                        <a href="index.php" class="btn-title-panel-right">Thêm mới</a>
                    </ul>
                </div>
                <div class="content-panel">
                    <br>
                    <?php echo $MESSAGE ?>
                    <form action="index.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label" for="id_product">Mã sản phẩm</label>
                            <input class="readonly form-control" type="text" name="ma_sp" id="id_product" readonly value="<?= $ma_sp ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="name_product">Tên sản phẩm <strong>*</strong></label>
                            <input type="text" class="form-control" name="ten_sp" id="name_product" placeholder=" " value="<?= $ten_sp ?>"> <br>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="price_product">Đơn giá <strong>*</strong></label>
                            <input type="text" class="form-control" name="don_gia" id="price_product" placeholder=" " value="<?= $don_gia ?> đ"> <br>         
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="discount_product">Giảm giá <strong>*</strong></label>
                            <input type="text" class="form-control" name="giam_gia" id="discount_product" placeholder=" " value="<?= $giam_gia ?>%"> <br>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="pic_product">Hình ảnh <strong>*</strong></label>
                            <input type="file" class="form-control" name="up_hinh" id="pic_product"> <br>
                        </div>
                        <span class="update-pic"><?= $hinh ?></span>
                        <div class="form-group">
                            <label class="control-label" for="id_brand">Mã hãng <strong>*</strong></label>
                            <select name="ma_hang" id="id_brand">
                                <?php
                                    foreach($hang_select_list as $hang) {
                                        if($hang['ma_hang'] == $ma_hang) { ?>
                                            <option value="<?= $hang['ma_hang'] ?>" selected><?= $hang['ten_hang'] ?></option>
                                      <?php } else { ?>
                                            <option value="<?= $hang['ma_hang'] ?>"><?= $hang['ten_hang'] ?></option>
                                     <?php }
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="id_type">Mã loại <strong>*</strong></label>
                            <select name="ma_loai" id="id_type">
                                <?php
                                    foreach($loai_select_list as $loai) {
                                        if($loai['ma_loai'] == $ma_loai) { ?>
                                            <option value="<?= $loai['ma_loai'] ?>" selected><?= $loai['ten_loai'] ?></option>
                                      <?php } else { ?>
                                            <option value="<?= $loai['ma_loai'] ?>"><?= $loai['ten_loai'] ?></option>
                                     <?php }
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="describe_product">Mô tả <strong>*</strong></label>
                            <textarea name="mo_ta" id="describe_product" rows="5" placeholder=" "><?= $mo_ta ?></textarea> <br>
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