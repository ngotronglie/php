<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" class="form-horizontal" action="index.php?act=add_trangthai">
                    <div class="card-body">
                        <h4 class="card-title">Thêm trạng thái</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">trạng thái</label>
                            <div class="col-sm-9">
                                <input type="text" name="trangthai" class="form-control" id="fname" placeholder="thêm danh mục trạng thái">
                            </div>
                            
                        </div>    
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">daanh mục trạng thái</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="role" name="iddm_trangthai">
                                        <?php foreach($list_dm_trangthai as  $value):?>
                                        <option name="danhmuc_trangthai" value="<?php echo $value['iddm_trangthai']?>">
                                            <?php echo $value['namedm_trangthai']?>
                                        </option>

                                        <?php endforeach;?>
                                    </select>
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