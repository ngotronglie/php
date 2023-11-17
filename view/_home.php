
      <div class="row mt-4">
        <!-- list sản phẩm -->
        <div class="col-md-8">
          <div class="container-fuild">
            <div class="row">
                <?php foreach($dssp as $value):?>
                    <div class="col-md-4 pl-3 pr-3 mt-3">
                        <!-- Sản phẩm -->
                        <div class="card" style="width: 18rem">
                        <?php if($value['image']!=null && $value['image']!=""):?>
                        <img
                            src="./uploads/<?php echo $value['image']?>"
                            class="card-img-top"
                            id="_img_"
                            alt="<?php echo $value['image']?>"
                        />
                        <?php endif;?>
                        <div class="card-body">
                            <h5 class="card-title"><a href="?act=detail&idsp=<?php echo $value['id']?>"><?php echo $value['name']?></a></h5>
                            <p class="card-price">
                            <span><?php echo number_format($value['price'])?> vnđ</span>
                            <?php 
                                $tt = $value['price'] - ($value['price'] *$value['discount'])/100;
                            ?>

                            <span><?php echo number_format($tt)?> vnđ</span>
                            </p>
                            <!-- <p class="card-text">
                                <?php echo $value['mota'];?>
                            </p> -->
                            <a href="" class="btn btn-success">Mua ngay</a>
                        </div>
                        </div>
                    </div>
              <?php endforeach;?>

            </div>
          </div>
        </div>

        <?php include "box_right.php"?>
      </div>