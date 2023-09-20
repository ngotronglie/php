<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="asmgd1_sanpham.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <img
        src="1000_F_213365489_JobgYpNj8yJWAbjAgLPTNSHnWuSYtyt3 1.png"
        alt=""
      />
      <nav>
      <ul>
          <li><a href="asmgd1_trangchu.php">Trang chủ</a></li>
          <li><a href="asmgd1_sanpham.php">Sản phẩm</a></li>
          <li><a href="asmgd1_tintuc.php">Tin Tức</a></li>
          <li><a href="asmgd1_lienhe.php">Liên hệ</a></li>
        </ul>
      </nav>
      <section class="sign"><a href="sign.php"><button>Đăng Nhập</button></a></section>
    </header>
    <main>
      <h2>Sản Phẩm</h2>
      <section class="all">
      <?php
        include_once 'connectdb.php';
        $sql = "select * from sanpham order by id desc";
        $result = $conn->query($sql);
        foreach ($result as $row) {
        ?>
        <section class="sp">
          <figure>
            <a href="chitietsp.php"><img src="image/<?php echo $row['img'] ?>" alt="" /></a>
          </figure>
          <figcaption><?php echo $row['name'] ?></figcaption>
          <p><?php echo $row['price'] ?> vnđ</p>
        </section>
            
        <?php } ?>
        <section class="sp">
          <figure>
            <a href="chitietsp.php"><img src="lythuyet/image.png" alt="" /></a>
          </figure>
          <figcaption>Bánh Caramel</figcaption>
          <p>230.000 vnđ</p>
        </section>
        <section class="sp">
          <figure>
            <a href=""><img src="lythuyet/image (1).png" alt="" /></a>
          </figure>
          <figcaption>Bánh Coconutl</figcaption>
          <p>230.000 vnđ</p>
        </section>
        <section class="sp">
          <figure>
            <a href=""><img src="lythuyet/image (2).png" alt="" /></a>
          </figure>
          <figcaption>Bánh kem nho</figcaption>
          <p>200.000 vnđ</p>
        </section>
        <section class="sp">
          <figure>
            <a href=""><img src="lythuyet/image (3).png" alt="" /></a>
          </figure>
          <figcaption>Bánh Lemon</figcaption>
          <p>200.000 vnđ</p>
        </section>
      </section>
      <section class="all">
        <section class="sp">
          <figure>
            <a href=""><img src="iloveimg-resized (1)/tc1.jpg" alt="" /></a>
          </figure>
          <figcaption>Bánh Hoa Quả a</figcaption>
          <p>200.000 vnđ</p>
        </section>
        <section class="sp">
          <figure>
            <a href=""><img src="iloveimg-resized (1)/tc2.jpg" alt="" /></a>
          </figure>
          <figcaption>Bánh Hoa Quả b</figcaption>
          <p>200.000 vnđ</p>
        </section>
        <section class="sp">
          <figure>
            <a href=""><img src="iloveimg-resized (1)/tc3.jpg" alt="" /></a>
          </figure>
          <figcaption>Bánh Hoa Quả c</figcaption>
          <p>200.000 vnđ</p>
        </section>
        <section class="sp">
          <figure>
            <a href=""><img src="iloveimg-resized (1)/tc5.jpg" alt="" /></a>
          </figure>
          <figcaption>Bánh Hoa Quả d</figcaption>
          <p>200.000 vnđ</p>
        </section>
      </section>
    </main>
    <footer>Copyrights © 2023 by Bánh ngọt Heaven</footer>
  </body>
</html>
