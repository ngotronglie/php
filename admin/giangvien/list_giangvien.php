<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách sinh viên</h5>
                    <a href="index.php?act=add_giangvien" class="btn btn-success">Thêm giảng viên</a>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên Giảng viên</th>
                                    <th scope="col">email</th>
                                    <th scope="col">số điện thoại</th>
                                    <th scope="col">địa chỉ</th>
                                    <th scope="col">mô tả</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($danhsach_taikhoan_giangvien as $key => $value):?>
                                <tr>
                                    <th scope="row"><?php echo $key + 1?></th>
                                    <td><?php echo $value['user']?></td>
                                    <td><?php echo $value['email']?></td>
                                    <td><?php echo $value['tel']?></td>
                                    <td><?php echo $value['address']?></td>
                                    <td><?php echo $value['mota']?></td>
                                    <td>
                                        <a style="margin-right:5px" href="index.php?act=update_giangvien&id_giangvien=<?php echo $value['id_taikhoan']?>" class="btn btn-warning">Sửa</a>
                                        <button class="btn btn-danger">xóa</button>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên Giảng viên</th>
                                    <th scope="col">email</th>
                                    <th scope="col">số điện thoại</th>
                                    <th scope="col">địa chỉ</th>
                                    <th scope="col">mô tả</th>
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