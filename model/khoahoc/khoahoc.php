<?php 
    function danhsach_khoahoc(){
        $sql = "SELECT * FROM khoahoc INNER JOIN taikhoan on khoahoc.id_taikhoan = taikhoan.id_taikhoan 
                                      INNER JOIN danhmuc_khoahoc on khoahoc.iddm_khoahoc = danhmuc_khoahoc.iddm_khoahoc order by id_khoahoc desc";
        $result = pdo_query($sql);
        return $result;
    }


    function add_khoahoc($iddmkh, $photo, $name_kh, $noidung_kh, $gia,$idtk,$giamgia){
        $sql = "INSERT INTO `khoahoc` (`iddm_khoahoc`, `img_khoahoc`, `name_khoahoc`, `noidung_khoahoc`, `price_khoahoc`,`id_taikhoan`, `giamgia`) 
        VALUES ('$iddmkh', '$photo', '$name_kh', '$noidung_kh', '$gia', '$idtk', '$giamgia');";
        pdo_execute($sql);
    }
    function getone_khoahoc_($id){
        $sql = "select * from khoahoc where id_khoahoc = '$id'";
        $result = pdo_query_one($sql);
        return $result;
    }

    function getone_khoahoc($iddm){
        $sql = "select * from danhmuc_khoahoc where iddm_khoahoc = '$iddm'";
        $result = pdo_query_one($sql);
        return $result;
    }
    function getone_ct_khoahoc($id){
        $sql = "select * from khoahoc where id_khoahoc = '$id'";
        $result = pdo_query_one($sql);
        return $result;
    }
    function getone_chitiet_khoahoc($id){
        $sql = "SELECT * from khoahoc INNER JOIN danhmuc_khoahoc on khoahoc.iddm_khoahoc = danhmuc_khoahoc.iddm_khoahoc
                                    INNER JOIN taikhoan on khoahoc.id_taikhoan = taikhoan.id_taikhoan where id_khoahoc = '$id'";
        $result = pdo_query_one($sql);
        return $result;
    }


    function update_khoahoc($iddm, $tendm){
        $sql = "update danhmuc_khoahoc SET namedm_khoahoc='$tendm' WHERE iddm_khoahoc = '$iddm'";
        pdo_execute($sql);
    }
    function update_khoahoc_($tenkhoahoc, $noidung, $price, $giangvien,$danhmuckhoahoc,$photo, $id){
        $khoahoc = getone_khoahoc_($id);
        if($photo != null){
            if($khoahoc['img_khoahoc'] != null && $khoahoc['img_khoahoc'] != ""){
                $imglink = "../upload/khoahoc/".$khoahoc['img_khoahoc'];
                unlink($imglink);
            }
            $sql = "update khoahoc set img_khoahoc ='$photo', name_khoahoc = '$tenkhoahoc', noidung_khoahoc = '$noidung', price_khoahoc = '$price',id_taikhoan = '$giangvien',iddm_khoahoc = '$danhmuckhoahoc'  where id_khoahoc = $id";
        }else{
            $sql = "update khoahoc set name_khoahoc = '$tenkhoahoc', noidung_khoahoc = '$noidung', price_khoahoc = '$price',id_taikhoan = '$giangvien',iddm_khoahoc = '$danhmuckhoahoc'  where id_khoahoc = $id";
        }
        
        pdo_execute($sql);
    }


    function delete_khoahoc($iddm){
        $sql = "delete from danhmuc_khoahoc where iddm_khoahoc = $iddm";
        pdo_execute($sql);
    }

    
    // function thong_ke_danh_muc(){
    //     $sql ="SELECT COUNT(id) FROM danhmuc";
    //     $result = pdo_query_one($sql);
    //     return $result;
    // }
    function search_danhmuc_kh($id){
        $sql = "SELECT * FROM khoahoc inner join taikhoan on khoahoc.id_taikhoan = taikhoan.id_taikhoan WHERE iddm_khoahoc = $id";
        $result = pdo_query($sql);
        return $result;
    }
    function timkiem_khoahoc($keyword){
        $sql = "SELECT * from khoahoc inner join taikhoan on taikhoan.id_taikhoan = khoahoc.id_taikhoan where name_khoahoc like '%$keyword%'";
        $result = pdo_query($sql);
        return $result;
    }
    function tangluotxem($id){
        $khoahoc = getone_chitiet_khoahoc($id);
        $luotxem = $khoahoc['luot_xem'] + 1;
        $sql = "update khoahoc set luot_xem = $luotxem where id_khoahoc = $id";
        pdo_query($sql);
    }
    function tangluotdangki($id_lop){
        $id_phong = "SELECT khoahoc.id_khoahoc FROM khoahoc INNER JOIN lophoc on khoahoc.id_khoahoc = lophoc.id_khoahoc where  id_lophoc = $id_lop";
        $id_khoahoc = pdo_query_one($id_phong);
        $id_khoahoc_ = $id_khoahoc['id_khoahoc'];
        $luotdangki = "SELECT khoahoc.luot_dangki from khoahoc WHERE id_khoahoc = $id_khoahoc_";
        $luotdangki_ = pdo_query_one($luotdangki);
        $luotdangki__ = $luotdangki_['luot_dangki'] + 1;
        $sql = "UPDATE khoahoc SET khoahoc.luot_dangki = '$luotdangki__' WHERE id_khoahoc = $id_khoahoc_";
        pdo_query($sql);
    }
    function top10_view(){
        $sql = "select * from khoahoc order by luot_xem desc limit 0,10";
        $result = pdo_query($sql);
        return $result;
    }
    function khoahoc_cungloai($id){
        $khoahoc = getone_ct_khoahoc($id);
        $iddm = $khoahoc['iddm_khoahoc'];
        $sql = "SELECT * FROM khoahoc where iddm_khoahoc = $iddm and id_khoahoc <> $id limit 0,4";
        $result = pdo_query($sql);
        return $result;
    }
    function list_lophoc_cung_name($namekh){
        $sql = "SELECT *
            FROM lophoc
            INNER JOIN khoahoc ON lophoc.id_khoahoc = khoahoc.id_khoahoc
            INNER JOIN phonghoc ON lophoc.id_phonghoc = phonghoc.id_phonghoc
            INNER JOIN trangthai ON lophoc.id_trangthai = trangthai.id_trangthai
            INNER JOIN gio_hoc ON phonghoc.id_giohoc = gio_hoc.id_giohoc
            INNER JOIN taikhoan ON khoahoc.id_taikhoan = taikhoan.id_taikhoan
            WHERE name_khoahoc = '$namekh';
        ";
        $result = pdo_query($sql);
        return $result;
    }

    function delete_khoahoc_($id_khoahoc){
        $thongbao = getone_khoahoc_($id_khoahoc);
        if($thongbao['img_khoahoc'] != null && $thongbao['img_khoahoc'] != ""){
            $imglink = "../upload/khoahoc/".$thongbao['img_khoahoc'];
            unlink($imglink);
        }
        $sql = "delete from khoahoc where id_khoahoc = $id_khoahoc";
        pdo_execute($sql);
    }
?>