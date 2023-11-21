<div class="container-fluild border m-3" id="khoahoc">
            <div class="container">
                <h3 class="h3 mt-3">Khóa học</h3>
            </div>
    <div class="container-fuild">
        <div class="row">
            <?php  foreach($danhsach_khoahoc as $value): ?>
                
            <div class="col-md-4 pl-3 pr-3 mt-3">
                    <!-- Sản phẩm -->
                <div class="card border" style="width: 18rem">
                        <img
                        src="./upload/khoahoc/<?php echo $value['img_khoahoc']?>"
                        class="card-img-top"
                        id="_img_"
                        alt=""
                        />

                    <div class="card-body">
                        <h5 class="card-title h5">
                            <h3 class="h3"><?php echo $value['name_khoahoc']?></h3>
                        </h5>
                        <p class="card-price">
                            <span class="text-danger"><del><?php echo $value['price_khoahoc']?></del> vnđ</span>  <br>
                            <span class="font-bold"><?php echo (float)$value['price_khoahoc'] - ((float)$value['price_khoahoc'] * (float)$value['giamgia'] / 100)?> vnđ</span>
                        </p>
                        <p class="card-price">
                            <span class="font-bold">lượt xem: <?php echo $value['luot_xem']?> </span> <br>
                            <span class="font-bold">lượt đăng kí: <?php echo $value['luot_dangki']?></span>
                        </p>

                        <a href="index.php?act=chitiet_khoahoc&id__khoahoc=<?php echo $value['id_khoahoc']?>" class="btn btn-success">Chi tiết khóa học</a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>