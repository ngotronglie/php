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
