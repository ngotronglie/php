<?php
  session_start();
  include './model/pdo.php';
  include './model/khoahoc/danhmuc_khoahoc.php';
  include './model/khoahoc/khoahoc.php';
  include './model/taikhoan/taikhoan.php';
  include './model/thongbao.php';
  include './model/binhluan.php';
  // include '';
?>


<!DOCTYPE html>
<html dir="ltr" lang="en">
  <?php include 'view/head.php'?>
  <body>
    <!-- <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div> -->
    <div class="container-fluid">
      <?php include 'view/header.php'?>
      
      <?php
        $danhsach_danhmuc_khoahoc = danhsach_danhmuc_khoahoc();
        $danhsach_khoahoc = danhsach_khoahoc();
        $danhsach_thongbao = list_thongbao();
        $top10_view = top10_view();
        $danhsach_giangvien = danhsach_taikhoan_giangvien();
        if(isset($_GET['act']) && $_GET['act'] != ""){
          $act = $_GET['act'];
          switch ($act) {
            // dăng kí đăng nhập ____________________________ 
            case 'login':{
              if(isset($_POST['login'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
              }
              include 'view/login/login.php';
              break;
            }
            case 'dangki':{
              if(isset($_POST['signup'])){
                $user = $_POST['user'];
                $pass = $_POST['password'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $mota = $_POST['mota'];
                add_user($user, $pass, $email, $address,$phone, $mota);
                $thongbao = "<div class='container'>
                                <div class='alert alert-success mt-3' role='alert'>
                                  Đăng kí thành công!
                                </div>
                            </div>";
              }
              include 'view/login/dangki.php';
              break;
            }
            case 'logout':{
              dangxuat_user();
              include 'view/main.php';
              break;
            }
            // thông báo  ______________________________-___
            case 'chitiet_thongbao':{
              if(isset($_GET['iddm']) && $_GET['iddm']!= ""){
                $thongbao_le = getone_thongbao($_GET['iddm']);
              }
              include 'view/chitiet_thongbao.php';
              break;
            }

            case 'list_giangvien':{
              include 'view/list_giangvien.php';
              break;
            }
            // danh mục khóa học

            case 'search_danhmuc_khoahoc':{
              if(isset($_GET['iddm_kh']) && $_GET['iddm_kh'] >0){
                $danhsach_khoahoc = search_danhmuc_kh($_GET['iddm_kh']);
              }
              include 'view/main.php';
              break;
            }
            case 'search_khoahoc':{
              if(isset($_POST['timkiem']) && $_POST['timkiem'] !=""){
                $danhsach_khoahoc = timkiem_khoahoc($_POST['keyword']);
              }
              include 'view/main.php';
              break;
            }
            
            //  khóa học ++++++++++++++++++++++++++++++++++
            case 'chitiet_khoahoc':{
              if(isset($_POST['guibinhluan']) && $_POST['guibinhluan'] != ""){
                if($_SESSION){
                  $user = $_SESSION['user'];
                  $id_taikhoan = search_id_taikhoan($user);
                }else{
                  $id_taikhoan = 999999;
                }
                $id_khoahoc = $_POST['id_khoahoc'];
                $noidung = $_POST['noidung'];
                insert_binhluan($id_khoahoc, $noidung, $id_taikhoan);
              } 
              if(isset($_GET['id__khoahoc']) && $_GET['id__khoahoc']!=""){
                $khoahoc = getone_chitiet_khoahoc($_GET['id__khoahoc']);
                tangluotxem($_GET['id__khoahoc']);
                $khoahoc_cungloai = khoahoc_cungloai($_GET['id__khoahoc']);
                $binhluan = load_binhluan($_GET['id__khoahoc']);
              }
              $list_lophoc_cung_name = list_lophoc_cung_name($khoahoc['name_khoahoc']);
              // $binhluan = load_binhluan($_GET['id__khoahoc']);
             
              include 'view/chitiet_khoahoc.php';
              break;
            }

            case 'lop_dadangki':{
              include 'view/lop_dadangki.php';
              break;
            }
            case 'chitiet_lopdadangki':{
              include 'view/chitiet_lopdangki.php';
              break;
            }
            // chi tiết khóa học
           
            
            default:
              
              break;
          }
        }else{
          include 'view/banner.php';
          include 'view/main.php';
          include 'view/script.php';
        }
      ?>
    <?php include 'view/footer.php'?>
    </div>
      <?php include 'view/script.php'?>
  </body>
</html>
