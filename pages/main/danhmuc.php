<?php
// 1. Kiểm tra biến kết nối và ID truyền vào
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // 2. Lấy tên danh mục
    $sql_cate = "SELECT tendanhmuc FROM tbl_danhmuc WHERE id_danhmuc = '$id' LIMIT 1";
    $query_cate = mysqli_query($mysqli, $sql_cate);
    $row_title = mysqli_fetch_array($query_cate);

    // 3. Lấy danh sách sản phẩm thuộc danh mục đó
    $sql_pro = "SELECT * FROM tbl_sanpham WHERE id_danhmuc = '$id' ORDER BY id_sanpham DESC";
    $query_pro = mysqli_query($mysqli, $sql_pro);
}
?>

<h4 class="text-uppercase fw-bold mb-4 border-bottom pb-2 mt-3 text-primary">
    <i class="fas fa-tags mr-2"></i> 
    Danh mục: <?php echo ($row_title) ? $row_title['tendanhmuc'] : 'Chưa có tên'; ?>
</h4>

<div class="row">
    <?php
    // Kiểm tra nếu có sản phẩm thì mới chạy vòng lặp
    if (isset($query_pro) && mysqli_num_rows($query_pro) > 0) {
        while ($row = mysqli_fetch_array($query_pro)) {
    ?>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card h-100 border-0 shadow-sm product-card-home">
                <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="text-decoration-none text-dark">
                    <div class="product-img-box">
                        <img class="card-img p-2" src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="<?php echo $row['tensanpham'] ?>">
                    </div>
                    
                    <div class="card-body p-3 text-center">
                        <h5 class="product-name"><?php echo $row['tensanpham'] ?></h5>
                        <p class="product-price text-danger fw-bold">
                            <?php echo number_format($row['giasp'], 0, ',', '.') . '₫' ?>
                        </p>
                    </div>
                </a>
                <div class="card-footer bg-transparent border-0 pb-3 px-3 text-center">
                    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="btn btn-outline-primary btn-sm btn-block rounded-pill">
                        Xem chi tiết
                    </a>
                </div>
            </div>
        </div>
    <?php 
        } 
    } else {
        echo '<div class="col-12"><p class="text-center text-muted">Hiện chưa có sản phẩm nào trong danh mục này.</p></div>';
    }
    ?>
</div>

<style>
    
    .product-img-box {
        height: 220px; 
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        background: #fff;
    }

    .product-img-box img {
        max-height: 100%;
        max-width: 100%;
        object-fit: contain; /* Ảnh không bị bóp méo, giữ đúng tỉ lệ */
        transition: transform 0.4s ease;
    }

    /* Hiệu ứng Card sản phẩm */
    .product-card-home {
        border-radius: 15px !important;
        transition: all 0.3s ease;
    }

    .product-card-home:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 25px rgba(0,0,0,0.12) !important;
    }

    .product-card-home:hover img {
        transform: scale(1.08); /* Ảnh phóng to nhẹ khi di chuột */
    }

    /* Định dạng tên sản phẩm */
    .product-name {
        font-size: 15px;
        font-weight: 600;
        height: 42px; 
        line-height: 21px;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        margin-bottom: 10px;
    }

    .product-price {
        font-size: 16px;
        letter-spacing: 0.5px;
    }

    /* Nút bấm */
    .btn-outline-primary {
        border-width: 1.5px;
        font-weight: 600;
        font-size: 12px;
        text-transform: uppercase;
    }

    .btn-outline-primary:hover {
        background-color: #007bff;
        color: #fff;
    }



    .product-img-box { height: 200px; display: flex; align-items: center; justify-content: center; background: #fff; overflow: hidden; }
    .product-img-box img { max-height: 100%; max-width: 100%; object-fit: contain; transition: 0.3s; }
    .product-card-home:hover img { transform: scale(1.05); }
    .product-name { font-size: 14px; font-weight: 600; height: 40px; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; }
</style>