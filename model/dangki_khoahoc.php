<?php
    function insert_dangki($id_taikhoan, $id_lophoc){
        $date = date('d/m/Y');
        $sql = "INSERT INTO `hoadon` (`id_hoadon`, `id_taikhoan`, `id_lophoc`, `ngaymua`) VALUES (NULL, '$id_taikhoan', '$id_lophoc', '$date');";
            pdo_execute($sql);
    }
    function danhsach_dadangki($user){
        
    }
    ?>