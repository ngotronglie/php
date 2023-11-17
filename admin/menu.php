<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="?act=trangchu">Trang chủ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="?act=dsdm">Danh mục</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?act=dssp">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?act=dskh">Khách hàng</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="index.php?act=binhluan">Bình luận</a>
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
                
                  echo '
                      <li class="nav-item">
                        Hello admin, '.$_SESSION['email'].' <a  class="text-light" href="index.php?act=logout_ad"><button onclick="return confirm("bạn chắc chắn đăng xuất chứ")" class="btn btn-danger">đăng xuất</button></a>
                      </li>
                  ';
                }
              ?>
              
            </ul>
        </div>
    </div>
</nav>