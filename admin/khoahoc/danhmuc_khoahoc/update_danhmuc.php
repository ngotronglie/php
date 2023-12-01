<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" class="form-horizontal" action="index.php?act=update_danhmuc_khoahoc">
                    <div class="card-body">
                        <h4 class="card-title">sửa danh mục khóa học</h4>
                        <div class="form-group row">
                            <input type="hidden" name="id_dm_kh" value="<?php echo $dm_khoahoc['iddm_khoahoc']?>">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">danh mục khóa học</label>
                            <div class="col-sm-9">
                                <input type="text" name="name_dm_kh" class="form-control" id="fname" value="<?php echo $dm_khoahoc['namedm_khoahoc']?>" required>
                            </div>
                        </div>    
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button name="update_dm_khoahoc" class="btn btn-success">update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>