
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" class="form-horizontal" action="index.php?act=update_thoigian">
                    <div class="card-body">
                        <h4 class="card-title">sửa lớp học</h4>
                        <input name="id_lophoc" type="hidden" value="<?php echo $lophoc['id_lophoc']?>">
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">phòng học</label>
                            <div class="col-sm-9">
                                <select name="phong" class="form-control" id="role">
                                    <?php foreach($danhsach_phonghoc as $value):?>
                                    <option value="<?php echo $value['id_phonghoc']?>" <?php if($lophoc['id_phonghoc'] == $value['id_phonghoc']):?> selected<?php endif;?>>Phòng: <?php echo $value['name_phong']?> -- Thời gian:  <?php echo $value['name_giohoc']?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>   
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">ngày khai giảng</label>
                            <div class="col-sm-9">
                                <input name="ngaykhaigiang" type="text" value="<?php echo date('d/m/Y', strtotime($lophoc['ngaykhaigiang']))?>" class="form-control" id="fname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">ngày bế gảng</label>
                            <div class="col-sm-9">
                            <input name="ngaybegiang" type="text" value="<?php echo date('d/m/Y', strtotime($lophoc['ngaybegiang']))?>" class="form-control" id="fname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">Tên khóa học</label>
                            <div class="col-sm-9">
                            
                                <select class="form-control" id="role" name="name_khoahoc">
                                    <?php foreach($danhsach_khoahoc as $value):?>
                                    <option value="<?php echo $value['id_khoahoc']?>" <?php if($lophoc['id_khoahoc']== $value['id_khoahoc']):?> selected<?php endif;?>>Tên Khóa học: <?php echo $value['name_khoahoc']?> -- Giảng viên: <?php echo $value['user']?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">nhóm zalo</label>
                            <div class="col-sm-9">
                                <input name="zalo" value="<?php echo $lophoc['nhomzalo']?>" type="text" class="form-control" id="fname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                            <div class="col-sm-9">
                                <select class="form-control"  name="trangthai">
                                    <?php foreach($danhsach_trangthai as $value):?>
                                    <option value="<?php echo $value['id_trangthai']?>" <?php if($lophoc['id_trangthai'] == $value['id_trangthai']):?> selected<?php endif;?>>Trạng thái: <?php echo $value['name_trangthai']?> -  danh mục: <?php echo $value['namedm_trangthai']?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button name="save" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>