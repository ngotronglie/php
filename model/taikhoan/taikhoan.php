<?php
//  đăng kí 

    function insert_taikhoan($name,$pass,$email,$adress,$phone)
    {
        $sql = "INSERT into `taikhoan` (`user` , `pass`, `email`, `address`, `tel` ) 
        values ('$name' ,'$pass', '$email','$adress', '$phone')";
        pdo_execute($sql);

    }

//  đăng nhập 
    function dangnhap($email, $pass)
    {
        $sql = "SELECT * FROM taikhoan WHERE email = '$email' and pass = '$pass'";
        $taikhoan = pdo_query_one($sql);
        if($taikhoan != false) {
            
            $_SESSION['email'] = $email;
            if($taikhoan['role'] == 0){
                // trang user
                header('Location: index.php');
            }
            if($taikhoan['role'] == 1){
                // trang nhân viên
                header('Location: admin/index.php');
            }
            if($taikhoan['role'] == 2){
                // trang giảng viên
                header('Location: admin/index.php');
            }
            if($taikhoan['role'] == 3){
                // trang admin
                header('Location: admin/index.php');
            }
            // header('location: index.php');
            return  "
            <div class='alert alert-success mt-3' role='alert'>
                Thông tin tài khoản dung!
            </div>
            ";
            // header('location: index.php');
        }else{
            $thongbao = "
            <div class='alert alert-danger mt-3' role='alert'>
                Thông tin tài khoản sai!
            </div>
            ";
            return $thongbao;
        }
        
    }

//  đăng xuất
    function dangxuat(){
        if(isset($_SESSION['email'])){
            unset($_SESSION['email']);
            header('location:index.php');
        }
    }



?>