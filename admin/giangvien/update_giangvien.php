<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" action="index.php?act=update_giangvien" class="form-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">sửa thông tin giảng viên</h4>
                        <input type="hidden" name="id" value="<?php echo $giangvien_one['id_taikhoan']?>">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label" >Tên giảng viên</label>
                            <div class="col-sm-9">
                                <input type="text" name="user" value="<?php echo $giangvien_one['user']?>" class="form-control" id="fname">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label" >password</label>
                            <div class="col-sm-9">
                                <input name="pass" type="password" value="<?php echo $giangvien_one['pass']?>" class="form-control" id="fname">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">email</label>
                            <div class="col-sm-9">
                                <input name="email" type="email" value="<?php echo $giangvien_one['email']?>" class="form-control" id="lname">
                            </div>
                        </div>           
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">số điện thoại</label>
                            <div class="col-sm-9">
                                <input name="phone" type="number" value="<?php echo $giangvien_one['tel']?>" class="form-control" id="lname">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">địa chỉ</label>
                            <div class="col-sm-9">
                                <input name="address" type="text" class="form-control" value="<?php echo $giangvien_one['address']?>" id="lname">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">mô tả</label>
                            <div class="col-sm-9">
                                <input name="mota" type="text" class="form-control" value="<?php echo $giangvien_one['mota']?>" id="lname">
                            </div>
                        </div> 

                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button name="update" class="btn btn-success">update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>