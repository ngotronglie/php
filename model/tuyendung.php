<?php 

    function list_tuyendung(){
        $sql = "SELECT * FROM `taikhoan` WHERE role = 5";
        $result =pdo_query($sql);
        return $result;
    }
    function update_role_kochapnhan($id){
        $sql ="UPDATE taikhoan SET taikhoan.role = 0 WHERE id_taikhoan = '$id'";
        pdo_execute($sql);
    }
    function update_role_chapnhan($id){
        $sql ="UPDATE taikhoan SET taikhoan.role = 3 WHERE id_taikhoan = '$id'";
        pdo_execute($sql);
    }
?>