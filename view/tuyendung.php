<div class="container_fluild border m-3" id="thongbao">
    <div class="container mt-3">
        <h3 class="h3">Tuyển dụng Giảng viên</h3>
    </div>
    <div class="container mt-3">
        <h3 class="h3 text-center">Điều kiện: khi bạn chưa đăng kí bất kì 1 khóa học nào và chờ đợi đến khi duyệt </h3>
    </div>
    <div class="container-fluild mb-4">
        <?php if($_SESSION){
            $id = search_id_taikhoan($_SESSION['user']);   
        }
        
        ?>
        <div class="text-center">
           <a onclick="return confirm('Bạn chắc chắn muốn ứng tuyển chứ?')" class="btn btn-success" href="index.php?act=tuyendung&id_taikhoan=<?php echo $id?>">Ứng tuyển</a>
        </div>
    </div>
</div>