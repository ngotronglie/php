<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" action="index.php?act=update_khoahoc">
                    <div class="card-body">
                        <h4 class="card-title">Sửa khóa học</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên khóa học</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">ảnh</label>
                            <div class="col-sm-9">
                                <img src="../upload/khoahoc" alt="ảnh">
                                <input type="file" class="form-control" id="fname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">nội dung khóa học</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname" value="nội dung khóa học">
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">giá khóa học</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="lname" value="12000">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">Giảng viên</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="role" name="role" value="đang hoạt động">
                                    <option value="2">Hà Thị Thùy Linh</option>
                                    <option value="1">Ngô Trọng Liêm</option>
                                    <option value="0">Phạm Thị Thùy Trang</option>
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