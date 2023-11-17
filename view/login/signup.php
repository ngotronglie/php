<div class="row mt-5 main-web">
        <div class="col-md-4 offset-md-4">
          <h5 class="text-center">Nhập thông tin đăng ký</h5>
          <form action="index.php?act=signup" method="POST">
          <div class="mb-3">
              <label for="name" class="form-label"
                >Tên của bạn</label
              >
              <input
                type="text"
                class="form-control"
                id="name"
                required  placeholder="enter your email"
                name="name"
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"
                >Email address</label
              >
              <input
                type="email"
                class="form-control"
                id="exampleInputEmail1"
                required  placeholder="enter your email"
                name="email"
              />
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label"
                >số điện thoại</label
              >
              <input
                type="number"
                class="form-control"
                id="phone"
                required  placeholder="enter your number phone"
                name="phone"
              />
            </div>
            <div class="mb-3">
              <label for="adress" class="form-label"
                >địa chỉ</label
              >
              <input
                type="text"
                class="form-control"
                id="adress"
                required  placeholder="enter your adress"
                name="dc"
              />
            </div>
            <div class="mb-3">
              <label for="password" class="form-label"
                >Password</label
              >
              <input
                type="password"
                class="form-control"
                id="password"
                required  placeholder="enter your password"
                name="pass"
              />
            </div>
            <div class="">
              <span>Đã có tài khoản? </span>
              <a href="index.php?act=login">Đăng nhập!</a>
            </div>
            
            <button name="signup" type="submit" class="btn btn-success">Đăng ký</button>
          </form>
          <?php
            if(isset($thongbao)&& $thongbao!= ""){
              echo $thongbao;
            }else{
              echo '
                <div class="alert alert-danger mt-3" role="alert">
                    đăng kí thất bại!
                </div>
              ';
            }
          ?>
        </div>
      </div>