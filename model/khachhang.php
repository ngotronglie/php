<?php  
    function danhsach_khachhang(){
        $sql = "select * from taikhoan";
        $result = pdo_query($sql);
        return $result;
    }


    function add_khachhang($tenkh, $password, $email, $address, $tel, $role){
        $sql = "
            insert INTO taikhoan(`user`, `pass`, `email`, `address`, `tel`, `role`) VALUES ('$tenkh', '$password', '$email', '$address', '$tel', '$role')
        ";
        pdo_execute($sql);
    }


    function getone_khachhang($idkh){
        $sql = "select * from taikhoan where id = $idkh";
        $result = pdo_query_one($sql);
        return $result;
    }


    function update_khachhang($tenkh, $password, $email, $address, $tel, $role, $idkh){
        $sql = "
            UPDATE `taikhoan` SET `user`='$tenkh',`pass`='$password',`email`='$email',`address`='$address',`tel`='$tel',`role`='$role' WHERE id = $idkh
        ";
        pdo_execute($sql);
    }

    
    function delete_khachhang($idkh){
        $sql = "delete FROM `taikhoan` WHERE id = $idkh";
        pdo_execute($sql);
    }

    
?>