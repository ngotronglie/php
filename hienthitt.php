<?php
    session_start();
    if(isset($_SESSION['use'])){
        echo"chào bạn".$_SESSION['use'];
     }else {
        echo "không tồn tại 1 session nào";
     }
?>
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
    <h1>hiển thị tin tức</h1>
    <a href="themtt.php"><button>thêm tin tức</button></a>
    <table border=1>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>img</td>
            <td>detail</td>
        </tr>
        <?php
        include_once 'connectdb.php';
        $sql = "select * from tintuc order by id desc";
        $result = $conn->query($sql);
        foreach ($result as $row) {
        ?>
        
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><img src="image/<?php echo $row['img'] ?>"></td>
                <td><?php echo $row['detail'] ?></td>
                <td><a href="suatt.php?this_id=<?php echo $row['id'] ?>">sửa</a></td>
                <td><a href="xoatt.php?this_id=<?php echo $row['id'] ?>">xóa</a></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>