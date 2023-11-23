<?php
  ob_start(); 
  session_start();
  include '../model/pdo.php';
  include '../model/lop/giohoc.php';
  include '../model/lop/lop.php';
  include '../model/feedback.php';
  include '../model/taikhoan/taikhoan.php';
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
    
    <div id="main-wrapper">
    <?php include 'view/header.php'?>
    <?php include 'view/aside_menudoc.php'?>
    <div class="page-wrapper">
        <?php 
          if(isset($_GET['act']) && $_GET['act']!= ""){
            $act = $_GET['act'];
            switch ($act) {
              // ------------------------ lop hoc ---------------------------------
              case 'list_lophoc':{
                include 'qllop/list_lophoc.php';
                break;
              }

              case 'add_lophoc':{
                include 'qllop/add_lophoc.php';
                break;
              }

              case 'update_lophoc':{
                include 'qllop/update_lophoc.php';
                break;
              }
//            ------------------------------- feedback ---------------------------------
              case 'list_feedback':{
                include 'feedback/list_feedback.php';
                break;
              }

              //  -------------------- banner marketing ----------------------------
              case 'list_sinhvien':{
                include 'qlsinhvien/list_sinhvien.php';
                break;
              }
              case 'update_sinhvien':{
                include 'qlsinhvien/update_sinhvien.php';
                break;
              }
              case 'logout':{
                dangxuat_giangvien();
                break;
              }
              
              default:
              //  include 'footer.php';
              
                include 'view/script.php';
                break;
            }
          }else{
            include 'view/thongke.php';
          }
        
        ?>
        
        <?php include 'view/footer.php';?>
    </div>
    <?php include 'view/script.php'?>
  </body>
</html>
