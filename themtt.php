<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css" />
</head>
<body>
<header>
      <nav>
        <ul>
          <li><a href="themsp.php">Thêm Sản Phẩm</a></li>
          <li><a href="hienthi.php">Xem sản Phẩm</a></li>
          <li><a href="themtt.php">Thêm Tin tức</a></li>
          <li><a href="hienthitt.php">Xem tin tức</a></li>
        </ul>
      </nav>
    </header>
    <h1>thêm tin tuc</h1>
     <form action="" method="post" enctype="multipart/form-data">
     <p>tiêu đề tin tức</p> <input type="text" name="name">
     <p>ảnh sản phẩm</p> <input type="file" name="img"> 
     <p>chi tiết tin tức</p> <input type="text" name="detail">
     <input type="submit" value="thêm tin tức" name="btn_submit">
    </form>
    <?php 
    include_once 'connectdb.php';
    if(isset($_POST["btn_submit"])){
        $name= $_POST['name'];
        $detail=$_POST["detail"];
        $name_img=$_FILES['img']['name'];
        $tmp_img=$_FILES['img']['tmp_name'];
        move_uploaded_file($tmp_img,"image/".$name_img);
        $sql_insert="insert into tintuc value(null,'$name_img','$name','$detail')";
        $result=$conn->prepare($sql_insert);
        if($result->execute()){
            header("location:hienthitt.php");
        }
        else  {
            echo"không thêm được tin tức";
        }

    }
    ?>
</body>
</html>