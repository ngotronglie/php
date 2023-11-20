<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="index.php?act=update_thongbao" class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="idtb" value="<?php echo $thongbao_up['id_thongbao']?>">
                    <div class="card-body">
                        <h4 class="card-title">sửa thông báo</h4>
                        <div class="form-group row">
                            <label for="fname"  class="col-sm-3 text-right control-label col-form-label">img</label>
                            <div class="col-sm-9">
                                <img src="../upload/thongbao/<?php echo $thongbao_up['img_thongbao']?>" alt="ảnh">
                                <input type="file" name="img_tbud" class="form-control" id="fname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">title</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo $thongbao_up['title']?>" name="title" class="form-control" id="lname">
                            </div>
                        </div>        
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">nội dung</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo $thongbao_up['noidung_thongbao']?>" name="noidung" class="form-control" id="lname">
                            </div>
                        </div>           
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button name="up_tb" class="btn btn-success">update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>