<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">
            Lớp học khóa học
            <span class="badge bg-info text-light"
              ><?php echo $lophoc['name_khoahoc']?></span
            >
          </h5>
          <div class="">
            <table
              class="table"
            >
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">phòng</th>
                  <th scope="col">khóa học</th>
                  <th scope="col">giờ học</th>
                  <th scope="col">giảng viên</th>
                  <th scope="col">zalo</th>
                  <th scope="col">điểm</th>
                  <th scope="col">đánh giá</th>
                  <th scope="col">trạng thái lớp</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <th scope="col">#</th>
                  <td scope="col"><?php echo $lophoc['name_phong']?></td>
                  <td scope="col"><?php echo $lophoc['name_khoahoc']?></td>
                  <td scope="col"><?php echo $lophoc['name_giohoc']?></td>
                  <td scope="col"><?php echo $lophoc['user']?></td>
                  <td scope="col"><?php echo $lophoc['nhomzalo']?></td>
                  <td scope="col"><?php echo $lophoc['diem']?></td>
                  <td scope="col"><?php diem($lophoc['diem'])?></td>
                  <td scope="col"><?php echo $lophoc['name_trangthai']?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="feed-back">
    <h4 class="h4 text-bold">feed back học viên</h4>
    <form class="form"  action="index.php?act=noidung_lopdadangki&id_dkkh=<?php echo $lophoc['id_dkkhoahoc'] ?>" method="POST" >
      <input type="hidden" name="id_lophoc" value="<?php echo $lophoc['id_lophoc']?>">
      <label class="badge badge-dark label" for="">Cảm nhận học viên</label><br>
      <textarea  style="width:100%; height:100px" class="text-center font-14 p-3" name="noidung" id=""></textarea>
      <button name="send" class="btn btn-primary">Send</button>
    </form>
  </div>
</div>