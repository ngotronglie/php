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
                                    <th scope="col">người mua</th>
                                    <th scope="col">khóa học</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Ngày mua</th>
                                </tr>
                            </thead>
                            <tbody>  
                                <?php foreach($danhsach_hoadon as $key => $value):?>
                                <tr>
                                    <th scope="row"><?php echo $key + 1?></th>
                                    <td><?php echo $value['user']?></td>
                                    <td><?php echo $value['name_khoahoc']?></td>
                                    <td><?php echo number_format($value['price_khoahoc'] - ($value['price_khoahoc'] * $value['giamgia'] / 100))?> vnđ</td>
                                    <td><?php echo $value['ngaymua']?></td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">người mua</th>
                                    <th scope="col">khóa học</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Ngày mua</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>