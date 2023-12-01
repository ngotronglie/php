<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" class="form-horizontal" action="index.php?act=add_thongbao" enctype="multipart/form-data">
                    <div class="card-body">
                        <h4 class="card-title">Thêm thông báo</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">image</label>
                            <div class="col-sm-9">
                                <input type="file" name="img_thongbao" class="form-control" id="fname" placeholder="Enter image here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">title</label>
                            <div class="col-sm-9">
                                <input type="text" name="tieude" class="form-control" id="lname" required placeholder="Enter tieu de here">
                            </div>
                        </div>        
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">nội dung</label>
                            <div class="col-sm-9">
                                <input type="text" name="noidung" class="form-control" id="lname" required placeholder="Enter node here">
                            </div>
                        </div>           
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button name="thongbao" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>