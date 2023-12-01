<?php
    function getone_diemtongket($id_user){
        $sql = "SELECT * FROM `diemtongket`
                INNER JOIN taikhoan on diemtongket.id_taikhoan = taikhoan.id_taikhoan 
                INNER JOIN lophoc on lophoc.id_lophoc = diemtongket.id_lophoc
                INNER JOIN phonghoc on phonghoc.id_phonghoc = lophoc.id_phonghoc
                INNER JOIN khoahoc on khoahoc.id_khoahoc = lophoc.id_khoahoc 
             	WHERE diemtongket.id_taikhoan ='$id_user'";
        $result = pdo_query_one($sql);
        return $result;
    }

    function update_nhanxet_diem($diem, $nhanxet, $id_taikhoan){
        $sql = "UPDATE `diemtongket` SET `diem` = '$diem', `nhanxet` = '$nhanxet' WHERE `diemtongket`.`id_taikhoan` = $id_taikhoan;";
        pdo_execute($sql);
    }
?>