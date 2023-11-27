
<form method="POST" action="index.php?act=capnhattaikhoan" class="container p-5">
        <div class="form-group">
            <input type="hidden" name="id_taikhoan" value="<?php echo $taikhoan['id_taikhoan']?>">
          <label for="user">Username</label>
          <input
            type="text"
            class="form-control"
            id="user"
            aria-describedby="emailHelp"
            placeholder="Enter Username here"
            value="<?php echo $taikhoan['user']?>"
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
            value="<?php echo $taikhoan['pass']?>"
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
            value="<?php echo $taikhoan['email'] ?>"
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
            value="<?php echo $taikhoan['address']?>"
          />
        </div>
        <div class="form-group">
          <label for="phone">phone</label>
          <input
            type="text"
            class="form-control"
            id="phone"
            placeholder="Enter number phone here"
            name="phone"
            value="<?php echo $taikhoan['tel']?>"
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
            value="<?php echo $taikhoan['mota']?>"
          />
        </div>
        <button onclick="return confirm('Sau khi cập nhật bạn cần đăng nhập lại!')" name="capnhat" type="submit" class="btn btn-warning">cập nhật</button>
</form>