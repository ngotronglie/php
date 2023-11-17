<div class="container-fluild">
    <h3>Danh sách bình luận</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nội dung bình luận</th>
                <th scope="col">tên người dùng</th>
                <th scope="col">sản phẩm </th>
                <th scope="col">ngày bình luận</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
                <?php 
                    $list_binh_luan = list_binhluan();
                ?>
                <?php foreach($list_binh_luan as $value):
                    extract($value);
                ?>

                    <tr>
                        
                        <th scope="col">
                            <?php echo $id?>
                        </th>
                        <td>
                            <?php echo $noidung?>
                        </td>
                        <td>
                            <?php echo $user?>
                        </td>
                        <td>
                            <?php echo $name?>
                        </td>
                        <td>
                            <?php echo date("d/m/Y", strtotime($ngaybinhluan))?>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-id="<?php echo $id?>" data-bs-toggle="modal"
                                data-bs-target="#modalDelete">
                                Xóa
                            </button>
                        </td>
                        
                    </tr>
            <?php endforeach?>

        </tbody>
    </table>
</div>

<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDeleteLabel">Thông báo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Hành động này không thể hoàn tác. Bạn có muốn xóa không?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <a href="" class="btn btn-danger" id="btn-delete">Xác nhận xóa</a>
            </div>
        </div>
    </div>
</div>


    <script>
        var modalDelete = document.getElementById('modalDelete')
        modalDelete.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget
            var id_bl = button.getAttribute('data-bs-id');
            var link = `index.php?act=delete_binhluan&id_bl=${id_bl}`;
            document.getElementById("btn-delete").setAttribute("href", link)
    })
    </script>