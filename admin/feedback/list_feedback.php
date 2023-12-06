<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách feedback</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">user</th>
                                    <th scope="col">Giảng viên</th>
                                    <th scope="col">khóa học</th>
                                    <th scope="col">trạng thái</th>
                                    <th scope="col">Lượt đăng kí</th>
                                    <th scope="col">Nội dung</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>  
                                <?php foreach($danhsach_feedback as $key => $value):
                                    $name = getone_giangvien($value['id_taikhoan']);
                                    ?>
                                <tr>
                                    <th scope="row"><?php echo $key + 1?></th>
                                    <td><?php echo $value['user']?></td>
                                    <td><?php echo $name['user']?></td>
                                    <td><?php echo $value['name_khoahoc']?></td>
                                    <td><?php echo $value['name_trangthai']?></td>
                                    <td><?php echo $value['luot_dangki']?></td>
                                    <td><?php echo $value['traloi_sinhvien']?></td>
                                    <td>
                                        <a onclick="return confirm('Bạn chắc xóa feed back chứ?')" class="btn btn-danger" href="index.php?act=delete_feedback&id_feedback=<?php echo $value['id_feedback']?>"> Xóa</a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">user</th>
                                    <th scope="col">Giảng viên</th>
                                    <th scope="col">khóa học</th>
                                    <th scope="col">trạng thái</th>
                                    <th scope="col">Lượt đăng kí</th>
                                    <th scope="col">Nội dung</th>
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