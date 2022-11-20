<!DOCTYPE html>
<html>
<body>
    <div class="wrap">
        <div class="col">
            <div class="panel">
                <div class="title-panel">
                    <h2>Thêm loại đồng hồ</h2>
                </div>
                <div class="content-panel">
                    <br>
                    <?php 
                        echo "<h5 class='notifications'>$MESSAGE</h5>";
                    ?>
                    <form action="index.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label" for="id_type">Mã loại</label>
                            <input class="readonly form-control" type="text" name="ma_loai" id="id_type" readonly value="Auto number">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="name_type">Tên loại <strong>*</strong></label>
                            <input type="text" class="form-control" name="ten_loai" id="name_type" placeholder=" "> <br>
                            <label for="" class="label-field">Tên loại</label>
                        </div>
                        <div class="form-group-btn">
                            <button type="submit" name="add" class="btn_success">Lưu lại</button>
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