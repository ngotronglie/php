
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" class="form-horizontal" action="index.php?act=add_lophoc">
                    <div class="card-body">
                        <h4 class="card-title">Thêm phòng học</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">phòng</label>
                            <div class="col-sm-9">
                                <input name="phong" type="text" class="form-control" id="fname" required>
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">mô tả lớp học</label>
                            <div class="col-sm-9">
                                <input name="mota" type="text" class="form-control" id="fname" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">giờ học</label>
                            <div class="col-sm-9">
                                <select name="id_gio" class="form-control" id="role">
                                    <?php foreach($giohoc as $value):?>
                                    <option value="<?php echo $value['id_giohoc']?>"><?php echo $value['name_giohoc']?></option>
                                        <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">tổng slot</label>
                            <div class="col-sm-9">
                                <input name="slot" type="number" class="form-control" id="fname">
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