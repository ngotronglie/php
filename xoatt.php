<?php
include_once 'connectdb.php';
    $id=$_GET['this_id'];
    $sql_select = "DELETE from tintuc where id='$id'";
    $result = $conn->query($sql_select);
    header('locaton:hienthi.php');
?>