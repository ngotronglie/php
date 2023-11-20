<?php
//  đăng kí 

    function add_user($user, $pass, $email, $address,$phone, $mota){
        $sql ="INSERT INTO `taikhoan` (`id_taikhoan`, `user`, `pass`, `email`, `address`, `tel`, `mota`) 
        VALUES (NULL, '$user', '$pass', '$email', '$address', '$phone', '$mota')";
        pdo_execute($sql);
    }
    function checkuser($user, $pass){
        $sql = "SELECT * FROM taikhoan where user = '$user' and pass = '$pass'";
        $taikhoan = pdo_query_one($sql);
        if($taikhoan != false){
            $_SESSION['user'] = $user;
            if($taikhoan['role'] == 0){
                header('location:index.php');
            }
            if($taikhoan['role'] == 1){
                header('location: admin/index.php');
            }
            if($taikhoan['role'] == 2){
                header('location: staff/index.php');
            }
            if($taikhoan['role'] == 3){
                header('location: teacher/index.php');

            }
            return "
                <div class='container'>
                    <div class='alert alert-success mt-3' role='alert'>
                        Thông tin tài khoản đúng!
                    </div>
                </div>
            ";
        }else{
            return "
                <div class='container'>
                    <div class='alert alert-danger mt-3' role='alert'>
                        Thông tin tài khoản sai!
                    </div>
                </div>
            ";
        }
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
?>