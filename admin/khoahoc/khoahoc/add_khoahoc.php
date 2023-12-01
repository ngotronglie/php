<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" class="form-horizontal" action="index.php?act=add_khoahoc" enctype="multipart/form-data">
                    <div class="card-body">
                        <h4 class="card-title">Thêm khóa học</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên khóa học</label>
                            <div class="col-sm-9">
                                <input name="name_kh" type="text" class="form-control" id="fname" placeholder="Tên khóa học" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">Danh mục</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="role" name="dmkh">
                                    <?php foreach($danhmuc_khoahoc as $key => $value):?>
                                        <option value="<?php echo $value['iddm_khoahoc']?>"><?php echo $value['namedm_khoahoc']?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">ảnh</label>
                            <div class="col-sm-9">
                            <input type="file" name="img" class="form-control" id="fname" placeholder="Enter image here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">nội dung khóa học</label>
                            <div class="col-sm-9">
                                <input name="noidung" type="text" class="form-control" id="lname" required placeholder="nội dung khóa học">
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">giá khóa học</label>
                            <div class="col-sm-9">
                                <input name="gia" type="number" class="form-control" id="lname" required placeholder="giá khóa học">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">giảm giá khóa học</label>
                            <div class="col-sm-9">
                                <input name="giamgia" type="number" class="form-control" id="lname" required placeholder=" giảm giá khóa học">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">Giảng viên</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="role" name="idgv">
                                    <?php foreach($danhsach_taikhoan_giangvien as $key2 => $value2):?>
                                    <option value="<?php echo $value2['id_taikhoan']?>"><?php echo $value2['user']?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button name="add" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>