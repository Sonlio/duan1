<!DOCTYPE html>
<html>
<body>
    <div class="grid wide">
        <div class="history-comment">
            <div class="row no-gutters container-content">
                <div class="col l-12 m-12 c-12">
                    <?php 
                        require '../../dao/comment.php';
                        $comments = binh_luan_select_by_hang_hoa($ma_sp);
                    ?>
                    <div class="wrapper-reviews">
                        <!-- <h2 class="comment-of-product">Đánh giá <?= $comments[0]['ten_sp'] ?></h2> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid wide">
        <div class="form-comment">
            <div class="row no-gutters container-content">
                <div class="col l-12 m-12 c-12">
                    <div class="wrapper-reviews">
                        <h2 class="comment-of-product"></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>