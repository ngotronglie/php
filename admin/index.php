<?php
    // include "../global.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/khachhang.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang quản trị admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/admin.css" />
</head>

<body>
    <div class="container">
        <!-- header -->
        <?php include "header.php"; ?>
        <!-- menu -->
        <?php include "menu.php"; ?>
        <!-- main -->
        <div class="row mt-5 main-web">
            <!-- main web -->
            <?php

                $thongke_danh_muc = thong_ke_danh_muc();
                $thong_ke_san_pham = thong_ke_san_pham();
                $thong_ke_binh_luan = thong_ke_binh_luan();
                $thong_ke_tai_khoan = thong_ke_khach_hang();
                // Controller
    
                if(isset($_GET['act']) && $_GET['act'] != ""){
                    $act = $_GET['act'];
                    switch($act){
                        case "trangchu":{
                            include "trangchu/trangchu.php";
                            break;
                        }


                        // Danh mục
                        case "dsdm":{
                            $dsdm = danhsach_danhmuc();
                            include "danhmuc/list-danhmuc.php";
                            break;
                        }


                        case "adddm":{
                            if(isset($_POST['btnsubmit'])){
                                add_danhmuc($_POST['tendm']);
                                header("location: ?act=dsdm");
                            }
                            include "danhmuc/add-danhmuc.php";
                            break;
                        }


                        case "editdm":{
                            if(isset($_GET['iddm']) & $_GET['iddm'] > 0){
                                $danhmuc = getone_danhmuc($_GET['iddm']);
                            }
                            if(isset($_POST['btnsubmit'])){
                                $iddm = $_POST['iddm'];
                                $tendm = $_POST['tendm'];
                                update_danhmuc($iddm, $tendm);
                                header("location: ?act=dsdm");
                            }
                            include "danhmuc/edit-danhmuc.php";
                            break;
                        }


                        case "deletedm":{
                            if(isset($_GET['iddm']) && $_GET['iddm'] > 0){
                                delete_danhmuc($_GET['iddm']);
                                header("location: ?act=dsdm");
                            }
                            break;
                        }

                        // Sản phẩm
                        case "dssp":{
                            $dssp = danhsach_sanpham();
                            include "sanpham/list-sanpham.php";
                            break;
                        }


                        case "addsp":{
                            if(isset($_POST['btnsubmit'])){
                                $tensp = $_POST['tensp'];
                                $giasp = $_POST['giasp'];
                                $giamgiasp = $_POST['giamgiasp'];
                                $photo = null;

                                if($_FILES['anhsp']['name'] != ""){
                                    $photo = time() . "_" . $_FILES['anhsp']['name'];
                                    move_uploaded_file($_FILES['anhsp']['tmp_name'], "../uploads/$photo");
                                }
                                
                                $motasp = $_POST['motasp'];
                                $danhmucsp = $_POST['danhmucsp'];
                                add_sanpham($tensp, $giasp, $giamgiasp, $photo, $motasp, $danhmucsp);
                                header("location: ?act=dssp");
                            }
                            $dsdm = danhsach_danhmuc();
                            include "sanpham/add-sanpham.php";
                            break;
                        }


                        case "editsp":{
                            if(isset($_GET['idsp']) & $_GET['idsp'] > 0){
                                $sanpham = getone_sanpham($_GET['idsp']);
                            }
                            if(isset($_POST['btnsubmit'])){
                                $tensp = $_POST['tensp'];
                                $giasp = $_POST['giasp'];
                                $giamgiasp = $_POST['giamgiasp'];
                                $photo = null;
                                if($_FILES['anhsp']['name'] != ""){
                                    $photo = time() . "_" . $_FILES['anhsp']['name'];
                                    move_uploaded_file($_FILES['anhsp']['tmp_name'], "../uploads/$photo");
                                }
                                $motasp = $_POST['motasp'];
                                $danhmucsp = $_POST['danhmucsp'];
                                $idsp = $_POST['idsp'];
                                update_sanpham($tensp, $giasp, $giamgiasp, $photo, $motasp, $danhmucsp, $idsp);
                                header("location: ?act=dssp");
                            }
                            $dsdm = danhsach_danhmuc();
                            include "sanpham/edit-sanpham.php";
                            break;
                        }


                        case "deletesp":{
                            if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                                delete_sanpham($_GET['idsp']);
                                header("location: ?act=dssp");
                            }
                            break;
                        }


                        // Khách hàng
                        case "dskh":{
                            $dskh = danhsach_khachhang();
                            include "khachhang/list-khachhang.php";
                            break;
                        }


                        case "addkh":{
                            if(isset($_POST['btnsubmit'])){
                                $tenkh = $_POST['tenkh'];
                                $password = $_POST['password'];
                                $email = $_POST['email'];
                                $address = $_POST['address'];
                                $tel = $_POST['tel'];
                                $role = $_POST['role'];
                                add_khachhang($tenkh, $password, $email, $address, $tel, $role);
                                header("location: ?act=dskh");
                            }
                            include "khachhang/add-khachhang.php";
                            break;
                        }


                        case "editkh":{
                            if(isset($_GET['idkh']) & $_GET['idkh'] > 0){
                                $khachhang = getone_khachhang($_GET['idkh']);
                            }
                            if(isset($_POST['btnsubmit'])){
                                $tenkh = $_POST['tenkh'];
                                $password = $_POST['password'];
                                $email = $_POST['email'];
                                $address = $_POST['address'];
                                $tel = $_POST['tel'];
                                $role = $_POST['role'];
                                $idkh = $_POST['idkh'];
                                update_khachhang($tenkh, $password, $email, $address, $tel, $role, $idkh);
                                header("location: ?act=dskh");
                            }
                            include "khachhang/edit-khachhang.php";
                            break;
                        }


                        case "deletekh":{
                            if(isset($_GET['idkh']) && $_GET['idkh'] > 0){
                                delete_khachhang($_GET['idkh']);
                                header("location: ?act=dskh");
                            }
                            break;
                        }


                        case 'logout_ad':{
                            dangxuat_admin();
                            break;
                        }


                        case 'binhluan':{
                            include "binhluan/list-binhluan.php";
                            break;
                        }

                        
                        case 'delete_binhluan':{
                            
                            if(isset($_GET['id_bl']) && $_GET['id_bl'] > 0){
                                delete_binhluan($_GET['id_bl']);
                                header('location:index.php?act=binhluan');
                            }
                            break;  
                        }


                        default: {
                            include "trangchu/trangchu.php";
                            break;
                        }
                    }
                }else{
                    include "trangchu/trangchu.php";
                    
                }
            ?>
        </div>
        <!-- footer -->
        <?php include "footer.php"; ?>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
            const ctx = document.getElementById("myChart");
            new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["Danh mục", "Sản phẩm", "khách hàng", "Bình luận"],
                datasets: [
                {
                    label: "Thống kê chung cửa hàng",
                    data: thongke,
                    borderWidth: 1,
                    backgroundColor: [
                    "rgb(255, 99, 132)",
                    "rgb(75, 192, 192)",
                    "rgb(255, 205, 86)",
                    "rgb(201, 203, 207)",
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
</body>

</html>