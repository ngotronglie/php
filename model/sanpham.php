<?php 
    function danhsach_sanpham(){
        $sql = "
            SELECT sanpham.id, sanpham.name, sanpham.price , 
            sanpham.discount, sanpham.image, sanpham.mota,
            danhmuc.name AS tendm FROM `sanpham` 
            LEFT JOIN danhmuc ON sanpham.id_dm = danhmuc.id 
        ";
        $result = pdo_query($sql);
        return $result;
    }


    function add_sanpham($tensp, $giasp, $giamgiasp, $photo, $motasp, $danhmucsp){
        $sql = "
            insert INTO sanpham(`name`, `price`, `discount`, `image`, `mota`, `id_dm`) VALUES ('$tensp','$giasp','$giamgiasp','$photo','$motasp','$danhmucsp')
        ";
        pdo_execute($sql);
    }


    function getone_sanpham($idsp){
        $sql = "select * from sanpham where id = $idsp";
        $result = pdo_query_one($sql);
        return $result;
    }

    
    function update_sanpham($tensp, $giasp, $giamgiasp, $photo, $motasp, $danhmucsp, $idsp){
        $sanpham = getone_sanpham($idsp);
        if($photo != null){
            if($sanpham['image'] != null && $sanpham['image'] != ""){
                $imglink = "../uploads/" . $sanpham['image'];
                unlink($imglink);
            }
            $sql = "
                update sanpham SET name='$tensp',price='$giasp',discount='$giamgiasp',image='$photo',mota='$motasp',id_dm='$danhmucsp' WHERE id = $idsp
            ";
        }else{
            $sql = "
                update sanpham SET name='$tensp',price='$giasp',discount='$giamgiasp',mota='$motasp',id_dm='$danhmucsp' WHERE id = $idsp
            ";
        }
        
        pdo_execute($sql);
    }

    function delete_sanpham($idsp){
        $sanpham = getone_sanpham($idsp);
        if($sanpham['image'] != null && $sanpham['image'] != ""){
            $imglink = "../uploads/" . $sanpham['image'];
            unlink($imglink);
        }
        $sql = "delete from sanpham where id = $idsp";
        pdo_execute($sql);
    }


    function top10_sanpham_luotxem(){
        $sql = "select * from sanpham order by luotxem desc limit 0, 10";
        $result = pdo_query($sql);
        return $result;
    }

    
    function sanpham_lienquan($idsp){
        $sanpham = getone_sanpham($idsp);
        $iddm = $sanpham['id_dm'];
        $sql = "select * from sanpham where id_dm = $iddm and id <> $idsp limit 0, 4";
        $result = pdo_query($sql);
        return $result;
    }

    function tangluotxem($idsp){
        $sanpham = getone_sanpham($idsp);
        $luotxem = $sanpham['luotxem'] + 1;
        $sql = "update sanpham set luotxem = $luotxem where id = $idsp";
        pdo_execute($sql);
    }


    function sanpham_cungloai($idsp){
        $sanpham = getone_sanpham($idsp);
        $iddm = $sanpham['id_dm'];
        $sql = "SELECT * FROM sanpham where id_dm = $iddm and id <> $idsp limit 0, 4";
        $result = pdo_query($sql);
        return $result;
    }


    function sanpham_themdanhmuc($iddm){
        $sql = "select * from sanpham where id_dm = $iddm";
        $result = pdo_query($sql);
        return $result;
    }


    function timkiemsp_danhmuc($iddm){
        $sql = "SELECT * from sanpham where id_dm = $iddm";
        $result = pdo_query($sql);
        return $result;
    }


    function timkiem_sanpham($keyword){
        $sql = "SELECT * FROM sanpham where name like '%$keyword%'";
        $result = pdo_query($sql);
        return $result;
    }


    function thong_ke_san_pham(){
        $sql ="SELECT COUNT(id) FROM sanpham";
        $result = pdo_query_one($sql);
        return $result;
    }
?>