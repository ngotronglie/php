<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" class="form-horizontal" action="index.php?act=add_giangvien">
                    <div class="card-body">
                        <h4 class="card-title">Thêm giảng viên</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">tên đăng nhập</label>
                            <div class="col-sm-9">
                                <input name="user" type="text" class="form-control" id="fname" placeholder="Enter username here" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">mật khẩu</label>
                            <div class="col-sm-9">
                                <input name="pass" type="password" class="form-control" id="fname" placeholder="Enter password here" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">email</label>
                            <div class="col-sm-9">
                                <input name="email" type="email" class="form-control" id="lname" placeholder="Enter email here" required>
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">địa chỉ</label>
                            <div class="col-sm-9">
                                <input name="address" type="text" class="form-control" id="lname" placeholder="Enter address here" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">số điện thoại</label>
                            <div class="col-sm-9">
                                <input name="tel" type="number" class="form-control" id="lname" placeholder="Enter number phone here" required>
                            </div>
                        </div>      
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">mô tả</label>
                            <div class="col-sm-9">
                                <input name="mota" type="text" class="form-control" id="lname" placeholder="Enter node here" required  >
                            </div>
                        </div>         
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button name="save" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>