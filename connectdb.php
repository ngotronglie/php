<?php
try {
    $conn=new PDO("mysql:host=localhost; dbname=asm2;charset=utf8","root","");
} catch (\Throwable $th) {
    //throw $th;
    echo "kết nối không thành công";
}