<div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0 mb-3">Danh sách danh mục trạng thái </h5>
                        <a style="margin-right:5px" href="index.php?act=add_danhmuc_trangthai" class="btn btn-success">Thêm</a>
                    </div>
                    
                    <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">tên danh mục trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>đang hoạt động</td>
                                    <td>
                                        <a href="index.php?act=update_danhmuc_trangthai" class="btn btn-warning">sửa</a>
                                        <button class="btn btn-danger" data-bs-id="" data-bs-toggle="modal"
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
</div>