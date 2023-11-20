<div class="col-md-3 offset-md-1">
        <!-- Search -->
        <div class="card" style="width: 18rem">
            <div class="card-header">Tìm kiếm</div>
            <div class="card-body">
            <form action="index.php?act=searchsp" method="POST">
                <input
                type="text"
                class="form-control"
                placeholder="Nhập tên sản phẩm"
                name="keyword"
                />
                <input
                class="btn btn-success"
                style="margin-top: 10px"
                type="submit"
                value="tìm kiếm"
                name="timkiem"
                />
            </form>
            </div>
        </div>

        <!-- Danh mục -->
        <div class="card mt-5" style="width: 18rem">
            <div class="card-header">Danh mục</div>
            <div class="list-group">
                <?php foreach($danhsach_danhmuc_khoahoc as $key => $value):?>
                <a href="index.php?act=search_danhmuc_khoahoc&iddm=<?php echo $value['iddm_khoahoc']?>" class="list-group-item list-group-item-action">
                    <?php echo $value['namedm_khoahoc']?>
                </a>
                <?php endforeach;?>
            </div>
        </div>

        <!-- Top 10 -->
        <div class="card mt-5" style="width: 18rem">
            <div class="card-header">Top 10 SP có nhiều view nhất</div>
            <div class="list-group">
            <a
                href=""
                class="list-group-item list-group-item-action list-item-link"
            >
                <img
                style="height: 50px"
                src="./assets/images/background/img4.jpg"
                alt=""
                />
                Công nghệ thông tin
            </a>
            </div>
            <div class="list-group">
            <a
                href=""
                class="list-group-item list-group-item-action list-item-link"
            >
                <img
                style="height: 50px"
                src="./assets/images/background/img4.jpg"
                alt=""
                />
                Công nghệ thông tin
            </a>
            </div>
            <div class="list-group">
            <a
                href=""
                class="list-group-item list-group-item-action list-item-link"
            >
                <img
                style="height: 50px"
                src="./assets/images/background/img4.jpg"
                alt=""
                />
                Công nghệ thông tin
            </a>
            </div>
            <div class="list-group">
            <a
                href=""
                class="list-group-item list-group-item-action list-item-link"
            >
                <img
                style="height: 50px"
                src="./assets/images/background/img4.jpg"
                alt=""
                />
                Công nghệ thông tin
            </a>
            </div>
            <div class="list-group">
            <a
                href=""
                class="list-group-item list-group-item-action list-item-link"
            >
                <img
                style="height: 50px"
                src="./assets/images/background/img4.jpg"
                alt=""
                />
                Công nghệ thông tin
            </a>
            </div>
        </div>
        </div>