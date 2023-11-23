
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" class="form-horizontal" action="index.php?act=add_thoigian">
                    <div class="card-body">
                        <h4 class="card-title">Thêm lớp học</h4>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">phòng học</label>
                            <div class="col-sm-9">
                                <select name="phong" class="form-control" id="role">
                                    <?php foreach($danhsach_phonghoc as $value):?>
                                    <option value="<?php echo $value['id_phonghoc']?>">Phòng: <?php echo $value['name_phong']?> -- Thời gian:  <?php echo $value['name_giohoc']?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>   
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">ngày khai giảng</label>
                            <div class="col-sm-9">
                                <input name="ngaykhaigiang" type="date" class="form-control" id="fname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">ngày bế gảng</label>
                            <div class="col-sm-9">
                                <input name="ngaybegiang" type="date" class="form-control" id="fname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">Tên khóa học</label>
                            <div class="col-sm-9">
                            
                                <select class="form-control" id="role" name="name_khoahoc">
                                    <?php foreach($danhsach_khoahoc as $value):?>
                                    <option value="<?php echo $value['id_khoahoc']?>">Tên Khóa học: <?php echo $value['name_khoahoc']?> -- Giảng viên: <?php echo $value['user']?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">nhóm zalo</label>
                            <div class="col-sm-9">
                                <input name="zalo" type="text" class="form-control" id="fname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                            <div class="col-sm-9">
                                <select class="form-control"  name="trangthai">
                                    <?php foreach($danhsach_trangthai as $value):?>
                                    <option value="<?php echo $value['id_trangthai']?>">Trạng thái: <?php echo $value['name_trangthai']?> -  danh mục: <?php echo $value['namedm_trangthai']?></option>
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