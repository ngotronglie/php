

<div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0 mb-3">Danh sách thông báo</h5>
                        <a style="margin-right:5px" href="index.php?act=add_thongbao" class="btn btn-success">Thêm</a>
                    </div>
                    
                    <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">image</th>
                                    <th scope="col">tiêu đề</th>
                                    <th scope="col">nội dung</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><img src="#" alt="ảnh"></td>
                                    <td>11.11SALE</td>
                                    <td>sale ngày 11 tháng 11</td>
                                    <td>
                                        <a style="margin-right:5px" href="#" class="btn btn-warning">Sửa</a>
                                        <button
                                            type="button"
                                            class="btn btn-danger margin-5 text-white"
                                            data-toggle="modal"
                                            data-target="#Modal2"
                                        >
                                            xóa
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td><img src="#" alt="ảnh"></td>
                                    <td>LEHOI</td>
                                    <td>sale ngày lễ lớn</td>
                                    <td>
                                        <a style="margin-right:5px" href="#" class="btn btn-warning">Sửa</a>
                                        <button
                                            type="button"
                                            class="btn btn-danger margin-5 text-white"
                                            data-toggle="modal"
                                            data-target="#Modal2"
                                        >
                                            xóa
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td><img src="#" alt="ảnh"></td>
                                    <td>HIHI</td>
                                    <td>sale ngày bình thường</td>
                                    <td>
                                        <a style="margin-right:5px" href="#" class="btn btn-warning">Sửa</a>
                                        <button
                                            type="button"
                                            class="btn btn-danger margin-5 text-white"
                                            data-toggle="modal"
                                            data-target="#Modal2"
                                        >
                                            xóa
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
<div
    class="modal fade"
    id="Modal2"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
    >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
            tôi đang ở đây
            </h5>
            <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
            >
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        bạn có chắc xóa không ? 
        </div>
        <div class="modal-footer">
            <button
                type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
                >
                không
            </button>
            <button type="button" class="btn btn-danger">
                xóa
            </button>
        </div>
    </div>
    </div>
</div>