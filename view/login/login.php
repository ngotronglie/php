<form method="POST" action="index.php?act=login" class="container p-5" enctype="multipart/form-data">
  <div class="form-group">
    <label for="user">Username</label>
    <input
      type="text"
      class="form-control"
      id="user"
      aria-describedby="emailHelp"
      placeholder="Enter Username here"
      name="user"
      required
    />
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input
      type="password"
      class="form-control"
      id="exampleInputPassword1"
      placeholder="Enter Password here "
      name="pass"
      required
    />
  </div>
  <h6>Bạn chưa đăng kí? <a href="index.php?act=dangki">Đăng kí ngay</a></h6>
  <h6>Bạn quên mật khẩu? <a href="index.php?act=quenmk">Quên mật khẩu</a></h6>
  <button name="login" type="submit" class="btn btn-success">Đăng nhập</button>
</form>
<?php
  if(isset($checkuser) && $checkuser !=""){
    echo $checkuser;
  }
?>