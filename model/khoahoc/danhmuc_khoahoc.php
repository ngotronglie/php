<?php 
    function danhsach_danhmuc_khoahoc(){
        $sql = "select * from danhmuc_khoahoc order by iddm_khoahoc desc";
        $result = pdo_query($sql);
        return $result;
    }


    function add_danhmuc_khoahoc($tendm){
        $sql = "INSERT INTO danhmuc_khoahoc(`namedm_khoahoc`) VALUES ('$tendm')";
        pdo_execute($sql);
    }


    function getone_danhmuc_khoahoc($iddm){
        $sql = "select * from danhmuc_khoahoc where iddm_khoahoc = '$iddm'";
        $result = pdo_query_one($sql);
        return $result;
    }


    function update_danhmuc_khoahoc($iddm, $tendm){
        $sql = "update danhmuc_khoahoc SET namedm_khoahoc='$tendm' WHERE iddm_khoahoc = '$iddm'";
        pdo_execute($sql);
    }


    function delete_danhmuc_khoahoc($iddm){
        $sql = "delete from danhmuc_khoahoc where iddm_khoahoc = $iddm";
        pdo_execute($sql);
    }

    
    // function thong_ke_danh_muc(){
    //     $sql ="SELECT COUNT(id) FROM danhmuc";
    //     $result = pdo_query_one($sql);
    //     return $result;
    // }
?>