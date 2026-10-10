<?php
    if(isset($_GET['trang'])) {
        $page = $_GET['trang'];
    } else {
        $page = 1;
    }
    
    $limit = 4; // Tăng lên 4 sản phẩm/trang để khớp với col-md-3 (1 hàng)
    $begin = ($page == '' || $page == 1) ? 0 : ($page * $limit) - $limit;

    $sql_pro = "SELECT * FROM tbl_sanpham, tbl_danhmuc 
                WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc 
                ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin, $limit";
    $query_pro = mysqli_query($mysqli, $sql_pro);
?>

<div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-4 mt-3">
    <h4 class="text-uppercase fw-bold mb-0"><i class="fas fa-bolt text-warning mr-2"></i>Sản phẩm mới nhất</h4>
    <span class="text-muted small">Trang <?php echo $page ?></span>
</div>

<div class="row">
    <?php while ($row = mysqli_fetch_array($query_pro)) { ?>
        <div class="col-lg-3 col-md-4 col-6 mb-4">
            <div class="card h-100 border-0 shadow-sm product-card">
                <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="text-decoration-none text-dark">
                    <div class="img-box">
                        <img class="card-img-top p-2" src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="<?php echo $row['tensanpham'] ?>">
                    </div>
                    <div class="card-body p-3 text-center">
                        <span class="badge badge-danger mb-2" style="font-weight: 500;"><?php echo $row['tendanhmuc'] ?></span>
                        <h6 class="product-name mb-2"><?php echo $row['tensanpham'] ?></h6>
                        <p class="text-primary font-weight-bold mb-0">
                            <?php echo number_format($row['giasp'], 0, ',', '.') . '₫' ?>
                        </p>
                    </div>
                </a>
            </div>
        </div>
    <?php } ?>
</div>

<div style="clear:both;"></div>

<?php
    $sql_trang = mysqli_query($mysqli, "SELECT * FROM tbl_sanpham");
    $row_count = mysqli_num_rows($sql_trang);
    $trang = ceil($row_count / $limit);
?>

<nav aria-label="Page navigation" class="mt-4">
    <ul class="pagination justify-content-center custom-pagination">
        <li class="page-item <?php echo ($page <= 1) ? 'disabled' : '' ?>">
            <a class="page-link" href="index.php?trang=<?php echo $page - 1 ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>

        <?php for ($i = 1; $i <= $trang; $i++) { ?>
            <li class="page-item <?php echo ($i == $page) ? 'active' : '' ?>">
                <a class="page-link" href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a>
            </li>
        <?php } ?>

        <li class="page-item <?php echo ($page >= $trang) ? 'disabled' : '' ?>">
            <a class="page-link" href="index.php?trang=<?php echo $page + 1 ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>

<style>
    .img-box {
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
    .img-box img {
        max-height: 100%;
        width: auto;
        transition: transform 0.3s ease;
    }
    .product-card:hover img { transform: scale(1.05); }

    .product-name {
        font-size: 14px;
        font-weight: 600;
        height: 40px;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    .custom-pagination .page-link {
        color: #333;
        border: 1px solid #dee2e6;
        margin: 0 3px;
        border-radius: 5px !important;
        font-weight: 500;
        transition: 0.3s;
    }

    .custom-pagination .page-item.active .page-link {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
        box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3);
    }

    .custom-pagination .page-link:hover {
        background-color: #f8f9fa;
        color: #007bff;
    }
</style>