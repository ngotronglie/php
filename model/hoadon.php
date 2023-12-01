<?php
    function insert_dangkikhoahoc($id_taikhoan, $id_lophoc){
        $date = date('d/m/Y');
        $sql = "INSERT INTO `dangki_khoahoc` (`id_dkkhoahoc`, `id_lophoc`, `id_taikhoan`, `ngaydangki_khoahoc`) 
        VALUES (NULL, '$id_lophoc', '$id_taikhoan', '$date');";
            pdo_execute($sql);
    }


    function list_hoadon(){
        $sql = "SELECT * FROM `hoadon` 
        INNER JOIN taikhoan on taikhoan.id_taikhoan = hoadon.id_taikhoan 
        INNER JOIN lophoc on lophoc.id_lophoc = hoadon.id_lophoc
        INNER JOIN khoahoc on khoahoc.id_khoahoc = lophoc.id_khoahoc
        ";
        $result = pdo_query($sql);
        return $result;
    }

    function list_hoadon_user($id){
        $sql = "SELECT * FROM `hoadon` 
        INNER JOIN taikhoan on taikhoan.id_taikhoan = hoadon.id_taikhoan 
        INNER JOIN lophoc on lophoc.id_lophoc = hoadon.id_lophoc
        INNER JOIN khoahoc on khoahoc.id_khoahoc = lophoc.id_khoahoc
        where hoadon.id_taikhoan = $id;
        ";
        $result = pdo_query($sql);
        return $result;
    }
?>