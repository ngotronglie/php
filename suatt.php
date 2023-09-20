<?php
include_once 'connectdb.php';
    $id=$_GET['this_id'];
    $sql_select = "SELECT * from tintuc where id=$id";
    echo $id;
    $result = $conn->query($sql_select)->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sửa SP</title>
    <style>
        img {
            width: 150px;
        }
    </style>
</head>

<body>
    <h1>Sửa tin tức</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
        <p>tên sản phẩm</p> <input type="text" name="name" value="<?php echo $result['name'] ?>">
        <p>ảnh sản phẩm</p> <img src="image/<?php echo $result['img'] ?>" alt="">
        <input type="file" name="img">
        <p>detail</p> <input type="text" name="detail" value="<?php echo $result['detail'] ?>">
        <input type="submit" value="sửa tin tức" name="btn_update">
    </form>
    <?php
    if (isset($_POST['btn_update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $detail = $_POST['detail'];
        $sql_update = "UPDATE tintuc set name='$name',detail='$detail'where id='$id'";
        $result_update=$conn->prepare($sql_update);
        if($result_update->execute()){
            header("location:hienthitt.php");
        
        }
        else {
            echo'không sửa được sản phẩm';
        }
    }
    ?>
</body>

</html>