<div class="container_fluild border m-3" id="thongbao">
    <div class="container mt-3">
        <h3 class="h3">Thông báo</h3>
    </div>
    <div class="container-fluild mb-4">
        <div class="row">
            <?php foreach($danhsach_thongbao as $key => $value):?>
                <div class="col-md-4 pl-3 pr-3 mt-3 border-right">
                    <a href="index.php?act=chitiet_thongbao&iddm=<?php echo $value['id_thongbao']?>">
                        <h4><?php echo ($value['title'])?></h4>
                    </a>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>