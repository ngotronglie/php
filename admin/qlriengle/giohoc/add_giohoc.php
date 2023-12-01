<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" class="form-horizontal" action="index.php?act=add_giohoc">
                    <div class="card-body">
                        <h4 class="card-title">Thêm giờ học</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">giờ học</label>
                            <div class="col-sm-9">
                                <input name="name_giohoc" type="text" class="form-control" id="fname" required placeholder="thêm giờ" >
                            </div>
                        </div>    
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button name="btn_save" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>