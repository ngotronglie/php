<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách khoá học</h5>
                    <a href="index.php?act=add_khoahoc" class="btn btn-success mb-2">Thêm khóa học</a>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên khóa học</th>
                                    <th scope="col">Danh mục</th>
                                    <th scope="col">ảnh</th>
                                    <th scope="col">nội dung khóa học</th>
                                    <th scope="col">giá khóa học</th>
                                    <th scope="col">lượt xem</th>
                                    <th scope="col">giảng viên</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($danhsach_khoahoc as $key => $value):?>
                                <tr>
                                    <th scope="row"><?php echo $key + 1?></th>
                                    <td scope="col"><?php echo $value['name_khoahoc']?></td>
                                    <td scope="col"><?php echo $value['namedm_khoahoc']?></td>
                                    <td scope="col"><img style="width: 200px;" src="../upload/khoahoc/<?php echo $value['img_khoahoc']?>" alt=""></td>
                                    <td scope="col"><?php echo $value['noidung_khoahoc']?></td>
                                    <td scope="col"><?php echo ((float)$value['price_khoahoc'] -(((float)$value['price_khoahoc'] * (float)$value['giamgia']) / 100))?></td>
                                    <td scope="col"><?php echo $value['luot_xem']?></td>
                                    <td scope="col"><?php echo $value['user']?></td>
                                    <td>
                                        <a style="margin-right:5px" href="index.php?act=update_khoahoc&id__khoahoc=<?php echo $value['id_khoahoc']?>" class="btn btn-warning">Sửa</a>
                                        <a onclick="return confirm('bạn chắc chắn xóa khóa học này chứ?')" href="index.php?act=delete_khoahoc&id__khoahoc=<?php echo $value['id_khoahoc']?>" class="btn btn-danger">xóa</a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên khóa học</th>
                                    <th scope="col">danh mục</th>
                                    <th scope="col">ảnh</th>
                                    <th scope="col">nội dung khóa học</th>
                                    <th scope="col">giá khóa học</th>
                                    <th scope="col">lượt xem</th>
                                    <th scope="col">giảng viên</th>
                                    <th scope="col">action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>