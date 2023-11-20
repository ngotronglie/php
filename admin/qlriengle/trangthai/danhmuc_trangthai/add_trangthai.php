<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST"  class="form-horizontal" action="index.php?act=add_danhmuc_trangthai">
                    <div class="card-body">
                        <h4 class="card-title">Thêm danh mục trạng thái</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">danh mục trạng thái</label>
                            <div class="col-sm-9">
                                <input type="text" name='name_danhmuc_trangthai' class="form-control" id="fname" placeholder="thêm danh mục khóa học">
                            </div>
                        </div> 
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button name='save' class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>