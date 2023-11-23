<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" class="form-horizontal" action="index.php?act=update_khoahoc" enctype="multipart/form-data">
                    <div class="card-body">
                        <h4 class="card-title">Sửa khóa học</h4>
                        <input name="id" type="hidden" value="<?php echo $khoahoc_ud['id_khoahoc']?>">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên khóa học</label>
                            <div class="col-sm-9">
                                <input name="tenkhoahoc" type="text" class="form-control" id="fname" value="<?php echo $khoahoc_ud['name_khoahoc']?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">ảnh</label>
                            <div class="col-sm-9">
                                <img src="../upload/khoahoc/<?php echo $khoahoc_ud['img_khoahoc']?>" alt="ảnh">
                                <input name="name_img" type="file" class="form-control" id="fname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">nội dung khóa học</label>
                            <div class="col-sm-9">
                                <input name="noidung" type="text" class="form-control" id="lname" value="<?php echo $khoahoc_ud['noidung_khoahoc']?>">
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">giá khóa học</label>
                            <div class="col-sm-9">
                                <input name="price" type="number" class="form-control" id="lname" value="<?php echo $khoahoc_ud['price_khoahoc']?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">Giảng viên</label>
                            <div class="col-sm-9">
                                <select name="giangvien" class="form-control" id="role" name="role" >
                                    <?php foreach($danhsach_taikhoan_giangvien as $value):?>
                                    <option value="<?php echo $value['id_taikhoan']?>" <?php if($khoahoc_ud['id_taikhoan'] ==$value['id_taikhoan']):?> selected <?php endif;?>><?php echo $value['user']?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 text-right control-label col-form-label">danh mục khóa hoc</label>
                            <div class="col-sm-9">
                                <select name="danhmuckhoahoc" class="form-control" id="role" >
                                    <?php foreach($danhmuc_khoahoc as $value):?>
                                    <option value="<?php echo $value['iddm_khoahoc']?>" <?php if($khoahoc_ud['iddm_khoahoc'] ==$value['iddm_khoahoc']):?> selected <?php endif;?>><?php echo $value['namedm_khoahoc']?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button name="update_khoahoc" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>