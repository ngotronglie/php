
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách phòng học</h5>
                    <a href="index.php?act=add_lophoc" class="btn btn-success m-2">Thêm phòng học</a>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">phòng</th>
                                    <th scope="col">mô tả lớp học</th>
                                    <th scope="col">giờ học</th>
                                    <th scope="col">tổng slot</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($danhsach_phonghoc as $key => $value):?>
                                <tr>
                                    <th scope="row"><?php echo $key + 1?></th>
                                    <td><?php echo $value['name_phong']?></td>
                                    <td><?php echo $value['mota_lophoc']?></td>
                                    <td><?php echo $value['name_giohoc']?></td>
                                    <td><?php echo $value['slot']?></td>
                                    <td>
                                        <a href="index.php?act=update_lophoc&id_phonghoc=<?php echo $value['id_phonghoc']?>" class="btn btn-warning">sửa</a>
                                        <button onclick="return confirm('bạn xác nhận xóa lớp học này chứ')" class="btn btn-danger">xóa</button>
                                    </td>
                                </tr>
                                    <?php endforeach;?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">phòng</th>
                                    <th scope="col">mô tả lớp học</th>
                                    <th scope="col">giờ học</th>
                                    <th scope="col">tổng slot</th>
                                    <th scope="col">action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>    
        </div>
    </div>
