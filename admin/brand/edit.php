<!DOCTYPE html>
<html>
<body>
    <div class="wrap">
        <div class="col">
            <div class="panel">
                <div class="title-panel">
                    <h2>Cập nhật hãng đồng hồ</h2>
                    <ul class="title-panel-right">
                        <a href="index.php" class="btn-title-panel-right">Thêm mới</a>
                    </ul>
                </div>
                <div class="content-panel">
                    <br>
                    <?php 
                        echo "<h5 class='notifications'>$MESSAGE</h5>";
                    ?>
                    <form id="form" action="index.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label" for="id_brand">Mã hãng</label>
                            <input class="readonly form-control" type="text" name="ma_hang" id="id_brand" readonly value="<?= $ma_hang; ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="name_brand">Tên hãng <strong>*</strong></label>
                            <input type="text" class="form-control" name="ten_hang" id="name_brand" placeholder=" " value="<?= $ten_hang; ?>"> <br>
                            <!-- <label for="" class="label-field">Tên hãng</label> -->
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

<script>
    $(document).ready(function() {
        $("#form").validate({
            rules: {
                'ten_hang': {
                    required: true,
                }
            },

            messages: {
                'ten_hang': {
                    required: "</br>Tên hãng không được để trống!"
                } 
            }
        });
    });
</script>