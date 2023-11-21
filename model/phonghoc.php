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
                WHERE id_phong = '$id__'
                ";
        pdo_execute($sql);
    }

    function delete_phonghoc($iddm){
        $sql = "delete from phonghoc where id_phonghoc = $iddm";
        pdo_execute($sql);
    }

    
    // function thong_ke_danh_muc(){
    //     $sql ="SELECT COUNT(id) FROM danhmuc";
    //     $result = pdo_query_one($sql);
    //     return $result;
    // }
?>