
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" action="">
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
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">giờ học</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="role" name="role" value="đang hoạt động">
                                    <option value="2">12h - thứ 3/5/7</option>
                                    <option value="1">14h - thứ 3/5/7</option>
                                    <option value="0">16h - thứ 3/5/7</option>
                                    <option value="3">18h - thứ 3/5/7</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">tổng slot</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="fname">
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