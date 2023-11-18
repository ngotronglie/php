

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0 mb-3">Danh sách khuyến mãi</h5>
                        <a style="margin-right:5px" href="index.php?act=add_khuyenmai" class="btn btn-success">Thêm</a>
                    </div>
                    
                    <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">precent</th>
                                    <th scope="col">code</th>
                                    <th scope="col">note</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>40%</td>
                                    <td>11.11SALE</td>
                                    <td>sale ngày 11 tháng 11</td>
                                    <td>
                                        <a style="margin-right:5px" href="index.php?act=sua_khuyenmai" class="btn btn-warning">Sửa</a>
                                        <button class="btn btn-danger" data-bs-id="<?php echo $value['id']; ?>" data-bs-toggle="modal"
                                            data-bs-target="#modalDelete">
                                            Xóa
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>20%</td>
                                    <td>LEHOI</td>
                                    <td>sale ngày lễ lớn</td>
                                    <td>
                                        <a style="margin-right:5px" href="index.php?act=sua_khuyenmai" class="btn btn-warning">Sửa</a>
                                        <button class="btn btn-danger" data-bs-id="<?php echo $value['id']; ?>" data-bs-toggle="modal"
                                            data-bs-target="#modalDelete">
                                            Xóa
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>15%</td>
                                    <td>HIHI</td>
                                    <td>sale ngày bình thường</td>
                                    <td>
                                        <a style="margin-right:5px" href="index.php?act=sua_khuyenmai" class="btn btn-warning">Sửa</a>
                                        <button class="btn btn-danger" data-bs-id="<?php echo $value['id']; ?>" data-bs-toggle="modal"
                                            data-bs-target="#modalDelete">
                                            Xóa
                                        </button>
                                    </td>
                                </tr>
                               
                            </tbody>
                    </table>
                        
                </div>
                
            </div>
        </div>
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
        var idsp = button.getAttribute('data-bs-id')
        var link = `?act=deletesp&idsp=${idsp}`
        document.getElementById("btn-delete").setAttribute("href", link)
    })
</script>
