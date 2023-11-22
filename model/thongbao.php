<?php
    function add_thongbao($photo,$title,$noidung){
        $date = date('d/m/Y');
        $sql ="INSERT INTO `thongbao` (`id_thongbao`, `img_thongbao`, `title`, `noidung_thongbao`, `ngaythongbao`) 
        VALUES (NULL, '$photo', '$title', '$noidung', '$date')";
        pdo_execute($sql);
    }


    function list_thongbao(){
        $sql = "select * from thongbao";
        $result = pdo_query($sql);
        return $result;
    }


    function getone_thongbao($idtb){
        $sql = "select * from thongbao where id_thongbao = '$idtb'";
        $result = pdo_query_one($sql);
        return $result;
    }


    function update_thongbao($photo,$title,$noidung,$idtb){
        $thongbao = getone_thongbao($idtb);
        if($photo != null){
            if($thongbao['img_thongbao'] != null && $thongbao['img_thongbao'] != ""){
                $imglink = "../upload/thongbao/".$thongbao['img_thongbao'];
                unlink($imglink);
            }
            $sql = "update thongbao set img_thongbao='$photo', title = '$title', noidung_thongbao = '$noidung' where id_thongbao = $idtb";
        }else{
            $sql = "update thongbao set title = '$title', noidung_thongbao = '$noidung', where id_thongbao = $idtb";
        }
        
        pdo_execute($sql);
    }
    function delete_thongbao($idtb){
        $thongbao = getone_thongbao($idtb);
        if($thongbao['img_thongbao'] != null && $thongbao['img_thongbao'] != ""){
            $imglink = "../upload/thongbao/".$thongbao['img_thongbao'];
            unlink($imglink);
        }
        $sql = "delete from thongbao where id_thongbao = $idtb";
        pdo_execute($sql);
    }
?>