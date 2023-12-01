<?php
   ob_start(); 
  include '../model/pdo.php';
  include '../model/khoahoc/danhmuc_khoahoc.php';
  include '../model/lop/giohoc.php';
  include '../model/thongbao.php';
  include '../model/taikhoan/taikhoan.php';
  include '../model/trangthai/danhmuc_trangthai.php';
  include '../model/trangthai/trangthai.php';
  include '../model/phonghoc.php';
  include '../model/khoahoc/khoahoc.php';
  include '../model/lop/lop.php';
  include '../model/binhluan.php';
  include '../model/tuyendung.php';
  include '../model/thongke.php';
  include '../model/diem.php';
  include '../model/dangki_khoahoc.php';
  include '../model/hoadon.php';
  session_start();
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
    <?php include 'view/header.php';?>
    <?php include 'view/aside_menudoc.php';?>
    <div class="page-wrapper">
        <?php 
          $danhsach_tuyendung = list_tuyendung();
          $danhmuc_khoahoc = danhsach_danhmuc_khoahoc();
          $giohoc = danhsach_giohoc();
          $list_thongbao = list_thongbao();
          $list_dm_trangthai = danhsach_danhmuc_trangthai();
          $danhsach_trangthai = danhsach_trangthai();
          $danhsach_phonghoc = danhsach_phonghoc();
          $danhsach_khoahoc = danhsach_khoahoc();
          $danhsach_taikhoan_giangvien = danhsach_taikhoan_giangvien();
          $danhsach_taikhoan = danhsach_taikhoan();
          $danhsach_lophoc =danhsach_lophoc();
          $danhsach_binhluan =danhsach_binhluan();
          $danhsach_duyetlop = danhsach_duyetlop();
          $danhsach_duyetlop_daduyet = danhsach_duyetlop_daduyet();
          $danhsach_hoadon = list_hoadon();
          // thống kê
          $tongdanhmuckhoahoc = tong_danhmuckhoahoc();
          $tongkhoahoc = tongkhoahoc();
          $tongphonghoc = tongphonghoc();
          $tonggiohoc = tonggiohoc();
          $tonglophoc = tonglophoc();
          $tongthongbao = tongthongbao();
          $tongbinhluan = tongbinhluan();
          $tonghoadon = tonghoadon();
          $tongtrangthai = tongtrangthai();
          $tongdanhmuctrangthai = tongdanhmuctrangthai();
          $tongadmin = tongadmin();
          $tonggiangvien =tonggiangvien();
          $tongnguoidung = tongnguoidung();
          $tongluotdangkigiangvien = tongluotdangkigiangvien();
          $taikhoanlophocchuaduyet = taikhoanlophocchuaduyet();
          $taikhoanlophocdaduyet = taikhoanlophocdaduyet();
          if(isset($_GET['act']) && $_GET['act']!= ""){
            $act = $_GET['act'];
            switch ($act) {
              case 'tuyendung':{
                if(isset($_GET['id_taikhoan_chapnhan']) && $_GET['id_taikhoan_chapnhan'] !=""){
                  update_role_chapnhan($_GET['id_taikhoan_chapnhan']);
                  header('location: index.php?act=tuyendung');
                }
                if(isset($_GET['id_taikhoan_kochapnhan']) && $_GET['id_taikhoan_kochapnhan'] !=""){
                  update_role_kochapnhan($_GET['id_taikhoan_kochapnhan']);
                  header('location: index.php?act=tuyendung');
                }
                include 'tuyendung/list_tuyendung.php';
                break;
              }
              // ------------------------ thong bao ---------------------------------
              case 'list_thongbao':{
                include 'thongbao/list_thongbao.php';
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

              case 'add_thongbao':{
                if(isset($_POST['thongbao'])){
                  $photo =null;
                  $tieude = $_POST['tieude'];
                  $noidung = $_POST['noidung'];
                  if($_FILES['img_thongbao']['name']!=""){
                    $photo = time() .'__'.$_FILES['img_thongbao']['name'];
                    move_uploaded_file($_FILES['img_thongbao']['tmp_name'], "../upload/thongbao/$photo");
                  }
                  add_thongbao($photo,$tieude,$noidung);
                  header('location: index.php?act=list_thongbao');
                }
                include 'thongbao/add_thongbao.php';
                break;
              }


              case 'update_thongbao':{
                if(isset($_GET['id_tb']) && $_GET['id_tb'] > 0){
                  $thongbao_up = getone_thongbao($_GET['id_tb']);
                }
                if(isset($_POST['up_tb'])) {
                  $photo = null;
                  $title = $_POST['title'];
                  $noidung = $_POST['noidung'];
                  if($_FILES['img_tbud']['name'] != ""){
                    $photo = time().'__'.$_FILES['img_tbud']['name'];
                    move_uploaded_file($_FILES['img_tbud']['tmp_name'], "../upload/thongbao/$photo");
                  }
                  $idtb =$_POST['idtb'];
                  update_thongbao($photo, $title, $noidung, $idtb);
                  header('location: index.php?act=list_thongbao');
                }
                
                include 'thongbao/update_thongbao.php';
                break;
              }

              case 'delete_thongbao':{
                if(isset($_GET['id_thongbao']) && $_GET['id_thongbao'] > 0){
                  delete_thongbao($_GET['id_thongbao']);
                  header('location: ?act=list_thongbao');
                }
                break;
              }

              // -------- tai khoan --------------------------------
              case 'list_taikhoan':{
    
                
                include 'taikhoan/list_taikhoan.php';
                break;
              }
              case 'add_taikhoan':{
                if(isset($_POST['save'])){
                  $user = $_POST['user'];
                  $pass = $_POST['pass'];
                  $email = $_POST['email'];
                  $address = $_POST['address'];
                  $tel = $_POST['tel'];
                  $mota = $_POST['mota'];
                  add_taikhoan($user ,$pass ,$email ,$address ,$tel ,$mota);
                  header('location: index.php?act=list_taikhoan');
                }
                include 'taikhoan/add_taikhoan.php';
                break;
              }
              case 'update_taikhoan':{
                if(isset($_GET['id__taikhoan']) && $_GET['id__taikhoan'] >0){
                  $giangvien_one = getone_taikhoan($_GET['id__taikhoan']);
                }
                
                if(isset($_POST['update'])){
                  $user = $_POST['user'];
                  $pass = $_POST['pass'];
                  $email = $_POST['email'];
                  $phone = $_POST['phone'];
                  $address = $_POST['address'];
                  $mota = $_POST['mota'];
                  $id = $_POST['id'];
                  $role = $_POST['role'];
                  update_taikhoan__($user, $pass, $email, $phone, $address, $mota,$role,$id);
                  header('location: index.php?act=list_taikhoan');
                }
                include 'taikhoan/update_taikhoan.php';
                break;
              }
              case 'delete_taikhoan':{
                if(isset($_GET['id__taikhoan']) && $_GET['id__taikhoan'] != ""){
                  delete_giangvien($_GET['id__taikhoan']);
                  header('location: index.php?act=list_taikhoan');
                }
                include 'taikhoan/delete_taikhoan.php';
                break;
              }
// ----------------------- giảng viên --------------------------------
              case 'add_giangvien':{
                if(isset($_POST['save'])){
                  $user = $_POST['user'];
                  $pass = $_POST['pass'];
                  $email = $_POST['email'];
                  $address = $_POST['address'];
                  $tel = $_POST['tel'];
                  $mota = $_POST['mota'];
                  $role = 3;
                  add_giangvien($user ,$pass ,$email ,$address ,$tel ,$mota,$role);
                  header('location: index.php?act=list_giangvien');

                }
                
                include 'giangvien/add_giangvien.php';
                break;
              }
              case 'update_giangvien':{
                if(isset($_GET['id_giangvien']) && $_GET['id_giangvien'] >0){
                  $giangvien_one = getone_taikhoan($_GET['id_giangvien']);
                }
                
                if(isset($_POST['update'])){
                  $user = $_POST['user'];
                  $pass = $_POST['pass'];
                  $email = $_POST['email'];
                  $phone = $_POST['phone'];
                  $address = $_POST['address'];
                  $mota = $_POST['mota'];
                  $id = $_POST['id'];
                  update_giangvien($user, $pass, $email, $phone, $address, $mota,$id);
                  header('location: index.php?act=list_giangvien');
                }
                include 'giangvien/update_giangvien.php';
                break;
              }
              case 'delete_giangvien':{
                if(isset($_GET['iddt_gv']) && $_GET['iddt_gv'] != ""){
                  delete_giangvien($_GET['iddt_gv']);
                  header('location: index.php?act=list_giangvien');
                }
                include 'giangvien/delete_giangvien.php';
                break;
              }
              case 'list_giangvien':{
                include 'giangvien/list_giangvien.php';
                break;
              }
              // -------------------- binh luan -------------------------------------
              case 'list_binhluan':{
                include 'binhluan/list_binhluan.php';
                break;
              }
              case 'delete_binhluan':{
                if(isset($_GET['id_binhluan']) && $_GET['id_binhluan'] > 0){
                  delete_binhluan($_GET['id_binhluan']);
                  header('location: index.php?act=list_binhluan');
                }
                break;
              }
              // ------------------- hóa đơn -----------------------------------------
              case 'list_hoadon':{
                include 'hoadon/list_hoadon.php';
                break;
              }
              // ------------------------ lop hoc < thời gian >---------------------------------
              case 'list_lophoc':{

                include 'lophoc/phonghoc/list_lophoc.php';
                
                break;
              }

              case 'add_lophoc':{
                if(isset($_POST['btn_save'])){
                  add_phonghoc($_POST['phong'],$_POST['mota'],$_POST['slot'],$_POST['id_gio']);
                  header('location: index.php?act=list_lophoc');
                }
                include 'lophoc/phonghoc/add_lophoc.php';
                break;
              }

              case 'update_lophoc':{
                if(isset($_GET['id_phonghoc']) && $_GET['id_phonghoc'] > 0){
                  $phonghoc = getone_phonghoc($_GET['id_phonghoc']);
                }
                if(isset($_POST['update'])){
                  update_phonghoc($_POST['phong'],$_POST['mota'],$_POST['id_giohoc'],$_POST['slot'],$_POST['id_phong']);
                  header("location: ?act=list_lophoc");
                }
                include 'lophoc/phonghoc/update_lophoc.php';
                break;
              }
              case 'delete_lophoc':{
                if(isset($_GET['iddm']) && $_GET['iddm'] > 0){
                  delete_phonghoc($_GET['iddm']);
                  header("location:index.php?act=list_lophoc");
                }
                break;
              }
              // --------------------------phòng học lớp---------------
              case 'list_thoigian':{
                include 'lophoc/lophoc/list_thoigian.php';
                break;
              }

              case 'add_thoigian':{
                if(isset($_POST['save'])){
                  $phong = $_POST['phong'];
                  $khoahoc = $_POST['name_khoahoc'];
                  $ngaykhaigiang = $_POST['ngaykhaigiang'];
                  $ngaybegiang = $_POST['ngaybegiang'];
                  $nhomzalo = $_POST['zalo'];
                  $trangthai = $_POST['trangthai'];

                  add_lophoc($phong,$khoahoc, $ngaykhaigiang,$ngaybegiang,$nhomzalo,$trangthai);
                  header('location: index.php?act=list_thoigian');
                }
                include 'lophoc/lophoc/add_thoigian.php';
                break;
              }
              case 'update_thoigian':{
                if(isset($_GET['id_lophoc']) && $_GET['id_lophoc'] > 0){
                  $lophoc = getone_lophoc($_GET['id_lophoc']);
                }
                if(isset($_POST['save'])){
                  update_lophoc($_POST['id_lophoc'], $_POST['phong'], $_POST['ngaykhaigiang'],$_POST['ngaybegiang'], $_POST['name_khoahoc'], $_POST['zalo'], $_POST['trangthai']);
                  header('location: index.php?act=list_thoigian');
                }
                include 'lophoc/lophoc/update_thoigian.php';
                break;
              }
              case 'delete_thoigian':{
                if(isset($_GET['dtid_lophoc']) && $_GET['dtid_lophoc'] > 0){
                  delete_lophoc($_GET['dtid_lophoc']);
                  header('location: index.php?act=list_thoigian');
                }
                break;
              }
//            ------------------------------- feedback ---------------------------------
              case 'list_feedback':{
                include 'qlriengle/feedback/list_feedback.php';
                break;
              }

              // list duyệt --------------------------------
              case 'list_chuaduyet':{
                if(isset($_GET['id_dangki']) && $_GET['id_dangki'] != ""){
                  
                  
                  
                  $id_lophoc = getone_id_lophoc($_GET['id_dangki']);
                  $taikhoan = getone_id_taikhoan($_GET['id_dangki']);
                  $id_taikhoan_ = $taikhoan['id_taikhoan'];
                  $id_lophoc_ = $id_lophoc['id_lophoc'];
                  update_slot($id_lophoc_);
                  tangluotdangki($id_lophoc_);
                  insert_diem($id_taikhoan_, $id_lophoc_);
                  insert_hoadon($id_taikhoan_, $id_lophoc_); 
                  update_role_lopdangki($_GET['id_dangki']);
                  header('location: index.php?act=list_chuaduyet');
                  // dang lay dc id dang ki
                }
                
                if(isset($_GET['id_dangki_xoa']) && $_GET['id_dangki_xoa'] != ""){
                  delete_lopdangki($_GET['id_dangki_xoa']);
                  header('location: index.php?act=list_daduyet');
                }
                include 'duyetlophoc/listLopchuaduyet.php';
                
                break;
              } 
              case 'list_daduyet':{
                include 'duyetlophoc/listLopdaduyet.php';
                break;
              } 
              // ---------------khoa hoc------------------------
              case 'list_khoahoc':{
                include 'khoahoc/khoahoc/list_khoahoc.php';
                break;
              }
              case 'add_khoahoc':{
                if(isset($_POST['add'])){
                  $ten_kh = $_POST['name_kh'];
                  $dmkh = $_POST['dmkh'];
                  $noidung = $_POST['noidung'];
                  $gia = $_POST['gia'];
                  $giamgia = $_POST['giamgia'];
                  $idgv = $_POST['idgv'];
                  if($_FILES['img']['name']!= null){
                    $photo = time() .'__'.$_FILES['img']['name'];
                    move_uploaded_file($_FILES['img']['tmp_name'], "../upload/khoahoc/$photo");
                  }
                  // $iddmkh, $photo, $name_kh, $noidung_kh, $gia,$idtk,$giamgia
                  add_khoahoc($dmkh, $photo,$ten_kh ,$noidung ,$gia,$idgv, $giamgia );
                  header('location: index.php?act=list_khoahoc');
                 
                }
                include 'khoahoc/khoahoc/add_khoahoc.php';
                break;
              }
              case 'update_khoahoc':{
                if(isset($_GET['id__khoahoc']) && $_GET['id__khoahoc']!= ""){
                  $khoahoc_ud = getone_khoahoc_($_GET['id__khoahoc']);
                }
                if(isset($_POST['update_khoahoc'])){
                  $tenkhoahoc = $_POST['tenkhoahoc'];
                  $photo = null;
                  $noidung =$_POST['noidung'];
                  $price = $_POST['price'];
                  $giangvien = $_POST['giangvien'];
                  $id = $_POST['id'];
                  $danhmuckhoahoc = $_POST['danhmuckhoahoc'];
                  if($_FILES['name_img']['name'] != ""){
                    $photo = time().'__'.$_FILES['name_img']['name'];
                    move_uploaded_file($_FILES['name_img']['tmp_name'], "../upload/khoahoc/$photo");
                  }
                  update_khoahoc_($tenkhoahoc, $noidung, $price, $giangvien,$danhmuckhoahoc,$photo, $id);
                  header('location: index.php?act=list_khoahoc');
                  
                }
                include 'khoahoc/khoahoc/update_khoahoc.php';
                break;
              }
              case 'delete_khoahoc':{
                if(isset($_GET['id__khoahoc']) && $_GET['id__khoahoc'] > 0){
                  delete_khoahoc_($_GET['id__khoahoc']);
                  header('location: ?act=list_khoahoc');
                }
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
                if(isset($_POST['save'])){
                  add_danhmuc_trangthai($_POST['name_danhmuc_trangthai']);
                  header('location: index.php?act=list_danhmuc_trangthai');
                }
                include 'qlriengle/trangthai/danhmuc_trangthai/add_trangthai.php';
                break;
              }
              case 'update_danhmuc_trangthai':{
                if(isset($_GET['iddm_trangthai']) && $_GET['iddm_trangthai'] > 0){
                  $dm_trangthai = getone_danhmuc_trangthai($_GET['iddm_trangthai']);
                }
                if(isset($_POST['update_dm_trangthai'])){
                  $iddm_trangthai_ = $_POST['id_dm_tt'];
                  $ten_dm_trangthai_ = $_POST['name_dm_tt'];
                  update_danhmuc_trangthai($iddm_trangthai_ , $ten_dm_trangthai_);
                  header("location: index.php?act=list_danhmuc_trangthai");
                }
                include 'qlriengle/trangthai/danhmuc_trangthai/update_trangthai.php';
                break;
              }
              case 'delete_danhmuc_trangthai':{
                if(isset($_GET['iddm']) && $_GET['iddm'] > 0){
                  delete_danhmuc_trangthai($_GET['iddm']);
                  header("location:index.php?act=list_danhmuc_trangthai");
                }
                break;
              }
//              --------------------------trạng thái --------------------------------
              case 'list_trangthai':{
                include 'qlriengle/trangthai/trangthai/list_trangthai.php';
                break;
              }
              case 'add_trangthai':{
                if(isset($_POST['btn_save'])){
                  add_trangthai($_POST['trangthai'], $_POST['iddm_trangthai']);
                  header('location: index.php?act=list_trangthai');
                }
                include 'qlriengle/trangthai/trangthai/add_trangthai.php';
                break;
              }
              case 'update_trangthai':{
                if(isset($_GET['id_trangthai']) && $_GET['id_trangthai'] > 0){
                  $trangthai = getone_trangthai($_GET['id_trangthai']);
                }
                if(isset($_POST['update_trangthai'])){
                  $iddm_trangthai_ = $_POST['iddm_trangthai'];
                  $ten_dm_trangthai_ = $_POST['name_dm_tt'];
                  $id = $_POST['id_trangthai'];
                  update_trangthai($ten_dm_trangthai_,$iddm_trangthai_,$id);
                  header("location: index.php?act=list_trangthai");
                }
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

              case 'logout':{
                dangxuat_admin();
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
