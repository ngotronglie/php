<?php 
    function danhsach_danhmuc_khoahoc(){
        $sql = "select * from danhmuc";
        $result = pdo_query($sql);
        return $result;
    }


    function add_danhmuc_khoahoc($tendm){
        $sql = "insert INTO danhmuc(`name`) VALUES ('$tendm')";
        pdo_execute($sql);
    }


    function getone_danhmuc_khoahoc($iddm){
        $sql = "select * from danhmuc where id = $iddm";
        $result = pdo_query_one($sql);
        return $result;
    }


    function update_danhmuc_khoahoc($iddm, $tendm){
        $sql = "update danhmuc SET name='$tendm' WHERE id = $iddm";
        pdo_execute($sql);
    }


    function delete_danhmuc_khoahoc($iddm){
        $sql = "delete from danhmuc where id = $iddm";
        pdo_execute($sql);
    }

    
    // function thong_ke_danh_muc(){
    //     $sql ="SELECT COUNT(id) FROM danhmuc";
    //     $result = pdo_query_one($sql);
    //     return $result;
    // }
?>