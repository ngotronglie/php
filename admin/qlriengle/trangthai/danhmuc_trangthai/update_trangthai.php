<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" class="form-horizontal" action="index.php?act=update_danhmuc_trangthai">
                    <div class="card-body">
                        <h4 class="card-title">sửa danh mục trạng thái</h4>
                        <div class="form-group row">
                        <input type="hidden" name="id_dm_tt" value="<?php echo $dm_trangthai['iddm_trangthai']?>">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">danh mục trạng thái</label>
                            <div class="col-sm-9">
                                <input type="text" name="name_dm_tt" class="form-control" id="fname" value="<?php echo $dm_trangthai['namedm_trangthai'] ?>">
                            </div>
                        </div>    
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button name="update_dm_trangthai" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>