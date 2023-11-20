<?php


    function load_binhluan($idsp)
    {
        $sql ="
            SELECT binhluan.noidung, binhluan.ngaybinhluan,taikhoan.user from `binhluan`
            left join taikhoan on binhluan.iduser = taikhoan.id
            left join sanpham on binhluan.idpro = sanpham.id
            where sanpham.id = $idsp
        ";
        $result = pdo_query($sql);
        return $result;
    }

    

    function insert_binhluan($idpro, $noidung,$iduser)
    {   
        $date = date('Y-m-d');
        $sql = "INSERT INTO `binhluan`(`noidung`, `iduser`, `idpro`, `ngaybinhluan`)
        values('$noidung','$iduser','$idpro','$date')
        ";
        pdo_execute($sql);
    }

    function list_binhluan(){
        $sql = "
            SELECT binhluan.id , binhluan.noidung, taikhoan.user, sanpham.name, binhluan.ngaybinhluan 
            from binhluan 
            INNER JOIN taikhoan on binhluan.iduser = taikhoan.id
            INNER JOIN sanpham on binhluan.idpro = sanpham.id
        ";
        $result = pdo_query($sql);
        return $result;
    }
    function delete_binhluan($id_bl){
        $sql = "DELETE FROM binhluan WHERE id = $id_bl";
        pdo_execute($sql);
    }

    function thong_ke_binh_luan(){
        $sql ="SELECT COUNT(id) FROM binhluan";
        $result = pdo_query_one($sql);
        return $result;
    }
?>
<!-- chua lam -->