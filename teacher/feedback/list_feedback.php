

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách feedback</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">khóa học</th>                         
                                    <th scope="col">trả lời của học sinh</th>
                                    <th scope="col">Ngày Khai giảng</th>
                                    <th scope="col">Ngày bế giảng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($danhsach_feedback as $key => $value):?>
                                <tr>
                                    <td scope="col"><?php echo $key + 1?></td>
                                    <td scope="col"><?php echo $value['name_khoahoc']?></td>
                                    <td scope="col"><?php echo $value['traloi_sinhvien']?></td>
                                    <td scope="col"><?php echo date('d/m/Y', strtotime($value['ngaykhaigiang']))?></td>
                                    <td scope="col"><?php echo date('d/m/Y', strtotime($value['ngaybegiang']))?></td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">khóa học</th>                         
                                    <th scope="col">trả lời của học sinh</th>
                                    <th scope="col">Ngày Khai giảng</th>
                                    <th scope="col">Ngày bế giảng</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>    
        </div>
    </div>
