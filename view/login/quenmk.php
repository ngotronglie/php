<div class="row mt-5 main-web">
        <div class="col-md-4 offset-md-4">
          <h5 class="text-center">Quên mật khẩu</h5>
          <form action="index.php?act=quenmk" method="POST">
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
            <button name="guiemail" type="submit" class="btn btn-primary">Gửi</button>
          </form>
          <?php
            if(isset($sendMailMess) && $sendMailMess != ""){
                echo $sendMailMess;
            }
          ?>
        </div>
      </div>