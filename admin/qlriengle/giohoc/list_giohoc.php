<div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0 mb-3">Danh sách giờ học</h5>
                        <a style="margin-right:5px" href="index.php?act=add_giohoc" class="btn btn-success">Thêm</a>
                    </div>
                    
                    <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Giờ học</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($giohoc as $key => $value):?>
                                <tr>
                                    <th scope="row"><?php echo $key+1 ?></th>
                                    <td><?php echo $value['name_giohoc']?></td>
                                    <td>
                                        <a href="index.php?act=update_giohoc&id_giohoc=<?php echo $value['id_giohoc']?>" class="btn btn-warning">sửa</a>
                                        <a class="btn btn-danger" onclick="return confirm('Bạn có chắc xóa danh mục khóa học không?')" href="index.php?act=delete_giohoc&id_giohoc=<?php echo $value['id_giohoc']?>">
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