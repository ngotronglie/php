
<div class="row mt-4">
        <div class="col-md-3">
          <div class="card mt-5" style="width: 18rem">
            <div class="card-header">Xem thêm sản phẩm khác</div>
            <div class="list-group">
              <?php foreach($sp_cungloai as $value):?>
              <a
                href="index.php?act=detail&idsp=<?php echo $value['id']?>"
                class="list-group-item list-group-item-action list-item-link"
              >
              <?php if($value['image']!= null && $value['image']!= ""):?>
                <img src="./uploads/<?php echo $value['image']?>" alt="" />
                <?php endif;?>
                <?php echo $value['name']?>
              </a>
              <?php endforeach;?>
            </div>
          </div>
        </div>
        <div class="col-md-8 offset-md-1">
          <div class="container-fuild">
            <div class="row mt-4">
              <div class="col-md-3">
                <?php if($sanpham['image'] != null && $sanpham['image'] != ""):?>
                <img
                  class="img-detail"
                  src="./uploads/<?php echo $sanpham['image'];?>"
                  alt="<?php echo $sanpham['image'];?>"
                />
                <?php endif;?>
              </div>
              <div class="col-md-8">
                
                <ul>
                  <li> Tên hàng: 
                  <?php echo $sanpham['name'];?>
                    <span class="badge bg-info">VNA</span>
                  </li>
                  <li>
                    Đơn giá:
                    <span class="line-through"><?php echo number_format($sanpham['price']);?> vnđ</span>
                    <?php $tt = $sanpham['price'] - ($sanpham['price'] *$sanpham['discount'])/100;?>
                    <span class="badge bg-danger"><?php echo number_format($tt)?> vnd</span>
                  </li>
                  <li>
                    Giảm giá:
                    <span class="badge bg-danger"><?php echo $sanpham['discount'];?> %</span>
                  </li>
                  <li>
                    Lượt xem:
                    <span class="badge bg-danger"><?php echo $sanpham['luotxem'];?></span>
                  </li>
                </ul>
                <a href="cart.html" class="btn btn-success"> Mua hàng </a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h4 class="mt-5">MÔ TẢ SẢN PHẨM</h4>
                <hr />
                <span>
                  <?php echo $sanpham['mota']?>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluild bg-light mt-3">
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
                <?php foreach ($binhluan as $value):?>
                  <tr>
                    <td><?php echo $value['user']?></td>
                    <td><?php echo date("d/m/Y", strtotime($value['ngaybinhluan'] ))?></td>
                    <td><?php echo $value['noidung']?></td>
                  </tr>
                <?php endforeach;?>
              </tbody>
            </table>
            <?php extract($sanpham)?>
            <form
              action="index.php?act=detail&idsp=<?php echo $id?>"
              method="POST"
              class="d-flex justify-content-between"
            >
            <input
                type="hidden"
                class="form-control"
                name="idpro"
                value="<?php echo $id?>"
              />

              <input
                type="text"
                class="form-control"
                placeholder="Gửi bình luận"
                name="noidung"
              />
              <input style="border:none;outline:none;margin-left:10px;background-color:aquamarine;padding: 10px;border-radius:8px" type="submit" name="guibinhluan" value="Gửi bình luận">
            </form>
          </div>