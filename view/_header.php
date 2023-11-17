<div class="header bg-secondary text-light p-4 ">
        SIÊU THỊ TRỰC TUYẾN TRỌNG LIÊM
        <marquee style="font-size: 15px;" behavior="" direction="">Shop Trọng Liêm kính chào quý khách, chúc quý khách có 1 ngày vui vẻ - bình an và hạnh phúc</marquee>
      </div>
      <!-- menu -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Trang chủ</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >Giới thiệu</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Liên hệ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Góp ý</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Hỏi đáp</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <?php 
                if(!$_SESSION)
                {
                  echo '<li class="nav-item">
                          <a class="nav-link" href="index.php?act=login">Đăng nhập</a>
                        </li> ';
                }else{
                  $confirm = "onclick='return confirm('ban xac nhan dang xuat')'";
                  echo '
                      <li class="nav-item">
                        Hello, '.$_SESSION['email'].' <a '.$confirm.' class="text-light" href="index.php?act=logout"><button  class="btn btn-danger">đăng xuất</button></a>
                      </li>
                  ';
                }
              ?>
              
            </ul>
          </div>
        </div>
      </nav>
