<?php 
    function tong_danhmuckhoahoc(){
        $sql = "SELECT COUNT(iddm_khoahoc) FROM danhmuc_khoahoc";
        $result = pdo_query_one($sql);
        return $result;
    }
    function tongkhoahoc(){
        $sql = "SELECT COUNT(id_khoahoc) FROM `khoahoc`";
        $result = pdo_query_one($sql);
        return $result;
    }

    function tongphonghoc(){
        $sql = "SELECT COUNT(id_phonghoc) FROM `phonghoc`";
        $result = pdo_query_one($sql);
        return $result;
    }

    function tonggiohoc(){
        $sql = "SELECT COUNT(id_giohoc) FROM `gio_hoc`";
        $result = pdo_query_one($sql);
        return $result;
    }
    function tonglophoc(){
        $sql = "SELECT COUNT(id_lophoc) FROM `lophoc` ";
        $result = pdo_query_one($sql);
        return $result;
    }
    function tongthongbao(){
        $sql = "SELECT COUNT(id_thongbao) FROM `thongbao`";
        $result = pdo_query_one($sql);
        return $result;
    }
    function tongbinhluan(){
        $sql = "SELECT COUNT(id_binhluan) FROM `binhluan`";
        $result = pdo_query_one($sql);
        return $result;
    }
    function tonghoadon(){
        $sql = "SELECT COUNT(id_hoadon) FROM `hoadon`";
        $result = pdo_query_one($sql);
        return $result;
    }
    function tongtrangthai(){
        $sql = "SELECT COUNT(id_trangthai) FROM `trangthai` ";
        $result = pdo_query_one($sql);
        return $result;
    }
    function tongdanhmuctrangthai(){
        $sql = "SELECT COUNT(iddm_trangthai) FROM `danhmuc_trangthai`";
        $result = pdo_query_one($sql);
        return $result;
    }

    //  thống kê 2
    function tongadmin(){
        $sql = "SELECT COUNT(id_taikhoan) FROM `taikhoan` WHERE role = 1";
        $result = pdo_query_one($sql);
        return $result;
    }
    function tonggiangvien(){
        $sql = "SELECT COUNT(id_taikhoan) FROM `taikhoan` WHERE role = 3";
        $result = pdo_query_one($sql);
        return $result;
    }
    function tongnguoidung(){
        $sql = "SELECT COUNT(id_taikhoan) FROM `taikhoan` WHERE role = 0";
        $result = pdo_query_one($sql);
        return $result;
    }
    function tongluotdangkigiangvien(){
        $sql = "SELECT COUNT(id_taikhoan) FROM `taikhoan` WHERE role = 5";
        $result = pdo_query_one($sql);
        return $result;
    }
    function taikhoanlophocchuaduyet(){
        $sql = "SELECT COUNT(id_dkkhoahoc) FROM `dangki_khoahoc` WHERE dangki_khoahoc.role_duyet = 0";
        $result = pdo_query_one($sql);
        return $result;
    }
    function taikhoanlophocdaduyet(){
        $sql = "SELECT COUNT(id_dkkhoahoc) FROM `dangki_khoahoc` WHERE dangki_khoahoc.role_duyet = 1";
        $result = pdo_query_one($sql);
        return $result;
    }

    // thống kê đầu tiên 

    function tongdoanhthu(){
        $sql = "SELECT SUM(kh.price_khoahoc - (kh.price_khoahoc * giamgia / 100)) AS gia
                FROM hoadon hd
                JOIN lophoc lh ON hd.id_lophoc = lh.id_lophoc
                JOIN khoahoc kh ON lh.id_khoahoc = kh.id_khoahoc;";
        $result = pdo_query_one($sql);
        return $result;
    }
    
    function tongluot_dangki(){
        $sql = "SELECT SUM(kh.luot_dangki) AS tong_dangki
        FROM khoahoc kh";
        $result = pdo_query_one($sql);
        return $result;
    }
    function tongluot_xem(){
        $sql = "SELECT SUM(kh.luot_xem) AS tong_xem
        FROM khoahoc kh";
        $result = pdo_query_one($sql);
        return $result;
    }
    // giảng viên

    function tong_lophoc_giangvien($id){
        $sql = "SELECT COUNT(*) AS TongKhoaHoc
        FROM khoahoc INNER JOIN lophoc on khoahoc.id_khoahoc = lophoc.id_khoahoc
        WHERE id_taikhoan = $id;";
        $result = pdo_query_one($sql);
        return $result;
    }
    function tong_hocvien($id){
        $sql = "SELECT COUNT(dangki_khoahoc.id_taikhoan) AS TongDangKy
        FROM khoahoc
        inner JOIN lophoc ON khoahoc.id_khoahoc = lophoc.id_khoahoc
        INNER JOIN dangki_khoahoc ON lophoc.id_lophoc = dangki_khoahoc.id_lophoc
        WHERE khoahoc.id_taikhoan = $id and dangki_khoahoc.role_duyet = 1";
        $result = pdo_query_one($sql);
        return $result;
    }
    function tong_feedback($id){
        $sql = "SELECT COUNT(feedback.traloi_sinhvien) AS SoLuongTraloi
        FROM khoahoc
        INNER JOIN lophoc ON khoahoc.id_khoahoc = lophoc.id_khoahoc
        INNER JOIN feedback ON lophoc.id_lophoc = feedback.id_lophoc
        WHERE khoahoc.id_taikhoan = $id";
        $result = pdo_query_one($sql);
        return $result;
    }

?>