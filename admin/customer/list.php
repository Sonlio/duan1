<!DOCTYPE html>
<html>
<body>
    <div class="wrap">
        <div class="col">
            <div class="panel">
                <div class="title-panel">
                    <h2>Danh sách khách hàng <?php foreach($amounts as $amount) extract($amount);?>(<?= $so_luong ?>)</h2>
                    <ul class="title-panel-right">
                        <a href="index.php" class="btn-title-panel-right">Thêm mới</a>
                        <a href="index.php?btn_delete_all" id="delete_all" class="btn-delete-all">Xóa tất cả</a>
                    </ul>
                </div>
                <div class="content-panel">
                    <br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="sort">STT</th>
                                <th class="hide">Mã khách hàng</th>
                                <th>Hình ảnh</th>
                                <th>Tên khách hàng</th>
                                <th class="hide">Số điện thoại</th>
                                <th class="hide">Địa chỉ</th>
                                <th class="hide">Email</th>
                                <th class="sort">Công cụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 1;
                                foreach ($items as $item) {
                                    extract($item); ?>
                                <tr>
                                    <td><label for="checkbox_see_more" class="td-see-more"><i class="fa-solid fa-plus see-more show"></i> <i class="fa-solid fa-minus no-see-more"></i><span><?= $i; ?></span></label></td>
                                    <td class="hide"><?= $ma_kh ?></td>
                                    <td class="td-img"><img src="<?= $CONTENT_URL ?>/images/img-admin/img-users/<?= $hinh ?>" alt=""></td>
                                    <td><?= $ten_kh ?></td>
                                    <td class="hide"><?= $sdt ?></td>
                                    <td class="hide"><?= $dia_chi ?></td>
                                    <td class="hide"><?= $email ?></td>
                                    <td>
                                        <a title="Sửa" href="index.php?btn_edit&ma_kh=<?= $ma_kh ?>"><i class="fa-solid fa-pen-to-square"></i></a> 
                                        <a title="Xoá" id="delete" href="index.php?btn_delete&ma_kh=<?= $ma_kh ?>"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr class="tr-child">
                                    <td class="td-child" colspan="4">
                                        <ul>
                                            <li>
                                                <span class="span-title">Mã khách hàng:</span>
                                                <span class="span-data"><?= $ma_kh ?></span>
                                            </li>
                                            <li>
                                                <span class="span-title">Số điện thoại:</span>
                                                <span class="span-data"><?= $sdt ?></span>
                                            </li>
                                            <li>
                                                <span class="span-title">Địa chỉ:</span>
                                                <span class="span-data"><?= $dia_chi ?></span>
                                            </li>
                                            <li>
                                                <span class="span-title">Email:</span>
                                                <span class="span-data"><?= $email ?></span>
                                            </li>
                                        </ul>
                                    </td>
                                </tr> 
                                <?php $i++; } ?>   
                        </tbody>
                    </table>
                </div>
            </div>
            <footer>
                <div class="pull-right">
                    <p>WATCH - Hotline/Zalo: 0901749631 - 0705903736</p>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>

<script>
    // CHECK DELETE
    const checkDelete = document.querySelectorAll("#delete");
    checkDelete.forEach(function(checkDelete){
        checkDelete.addEventListener('click', function(event){
            const mess = confirm("Bạn có chắc chắn muốn xoá khách hàng này không?");
            if(mess == false){
            event.preventDefault();
            }
        })
    })

    // CHECK DELETE ALL
    const checkDeleteAll = document.querySelector("#delete_all");
        checkDeleteAll.addEventListener('click', function(event){
        const mess = confirm("Bạn có chắc chắn muốn xoá tất cả không?");
        if(mess == false){
        event.preventDefault();
        }
    })

    // XEM THÊM KHI TRÊN MOBILE VÀ TABLET
    const trChilds = document.querySelectorAll('.tr-child');
    const iconSeeMores = document.querySelectorAll('.see-more');
    const iconNoSeeMores = document.querySelectorAll('.no-see-more');
    for(let i = 0; i < iconSeeMores.length; i++) {
        iconSeeMores[i].addEventListener('click', function() {
            iconSeeMores[i].classList.remove('show');
            iconSeeMores[i].classList.add('hide');
            trChilds[i].classList.add('tr-child-show');
            iconNoSeeMores[i].classList.add('show');
            iconNoSeeMores[i].addEventListener('click', function(){
                trChilds[i].classList.remove('tr-child-show');
                iconNoSeeMores[i].classList.remove('show');
                iconNoSeeMores[i].classList.add('hide');
                iconSeeMores[i].classList.add('show');
            })
        });
    }
</script>