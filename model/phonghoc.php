<?php 
    function danhsach_phonghoc(){
        $sql = "SELECT * From phonghoc INNER JOIN gio_hoc on phonghoc.id_giohoc = gio_hoc.id_giohoc";
        $result = pdo_query($sql);
        return $result;
    }


    function add_phonghoc($phong,$mota,$slot,$id_giohoc){
        $sql = "INSERT INTO `phonghoc` (`name_phong`, `mota_lophoc`, `slot`, `id_giohoc`) VALUES ('$phong', '$mota', '$slot', '$id_giohoc')";
        pdo_execute($sql);
    }


    function getone_phonghoc($iddm){
        $sql = "select * from phonghoc where id_phonghoc = '$iddm'";
        $result = pdo_query_one($sql);
        return $result;
    }


    function update_phonghoc($name_dm, $mota,$id,$id_phong,$id__){
        $sql = "UPDATE phonghoc set name_phong ='$name_dm', mota_lophoc = '$mota', slot='$id_phong',id_giohoc ='$id'
                WHERE id_phonghoc = '$id__'
                ";
        pdo_execute($sql);
    }

    function delete_phonghoc($iddm){
        $sql = "delete from phonghoc where id_phonghoc = $iddm";
        pdo_execute($sql);
    }

    function update_slot($id_lophoc){
        $phonghoc = "SELECT phonghoc.slot FROM lophoc INNER JOIN phonghoc on lophoc.id_phonghoc = phonghoc.id_phonghoc WHERE id_lophoc = '$id_lophoc'";
        $slot = pdo_query_one($phonghoc);
        $update_slot = $slot['slot'] - 1;
        $sql = "UPDATE lophoc INNER JOIN phonghoc on lophoc.id_phonghoc = phonghoc.id_phonghoc SET phonghoc.slot = '$update_slot' WHERE id_lophoc = '$id_lophoc'";
        pdo_execute($sql);
    }
    
    // function thong_ke_danh_muc(){
    //     $sql ="SELECT COUNT(id) FROM danhmuc";
    //     $result = pdo_query_one($sql);
    //     return $result;
    // }
?>