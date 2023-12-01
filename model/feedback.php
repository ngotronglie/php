<?php


    function List_feedback($id_tk){
        $sql = "SELECT * FROM feedback 
        INNER JOIN lophoc on lophoc.id_lophoc = feedback.id_lophoc
        INNER JOIN phonghoc on phonghoc.id_phonghoc = lophoc.id_phonghoc
        INNER JOIN khoahoc on lophoc.id_khoahoc = khoahoc.id_khoahoc
        INNER JOIN trangthai on trangthai.id_trangthai = lophoc.id_trangthai
        INNER JOIN danhmuc_khoahoc on khoahoc.iddm_khoahoc = danhmuc_khoahoc.iddm_khoahoc
        INNER JOIN gio_hoc on gio_hoc.id_giohoc = phonghoc.id_giohoc
        WHERE khoahoc.id_taikhoan = $id_tk
        ";
        $result = pdo_query($sql);
        return $result;
    }

    function insert_feedback($id_dkkh,$id_tk, $noidung){
        $sql = "INSERT INTO `feedback` (`id_feedback`, `id_lophoc`, `id_taikhoan`, `traloi_sinhvien`) VALUES (NULL, '$id_dkkh', '$id_tk', '$noidung');";
        pdo_execute($sql);
    }
?>