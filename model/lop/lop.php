

<?php 
    function danhsach_lophoc(){
        $sql = "SELECT * FROM lophoc INNER JOIN phonghoc on lophoc.id_phonghoc = phonghoc.id_phonghoc
						INNER JOIN khoahoc on khoahoc.id_khoahoc = lophoc.id_khoahoc
                        INNER JOIN trangthai on trangthai.id_trangthai = lophoc.id_trangthai
                        INNER JOIN gio_hoc on gio_hoc.id_giohoc = phonghoc.id_giohoc
                        INNER JOIN taikhoan on taikhoan.id_taikhoan = khoahoc.id_taikhoan order by id_lophoc desc";
        $result = pdo_query($sql);
        return $result;
    }

    function add_lophoc($phong,$khoahoc, $ngaykhaigiang,$ngaybegiang,$nhomzalo,$trangthai){
        $sql ="INSERT INTO `lophoc` (`id_phonghoc`, `id_khoahoc`, `ngaykhaigiang`, `ngaybegiang`, `nhomzalo`, `id_trangthai`) 
        VALUES ('$phong', '$khoahoc', '$ngaykhaigiang', '$ngaybegiang', '$nhomzalo', '$trangthai')";
        pdo_execute($sql);
    }



?>