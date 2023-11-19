<?php
   ob_start(); 
  include '../model/pdo.php';
  include '../model/khoahoc/danhmuc_khoahoc.php';
  include '../model/lop/giohoc.php';
  session_start();
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
    <div id="main-wrapper">
    <?php include 'view/header.php';?>
    <?php include 'view/aside_menudoc.php';?>
    <div class="page-wrapper">
        <?php 

          $danhmuc_khoahoc = danhsach_danhmuc_khoahoc();
          $giohoc = danhsach_giohoc();

          if(isset($_GET['act']) && $_GET['act']!= ""){
            $act = $_GET['act'];
            switch ($act) {
              // ----------------------- khuyen mai --------------------------------
              case 'khuyenmai':
                include 'khuyenmai/list_khuyenmai.php';
                break;
              case 'add_khuyenmai':
                include 'khuyenmai/add_khuyenmai.php';
                break;
              case 'sua_khuyenmai':
                include 'khuyenmai/update_khuyenmai.php';
                break;
              case 'delete_khuyenmai':{
                // code ...
                break;
              }
              // ------------------------ thong bao ---------------------------------
              case 'list_thongbao':{
                include 'thongbao/list_thongbao.php';
                break;
              }

              case 'add_thongbao':{
                include 'thongbao/add_thongbao.php';
                break;
              }

              case 'update_thongbao':{
                include 'thongbao/update_thongbao.php';
                break;
              }

              case 'delete_thongbao':{
                include 'thongbao/delete_tb.php';
                break;
              }
// ----------------------- giảng viên --------------------------------
              case 'add_giangvien':{
                include 'giangvien/add_giangvien.php';
                break;
              }
              case 'delete_giangvien':{
                include 'giangvien/delete_giangvien.php';
                break;
              }
              case 'list_giangvien':{
                include 'giangvien/list_giangvien.php';
                break;
              }

              case 'update_giangvien':{
                include 'giangvien/update_giangvien.php';
                break;
              }
              //  -------------------- banner marketing ----------------------------
              case 'list_banner':{
                include 'banner/list_banner.php';
                break;
              }
              case 'update_banner':{
                include 'banner/update_banner.php';
                break;
              }
              case 'add_banner':{
                include 'banner/add_banner.php';
                break;
              }
              case 'delete_banner':{
                include 'banner/delete_banner.php';
                break;
              }
              // -------------------- binh luan -------------------------------------
              case 'list_binhluan':{
                include 'binhluan/list_binhluan.php';
                break;
              }
              case 'delete_binhluan':{
                include 'binhluan/delete_binhluan.php';
                break;
              }
              // ------------------- hóa đơn -----------------------------------------
              case 'list_hoadon':{
                include 'hoadon/list_hoadon.php';
                break;
              }
              // ------------------------ lop hoc < thời gian >---------------------------------
              case 'list_lophoc':{
                include 'lophoc/lophoc/list_thoigian.php';
                break;
              }

              case 'add_lophoc':{
                include 'lophoc/lophoc/add_thoigian.php';
                break;
              }

              case 'update_lophoc':{
                include 'lophoc/lophoc/update_thoigian.php';
                break;
              }
              case 'delete_lophoc':{
                include 'lophoc/lophoc/delete_thoigian.php';
                break;
              }
              // --------------------------phòng học lớp---------------
              case 'list_thoigian':{
                include 'lophoc/phonghoc/list_lophoc.php';
                break;
              }

              case 'add_thoigian':{
                include 'lophoc/phonghoc/add_lophoc.php';
                break;
              }
              case 'update_thoigian':{
                include 'lophoc/phonghoc/update_lophoc.php';
                break;
              }
              case 'add_thoigian':{
                include 'lophoc/phonghoc/delete_lophoc.php';
                break;
              }
//            ------------------------------- feedback ---------------------------------
              case 'list_feedback':{
                include 'qlriengle/feedback/list_feedback.php';
                break;
              }
              case 'add_feedback':{
                include 'qlriengle/feedback/add_feedback.php';
                break;
              }
              // ------------------------------- question feedback ---------------------------------
              case 'add_question_feedback':{
                include 'qlriengle/feedback/question/add_question_feedback.php';
                break;
              }
              case 'list_question_feedback':{
                include 'qlriengle/feedback/question/list_question_feedback.php';
                break;
              }
              case 'delete_question_feedback':{
                include 'qlriengle/feedback/question/delete_question_feedback.php';
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
              // ---------------khoa hoc------------------------
              case 'list_khoahoc':{
                include 'khoahoc/khoahoc/list_khoahoc.php';
                break;
              }
              case 'add_khoahoc':{
                include 'khoahoc/khoahoc/add_khoahoc.php';
                break;
              }
              case 'update_khoahoc':{
                include 'khoahoc/khoahoc/update_khoahoc.php';
                break;
              }
              case 'delete_khoahoc':{
                include 'khoahoc/khoahoc/delete_khoahoc.php';
                break;
              }
//            -------------------------------- danh mục khóa học --------------------------------
              case 'list_danhmuc_khoahoc':{
                include 'khoahoc/danhmuc_khoahoc/list_danhmuc.php';
                break;
              }
              case 'add_danhmuc_khoahoc':{
                if(isset($_POST['btn_save'])){
                  add_danhmuc_khoahoc($_POST['name_danhmuc_khoahoc']);
                  header('location: index.php?act=list_danhmuc_khoahoc');
                }
                include 'khoahoc/danhmuc_khoahoc/add_danhmuc.php';
                break;
              }
              case 'update_danhmuc_khoahoc':{
                if(isset($_GET['iddm_khoahoc']) && $_GET['iddm_khoahoc'] > 0){
                  $dm_khoahoc = getone_danhmuc_khoahoc($_GET['iddm_khoahoc']);
                }
                if(isset($_POST['update_dm_khoahoc'])){
                  $iddm_khoahoc_ = $_POST['id_dm_kh'];
                  $ten_dm_khoahoc_ = $_POST['name_dm_kh'];
                  update_danhmuc_khoahoc($iddm_khoahoc_ , $ten_dm_khoahoc_);
                  header("location: ?act=list_danhmuc_khoahoc");
                }
                include 'khoahoc/danhmuc_khoahoc/update_danhmuc.php';
                break;
              }
              case 'delete_danhmuc_khoahoc':{
                if(isset($_GET['iddm']) && $_GET['iddm'] > 0){
                  delete_danhmuc_khoahoc($_GET['iddm']);
                  header("location:index.php?act=list_danhmuc_khoahoc");
                }
                
                break;
              }
//            -------------------------------- danh mục trạng thái --------------------------------
              case 'list_danhmuc_trangthai':{
                include 'qlriengle/trangthai/danhmuc_trangthai/list_trangthai.php';
                break;
              }
              case 'add_danhmuc_trangthai':{
                include 'qlriengle/trangthai/danhmuc_trangthai/add_trangthai.php';
                break;
              }
              case 'update_danhmuc_trangthai':{
                include 'qlriengle/trangthai/danhmuc_trangthai/update_trangthai.php';
                break;
              }
              case 'delete_danhmuc_trangthai':{
                include 'qlriengle/trangthai/danhmuc_trangthai/delete_trangthai.php';
                break;
              }
//              --------------------------trạng thái --------------------------------
              case 'list_trangthai':{
                include 'qlriengle/trangthai/trangthai/list_trangthai.php';
                break;
              }
              case 'add_trangthai':{
                include 'qlriengle/trangthai/trangthai/add_trangthai.php';
                break;
              }
              case 'update_trangthai':{
                include 'qlriengle/trangthai/trangthai/update_trangthai.php';
                break;
              }
              case 'delete_trangthai':{
                include 'trangthai/trangthai/delete_trangthai.php';
                break;
              }
              // ------------------------ giờ học ---------------------------------------------
              case 'list_giohoc':{
                include 'qlriengle/giohoc/list_giohoc.php';
                break;
              }
              case 'add_giohoc':{
                if(isset($_POST['btn_save'])){
                  add_giohoc($_POST['name_giohoc']);
                  header('location: index.php?act=list_giohoc');
                }
                include 'qlriengle/giohoc/add_giohoc.php';
                break;
              }
              case 'update_giohoc':{
                if(isset($_GET['id_giohoc']) && $_GET['id_giohoc'] > 0){
                  $one_giohoc = getone_giohoc($_GET['id_giohoc']);
                }
                if(isset($_POST['btn_update_giohoc'])){
                  $id_giohoc_ = $_POST['id_giohoc_'];
                  $name_giohoc_ = $_POST['name_giohoc_'];
                  update_giohoc($id_giohoc_ , $name_giohoc_);
                  header("location: ?act=list_giohoc");
                }
                include 'qlriengle/giohoc/update_giohoc.php';
                break;
              }
              case 'delete_giohoc':{
                if(isset($_GET['id_giohoc']) && $_GET['id_giohoc'] > 0){
                  delete_giohoc($_GET['id_giohoc']);
                  header("location:index.php?act=list_giohoc");
                }
                break;
              }
              // đánh giá --------------------------------------------------------------
              
              case 'list_danhgia':{
                include 'qlriengle/danhgia/list_danhgia.php';
                break;
              }
              case 'add_danhgia':{
                include 'qlriengle/danhgia//add_danhgia.php';
                break;
              }
              case 'delete_danhgia':{
                include 'qlriengle/danhgia/delete_danhgia.php';
                break;
              }
              // -------- tai khoan --------------------------------
              case 'list_taikhoan':{
                include 'taikhoan/list_taikhoan.php';
                break;
              }
              case 'add_taikhoan':{
                include 'taikhoan/add_taikhoan.php';
                break;
              }
              case 'update_taikhoan':{
                include 'taikhoan/update_taikhoan.php';
                break;
              }
              case 'delete_taikhoan':{
                include 'taikhoan/delete_taikhoan.php';
                break;
              }
              default:
              //  include 'footer.php';
                include 'view/thongke.php'; 
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
