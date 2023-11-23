<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách bình luận</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">tài khoản</th>
                                    <th scope="col">khóa học</th>
                                    <th scope="col">nội dung bình luận</th>
                                    <th scope="col">ngày bình luận</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($danhsach_binhluan as $key => $value):?>
                                <tr>
                                    <th scope="row"><?php echo $key + 1?></th>
                                    <td><?php echo $value['user']?></td>
                                    <td><?php echo $value['name_khoahoc']?></td>
                                    <td><?php echo $value['noidung_binhluan']?></td>
                                    <td><?php echo $value['ngaybinhluan']?></td>
                                    <td>
                                        <a onclick="return confirm('Bạn chắc xóa bình luận này chứ?')" href="index.php?act=delete_binhluan&id_binhluan=<?php echo $value['id_binhluan']?>" class="btn btn-danger">xóa</a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">tài khoản</th>
                                    <th scope="col">khóa học</th>
                                    <th scope="col">nội dung bình luận</th>
                                    <th scope="col">ngày bình luận</th>
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