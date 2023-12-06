<div class="row m-3">
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-cyan text-center">
                <h3 class="font-light font-bold text-white"><?php echo number_format($tongdoanhthu['gia'])?> vnđ</h3>
                <h6 class="text-white">Tổng doanh thu</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h3 class="font-light font-bold text-white"><?php echo $tonghoadon['COUNT(id_hoadon)']?></h3>
                <h6 class="text-white">Số hóa đơn</h6>
            </div>
        </div>
    </div>
        <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h3 class="font-light font-bold text-white"><?php echo $tongluot_dangki['tong_dangki']?></h3>
                <h6 class="text-white">Tổng lượt đăng kí</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-danger text-center">
                <h3 class="font-light font-bold text-white"><?php echo $tongluot_xem['tong_xem']?></h3>
                <h6 class="text-white">Lượt xem trên mọi khóa học</h6>
            </div>
        </div>
    </div>
</div>

<div class="container-fluild">
    <canvas id="myChart"></canvas>
    <canvas id="myChart2"></canvas>
</div>

<script>
    var thongke1 =  [
        <?php echo $tongdanhmuckhoahoc['COUNT(iddm_khoahoc)']?>,<?php echo $tongkhoahoc['COUNT(id_khoahoc)']?>,<?php echo $tongphonghoc['COUNT(id_phonghoc)']?>,
        <?php echo $tonggiohoc['COUNT(id_giohoc)']?>,<?php echo $tonglophoc['COUNT(id_lophoc)']?>,<?php echo $tongthongbao['COUNT(id_thongbao)']?>,
        <?php echo $tongbinhluan['COUNT(id_binhluan)']?>,<?php echo $tongtrangthai['COUNT(id_trangthai)']?>,<?php echo $tongdanhmuctrangthai['COUNT(iddm_trangthai)']?>,
    ]

    var thongke2 = [
        <?php echo $tongadmin['COUNT(id_taikhoan)']?>,<?php echo $tonggiangvien['COUNT(id_taikhoan)']?>,<?php echo $tongnguoidung['COUNT(id_taikhoan)']?>,
        <?php echo $tongluotdangkigiangvien['COUNT(id_taikhoan)']?>,<?php echo $taikhoanlophocchuaduyet['COUNT(id_dkkhoahoc)']?>,<?php echo $taikhoanlophocdaduyet['COUNT(id_dkkhoahoc)']?>
    ]
    
    
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script>
    const ctx = document.getElementById("myChart");
    new Chart(ctx, {
    type: "bar",
    data: {
        labels: ["Danh mục khóa học", "Khóa học","phòng học", "giờ học","lớp học","Thông báo","Bình luận", "Trạng thái", "danh mục trạng thái" ],
        datasets: [
        {
            label: "Thống kê chung hệ thống đăng kí khóa học KAKA",
            data: thongke1,
            borderWidth: 1,
            backgroundColor: [
            "rgb(255, 99, 132)",
            "rgb(75, 192, 192)",
            "rgb(255, 205, 86)",
            "rgb(201, 203, 207)",
            "green",
            "yellow",
            "red",
            "cyan",
            "pink"
            ],
        },
        ],
    },
    options: {
        scales: {
        y: {
            beginAtZero: true,
        },
        },
    },
    });

</script>
<script>
    const ctx2 = document.getElementById("myChart2");
    new Chart(ctx2, {
    type: "bar",
    data: {
        labels: ["Tài khoản admin", "Tài khoản giảng viên","tài khoản người dùng", "đăng kí giảng viên", "Tài khoản Lớp học chưa duyệt", "Tài khoản lớp học đã duyệt"],
        datasets: [
        {
            label: "Thống kê tài khoản",
            data: thongke2,
            borderWidth: 2,
            backgroundColor: [
            "rgb(255, 99, 132)",
            "rgb(75, 192, 192)",
            "rgb(255, 205, 86)",
            "rgb(201, 203, 207)",
            "green",
            "yellow",
            "red",
            "cyan",
            "pink"
            ],
        },
        ],
    },
    options: {
        scales: {
        y: {
            beginAtZero: true,
        },
        },
    },
    });

</script>