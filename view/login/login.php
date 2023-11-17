<div class="row mt-5 main-web">
        <div class="col-md-4 offset-md-4">
          <h5 class="text-center">Nhập thông tin đăng nhập</h5>
          <form action="index.php?act=login" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"
                >Email address</label
              >
              <input
                type="email"
                class="form-control"
                id="exampleInputEmail1"
                name="email";
                placeholder="enter your email "
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >Password</label
              >
              <input
                type="password"
                class="form-control"
                id="exampleInputPassword1"
                name="pass";
                placeholder="enter your password"
              />
            </div>
            <div class="mb-3">
              <span>Chưa có tài khoản? </span>
              <a href="index.php?act=signup">Đăng ký!</a>
            </div>
            <div class="mb-3">
              <span>quên mật khẩu? </span>
              <a href="index.php?act=quenmk">lấy lại mật khẩu!</a>
            </div>
            <button name="login" type="submit" class="btn btn-primary">Login</button>
          </form>
          <?php
            if(isset($checkuser) && $checkuser!= ""){
                echo $checkuser;
            }
          
          ?>
        </div>
      </div>