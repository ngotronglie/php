<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách giảng viên</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">username</th>
                                    <th scope="col">email</th>
                                    <th scope="col">số điện thoại</th>
                                    <th scope="col">địa chỉ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($danhsach_taikhoan as $key => $value):?>
                                    <?php if($value['role']== 3):?>
                                        <tr>
                                            <th scope="row"><?php echo $key + 1?></th>
                                            <td> </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

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
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>