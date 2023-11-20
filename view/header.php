<header class="mt-3">
    <nav class="d-flex justify-content-between">
        <div class="d-flex justify-content-around d-flex align-items-center">
        <a href="index.php" class="h3 text-active">Kaka</a>
        <a href="index.php?act=lop_dadangki" class="h5 m-3">khóa học đã đăng kí</a>
        <a href="#khoahoc" class="h5 m-3">Khóa học</a>
        <a href="#thongbao" class="h5 m-3">thông báo</a>
        <a href="#ttgv" class="h5 m-3">Thông tin giảng viên</a>
        <!-- <a href="#" class="h5 m-3">feedback riêng tư</a> -->
        </div>
        <div>
            <?php 
            if(!$_SESSION){
                echo '<a href="index.php?act=login" class="btn btn-dark">đăng nhập</a>';
            }else{
                
                echo  '<span class="h5">Xin chào, ' .$_SESSION['user'].'</span>';
                echo '<a style="margin-left: 5px;" href="index.php?act=logout" class="btn btn-danger">đăng xuất</a>';
            }
            ?>
            
        </div>
    </nav>
</header>