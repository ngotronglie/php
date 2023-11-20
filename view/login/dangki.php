<form method="POST" action="index.php?act=dangki" class="container p-5" enctype="multipart/form-data">
        <div class="form-group">
          <label for="user">Username</label>
          <input
            type="text"
            class="form-control"
            id="user"
            aria-describedby="emailHelp"
            placeholder="Enter Username here"
            name="user"
          />
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input
            type="password"
            class="form-control"
            id="exampleInputPassword1"
            placeholder="Enter Password here "
            name="password"
          />
        </div>
        <div class="form-group">
          <label for="email">email</label>
          <input
            type="email"
            class="form-control"
            id="email"
            placeholder="Enter email here "
            name="email"
          />
        </div>
        <div class="form-group">
          <label for="address">address</label>
          <input
            type="text"
            class="form-control"
            id="address"
            placeholder="Enter address here"
            name="address"
          />
        </div>
        <div class="form-group">
          <label for="phone">phone</label>
          <input
            type="number"
            class="form-control"
            id="phone"
            placeholder="Enter number phone here"
            name="phone"
          />
        </div>
        <div class="form-group">
          <label for="mota">Mô tả</label>
          <input
            value="Tôi là người mới"
            type="text"
            class="form-control"
            id="mota"
            placeholder="Enter mô tả here"
            name="mota"
          />
        </div>
        <h6 class="h6 text-center">
          Bạn đã đăng kí rồi?
          <a class="badge bg-primary text-light" href="index.php?act=login">đăng nhập</a>
        </h6>
        <button name="signup" type="submit" class="btn btn-success">Đăng kí</button>
      </form>
      <?php
        if(isset($thongbao) && $thongbao!=""){
          echo $thongbao;
        }
      ?>