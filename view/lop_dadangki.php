<main>
    <div class="row mt-4">
      <!-- list sản phẩm -->
      <div class="col-md-12">
        <div class="container-fluild m-3">
          <div class="d-flex m-2 justify-content-between align-items-center">
          <h5 class="h5 m-2">Thanh toán trước khi duyệt</h5>
          <h5 class="h5 m-2">Lớp học đã khi duyệt</h5>
          </div>
          <div class="container-fuild">
            <div class="row">
              <div class="col-md-6 row border p-3">
                  <?php foreach($lopda_dangki as $value):?>
                  <?php $name = getone_giangvien($value['id_taikhoan'])?>
                  <div class="col-6 ">
                    <div class="card border" style="width: 18rem">
                      <img src="./upload/khoahoc/<?php echo $value['img_khoahoc']?>" class="card-img-top" id="_img_" alt="" />
                      <div class="card-body">
                        <h5 class="card-title h5">   
                          <span class="badge bg-danger text-light"><?php echo date('d/m/Y', strtotime($value['ngaykhaigiang']))?></span> -> 
                          <span class="badge bg-success text-light"><?php echo date('d/m/Y', strtotime($value['ngaybegiang']))?></span> 
                          <br />
                          <h6 class="font-bold h6"><?php echo $value['name_khoahoc']?></h6>
                          <p>giảng viên: <span class="badge badge-info"><?php echo $name['user']?></span></p>
                          <p>giá: <?php echo $value['']?></p>
                        </h5>
                        <p class="card-text">Trạng thái: <span><?php echo $value['name_trangthai']?></span></p>
                        <a href="index.php?act=chitiet_lopdadangki&id_dangkilophoc=<?php echo $value['id_dkkhoahoc']?>" class="btn btn-warning">Chi tiết</a>
                      </div>
                    </div>
                  </div>
                <?php endforeach;?>
              </div>
              <div class="col-md-6 row border p-3">
                <?php foreach($lopda_dangki_duyet as $value):?>
                    <?php $name = getone_giangvien($value['id_taikhoan'])?>
                    <div class="col-6 ">
                      <div class="card border" style="width: 18rem">
                        <img src="./upload/khoahoc/<?php echo $value['img_khoahoc']?>" class="card-img-top" id="_img_" alt="" />
                        <div class="card-body">
                          <h5 class="card-title h5">   
                            <span class="badge bg-danger text-light"><?php echo date('d/m/Y', strtotime($value['ngaykhaigiang']))?></span> -> 
                            <span class="badge bg-success text-light"><?php echo date('d/m/Y', strtotime($value['ngaybegiang']))?></span> 
                            <br />
                            <h6 class="font-bold h6"><?php echo $value['name_khoahoc']?></h6>
                            <p>giảng viên: <span class="badge badge-info"><?php echo $name['user']?></span></p>
                          </h5>
                          <p class="card-text">Trạng thái: <span><?php echo $value['name_trangthai']?></span></p>
                          <a href="index.php?act=chitiet_lopdadangki&id_dangkilophoc=<?php echo $value['id_dkkhoahoc']?>" class="btn btn-warning">Chi tiết</a>
                        </div>
                      </div>
                    </div>
                  <?php endforeach;?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>