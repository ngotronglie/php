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
    


?>