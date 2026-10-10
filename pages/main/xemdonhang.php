<?php
// Lấy mã đơn hàng từ URL
$code = mysqli_real_escape_string($mysqli, $_GET['code']);

// 1. Lấy thông tin vận chuyển & thanh toán từ bảng tbl_cart (kết hợp tbl_dangky nếu cần)
// Ở đây tui truy vấn cơ bản từ tbl_cart dựa trên code_cart
$sql_get_cart = "SELECT * FROM tbl_cart WHERE code_cart = '$code' LIMIT 1";
$query_get_cart = mysqli_query($mysqli, $sql_get_cart);
$cart_info = mysqli_fetch_array($query_get_cart);

// 2. Lấy chi tiết sản phẩm trong đơn hàng
$sql_details = "SELECT * FROM tbl_cart_details, tbl_sanpham 
                WHERE tbl_cart_details.id_sanpham = tbl_sanpham.id_sanpham 
                AND tbl_cart_details.code_cart = '$code' 
                ORDER BY tbl_cart_details.id_cart_details DESC";
$query_details = mysqli_query($mysqli, $sql_details);
?>

<div class="container-fluid py-5 bg-light-modern">
    <div class="invoice-box mx-auto">
        
        <div class="invoice-header d-flex justify-content-between align-items-center mb-4">
            <div>
                <h4 class="fw-bold mb-1">CHI TIẾT ĐƠN HÀNG</h4>
                <p class="text-muted mb-0">Mã đơn: <span class="text-primary fw-bold">#<?php echo $code; ?></span></p>
            </div>
            <div class="text-right">
                <span class="badge-date"><?php echo $cart_info['cart_date']; ?></span>
            </div>
        </div>

        <hr class="border-dashed">

        <div class="row my-4">
            <div class="col-md-6">
                <p class="text-muted small text-uppercase fw-bold mb-2">Phương thức thanh toán</p>
                <div class="d-flex align-items-center">
                    <i class="fas fa-credit-card text-primary mr-2"></i>
                    <span class="fw-medium"><?php echo $cart_info['cart_payment']; ?></span>
                </div>
            </div>
            <div class="col-md-6 text-md-right mt-3 mt-md-0">
                <p class="text-muted small text-uppercase fw-bold mb-2">Trạng thái vận chuyển</p>
                <span class="status-dot"></span> 
                <span class="fw-medium">Đang xử lý đơn hàng</span>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-borderless table-invoice">
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th class="text-center">Số lượng</th>
                        <th class="text-right">Đơn giá</th>
                        <th class="text-right">Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tongtien = 0;
                    while ($row = mysqli_fetch_array($query_details)) {
                        $thanhtien = $row['giasp'] * $row['soluongmua'];
                        $tongtien += $thanhtien;
                    ?>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="product-img-mini">
                                    <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']; ?>" alt="">
                                </div>
                                <div class="ml-3">
                                    <h6 class="mb-0 fw-bold"><?php echo $row['tensanpham']; ?></h6>
                                    <small class="text-muted">ID: <?php echo $row['id_sanpham']; ?></small>
                                </div>
                            </div>
                        </td>
                        <td class="text-center fw-bold">x<?php echo $row['soluongmua']; ?></td>
                        <td class="text-right"><?php echo number_format($row['giasp'], 0, ',', '.'); ?>đ</td>
                        <td class="text-right fw-bold text-primary"><?php echo number_format($thanhtien, 0, ',', '.'); ?>đ</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="invoice-footer mt-4">
            <div class="row justify-content-end">
                <div class="col-md-5">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Tạm tính:</span>
                        <span><?php echo number_format($tongtien, 0, ',', '.'); ?>đ</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3 pb-3 border-bottom">
                        <span class="text-muted">Phí vận chuyển:</span>
                        <span class="text-success">Miễn phí</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fw-bold mb-0">Tổng cộng:</h5>
                        <h4 class="text-primary fw-bold mb-0"><?php echo number_format($tongtien, 0, ',', '.'); ?>đ</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 d-flex gap-3">
            <a href="index.php?quanly=lichsudonhang" class="btn btn-outline-secondary rounded-pill px-4">
                <i class="fas fa-arrow-left mr-2"></i> Quay lại
            </a>
            <button onclick="window.print()" class="btn btn-dark rounded-pill px-4 ml-2">
                <i class="fas fa-print mr-2"></i> In đơn hàng
            </button>
        </div>
    </div>
</div>

<style>
.bg-light-modern { background-color: #f4f7f9; min-height: 100vh; font-family: 'Inter', sans-serif; }

.invoice-box {
    background: #fff;
    padding: 40px;
    border-radius: 24px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.04);
    max-width: 900px;
}

.border-dashed { border-top: 2px dashed #ebedef; margin: 25px 0; }

.badge-date {
    background: #f0f2f5;
    padding: 8px 16px;
    border-radius: 10px;
    font-size: 0.9rem;
    color: #555;
    font-weight: 500;
}

.product-img-mini {
    width: 60px;
    height: 60px;
    border-radius: 12px;
    overflow: hidden;
    background: #f8f9fa;
    border: 1px solid #eee;
}
.product-img-mini img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.table-invoice thead th {
    background: #f8f9fa;
    text-transform: uppercase;
    font-size: 0.75rem;
    letter-spacing: 1px;
    color: #888;
    padding: 15px;
    border: none;
}
.table-invoice tbody td {
    padding: 20px 15px;
    vertical-align: middle;
    border-bottom: 1px solid #f8f9fa;
}

.status-dot {
    height: 10px;
    width: 10px;
    background-color: #0d6efd;
    border-radius: 50%;
    display: inline-block;
    margin-right: 5px;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(13, 110, 253, 0.7); }
    70% { transform: scale(1); box-shadow: 0 0 0 10px rgba(13, 110, 253, 0); }
    100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(13, 110, 253, 0); }
}

/* In ấn */
@media print {
    .btn, .modern-navbar, .modern-footer-full { display: none; }
    .invoice-box { box-shadow: none; border: none; width: 100%; max-width: 100%; padding: 0; }
    .bg-light-modern { background: #fff; }
}

/* Responsive */
@media (max-width: 768px) {
    .invoice-box { padding: 20px; border-radius: 0; }
    .table-invoice thead { display: none; }
    .table-invoice tbody td { display: block; text-align: left !important; padding: 10px 0; }
    .product-img-mini { width: 50px; height: 50px; }
}
</style>