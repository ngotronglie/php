<?php 
    function danhsach_danhmuc_trangthai(){
        $sql = "select * from danhmuc_trangthai order by iddm_trangthai desc";
        $result = pdo_query($sql);
        return $result;
    }


    function add_danhmuc_trangthai($tendm){
        $sql = "INSERT INTO danhmuc_trangthai(`namedm_trangthai`) VALUES ('$tendm')";
        pdo_execute($sql);
    }


    function getone_danhmuc_trangthai($iddm){
        $sql = "select * from danhmuc_trangthai where iddm_trangthai = '$iddm'";
        $result = pdo_query_one($sql);
        return $result;
    }


    function update_danhmuc_trangthai($iddm, $tendm){
        $sql = "update danhmuc_trangthai SET namedm_trangthai='$tendm' WHERE iddm_trangthai = '$iddm'";
        pdo_execute($sql);
    }


    function delete_danhmuc_trangthai($iddm){
        $sql = "delete from danhmuc_trangthai where iddm_trangthai = $iddm";
        pdo_execute($sql);
    }

    
    // function thong_ke_danh_muc(){
    //     $sql ="SELECT COUNT(id) FROM danhmuc";
    //     $result = pdo_query_one($sql);
    //     return $result;
    // }
?>