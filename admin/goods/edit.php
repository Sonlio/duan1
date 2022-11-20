<!DOCTYPE html>
<html>
<body>
    <div class="wrap">
        <div class="col">
            <div class="panel">
                <div class="title-panel">
                    <h2>Cập nhật sản phẩm</h2>
                    <ul class="title-panel-right">
                        <a href="" class="btn-title-panel-right">Thêm mới</a>
                    </ul>
                </div>
                <div class="content-panel">
                    <br>
                    <form action="index.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label" for="id_product">Mã đồng hồ</label>
                            <input class="readonly form-control" type="text" name="id_product" id="id_product" readonly value="1">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="name_product">Tên đồng hồ <strong>*</strong></label>
                            <input type="text" class="form-control" name="name_product" id="name_product" placeholder=" " value="Rolex 1"> <br>
                            <!-- <label for="" class="label-field">Tên đồng hồ</label> -->
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="price_product">Đơn giá <strong>*</strong></label>
                            <input type="text" class="form-control" name="price_product" id="price_product" placeholder=" " value="9.000.000 đ"> <br>
                            <!-- <label for="" class="label-field">Giá</label> -->
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="discount_product">Giảm giá <strong>*</strong></label>
                            <input type="text" class="form-control" name="discount_product" id="discount_product" placeholder=" " value="20%"> <br>
                            <!-- <label for="" class="label-field">Giảm giá</label> -->
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="pic_product">Hình ảnh <strong>*</strong></label>
                            <input type="file" class="form-control" name="pic_product" id="pic_product"> <br>
                        </div>
                        <span class="update-pic">dhn1.png</span>
                        <div class="form-group">
                            <label class="control-label" for="id_brand">Mã hãng <strong>*</strong></label>
                            <select name="id_brand" id="id_brand">
                                <option value="Rolex">Rolex</option>
                                <option value="Omega">Omega</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="id_type">Mã loại <strong>*</strong></label>
                            <select name="id_type" id="id_type">
                                <option value="Rolex">Đồng hồ nam</option>
                                <option value="Omega">Đồng hồ nữ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="describe_product">Mô tả <strong>*</strong></label>
                            <textarea name="describe_product" id="describe_product" rows="5" placeholder=" ">Đẹp, chất lượng</textarea> <br>
                            <!-- <label for="" class="label-field">Mô tả</label> -->
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