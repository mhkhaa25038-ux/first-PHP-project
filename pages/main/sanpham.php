<div class="container mt-4 mb-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent p-0 small">
            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
            <li class="breadcrumb-item active">Chi tiết sản phẩm</li>
        </ol>
    </nav>

    <?php
    $id = mysqli_real_escape_string($mysqli, $_GET['id']);
    $sql_chitiet = "SELECT * FROM tbl_sanpham, tbl_danhmuc 
                    WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc 
                    AND tbl_sanpham.id_sanpham='$id' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli, $sql_chitiet);
    
    while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
    ?>
    <div class="card border-0 shadow-sm p-4 rounded-lg">
        <div class="row">
            <div class="col-md-5 mb-4">
                <div class="product-image-holder p-2 border rounded">
                    <img id="main-img" class="img-fluid rounded" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
                </div>
            </div>

            <div class="col-md-7">
                <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
                    <h2 class="font-weight-bold text-dark mb-3"><?php echo $row_chitiet['tensanpham'] ?></h2>
                    
                    <div class="product-meta mb-3">
                        <span class="text-muted mr-3 small">Mã: <b class="text-dark"><?php echo $row_chitiet['masp'] ?></b></span>
                        <span class="text-muted small">Danh mục: <b class="text-primary"><?php echo $row_chitiet['tendanhmuc'] ?></b></span>
                    </div>

                    <h3 class="text-danger font-weight-bold mb-4">
                        <?php echo number_format($row_chitiet['giasp'], 0, ',', '.') . '₫' ?>
                    </h3>

                    <div class="stock-info mb-4">
                        <p class="mb-1 small">Số lượng còn lại: <span class="badge badge-pill badge-light border"><?php echo $row_chitiet['soluong'] ?> sản phẩm</span></p>
                    </div>

                    <div class="action-buttons d-flex mt-4">
                        <button type="submit" name="themgiohang" class="btn btn-primary btn-lg px-5 mr-3 rounded-pill shadow-sm">
                            <i class="fas fa-cart-plus mr-2"></i> Thêm vào giỏ hàng
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <hr class="my-5">

        <div class="product-tabs">
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active py-2 px-4" id="tab1-link" data-toggle="pill" href="#tab1">Đặc điểm nổi bật</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-2 px-4" id="tab2-link" data-toggle="pill" href="#tab2">Chi tiết sản phẩm</a>
                </li>
            </ul>
            <div class="tab-content border rounded p-4 bg-light" id="pills-tabContent">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                    <?php echo $row_chitiet['tomtat']; ?>
                </div>
                <div class="tab-pane fade" id="tab2" role="tabpanel">
                    <?php echo $row_chitiet['noidung']; ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>

<style>
    .rounded-lg { border-radius: 15px !important; }
    
    /* Hình ảnh */
    .product-image-holder {
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 400px;
        transition: 0.3s;
    }
    .product-image-holder:hover {
        border-color: #007bff !important;
    }

    /* Giá sản phẩm */
    .text-danger { font-size: 2rem; letter-spacing: -1px; }

    /* Nút bấm */
    .btn-primary {
        background: linear-gradient(45deg, #007bff, #0056b3);
        border: none;
        font-weight: 600;
        transition: 0.3s;
    }
    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,123,255,0.4) !important;
    }

    /* Tabs */
    .nav-pills .nav-link {
        color: #555;
        font-weight: 600;
        border: 1px solid #dee2e6;
        margin: 0 5px;
        border-radius: 50px;
        background: #fff;
    }
    .nav-pills .nav-link.active {
        background: #007bff !important;
        border-color: #007bff !important;
        box-shadow: 0 4px 10px rgba(0,123,255,0.2);
    }

    /* Nội dung trong Tab */
    .tab-content {
        line-height: 1.8;
        color: #444;
        font-size: 15px;
    }
</style>