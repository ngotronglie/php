
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" action="index.php?act=list_lophoc">
                    <div class="card-body">
                        <h4 class="card-title">Thêm thời gian học</h4>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">Tên lớp học</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="role" name="role" value="đang hoạt động">
                                    <option value="2">F304</option>
                                    <option value="1">L302</option>
                                    <option value="0">P306</option>
                                </select>
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">Tên khóa học</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="role" name="role" value="đang hoạt động">
                                    <option value="1">Java cho người mới bắt đầu</option>
                                    <option value="0">C# cho người mới bắt đầu</option>
                                    <option value="2">PHP cho người mới bắt đầu</option>
                                </select>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">ngày khai giảng</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="fname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">ngày bế gảng</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="fname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">Giảng viên</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="role" name="role" value="đang hoạt động">
                                    <option value="2">Ngô Trọng Liêm</option>
                                    <option value="1">Hà Thị Thùy Linh</option>
                                    <option value="0">Phạm thị Thùy Trang</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">chi tiết thời gian</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="role" name="role" value="đang hoạt động">
                                    <option value="2">8h - thứ 3/5/7 </option>
                                    <option value="1">10h - thứ 3/5/7</option>
                                    <option value="0">14h - thứ 3/5/7</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="role" name="role" value="đang hoạt động">
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