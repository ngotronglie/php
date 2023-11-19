<?php 
    function list_banner(){
        $sql = "select * from danhmuc";
        $result = pdo_query($sql);
        return $result;
    }


    function add_banner($tendm){
        $sql = "insert INTO danhmuc(`name`) VALUES ('$tendm')";
        pdo_execute($sql);
    }


    function getone_banner($iddm){
        $sql = "select * from danhmuc where id = $iddm";
        $result = pdo_query_one($sql);
        return $result;
    }


    function update_banner($iddm, $tendm){
        $sql = "update danhmuc SET name='$tendm' WHERE id = $iddm";
        pdo_execute($sql);
    }
    function delete_banner($iddm){
        $sql = "delete from danhmuc where id = $iddm";
        pdo_execute($sql);
    }

    
    // function thong_ke_danh_muc(){
    //     $sql ="SELECT COUNT(id) FROM danhmuc";
    //     $result = pdo_query_one($sql);
    //     return $result;
    // }
?>