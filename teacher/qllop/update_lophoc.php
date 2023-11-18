<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" action="">
                    <div class="card-body">
                        <h4 class="card-title">sửa thông tin lớp học</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Phòng</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">mô tả lớp học</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname">
                            </div>
                        </div>   
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">tên khóa học</label>
                            <div class="col-sm-9">
                                <input type="text" value="c# cho người mới bắt đầu" class="form-control" id="lname" disabled>
                            </div>
                        </div>      
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">ngày khai giảng</label>
                            <div class="col-sm-9">
                                <input type="text" value="18/11/2023" class="form-control" id="lname" disabled>
                            </div>
                        </div>           
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">ngày bế giảng</label>
                            <div class="col-sm-9">
                                <input type="text" value="18/12/2023" class="form-control" id="lname" disabled>
                            </div>
                        </div> 
                        <div class="form-group row">
                        <label for="role" class="col-sm-3 text-right control-label col-form-label">giờ học</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="role" name="role" value="đang hoạt động">
                                    <option value="2">7:15am - thứ 3/5/7 hàng tuần</option>
                                    <option value="1">9:25am - thứ 3/5/7 hàng tuần</option>
                                    <option value="0">12:00am - thứ 3/5/7 hàng tuần</option>
                                </select>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label" >tổng slot</label>
                            <div class="col-sm-9">
                                <input type="text" value="23" class="form-control" id="lname" disabled>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="role" name="role" value="đang hoạt động">
                                    <option value="2">Dừng hoạt động</option>
                                    <option value="1">đã kết thúc</option>
                                    <option value="0">Đang hoạt động</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <a href="#" class="btn btn-success">update</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>