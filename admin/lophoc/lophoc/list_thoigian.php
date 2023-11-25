

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách lớp học</h5>
                    <a href="index.php?act=add_thoigian" class="btn btn-success m-2">Thêm lớp học</a>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">phòng</th>
                                    <th scope="col">ngày khai giảng</th>
                                    <th scope="col">ngày bế giảng</th>
                                    <th scope="col">khóa học</th>
                                    <th scope="col">thời gian</th>
                                    <th scope="col">số lượt đăng kí</th>
                                    <th scope="col">slot</th>
                                    <th scope="col">giảng viên</th>
                                    <th scope="col">nhóm zalo</th>
                                    <th scope="col">trạng thái</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($danhsach_lophoc as $key => $value):?>
                                <tr>
                                    <th scope="row"><?php echo $key + 1?></th>
                                    <td><?php echo $value['name_phong']?></td>
                                    <td><?php echo $value['ngaykhaigiang']?></td>
                                    <td><?php echo $value['ngaybegiang']?></td>
                                    <td><?php echo $value['name_khoahoc']?></td>
                                    <td><?php echo $value['name_giohoc']?></td>
                                    <td><?php echo $value['luot_dangki']?></td>
                                    <td><?php echo $value['slot']?></td>
                                    <td><?php echo $value['user']?></td>
                                    <td><?php echo $value['nhomzalo']?></td>
                                    <td><span class=" badge badge-success"><?php echo $value['name_trangthai']?></span></td>
                                    <td>
                                        <a href="index.php?act=update_thoigian&id_lophoc=<?php echo $value['id_lophoc']?>" class="btn btn-warning">sửa</a>
                                        <button class="btn btn-danger">xóa</button>
                                    </td>
                                </tr>
                                <?php endforeach;?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">phòng</th>
                                    <th scope="col">ngày khai giảng</th>
                                    <th scope="col">ngày bế giảng</th>
                                    <th scope="col">khóa học</th>
                                    <th scope="col">thời gian</th>
                                    <th scope="col">số lượt đăng kí</th>
                                    <th scope="col">slot</th>
                                    <th scope="col">giảng viên</th>
                                    <th scope="col">nhóm zalo</th>
                                    <th scope="col">trạng thái</th>
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