<!DOCTYPE html>
<html>
<body>
    <div class="wrap">
        <div class="col">
            <div class="panel">
                <div class="title-panel">
                    <h2>Thêm hãng đồng hồ</h2>
                </div>
                <div class="content-panel">
                    <br>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label" for="id_brand">Mã hãng</label>
                            <input class="readonly form-control" type="text" name="id_brand" id="id_brand" readonly value="Auto number">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="name_brand">Tên hãng <strong>*</strong></label>
                            <input type="text" class="form-control" name="name_brand" id="name_brand" placeholder=" "> <br>
                            <label for="" class="label-field">Tên hãng</label>
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