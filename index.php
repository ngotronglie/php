<?php
  session_start();
  include './model/pdo.php';
  include './model/khoahoc/danhmuc_khoahoc.php';
  include './model/khoahoc/khoahoc.php';
  include './model/taikhoan/taikhoan.php';
  include './model/thongbao.php';
  include './model/binhluan.php';
  include './model/dangki_khoahoc.php';
  include './model/lop/lop.php';
  include './model/hoadon.php';
  include './model/phonghoc.php';
  include './model/diem.php';
  include './model/feedback.php';
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
            case 'quenmk':{
              if(isset($_POST['submit'])){
                $email = $_POST['email'];
                $sendMailMess = sendMail($email);
              }
              include 'view/login/quenmatkhau.php';
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
              include 'view/login/capnhat.php';
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
              if(isset($_GET['iddm_kh']) && $_GET['iddm_kh'] > 0){
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
                  header('location:index.php?act=login');
                }
                $id_khoahoc = $_POST['id_khoahoc'];
                $noidung = $_POST['noidung'];
                insert_binhluan($id_khoahoc, $noidung, $id_taikhoan);
              } // gửi bình luận


              if(isset($_GET['id__khoahoc']) && $_GET['id__khoahoc']!=""){
                $khoahoc = getone_chitiet_khoahoc($_GET['id__khoahoc']); // trả về 1 khoas học 
                tangluotxem($_GET['id__khoahoc']); // tăng lượt xem 
                $khoahoc_cungloai = khoahoc_cungloai($_GET['id__khoahoc']);
                $binhluan = load_binhluan($_GET['id__khoahoc']);
              }
              $list_lophoc_cung_name = list_lophoc_cung_name($khoahoc['name_khoahoc']); // lớp học cùng tên 
              // $binhluan = load_binhluan($_GET['id__khoahoc']);
             
              include 'view/chitiet_khoahoc.php';
              break;
            }

            case 'chitietchitiet':{
              if(isset($_GET['id_lophoc']) && $_GET['id_lophoc'] > 0){
                $lophoc = getone_lophoc($_GET['id_lophoc']);
                
              }
              
              include 'view/chitietchitietlophoc.php';
              break;
            }

            case 'chitiet_lopdadangki':{
              if(isset($_GET['id_dkkh']) && $_GET['id_dkkh'] > 0){
                $lophoc = get_onelopdadangki($_GET['id_dkkh']);
              }
              include 'view/chitietlopdadangki.php';
              break;
            }

            case 'dangki_lophoc':{
              if(isset($_GET['id_lophoc']) && $_GET['id_lophoc'] > 0){
                if(!$_SESSION){
                  header('Location: index.php?act=login');
                }else{
                  $id_taikhoan = search_id_taikhoan($_SESSION['user']);
                  if($id_taikhoan == 0){
                    header('Location: index.php?act=login');
                  }
                  $id__lophoc = $_GET['id_lophoc'];
                  insert_dangkikhoahoc($id_taikhoan, $_GET['id_lophoc']);
                  header('location: index.php?act=lop_dadangki');
                }
              }
              break;
            }

            case 'lop_dadangki':{
              if($_SESSION){
                $id_taikhoan = search_id_taikhoan($_SESSION['user']); // tìm kiếm cái id tài khoản của session
                $lopda_dangki = list_lopda_dangki($id_taikhoan); // danh sach lớp đã đăng kí
                $lopda_dangki_duyet = list_lopda_dangki_duyet($id_taikhoan); // danh sách lớp đã duyệt
              }else{
                header('location: index.php?act=login');
              }
              
              include 'view/lop_dadangki.php';
              break;
            }
            case 'noidung_lopdadangki':{
              if(isset($_POST['send'])){
                if($_SESSION){
                  $user = $_SESSION['user'];
                  $id_taikhoan = search_id_taikhoan($user);
                }
                $id_lophoc = $_POST['id_lophoc'];
                $noidung = $_POST['noidung'];
                insert_feedback($id_lophoc, $id_taikhoan, $noidung);
              }

              
              if(isset($_GET['id_dkkh']) && $_GET['id_dkkh'] != ""){
                $lophoc = get_onelopdadangki($_GET['id_dkkh']);
              }
              include 'view/chitiet_lopdangki.php';
              break;
            }
            case 'tuyendung':{
              if(isset($_GET['id_taikhoan']) && $_GET['id_taikhoan'] > 0){
                update_role($_GET['id_taikhoan']);
                header('location: index.php');
              }
              include 'view/tuyendung.php';
              break; 
            }
            case 'hoadon':{
              if($_SESSION){
                $id_taikhoan = search_id_taikhoan($_SESSION['user']);
              }else{
                header('location: index.php?act=login');
              }
              $list_hoadon = list_hoadon_user($id_taikhoan);
              include 'view/hoadon.php';
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
