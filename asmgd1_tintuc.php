<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="asmgd1_tintuc.css" />
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
    <?php
        include_once 'connectdb.php';
        $sql = "select * from tintuc order by id desc";
        $result = $conn->query($sql);
        foreach ($result as $row) {
        ?>
        <section class="product">
        <a href="chitietlh.php">
          <section class="nd1">
            <figure><img src="image/<?php echo $row['img'] ?>"></figure>
            <section class="nd11">
              <h3><?php echo $row['name'] ?></h3>
              <figcaption>
              <?php echo $row['detail'] ?>
              </figcaption>
            </section>
          </section>
        </a>
      </section>
            
        <?php } ?>
      <section class="product">
        <a href="chitietlh.php">
          <section class="nd1">
            <figure><img src="4303113 1.png" alt="" /></figure>
            <section class="nd11">
              <h3>Thông tin về CreamyHeaven</h3>
              <figcaption>
                Chào mừng quý khách đến với CreamyHeaven - nơi mang đến hương vị
                thiên đường bánh ngọt trong lòng thành phố. Với ngày khai trương
                vào ngày 26/3/2022, chúng tôi tự hào cung cấp những món bánh
                tuyệt đỉnh và dịch vụ chất lượng để làm cho trải nghiệm của quý
                khách trở nên đáng nhớ.
              </figcaption>
            </section>
          </section>
        </a>
      </section>
    </main>
    <footer>Copyrights © 2023 by Bánh ngọt Heaven</footer>
  </body>
</html>
