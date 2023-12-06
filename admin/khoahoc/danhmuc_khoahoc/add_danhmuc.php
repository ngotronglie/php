<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" class="form-horizontal" action="index.php?act=add_danhmuc_khoahoc" >
                    <div class="card-body">
                        <h4 class="card-title">Thêm danh mục khóa học</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">danh mục khóa học</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname" name="name_danhmuc_khoahoc" placeholder="thêm danh mục khóa học" required>
                            </div>
                        </div>    
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button class="btn btn-success" name="btn_save">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>