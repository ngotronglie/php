<?php
  ob_start(); 
  session_start();
  include '../model/pdo.php';
  include '../model/lop/giohoc.php';
  include '../model/lop/lop.php';
  include '../model/feedback.php';
  include '../model/taikhoan/taikhoan.php';
  include '../model/diemtongket.php';
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
                if($_SESSION){
                  $user = $_SESSION['user'];
                  $id_taikhoan = search_id_taikhoan($user);
                }
                $danhsach_feedback = List_feedback($id_taikhoan);
                include 'feedback/list_feedback.php';
                break;
              }

              //  -------------------- banner marketing ----------------------------
              case 'list_sinhvien':{
                if($_SESSION){
                  $user = $_SESSION['user'];
                  $id_taikhoan_gv = search_id_taikhoan($user);
                }
                $danhsach_hocvien = List_hocvien($id_taikhoan_gv);
                include 'qlsinhvien/list_sinhvien.php';
                break;
              }
              case 'update_sinhvien':{
                if(isset($_GET['id_user']) && $_GET['id_user']!=""){
                  $diemtongket = getone_diemtongket($_GET['id_user']);
                }
                if(isset($_POST['capnhat'])){
                  $diem = $_POST['diem'];
                  $nhanxet =$_POST['nhanxet'];
                  $id_taikhoan = $_POST['id_taikhoan'];
                  update_nhanxet_diem($diem,$nhanxet,$id_taikhoan);
                  header('location: index.php?act=list_sinhvien');
                }
                include 'qlsinhvien/update_sinhvien.php';
                break;
              }
              case 'logout':{
                dangxuat_giangvien();
                break;
              }
              case 'capnhattaikhoan':{
                $taikhoan = dulieu_taikhoan($_SESSION['user']);
                if(isset($_POST['capnhat'])){
                  $user = $_POST['user'];
                  $password = $_POST['password'];
                  $email = $_POST['email'];
                  $address = $_POST['address'];
                  $phone = $_POST['phone'];
                  $mota = $_POST['mota'];
                  $id_taikhoan = $_POST['id_taikhoan'];
                  $mess = update_taikhoan($user,$password,$email,$address,$phone,$mota,$id_taikhoan);

                  header('location: index.php?act=logout');
                }
                include 'view/capnhattaikhoan.php';
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
