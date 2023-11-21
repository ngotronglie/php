<?php 
    function danhsach_khoahoc(){
        $sql = "SELECT * FROM khoahoc INNER JOIN taikhoan on khoahoc.id_taikhoan = taikhoan.id_taikhoan 
                                      INNER JOIN danhmuc_khoahoc on khoahoc.iddm_khoahoc = danhmuc_khoahoc.iddm_khoahoc";
        $result = pdo_query($sql);
        return $result;
    }


    function add_khoahoc($iddmkh, $photo, $name_kh, $noidung_kh, $gia,$idtk,$giamgia){
        $sql = "INSERT INTO `khoahoc` (`iddm_khoahoc`, `img_khoahoc`, `name_khoahoc`, `noidung_khoahoc`, `price_khoahoc`,`id_taikhoan`, `giamgia`) 
        VALUES ('$iddmkh', '$photo', '$name_kh', '$noidung_kh', '$gia', '$idtk', '$giamgia');";
        pdo_execute($sql);
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
        $sql = "SELECT * FROM khoahoc WHERE iddm_khoahoc = $id";
        $result = pdo_query($sql);
        return $result;
    }
    function timkiem_khoahoc($keyword){
        $sql = "SELECT * from khoahoc where name_khoahoc like '%$keyword%'";
        $result = pdo_query($sql);
        return $result;
    }
    function tangluotxem($id){
        $khoahoc = getone_chitiet_khoahoc($id);
        $luotxem = $khoahoc['luot_xem'] + 1;
        $sql = "update khoahoc set luot_xem = $luotxem where id_khoahoc = $id";
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

?>