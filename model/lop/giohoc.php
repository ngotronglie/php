<?php 
    function danhsach_giohoc(){
        $sql = "SELECT * from gio_hoc ORDER by id_giohoc DESC";
        $result = pdo_query($sql);
        return $result;
    }


    function add_giohoc($tendm){
        $sql = "INSERT INTO gio_hoc(`name_giohoc`) values ('$tendm')";
        pdo_execute($sql);
    }


    function getone_giohoc($id_gio_hoc){
        $sql = "select * from gio_hoc where id_giohoc = '$id_gio_hoc'";
        $result = pdo_query_one($sql);
        return $result;
    }


    function update_giohoc($id, $name){
        $sql = "update gio_hoc SET name_giohoc='$name' WHERE id_giohoc = '$id'";
        pdo_execute($sql);
    }


    function delete_giohoc($idgh){
        $sql = "delete from gio_hoc where id_giohoc = $idgh";
        pdo_execute($sql);
    }

    
    // function thong_ke_danh_muc(){
    //     $sql ="SELECT COUNT(id) FROM danhmuc";
    //     $result = pdo_query_one($sql);
    //     return $result;
    // }
?>