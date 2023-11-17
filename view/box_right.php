<div class="col-md-3 offset-md-1">
          <!-- Search -->
          <div class="card" style="width: 18rem">
            <div class="card-header">Tìm kiếm</div>
            <div class="card-body">
              <form action="index.php?act=searchsp" method="POST">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Nhập tên sản phẩm"
                  name="keyword"
                />
                <input class="btn btn-success" style="margin-top:10px;" type="submit" value="tìm kiếm" name="timkiem">
              </form>
            </div>
          </div>
          <!-- Danh mục -->
          <div class="card mt-5" style="width: 18rem">
            <div class="card-header">Danh mục</div>
            <div class="list-group">
                <?php foreach ($dsdm as $value):?>
              <a href="?act=searchdm&iddm=<?php echo $value['id']?>" class="list-group-item list-group-item-action">
                <?php echo $value['name']?>
              </a>
              <?php endforeach;?>
              <!-- <a href="#" class="list-group-item list-group-item-action">
                Điện thoại
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                Máy ảnh
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                Laptop
              </a> -->
            </div>
          </div>

          <!-- Top 10 -->
          <div class="card mt-5" style="width: 18rem">
            <div class="card-header">Top 10 SP có nhiều view nhất</div>
            <div class="list-group">
                <?php foreach($dstop10 as $value):?>
              <a
                href="?act=detail&idsp=<?php echo $value['id']?>"
                class="list-group-item list-group-item-action list-item-link"
              >
              <?php if($value['image']!= null && $value['image']!= ""):?>
                <img style="height:50px" src="./uploads/<?php echo $value['image']?>" alt="" />
                <?php endif;?>
                <?php echo $value['name']?>
              </a>
                <?php endforeach;?>
            </div>
          </div>
        </div>