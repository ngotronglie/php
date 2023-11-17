

<div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0 ">Danh sách khuyến mãi</h5>
                
                    </div>
                    
                    <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên Giảng viên</th>
                                    <th scope="col">ảnh</th>
                                    <th scope="col">email</th>
                                    <th scope="col">số điện thoại</th>
                                    <th scope="col">địa chỉ</th>
                                    <th scope="col">mô tả</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Hà Thị Thùy Linh</td>
                                    <td><img src="" alt="ảnh"></td>
                                    <td>linhhttph41422@fpt.edu.vn</td>
                                    <td>chưa biết =))</td>
                                    <td>Phú Thọ</td>
                                    <td>rấc là xênh gái</td>
                                    <td>
                                        <a style="margin-right:5px" href="index.php?act=update_giangvien" class="btn btn-warning">Sửa</a>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Phạm Thị Thùy Trang</td>
                                    <td><img src="" alt="ảnh"></td>
                                    <td>trangpttph33087@fpt.edu.vn</td>
                                    <td>chưa biết =))</td>
                                    <td>Ninh Bình</td>
                                    <td>rấc là nữ tính</td>
                                    <td>
                                        <a style="margin-right:5px" href="index.php?act=update_giangvien" class="btn btn-warning">Sửa</a>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ngô TRọng Liem</td>
                                    <td><img src="" alt="ảnh"></td>
                                    <td>ngotrongliem2004@gmail.com</td>
                                    <td>0376278382</td>
                                    <td>Thái Bình</td>
                                    <td>rấc là đẹp trai</td>
                                    <td>
                                        <a style="margin-right:5px" href="index.php?act=update_giangvien" class="btn btn-warning">Sửa</a>
                                        
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
