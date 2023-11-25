

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
    function update_lophoc($id_lophoc, $idphong, $ngaykhaigiang,$ngaybegiang, $idkhoahoc, $zalo, $idtrangthai){
        $sql = "UPDATE `lophoc` 
                SET `id_phonghoc` = '$idphong', `id_khoahoc` = '$idkhoahoc', `ngaykhaigiang` = '$ngaykhaigiang', 
                `ngaybegiang` = '$ngaybegiang', `nhomzalo` = '$zalo', `id_trangthai` = '$idtrangthai' WHERE `lophoc`.`id_lophoc` = $id_lophoc;";
        pdo_execute($sql);
    }

    function add_lophoc($phong,$khoahoc, $ngaykhaigiang,$ngaybegiang,$nhomzalo,$trangthai){
        $sql ="INSERT INTO `lophoc` (`id_phonghoc`, `id_khoahoc`, `ngaykhaigiang`, `ngaybegiang`, `nhomzalo`, `id_trangthai`) 
        VALUES ('$phong', '$khoahoc', '$ngaykhaigiang', '$ngaybegiang', '$nhomzalo', '$trangthai')";
        pdo_execute($sql);
    }
    function delete_lophoc($id){
        $sql = "DELETE FROM `lophoc` WHERE `id_lophoc` = '$id'";
        pdo_execute($sql);
    }

    function getone_lophoc($id){
        $sql = "select * from lophoc INNER JOIN khoahoc on khoahoc.id_khoahoc = lophoc.id_khoahoc where lophoc.id_lophoc = '$id'";
        $result = pdo_query_one($sql);
        return $result;
    }
    function list_lopda_dangki($id_taikhoan){
        $sql = "
        SELECT * FROM dangki_khoahoc INNER JOIN taikhoan on taikhoan.id_taikhoan = dangki_khoahoc.id_taikhoan 
        INNER JOIN lophoc on lophoc.id_lophoc = dangki_khoahoc.id_lophoc
        INNER JOIN khoahoc on lophoc.id_khoahoc = khoahoc.id_khoahoc
        INNER JOIN phonghoc on phonghoc.id_phonghoc = lophoc.id_phonghoc
        INNER JOIN gio_hoc on gio_hoc.id_giohoc = phonghoc.id_giohoc
        INNER JOIN trangthai on trangthai.id_trangthai = lophoc.id_trangthai
        INNER JOIN danhmuc_trangthai on danhmuc_trangthai.iddm_trangthai = trangthai.iddm_trangthai
        INNER JOIN danhmuc_khoahoc on danhmuc_khoahoc.iddm_khoahoc = khoahoc.iddm_khoahoc 
        WHERE taikhoan.id_taikhoan = '$id_taikhoan' order by id_dkkhoahoc  desc
        ";
        $result = pdo_query($sql);
        return $result;

    }
    
    function getone_giangvien($id){
        $sql ="SELECT taikhoan.user FROM taikhoan WHERE id_taikhoan = $id ";
        $result = pdo_query_one($sql);
        return $result;
    }
    function diem($diem){
        if($diem == 0){
            echo "<span class='badge badge-light'>Chưa đánh giá</span>";
        }
        if($diem >0 && $diem <= 3){
            echo "<span class='badge badge-danger text-light'>yếu</span>";
        }
        if($diem > 3 && $diem  <= 5 ){
            echo "<span class='badge badge-danger text-light'>kém</span>";
        }
        if($diem > 5 && $diem  <= 6 ){
            echo "<span class='badge badge-secondary text-light'>trung bình</span>";
        }
        if($diem > 6 && $diem  <= 8 ){
            echo "<span class='badge badge-warning text-light'>Khá</span>";
        }
        if($diem > 8 && $diem  <= 9 ){
            echo "<span class='badge badge-primary text-light'>Giỏi</span>";
        }
        if($diem > 9 && $diem  <= 10 ){
            echo "<span class='badge badge-success text-light'>Xuất sắc</span>";
        }
    }
?>

