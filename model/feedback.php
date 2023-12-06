<?php


    function List_feedback($id_tk){
        $sql = "SELECT khoahoc.name_khoahoc, feedback.traloi_sinhvien, lophoc.ngaykhaigiang, lophoc.ngaybegiang, khoahoc.id_taikhoan
		FROM feedback 
        INNER JOIN lophoc on lophoc.id_lophoc = feedback.id_lophoc
        INNER JOIN phonghoc on phonghoc.id_phonghoc = lophoc.id_phonghoc
        INNER JOIN khoahoc on lophoc.id_khoahoc = khoahoc.id_khoahoc
        INNER JOIN trangthai on trangthai.id_trangthai = lophoc.id_trangthai
        INNER JOIN danhmuc_khoahoc on khoahoc.iddm_khoahoc = danhmuc_khoahoc.iddm_khoahoc
        INNER JOIN gio_hoc on gio_hoc.id_giohoc = phonghoc.id_giohoc
        WHERE khoahoc.id_taikhoan =$id_tk
        ";
        $result = pdo_query($sql);
        return $result;
    }

    function insert_feedback($id_dkkh,$id_tk, $noidung){
        $sql = "INSERT INTO `feedback` (`id_feedback`, `id_lophoc`, `id_taikhoan`, `traloi_sinhvien`) VALUES (NULL, '$id_dkkh', '$id_tk', '$noidung');";
        pdo_execute($sql);
    }
    function list_feedback_admin(){
        $sql = "SELECT taikhoan.user , khoahoc.id_taikhoan, khoahoc.name_khoahoc, trangthai.name_trangthai,khoahoc.luot_dangki,feedback.traloi_sinhvien,feedback.id_feedback
                FROM feedback INNER JOIN lophoc on lophoc.id_lophoc = feedback.id_lophoc
                INNER JOIN khoahoc on khoahoc.id_khoahoc = lophoc.id_khoahoc
                INNER JOIN taikhoan on taikhoan.id_taikhoan = feedback.id_taikhoan
                INNER JOIN trangthai on trangthai.id_trangthai = lophoc.id_trangthai";
        $result = pdo_query($sql);
        return $result;
    }

    function delete_feedback($id_feedback){
        $sql = "DELETE FROM `feedback` WHERE id_feedback = $id_feedback";
        pdo_execute($sql);
    }
?>