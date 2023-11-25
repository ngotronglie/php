<?php
    function insert_diem($id_taikhoan, $id_lophoc){
        $sql = "INSERT INTO `diemtongket` (`id_tongket`, `id_lophoc`, `id_taikhoan`, `diem`, `nhanxet`) 
        VALUES (NULL, '$id_lophoc', '$id_taikhoan', '0', NULL)";
        pdo_execute($sql);
    }


?>