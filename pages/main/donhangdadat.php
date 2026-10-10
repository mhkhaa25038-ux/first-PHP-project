<?php
// 1. Lấy ID khách hàng từ Session
$id_khachhang = $_SESSION['id_khachhang'];

// 2. Truy vấn lấy danh sách đơn hàng (Sử dụng INNER JOIN để lấy thêm thông tin nếu cần)
$sql_get_vanchuyen = "SELECT * FROM tbl_cart, tbl_shipping 
                      WHERE tbl_cart.cart_shipping = tbl_shipping.id_shipping 
                      AND tbl_cart.id_khachhang = '$id_khachhang' 
                      ORDER BY tbl_cart.id_cart DESC";
$query_get_vanchuyen = mysqli_query($mysqli, $sql_get_vanchuyen);
?>

<div class="order-history-container py-5">
    <div class="container">
        <div class="d-flex align-items-center mb-4">
            <div class="header-dot"></div>
            <h3 class="fw-bold mb-0">Đơn hàng của tôi</h3>
        </div>

        <?php
        if (mysqli_num_rows($query_get_vanchuyen) > 0) {
            while ($row = mysqli_fetch_array($query_get_vanchuyen)) {
                // Xác định trạng thái
                $status_text = ($row['cart_status'] == 1) ? 'Đang chờ xử lý' : 'Đã xử lý';
                $status_class = ($row['cart_status'] == 1) ? 'status-waiting' : 'status-done';
        ?>
            <div class="order-item-card mb-4 shadow-sm border-0">
                <div class="card-header-custom d-flex justify-content-between align-items-center">
                    <div class="order-id">
                        <i class="fas fa-hashtag text-primary mr-1"></i>
                        Mã đơn: <strong><?php echo $row['code_cart']; ?></strong>
                    </div>
                    <div class="order-status-badge <?php echo $status_class; ?>">
                        <?php echo $status_text; ?>
                    </div>
                </div>

                <div class="card-body-custom p-4">
                    <div class="row align-items-center">
                        <div class="col-md-4 border-right-md">
                            <p class="mb-1 text-muted small text-uppercase">Ngày đặt hàng</p>
                            <div class="fw-bold"><i class="far fa-calendar-alt mr-2"></i><?php echo $row['cart_date']; ?></div>
                        </div>
                        <div class="col-md-4 mt-3 mt-md-0 border-right-md pl-md-4">
                            <p class="mb-1 text-muted small text-uppercase">Hình thức thanh toán</p>
                            <div class="fw-bold text-info"><i class="fas fa-wallet mr-2"></i><?php echo strtoupper($row['cart_payment']); ?></div>
                        </div>
                        <div class="col-md-4 mt-3 mt-md-0 text-md-right pl-md-4">
                            <a href="index.php?quanly=xemdonhang&code=<?php echo $row['code_cart']; ?>" class="btn-modern-view">
                                Xem chi tiết đơn <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer-custom px-4 py-2 bg-light">
                    <span class="small text-muted">Người nhận: <strong><?php echo $row['name']; ?></strong> | SDT: <?php echo $row['phone']; ?></span>
                </div>
            </div>
        <?php 
            }
        } else {
            // Hiển thị khi không có đơn hàng
            echo '
            <div class="empty-order text-center py-5">
                <img src="https://cdn-icons-png.flaticon.com/512/4076/4076432.png" alt="Empty" style="width: 120px; opacity: 0.6">
                <h4 class="mt-4 text-muted">Bạn chưa có đơn hàng nào</h4>
                <p class="text-secondary">Hãy tiếp tục mua sắm để lấp đầy lịch sử này nhé!</p>
                <a href="index.php" class="btn btn-primary rounded-pill px-5 mt-2 shadow">Mua sắm ngay</a>
            </div>';
        }
        ?>
    </div>
</div>

<style>
/* Reset & Cấu trúc nền */
.order-history-container { background-color: #f0f2f5; min-height: 80vh; }
.header-dot { width: 12px; height: 12px; background: #0d6efd; border-radius: 50%; margin-right: 15px; }

/* Card đơn hàng */
.order-item-card {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    transition: transform 0.2s ease;
}
.order-item-card:hover { transform: translateY(-3px); }

/* Header Card */
.card-header-custom {
    padding: 15px 25px;
    background: #fff;
    border-bottom: 1px solid #f1f1f1;
}
.order-id { font-size: 1.1rem; color: #444; }

/* Badge trạng thái */
.order-status-badge {
    padding: 6px 15px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
}
.status-waiting { background: #fff4e5; color: #ff9800; }
.status-done { background: #e8f5e9; color: #2e7d32; }

/* Button chi tiết */
.btn-modern-view {
    display: inline-block;
    padding: 10px 25px;
    background: #0d6efd;
    color: #fff !important;
    border-radius: 10px;
    text-decoration: none !important;
    font-weight: 600;
    transition: 0.3s;
}
.btn-modern-view:hover { background: #0056b3; box-shadow: 0 4px 12px rgba(13,110,253,0.3); }

/* Responsive */
@media (max-width: 768px) {
    .border-right-md { border-right: none !important; }
    .card-body-custom { text-align: center; }
    .btn-modern-view { width: 100%; margin-top: 15px; }
}
</style>