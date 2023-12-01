<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" class="form-horizontal" action="index.php?act=update_sinhvien">
                    <div class="card-body">
                        <h4 class="card-title">Cập nhật thông tin sinh viên</h4>
                        <div class="form-group row">
                            <?php $id_user = getone_id_tk($diemtongket['user']);?>
                            
                            <input type="hidden" name="id_taikhoan" value="<?php echo $id_user['id_taikhoan']?>">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">tên sinh viên</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo $diemtongket['user'] ?>" class="form-control" id="fname" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">email</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo $diemtongket['email']?>" class="form-control" id="lname" disabled>
                            </div>
                        </div>   
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">số điện thoại</label>
                            <div class="col-sm-9">
                                <input type="number" value="<?php echo $diemtongket['tel']?>" class="form-control" id="lname" disabled>
                            </div>
                        </div>      
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">khóa học</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo $diemtongket['name_khoahoc']?>" class="form-control" id="lname" disabled>
                            </div>
                        </div>           
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">lớp học</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo $diemtongket['name_phong']?>" class="form-control" id="lname"disabled>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">điểm</label>
                            <div class="col-sm-9">
                                <input type="number" name="diem"  min="0" max="10" class="form-control" id="lname">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">nhận xét</label>
                            <div class="col-sm-9">
                                <input type="text" name="nhanxet" class="form-control" id="lname">
                            </div>
                        </div> 
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button name="capnhat" class="btn btn-success">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>