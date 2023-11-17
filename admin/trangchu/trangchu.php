<div class="">
    <canvas id="myChart"></canvas>
 
</div>

<script>
    var thongke =  [
        <?php echo $thongke_danh_muc["COUNT(id)"];?>,<?php echo $thong_ke_san_pham['COUNT(id)'];?>,<?php echo ($thong_ke_tai_khoan['COUNT(id)'] - 1);?>,<?php echo $thong_ke_binh_luan['COUNT(id)'];?>
    ]
    
</script>