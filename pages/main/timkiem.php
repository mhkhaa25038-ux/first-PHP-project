<?php
if (isset($_POST['timkiem'])) {
    // Bảo mật: Chống SQL Injection
    $tukhoa = mysqli_real_escape_string($mysqli, $_POST['tukhoa']);
} else {
    $tukhoa = '';
}

$sql_pro = "SELECT * FROM tbl_sanpham, tbl_danhmuc 
            WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc 
            AND tbl_sanpham.tensanpham LIKE '%$tukhoa%' 
            ORDER BY tbl_sanpham.id_sanpham DESC";
$query_pro = mysqli_query($mysqli, $sql_pro);
?>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-4">
        <h4 class="text-uppercase font-weight-bold mb-0">
            <i class="fas fa-search text-primary mr-2"></i> Kết quả tìm kiếm
        </h4>
        <span class="text-muted">Từ khóa: <strong class="text-danger">"<?php echo htmlspecialchars($tukhoa); ?>"</strong></span>
    </div>

    <div class="row">
        <?php
        $count = mysqli_num_rows($query_pro);
        if ($count > 0) {
            while ($row = mysqli_fetch_array($query_pro)) {
        ?>
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="card h-100 border-0 shadow-sm product-card">
                    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="text-decoration-none text-dark">
                        <div class="img-box">
                            <img class="card-img-top p-2" src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="<?php echo $row['tensanpham'] ?>">
                        </div>
                        <div class="card-body p-3 text-center">
                            <span class="badge badge-info mb-2"><?php echo $row['tendanhmuc'] ?></span>
                            <h6 class="product-name mb-2"><?php echo $row['tensanpham'] ?></h6>
                            <p class="text-danger font-weight-bold mb-0">
                                <?php echo number_format($row['giasp'], 0, ',', '.') ?>₫
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        <?php
            }
        } else {
            echo '<div class="col-12 text-center py-5">
                    <img src="images/no-results.png" style="width:150px; opacity:0.5">
                    <p class="text-muted mt-3">Không tìm thấy sản phẩm nào phù hợp với từ khóa của bạn.</p>
                    <a href="index.php" class="btn btn-primary rounded-pill px-4">Quay lại cửa hàng</a>
                  </div>';
        }
        ?>
    </div>
</div>