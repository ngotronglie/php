<?php
    function insert_hoadon($id_taikhoan, $id_lophoc){
        $date = date('d/m/Y');
        $sql = "INSERT INTO `dangki_khoahoc` (`id_dkkhoahoc`, `id_lophoc`, `id_taikhoan`, `ngaydangki_khoahoc`) 
        VALUES (NULL, '$id_lophoc', '$id_taikhoan', '$date');";
            pdo_execute($sql);
    }
?>