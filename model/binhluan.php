<?php


    function load_binhluan($idkh)
    {
        $sql ="
        SELECT * FROM binhluan
        LEFT JOIN taikhoan ON binhluan.id_taikhoan = taikhoan.id_taikhoan
        LEFT JOIN khoahoc on binhluan.id_khoahoc = khoahoc.id_khoahoc
        WHERE khoahoc.id_khoahoc = $idkh
        ";
        $result = pdo_query($sql);
        return $result;
    }

    function insert_binhluan($idkh, $noidung,$iduser)
    {   
        $date = date('d/m/Y');
        $sql = "INSERT into `binhluan`(`id_taikhoan`,`id_khoahoc`,`noidung_binhluan`,`ngaybinhluan` ) VALUES('$iduser','$idkh','$noidung', '$date')
        ";
        pdo_execute($sql);
    }

    function list_binhluan($id){
        $sql = "
            SELECT binhluan.id_binhluan, binhluan.noidung_binhluan, taikhoan.user , khoahoc.name_khoahoc, binhluan.ngaybinhluan
            FROM binhluan 
            INNER JOIN taikhoan on binhluan.id_taikhoan = taikhoan.id_taikhoan
            INNER JOIN khoahoc on binhluan.id_khoahoc = khoahoc.id_khoahoc where id_khoahoc = '$id' 
        ";
        $result = pdo_query($sql);
        return $result;
    }
    function danhsach_binhluan(){
        $sql ="SELECT * FROM binhluan
        LEFT JOIN taikhoan ON binhluan.id_taikhoan = taikhoan.id_taikhoan
        LEFT JOIN khoahoc on binhluan.id_khoahoc = khoahoc.id_khoahoc";
        $result = pdo_query($sql);
        return $result;
    }
    function delete_binhluan($id_bl){
        $sql = "DELETE FROM binhluan WHERE id_binhluan = $id_bl";
        pdo_execute($sql);
    }
?>