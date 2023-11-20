<div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0 mb-3">Danh sách danh mục trạng thái </h5>
                        <a style="margin-right:5px" href="index.php?act=add_danhmuc_trangthai" class="btn btn-success">Thêm</a>
                    </div>
                    
                    <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">tên danh mục trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($list_dm_trangthai as $key => $value):?>
                                <tr>
                                    <th scope="row"><?php echo $key + 1?></th>
                                    <td><?php echo $value['namedm_trangthai']?></td>
                                    <td>
                                    <a href="index.php?act=update_danhmuc_trangthai&iddm_trangthai=<?php echo $value['iddm_trangthai']?>" class="btn btn-warning">sửa</a>
                                        <a  onclick="return confirm('Bạn có chắc xóa danh mục khóa học không?')" href="index.php?act=delete_danhmuc_trangthai&iddm=<?php echo $value['iddm_trangthai']?>" class="btn btn-danger">
                                            Xóa
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                    </table>     
                </div>
            </div>
        </div>
    </div>
</div>
