<!DOCTYPE html>
<html dir="ltr" lang="en">
    <?php include 'head.php'?>

  <body>
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    
    <div id="main-wrapper">
    <?php include 'header.php'?>
    <?php include 'aside_menudoc.php'?>
    <div class="page-wrapper">
        <?php 
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
              // ------------------------ lop hoc ---------------------------------
              case 'list_lophoc':{
                include 'lophoc/qllop/list_lophoc.php';
                break;
              }

              case 'add_lophoc':{
                include 'lophoc/qllop/add_lophoc.php';
                break;
              }

              case 'update_lophoc':{
                include 'lophoc/qllop/update_lophoc.php';
                break;
              }
              case 'delete_lophoc':{
                include 'lophoc/qllop/delete_lophoc.php';
                break;
              }
              // --------------------------thời gian lớp---------------
              case 'list_thoigian':{
                include 'lophoc/sapxep/list_thoigian.php';
                break;
              }

              case 'add_thoigian':{
                include 'lophoc/sapxep/add_thoigian.php';
                break;
              }
              case 'update_thoigian':{
                include 'lophoc/sapxep/update_thoigian.php';
                break;
              }
              case 'add_thoigian':{
                include 'lophoc/sapxep/delete_thoigian.php';
                break;
              }
//            ------------------------------- feedback ---------------------------------
              case 'list_feedback':{
                include 'qlriengle/feedback/list_feedback.php';
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
                include 'khoahoc/list_khoahoc.php';
                break;
              }
              case 'add_khoahoc':{
                include 'khoahoc/add_khoahoc.php';
                break;
              }
              case 'update_khoahoc':{
                include 'khoahoc/update_khoahoc.php';
                break;
              }
              case 'delete_khoahoc':{
                include 'khoahoc/delete_khoahoc.php';
                break;
              }
//            -------------------------------- danh mục khóa học --------------------------------
              case 'add_danhmuc_khoahoc':{
                include 'qlriengle/danhmuc_khoahoc/add_danhmuc.php';
                break;
              }
              case 'list_danhmuc_khoahoc':{
                include 'qlriengle/danhmuc_khoahoc/list_danhmuc.php';
                break;
              }
              case 'update_danhmuc_khoahoc':{
                include 'qlriengle/danhmuc_khoahoc/update_danhmuc.php';
                break;
              }
              case 'delete_danhmuc_khoahoc':{
                include 'qlriengle/danhmuc_khoahoc/delete_danhmuc.php';
                break;
              }
//            -------------------------------- danh mục khóa học --------------------------------
              case 'list_danhmuc_trangthai':{
                include 'qlriengle/danhmuc_trangthai/list_trangthai.php';
                break;
              }
              case 'add_danhmuc_trangthai':{
                include 'qlriengle/danhmuc_trangthai/add_trangthai.php';
                break;
              }
              case 'update_danhmuc_trangthai':{
                include 'qlriengle/danhmuc_trangthai/update_trangthai.php';
                break;
              }
              case 'delete_danhmuc_trangthai':{
                include 'qlriengle/danhmuc_trangthai/delete_trangthai.php';
                break;
              }
              // ------------------------ giờ học ---------------------------------------------
              case 'list_giohoc':{
                include 'qlriengle/giohoc/list_giohoc.php';
                break;
              }
              case 'add_giohoc':{
                include 'qlriengle/giohoc/add_giohoc.php';
                break;
              }
              case 'update_giohoc':{
                include 'qlriengle/giohoc/update_giohoc.php';
                break;
              }
              case 'delete_giohoc':{
                include 'qlriengle/giohoc/delete_giohoc.php';
                break;
              }
              default:
              //  include 'footer.php';
                include 'thongke.php'; 
                include 'script.php';
                break;
            }
          }else{
            include 'thongke.php';
          }
        
        ?>
        <?php include 'footer.php';?>
    </div>
    <?php include 'script.php'?>
  </body>
</html>
