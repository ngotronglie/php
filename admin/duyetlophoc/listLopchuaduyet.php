<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách Dăng kí lớp <span class=" badge badge-orange text-light font-bold">chưa</span> duyệt</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên tài khoản</th>
                                    <th scope="col">email</th>
                                    <th scope="col">ngày khai giảng</th>
                                    <th scope="col">ngày bế giảng</th>
                                    <th scope="col">Tên khóa học</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Giảng viên</th>
                                    <th scope="col">Phòng học</th>
                                    <th scope="col">Giờ học</th>
                                    <th scope="col">slot</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($danhsach_duyetlop as $key => $value):?>
                                    <?php $name = getone_giangvien($value['id_taikhoan'])?>
                                <tr>
                                    <th scope="row"><?php echo $key + 1?></th>
                                    <td><?php echo $value['user']?></td>
                                    <td><?php echo $value['email']?></td>
                                    <td><?php echo date('d/m/Y', strtotime($value['ngaykhaigiang']))?></td>
                                    <td><?php echo date('d/m/Y', strtotime($value['ngaybegiang']))?></td>
                                    <td><?php echo $value['name_khoahoc']?></td>
                                    <td><?php echo number_format($value['price_khoahoc'] - ($value['price_khoahoc']  * $value['giamgia'] / 100 )) ?> vnđ</td>
                                    <td><?php echo $name['user']?></td>
                                    <td><?php echo $value['name_phong']?></td>
                                    <td><?php echo $value['name_giohoc']?></td>
                                    <td><?php echo $value['slot']?></td>
                                    <td>
                                        <a onclick="return confirm('bạn chắc không duyệt chứ?')" style="margin-right:5px" href="index.php?act=list_chuaduyet&id_dangki=<?php echo $value['id_dkkhoahoc']?>" class="btn btn-primary">Duyệt</a>
                                        <a onclick="return confirm('bạn chắc không duyệt chứ?')" href="index.php?act=list_chuaduyet&id_dangki_xoa=<?php echo $value['id_dkkhoahoc']?>" class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                            <tfoot>
                                <tr>
                                <th scope="col">#</th>
                                    <th scope="col">Tên tài khoản</th>
                                    <th scope="col">email</th>
                                    <th scope="col">ngày khai giảng</th>
                                    <th scope="col">ngày bế giảng</th>
                                    <th scope="col">Tên khóa học</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Giảng viên</th>
                                    <th scope="col">Phòng học</th>
                                    <th scope="col">Giờ học</th>
                                    <th scope="col">slot</th>
                                    <th scope="col">Action</th>
                                    
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>