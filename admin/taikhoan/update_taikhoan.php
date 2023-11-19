<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" action="index.php?act=list_khuyenmai">
                    <div class="card-body">
                        <h4 class="card-title">Thêm tài khoản</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">tên đăng nhập</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname" placeholder="Enter username here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">mật khẩu</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="fname" placeholder="Enter password here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="lname" placeholder="Enter email here">
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">địa chỉ</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname" placeholder="Enter address here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">số điện thoại</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="lname" placeholder="Enter number phone here">
                            </div>
                        </div>      
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">mô tả</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname" placeholder="Enter node here">
                            </div>
                        </div>     
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">ảnh</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="lname" placeholder="Enter img here">
                            </div>
                        </div>     
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">quyền</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="role" name="role" value="đang hoạt động">
                                    <option value="2">giảng viên</option>
                                    <option value="1">nhân viên</option>
                                    <option value="0">user</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>