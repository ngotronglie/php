

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0 mb-3">Danh sách thông báo</h5>
                    <a style="margin-right:5px" href="index.php?act=add_thongbao" class="btn btn-success">Thêm</a>
                </div>
                
                <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">image</th>
                                <th scope="col">tiêu đề</th>
                                <th scope="col">nội dung</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($list_thongbao as $key => $value):?>
                            <tr>
                                <th scope="row"><?php echo $key + 1?></th>
                                <td><img src="../upload/thongbao/<?php echo $value['img_thongbao']?>" alt='ảnh'></td>
                                <td><?php echo $value['title']?></td>
                                <td><?php echo $value['noidung_thongbao']?></td>
                                <td><?php echo $value['ngaythongbao']?></td>
                                <td>
                                    <a style="margin-right:5px" href="index.php?act=update_thongbao&id_tb=<?php echo $value['id_thongbao']?>" class="btn btn-warning">Sửa</a>
                                    <a
                                        onclick="return confirm('Bạn có chắc xóa chứ ?')"
                                        href="index.php?act=delete_thongbao&id_thongbao=<?php echo $value['id_thongbao']?>"
                                        class="btn btn-danger margin-5 text-white"
                                        data-toggle="modal"
                                        data-target="#Modal2"
                                    >
                                        xóa
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