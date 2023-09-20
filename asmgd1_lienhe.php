<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="asmgd1_lienhe.css" />
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
      <section class="sign">
        <a href="sign.php"><button>Đăng Nhập</button></a>
      </section>
    </header>
    <main>
      <form action="" method="post">
        <h2>Xác nhận thông tin</h2>
        <p>Tên của bạn</p>
        <input class="a1" type="text" name="ten" required />
        <p>Giới tính</p>
        <input type="radio" value="nam" name="gt" />
        <label for="nam">Nam</label>
        <input type="radio" value="nu" name="gt" /> <label for="nu">Nữ</label>
        <p>SĐT</p>
        <input class="a1" type="text" name="sdt" required />
        <p>Email</p>
        <input class="a1" type="email" name="email" required />
        <p>Góp ý</p>
        <textarea class="a2" name="" id="" cols="30" rows="10"></textarea>
        <br />
        <input class="nut" type="submit" value="Gửi" name="btn_gui" />
      </form>
    </main>
    <footer>Copyrights © 2023 by Bánh ngọt Heaven</footer>
  </body>
</html>
