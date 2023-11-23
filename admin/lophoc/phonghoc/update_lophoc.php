<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" class="form-horizontal" action="index.php?act=update_lophoc">
                    <div class="card-body">
                        <h4 class="card-title">sửa thông tin lớp học</h4>
                        <input name="id_phong" type="hidden" value="<?php echo $phonghoc['id_phonghoc']?>">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Phòng</label>
                            <div class="col-sm-9">
                                <input name="phong" type="text" class="form-control" id="fname" value="<?php echo $phonghoc['name_phong']?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">mô tả lớp học</label>
                            <div class="col-sm-9">
                                <input name="mota" type="text" class="form-control" id="lname" value="<?php echo $phonghoc['mota_lophoc']?>">
                            </div>
                        </div>       
                        <div class="form-group row">
                        <label for="role" class="col-sm-3 text-right control-label col-form-label">giờ học</label>
                            <div class="col-sm-9">

                                <select class="form-control" id="role" name="id_giohoc" value="đang hoạt động">
                                    <?php foreach($giohoc as $value):?>
                                    <option value="<?php echo $value['id_giohoc']?>" <?php if($phonghoc['id_giohoc'] == $value['id_giohoc']): ?>selected<?php endif;?>><?php echo $value['name_giohoc']?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">tổng slot</label>
                            <div class="col-sm-9">
                                <input name="slot" type="text" value="<?php echo $phonghoc['slot']?>" class="form-control" id="lname" disabled>
                            </div>
                        </div> 
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <a name="update" href="#" class="btn btn-success">update</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>