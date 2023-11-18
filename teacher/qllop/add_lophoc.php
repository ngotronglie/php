
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" action="index.php?act=list_lophoc">
                    <div class="card-body">
                        <h4 class="card-title">Thêm phòng học</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">phòng</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname">
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">mô tả lớp học</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname">
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">tên khóa học</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname">
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
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">giờ học</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">tổng slot</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="fname">
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