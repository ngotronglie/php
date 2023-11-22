<main>
      <div class="row mt-4">
        <div class="col-md-3">
          <div class="card mt-5" style="width: 18rem">
            <div class="card-header">Xem thêm khóa học cùng loại khác</div>
            <?php foreach($khoahoc_cungloai as $value):?>
            <div class="list-group">
              <a
                href="index.php?act=chitiet_khoahoc&id__khoahoc=<?php echo $value['id_khoahoc']?>"
                class="list-group-item list-group-item-action list-item-link"
              >
                <img style="width: 50px" src="./upload/khoahoc/<?php echo $value['img_khoahoc']?>" alt="" />
                <?php echo $value['name_khoahoc']?>
              </a>
            </div>
            <?php endforeach;?>

          </div>
        </div>
        <div class="col-md-8 offset-md-1">
          <div class="container-fuild">
            <div class="row mt-4">
              <div class="col-md-6">
                <img
                  style="width: 400px"
                  class="img-detail"
                  src="./upload/khoahoc/<?php echo $khoahoc['img_khoahoc']?>"
                  alt=""
                />
              </div>
              <div class="col-md-5">
                <ul>
                  <li>
                    Danh mục khóa học:
                    <span class="badge bg-success text-light"
                      ><?php echo $khoahoc['namedm_khoahoc']?></span
                    >
                  </li>
                  <li>
                    Tên khóa học:
                    <span class="badge bg-info text-light"
                      ><?php echo $khoahoc['name_khoahoc']?></span
                    >
                  </li>
                  <li>
                    Đơn giá:
                    <span><del class="text-danger"><?php echo $khoahoc['price_khoahoc']?> vnd</del></span>
                  </li>
                  <li>
                    Giảm giá:
                    <span class="badge bg-warning"><?php echo $khoahoc['giamgia']?>%</span>
                  </li>
                  <li>
                    Chỉ còn:
                    <span class="badge bg-danger text-light"><?php echo $khoahoc['price_khoahoc'] - ($khoahoc['price_khoahoc'] * $khoahoc['giamgia'] /100)?> vnd</span>
                  </li>
                  <li>
                    Lượt xem:
                    <span class="badge bg-secondary text-light"><?php echo $khoahoc['luot_xem']?></span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h4 class="mt-5">nội dung khóa học</h4>
                <hr />
                <span>
                  <?php echo $khoahoc['noidung_khoahoc'] ?>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table
                  id="zero_config"
                  class="table table-striped table-bordered"
                >
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">phòng</th>
                      <th scope="col">ngày khai giảng</th>
                      <th scope="col">ngày bế giảng</th>
                      <th scope="col">giờ học</th>
                      <th scope="col">giảng viên</th>
                      <th scope="col">trạng thái</th>
                      <th scope="col">slot</th>
                      <th scope="col">action</th>
                    </tr>
                  </thead>
                    <tbody>
                      <?php foreach($list_lophoc_cung_name as $key => $value):?>
                      <tr>
                        <th scope="row"><?php echo $key + 1?></th>
                        <td scope="col"><?php echo $value['name_phong']?></td>
                        <td scope="col"><?php echo $value['ngaykhaigiang']?></td>
                        <td scope="col"><?php echo $value['ngaybegiang']?></td>
                        <td scope="col"><?php echo $value['name_giohoc']?></td>
                        <td scope="col"><?php echo $value['user']?></td>
                        <td scope="col"><?php echo $value['name_trangthai']?></td>
                        <td scope="col"><?php echo $value['slot']?></td>
                        <td scope="col">
                          <a href="index.php?act=lop_dadangki" class="btn btn-success">đăng kí</a>
                        </td>
                      </tr>
                        <?php endforeach;?>
                    </tbody>
                  <tfoot>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">phòng</th>
                      <th scope="col">ngày khai giảng</th>
                      <th scope="col">ngày bế giảng</th>
                      <th scope="col">giờ học</th>
                      <th scope="col">giảng viên</th>
                      <th scope="col">trạng thái</th>
                      <th scope="col">slot</th>
                      <th scope="col">action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <div class="bg-light mt-3">
        <h3 class="h3 p-2">Bình luận</h3>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">người dùng</th>
              <th scope="col">ngày bình luận</th>
              <th scope="col">nội dung</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-danger">Tên user</td>
              <td>20/11/2023</td>
              <td>rất chi là tuyệt vời</td>
            </tr>
          </tbody>
        </table>
        <div class="container">
          <form
            action="index.php?act=chitiet_khoahoc&id__khoahoc="
            method="POST"
            class="d-flex justify-content-around "
          >
            <input type="hidden" class="form-control" name="id_khoahoc" value="" />

            <input
              type="text"
              class="form-control m-3"
              placeholder="Gửi bình luận"
              name="noidung"

            />
            <input
              class="btn btn-success m-3 "
              type="submit"
              name="guibinhluan"
              value="Gửi bình luận"
            />
          </form>
        </div>
      </div>
    </main>