<?php
//  đăng kí 

    function add_user($user, $pass, $email, $address,$phone, $mota){
        $sql ="INSERT INTO `taikhoan` (`id_taikhoan`, `user`, `pass`, `email`, `address`, `tel`, `mota`) 
        VALUES (NULL, '$user', '$pass', '$email', '$address', '$phone', '$mota')";
        pdo_execute($sql);
    }
    function check_quantri($user){
        $sql = "SELECT * FROM taikhoan where user = '$user'";
        $taikhoan = pdo_query_one($sql);
        if($taikhoan!= false){
            if($taikhoan['role'] == 1){
                echo '<a style="margin-left: 5px" class="btn btn-orange" href="./admin/index.php">quay lại quản trị</a>';
            }
            if($taikhoan['role'] == 3){
                echo '<a style="margin-left: 5px" class="btn btn-orange" href="./teacher/index.php">quay lại quản trị</a>';

            }
        }
    }
    function search_id_taikhoan($user){
        $sql = "SELECT id_taikhoan FROM taikhoan where user = '$user'";
        $result = pdo_query_one($sql);
        return $result['id_taikhoan'];
    }
    function checkuser($user, $pass){
        $sql = "SELECT * FROM taikhoan where user = '$user' and pass = '$pass'";
        $taikhoan = pdo_query_one($sql);
        if($taikhoan != false){
            $_SESSION['user'] = $user;
            if($taikhoan['role'] == 0 || $taikhoan['role'] == 5){
                header('location:index.php');
            }
            if($taikhoan['role'] == 1){
                header('location: admin/index.php');
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
    // đăng xuất
    function dangxuat_user(){
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
            header('Location: index.php');
        }
    }
    function dangxuat_admin(){
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
            header('Location: ../index.php');
        }
    }
    function dangxuat_giangvien(){
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
            header('Location: ../index.php');
        }
    }
    function danhsach_taikhoan(){
        $sql ="SELECT * FROM taikhoan ORDER BY id_taikhoan;
        ";
        $result = pdo_query($sql);
        return $result;
    }
    function danhsach_taikhoan_giangvien(){
        $sql ="SELECT * FROM taikhoan WHERE role = '3' ORDER BY id_taikhoan DESC;
        ";
        $result = pdo_query($sql);
        return $result;
    }
    function add_giangvien($user, $pass, $email, $address,$phone, $mota,){
        $role = 3;
        $sql ="INSERT INTO `taikhoan` (`id_taikhoan`, `user`, `pass`, `email`, `address`, `tel`, `mota`,`role`) 
        VALUES (NULL, '$user', '$pass', '$email', '$address', '$phone', '$mota', '$role')";
        pdo_execute($sql);
    }
    function update_giangvien($user, $pass, $email, $phone, $address, $mota, $id){
        $sql = "update taikhoan set user = '$user', pass = '$pass', address='$address', email = '$email', tel = '$phone', mota = '$mota' where id_taikhoan = '$id'";
        pdo_execute($sql);
    }
    function getone_taikhoan($id){
        $sql ="SELECT * FROM taikhoan where id_taikhoan = '$id'";
        $result = pdo_query_one($sql);
        return $result;
    }
    function delete_giangvien($id){
        $sql = "delete from taikhoan where id_taikhoan = '$id'";
        pdo_execute($sql);
    } 

    function update_role($id_taikhoan){
        $sql ="update taikhoan set role = '5' where id_taikhoan = '$id_taikhoan'";
        pdo_execute($sql);
    }
?>