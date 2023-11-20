<div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0 mb-3">Danh sách trạng thái </h5>
                        <a style="margin-right:5px" href="index.php?act=add_trangthai" class="btn btn-success">Thêm</a>
                    </div>
                    
                    <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">tên trạng thái</th>
                                    <th scope="col">danh mục trạng thái</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($danhsach_trangthai as $key => $value):?>
                                <tr>
                                    <th scope="row"><?php echo $key + 1?></th>
                                    <td><?php echo $value['name_trangthai'] ?></td>
                                    <td><?php echo $value['namedm_trangthai']?></td>
                                    <td>
                                        <a href="index.php?act=update_trangthai&id_trangthai=<?php echo $value['id_trangthai']?>" class="btn btn-warning">sửa</a>
                                        <button class="btn btn-danger" data-bs-id="" data-bs-toggle="modal"
                                            data-bs-target="#modalDelete">
                                            Xóa
                                        </button>
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