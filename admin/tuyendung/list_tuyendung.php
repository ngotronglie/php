<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách ứng tuyển</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">username</th>
                                    <th scope="col">email</th>
                                    <th scope="col">số điện thoại</th>
                                    <th scope="col">địa chỉ</th>
                                    <th scope="col">mô tả</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($danhsach_tuyendung as $key => $value):?>
                                <tr>
                                    <th scope="row"><?php echo $key + 1?></th>
                                    <td><?php echo $value['user']?></td>
                                    <td><?php echo $value['email']?></td>
                                    <td><?php echo $value['tel']?></td>
                                    <td><?php echo $value['address']?></td>
                                    <td><?php echo $value['mota']?></td>
                                    <td>
                                        <a href="index.php?act=tuyendung&id_taikhoan_chapnhan=<?php echo $value['id_taikhoan']?>" onclick="return confirm('Bạn chắc chắn chấp nhận chứ?')" class="btn btn-primary">Chấp nhận</a>
                                        <a href="index.php?act=tuyendung&id_taikhoan_kochapnhan=<?php echo $value['id_taikhoan']?>" onclick="return confirm('Bạn chắc chắn không chấp nhận chứ?')" class="btn btn-danger">không chấp nhận</a>
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