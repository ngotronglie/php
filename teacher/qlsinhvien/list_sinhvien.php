

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách sinh viên</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">tên sinh viên</th>
                                    <th scope="col">email</th>
                                    <th scope="col">số điện thoại</th>
                                    <th scope="col">khóa học</th>
                                    <th scope="col">Phòng học</th>
                                    <th scope="col">điểm</th>
                                    <th scope="col">nhận xét</th>
                                    <th scope="col">học lực</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($danhsach_hocvien as $key => $value):?>
                                <tr>
                                    <th scope="row"><?php echo $key +1?></th>
                                    <td><?php echo $value['user']?></td>
                                    <td><?php echo $value['email']?></td>
                                    <td><?php echo $value['tel']?></td>
                                    <td><?php echo $value['name_khoahoc']?></td>
                                    <td><?php echo $value['name_phong']?></td>
                                    <td><?php echo $value['diem']?></td>
                                    <td><?php echo $value['nhanxet']?></td>
                                    <td><?php echo diem($value['diem'])?></td>
                                    <td>
                                        <?php $id_taikhoan_user = getone_id_tk($value['user'])?>
                                        <a href="index.php?act=update_sinhvien&id_user=<?php echo ($id_taikhoan_user['id_taikhoan'])?>" class="btn btn-warning">Sửa</a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="row">#</th>
                                    <th>tên sinh viên</th>
                                    <th>email</th>
                                    <th>số điện thoại</th>
                                    <th>khóa học</th>
                                    <th>phòng học</th>
                                    <th>điểm</th>
                                    <th>nhận xét</th>
                                    <th>học lực</th>
                                    <th>action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>