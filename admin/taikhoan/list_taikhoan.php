<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách sinh viên</h5>
                    <a href="index.php?act=add_taikhoan" class="btn btn-success">Thêm tài khoản</a>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">username</th>
                                    <th scope="col">email</th>
                                    <th scope="col">số điện thoại</th>
                                    <th scope="col">địa chỉ</th>
                                    <th scope="col">quyền</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($danhsach_taikhoan as $key => $value):?>
                                    <?php if($value['role']!= 1):?>
                                        <tr>
                                            <th scope="row"><?php echo $key + 1?></th>
                                            <td><?php echo $value['user']?></td>
                                            <td><?php echo $value['email']?></td>
                                            <td><?php echo $value['tel']?></td>
                                            <td><?php echo $value['address']?></td>
                                            <td><?php 
                                                if($value['role'] == 0){
                                                    echo 'user';
                                                }
                                                if($value['role'] == 3){
                                                    echo 'giảng viên';
                                                }
                                            ?></td>
                                            <td>
                                                <a class="btn btn-warning" href="index.php?act=update_taikhoan&id__taikhoan=<?php echo $value['id_taikhoan']?>">sửa</a>
                                                <button onclick="return confirm('Bạn chắc chắn xóa chứ')" class="btn btn-danger">xóa</button>
                                            </td>
                                        </tr>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên Giảng viên</th>
                                    <th scope="col">email</th>
                                    <th scope="col">số điện thoại</th>
                                    <th scope="col">địa chỉ</th>
                                    <th scope="col">quyền</th>
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