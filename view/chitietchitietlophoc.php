<div class="col-md-12 offset-md-1">
    <div class="container-fuild">
        <div class="row mt-4">
            <div class="col-md-6">
                <img
                style="width: 400px"
                class="img-detail"
                src="./upload/khoahoc/<?php echo $lophoc['img_khoahoc']?>"
                alt=""
                />
            </div>
            <div class="col-md-5">
                <ul>
                    <li>
                        Danh mục khóa học:
                        <span class="badge bg-success text-light"
                        ><?php echo $lophoc['namedm_khoahoc']?></span
                        >
                    </li>
                    <li>
                        Tên khóa học:
                        <span class="badge bg-info text-light"
                        ><?php echo $lophoc['name_khoahoc']?></span
                        >
                    </li>
                    <li>
                        Đơn giá:
                        <span><del class="text-danger"><?php echo number_format($lophoc['price_khoahoc'])?> vnđ</del></span>
                    </li>
                    <li>
                        Giảm giá:
                        <span class="badge bg-warning text-light"><?php echo $lophoc['giamgia']?>%</span>
                    </li>
                    <li>
                        Chỉ còn:
                        <span class="badge bg-danger text-light"><?php echo number_format($lophoc['price_khoahoc'] - ($lophoc['price_khoahoc'] * $lophoc['giamgia'] /100))?> vnđ</span>
                    </li>
                    <li>
                        Lượt xem:
                        <span class="badge bg-secondary text-light"><?php echo $lophoc['luot_xem']?></span>
                    </li>
                    <li>
                        Lượt đăng kí:
                        <span class="badge bg-secondary text-light"><?php echo $lophoc['luot_dangki']?></span>
                    </li>
                    <li>
                        Giờ học:
                        <span class="badge bg-primary text-light"><?php echo $lophoc['name_giohoc']?></span>
                    </li>
                    <li>
                        Phòng học:
                        <span class="badge bg-primary text-light"><?php echo $lophoc['name_phong']?></span>
                    </li>
                    <li>
                        Giảng viên:
                        <span class="badge bg-primary text-light"><?php echo $lophoc['user']?></span>
                    </li>
                </ul>
                <a  onclick="return confirm('Bạn đăng kí khóa này??')" class="btn btn-success" href="index.php?act=dangki_lophoc&id_lophoc=<?php echo $lophoc['id_lophoc']?>">Đăng kí</a>
            </div>
        </div>
    </div>
</div>