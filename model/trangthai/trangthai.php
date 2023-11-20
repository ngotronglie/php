<?php 
    function danhsach_trangthai(){
        $sql = "SELECT * FROM trangthai LEFT JOIN danhmuc_trangthai on trangthai.iddm_trangthai = danhmuc_trangthai.iddm_trangthai";
        $result = pdo_query($sql);
        return $result;
    }


    function add_trangthai($trangthai,$iddm){
        $sql = "INSERT INTO trangthai(`name_trangthai`, `iddm_trangthai`)
        VALUES('$trangthai', '$iddm')";
        pdo_execute($sql);
    }


    function getone_trangthai($iddm){
        $sql = "select * from trangthai where id_trangthai = '$iddm'";
        $result = pdo_query_one($sql);
        return $result;
    }


    function update_trangthai($name_dm, $iddm,$id){
        $sql = "UPDATE trangthai set name_trangthai ='$name_dm', iddm_trangthai = '$iddm'
                WHERE id_trangthai = '$id'
                ";
        pdo_execute($sql);
    }


    function delete_trangthai($iddm){
        $sql = "delete from danhmuc_trangthai where iddm_trangthai = $iddm";
        pdo_execute($sql);
    }

    
    // function thong_ke_danh_muc(){
    //     $sql ="SELECT COUNT(id) FROM danhmuc";
    //     $result = pdo_query_one($sql);
    //     return $result;
    // }
?>