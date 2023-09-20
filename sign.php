<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    <form action="" method="post">
        <p>nhập tài khoản</p> <input type="text" name="use">
        <p>mật khẩu</p> <input type="text" name="pass" id="">
        <input type="submit" value="sign in" name="btn_sign">
    </form>
    <?php
        include_once 'connectdb.php';
        if(isset($_POST['btn_sign'])){
            $use_user=$_POST['use'];
            $use_pass=sha1($_POST['pass']);
            
            $sql="select * from sign where use_user='$use_user' and use_pass='$use_pass'";
            $result=$conn->query($sql);
            if($result->rowcount()==1){
                $_SESSION['use']=$use_user;
                header('location:admin.php');
            }else {
                echo"đăng nhập ko thành công";
            }
        } 
    ?>
</body>
</html>