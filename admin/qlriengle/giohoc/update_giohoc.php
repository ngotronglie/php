<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" class="form-horizontal" action="index.php?act=update_giohoc">
                    <div class="card-body">
                        <h4 class="card-title">sửa giờ học</h4>
                        <input type="hidden" name="id_giohoc_" value="<?php echo $one_giohoc['id_giohoc'] ?>">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">giờ học</label>
                            <div class="col-sm-9">
                                <input type="text" name="name_giohoc_" class="form-control" id="fname" value="<?php echo $one_giohoc['name_giohoc']?>">
                            </div>
                        </div>    
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button name="btn_update_giohoc" class="btn btn-success">update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>