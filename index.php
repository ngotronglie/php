<?php 
  session_start();
  include "model/pdo.php";
  include "model/sanpham.php";
  include "model/danhmuc.php";
  include "model/taikhoan.php";
  include "model/binhluan.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Siêu thị trực tuyến</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./assets/css/user.css" />
  </head>
  <body>
    <div class="container">
      <!-- header -->
      <?php include "view/_header.php"?>
      <!-- main -->
        <?php
          // bien data chung
          $dssp = danhsach_sanpham();
          $dsdm = danhsach_danhmuc();
          $dstop10 = top10_sanpham_luotxem();
          // echo $_SESSION['email'];
          // controller
          if(isset($_GET['act']) && $_GET['act'] != "")
          {
            $act = $_GET['act'];
            switch($act){
              //  detail
              case "detail":{
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0)
                {
                  $sanpham = getone_sanpham($_GET['idsp']);
                  tangluotxem($_GET['idsp']);
                  $sp_cungloai = sanpham_cungloai($_GET['idsp']);
                }else{ 
                  echo "loi roi ne";
                }
                $binhluan = load_binhluan($_GET['idsp']);
                if(isset($_POST['guibinhluan']) && $_POST['guibinhluan'] != ""){
                  if($_SESSION){
                    $email = $_SESSION['email'];
                    $id_taikhoan = search_id_taikhoan($email);
                  }else{
                    $id_taikhoan  = 2;  // chỗ này vẫn chưa fix được
                  }
                  insert_binhluan($_POST['idpro'],$_POST['noidung'],$id_taikhoan);
                }
                include "view/detail.php";
                break;
              }
              case "searchdm":{
                if(isset($_GET['iddm']) && $_GET['iddm'] > 0){
                  $dssp = timkiemsp_danhmuc($_GET['iddm']);
                }
                include "view/_home.php";
                break;
              }
              case "searchsp":{
                if(isset($_POST['timkiem'])){
                  $dssp = timkiem_sanpham($_POST['keyword']);
                }
                include "view/_home.php";
                break;
              }

// ----------------------- login - signup -----------------------
              case "login":{
                if(isset($_POST['login']))
                {
                 $email = $_POST['email'];
                 $pass = $_POST['pass'];
               
                 $checkuser = dangnhap($email,$pass);
                //  if(isset($checkuser)){
                //   $_SESSION['email'] = $email;
                //   // $_SESSION['email'] = $checkuser;
                //   // header('location: index.php');
                //   $thongbao = "dang nhap thanh cong!";
                //   echo $thongbao;
                //  }else{
                //   $thongbao = "tai khoan khong ton tai!";
                //   echo $thongbao;
                //  }
                 
                }
                include "view/login/login.php";
                break;
              }

              case "signup":{
                if(isset($_POST['signup']))
                {
                  echo $_POST['signup'];
                  $name = $_POST['name'];
                  $email = $_POST['email'];
                  $phone = $_POST['phone'];
                  $adress = $_POST['dc'];
                  $pass = $_POST['pass'];
                  insert_taikhoan($name,$pass,$email,$adress,$phone);
                  $thongbao = "<div class='alert alert-success mt-3' role='alert'>
                                  Đăng kí thành công!
                              </div>";
                              
                }
                include "view/login/signup.php";
                
                break;
              }
              case "logout":{
                dangxuat();
                include "view/slide.php";
                include "view/_home.php";
                break;
              }
              case "quenmk":{
                if(isset($_POST['guiemail']))
                {
                  $email = $_POST['email'];
                  $sendMailMess = sendMail($email);
                }
                include "view/login/quenmk.php";
                break;
              }


              default:
                include "view/slide.php";
                include "view/_home.php";
                break;
            }
          }else{
            include "view/slide.php";
            include "view/_home.php";
          }
        ?>
      <!-- footer -->
        <?php include "view/_footer.php"?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
