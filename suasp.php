<?php
include_once 'connectdb.php';
    $id=$_GET['this_id'];
    $sql_select = "SELECT * from sanpham where id=$id";
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
    <h1>Sửa sản phẩm</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
        <p>tên sản phẩm</p> <input type="text" name="name" value="<?php echo $result['name'] ?>">
        <p>ảnh sản phẩm</p> <img src="image/<?php echo $result['img'] ?>" alt="">
        <input type="file" name="img">
        <p>giá</p> <input type="text" name="price" value="<?php echo $result['price'] ?>">
        <input type="submit" value="sửa sản phẩm" name="btn_update">
    </form>
    <?php
    if (isset($_POST['btn_update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $sql_update = "UPDATE sanpham set name='$name',price='$price'where id='$id'";
        $result_update=$conn->prepare($sql_update);
        if($result_update->execute()){
            header("location:hienthi.php");
        
        }
        else {
            echo'không sửa được sản phẩm';
        }
    }
    ?>
</body>

</html>