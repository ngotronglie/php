

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách lớp học</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">phòng học</th>
                                    <th scope="col">giờ học</th>
                                    <th scope="col">Tên khóa học</t>
                                    <th scope="col">ngày khai giảng</th>
                                    <th scope="col">ngày bế giảng</th>
                                    <th scope="col">nhóm zalo</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($danhsachlophoc_giangvien as $key => $value):?>
                                <tr>
                                    <th scope="row"><?php echo $key +1?></th>
                                    <td><?php echo $value['name_phong']?></td>
                                    <td><?php echo $value['name_giohoc']?></td>
                                    <td><?php echo $value['name_khoahoc']?></td>
                                    <td><?php echo $value['ngaykhaigiang']?></td>
                                    <td><?php echo $value['ngaybegiang']?></td>
                                    <td><?php echo $value['nhomzalo']?></td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="row">#</th>
                                    <th>phòng học</th>
                                    <th>giờ học</th>
                                    <th>Tên khóa học</th>
                                    <th>ngày khai giảng</th>
                                    <th>ngày bế giảng</th>
                                    <th>nhóm zalo</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>