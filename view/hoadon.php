<h3 class="h3">Hóa đơn</h3>
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
                    <th scope="col">Khóa học</th>
                    <th scope="col">ngày khai giảng</th>
                    <th scope="col">ngày bế giảng</th>
                    <th scope="col">Giá</th>
                    <th scope="col">giảng viên</th>
                    <th scope="col">ngày mua</th>
                  </tr>
                </thead>
                  <tbody>
                    <?php foreach($list_hoadon as $key => $value):?>
                    <tr>
                      <th scope="row"><?php echo $key + 1?></th>
                      <td scope="col"><?php echo $value['name_khoahoc']?></td>
                      <td scope="col"><?php echo $value['ngaykhaigiang']?></td>
                      <td scope="col"><?php echo $value['ngaybegiang']?></td>
                      <td scope="col"><?php echo number_format($value['price_khoahoc'] - ($value['price_khoahoc'] * $value['giamgia'] / 100))?> vnđ</td>
                      <?php $user_gv = getone_taikhoan($value['id_taikhoan']);?>
                      <td scope="col"><?php echo ($user_gv['user']) ?></td>
                      <td scope="col"><?php echo ($value['ngaymua']) ?></td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                <tfoot>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Khóa học</th>
                    <th scope="col">ngày khai giảng</th>
                    <th scope="col">ngày bế giảng</th>
                    <th scope="col">Giá</th>
                    <th scope="col">giảng viên</th>
                    <th scope="col">ngày mua</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>