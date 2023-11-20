<?php
  session_start();
  include './model/pdo.php';
  include './model/khoahoc/danhmuc_khoahoc.php';
  include './model/khoahoc/khoahoc.php';
  include './model/taikhoan/taikhoan.php';
?>


<!DOCTYPE html>
<html dir="ltr" lang="en">
  <?php include 'view/head.php'?>
  <body>
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <div class="container-fluid">
      <?php include 'view/header.php'?>
      
      <?php
        $danhsach_danhmuc_khoahoc = danhsach_danhmuc_khoahoc();


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
              include 'view/chitiet_thongbao.php';
              break;
            }
            // danh mục khóa học
            case 'show_danhmuc_khoahoc':{
              break;
            }
            case 'search_danhmuc_khoahoc':{
              if(isset($_GET['iddm']) && $_GET['iddm'] >0){
                $khoahoc = timkiem_danhmuc_khoahoc($_GET['iddm']);
              }
              include 'view/main.php';
              break;
            }
            
            //  khóa học ++++++++++++++++++++++++++++++++++
            case 'chitiet_khoahoc':{
              include 'view/chitiet_khoahoc.php';
              break;
            }
            case 'list_lophoc':{
              include 'view/list_lophoc.php';
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
