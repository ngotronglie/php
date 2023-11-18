
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" action="index.php?act=list_lophoc">
                    <div class="card-body">
                        <h4 class="card-title">Sửa thời gian học</h4>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">Tên lớp học</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="role" name="role" value="2">
                                    <option value="2">F304</option>
                                    <option value="1">L302</option>
                                    <option value="0">P306</option>
                                </select>
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">Tên khóa học</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="role" name="role" value="2">
                                    <option value="1">Java cho người mới bắt đầu</option>
                                    <option value="0">C# cho người mới bắt đầu</option>
                                    <option value="2">PHP cho người mới bắt đầu</option>
                                </select>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">ngày khai giảng</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname" value="18/11/2023">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">ngày bế gảng</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname" value="18/12/2023">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">Giảng viên</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="role" name="role" value="0">
                                    <option value="0">Phạm thị Thùy Trang</option>
                                    <option value="1">Ngô Trọng Liêm</option>
                                    <option value="2">Hà Thị Thùy Linh</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="role" name="role" value="3">
                                    <option value="2">Dừng hoạt động</option>
                                    <option value="1">đã kết thúc</option>
                                    <option value="0">Đang hoạt động</option>
                                    <option value="3">Sắp hoạt động</option>
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