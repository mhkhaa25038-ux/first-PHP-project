<?php
// Giả sử bạn đã có biến $id_khachhang từ SESSION
$id_khachhang = $_SESSION['id_khachhang'];
$sql_history = "SELECT * FROM tbl_cart WHERE id_khachhang = '$id_khachhang' ORDER BY id_cart DESC";
$query_history = mysqli_query($mysqli, $sql_history);
?>

<div class="container-fluid py-5 bg-light-gray">
    <div class="order-history-wrapper mx-auto" style="max-width: 1000px;">
        
        <div class="d-flex align-items-center mb-4">
            <div class="title-icon"><i class="fas fa-clipboard-list"></i></div>
            <h3 class="fw-bold mb-0 ml-3">Lịch sử đơn hàng</h3>
        </div>

        <?php
        if (mysqli_num_rows($query_history) > 0) {
            while ($row = mysqli_fetch_array($query_history)) {
                // Xử lý màu sắc trạng thái
                $status_label = "";
                $status_class = "";
                if ($row['cart_status'] == 1) {
                    $status_label = "Chờ xử lý";
                    $status_class = "status-pending";
                } elseif ($row['cart_status'] == 0) {
                    $status_label = "Đã hoàn thành";
                    $status_class = "status-completed";
                } else {
                    $status_label = "Đã hủy";
                    $status_class = "status-cancelled";
                }
        ?>
            <div class="order-card mb-4">
                <div class="order-header d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted small">Mã đơn hàng:</span>
                        <span class="order-code">#<?php echo $row['code_cart']; ?></span>
                    </div>
                    <div class="order-status <?php echo $status_class; ?>">
                        <?php echo $status_label; ?>
                    </div>
                </div>
                
                <div class="order-body">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="mb-1"><i class="far fa-calendar-alt mr-2"></i><strong>Ngày đặt:</strong></p>
                            <span><?php echo $row['cart_date']; ?></span>
                        </div>
                        <div class="col-md-4 mt-3 mt-md-0">
                            <p class="mb-1"><i class="fas fa-wallet mr-2"></i><strong>Thanh toán:</strong></p>
                            <span class="badge badge-payment"><?php echo $row['cart_payment']; ?></span>
                        </div>
                        <div class="col-md-4 mt-3 mt-md-0 d-flex align-items-center justify-content-md-end">
                            <a href="index.php?quanly=xemdonhang&code=<?php echo $row['code_cart']; ?>" class="btn-view-detail">
                                Xem chi tiết <i class="fas fa-chevron-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php 
            }
        } else {
            echo '<div class="text-center py-5 shadow-sm bg-white rounded-lg">
                    <img src="https://i.imgur.com/Drj57qu.png" style="width: 100px; opacity: 0.5">
                    <p class="mt-3 text-muted">Bạn chưa có đơn hàng nào.</p>
                    <a href="index.php" class="btn btn-primary rounded-pill px-4">Mua sắm ngay</a>
                  </div>';
        }
        ?>
    </div>
</div>
<style>
.bg-light-gray { background-color: #f8f9fa; min-height: 80vh; }

.title-icon {
    width: 45px;
    height: 45px;
    background: #0d6efd;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    font-size: 1.2rem;
    box-shadow: 0 4px 10px rgba(13, 110, 253, 0.2);
}

/* Thẻ đơn hàng */
.order-card {
    background: #fff;
    border-radius: 16px;
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    overflow: hidden;
}

.order-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}

.order-header {
    padding: 15px 25px;
    background: #fafafa;
    border-bottom: 1px dashed #eee;
}

.order-code {
    font-weight: 700;
    color: #333;
    margin-left: 5px;
}

.order-status {
    padding: 6px 16px;
    border-radius: 999px;
    font-size: 0.85rem;
    font-weight: 600;
}

.status-pending { background: #fff8e1; color: #ff8f00; }
.status-completed { background: #e8f5e9; color: #2e7d32; }
.status-cancelled { background: #ffebee; color: #c62828; }

.order-body {
    padding: 25px;
}

.badge-payment {
    background: #f1f3f5;
    color: #495057;
    padding: 5px 10px;
    font-weight: 500;
}

.btn-view-detail {
    background: #f0f7ff;
    color: #0d6efd;
    padding: 10px 20px;
    border-radius: 10px;
    text-decoration: none !important;
    font-weight: 600;
    font-size: 0.9rem;
    transition: 0.3s;
}

.btn-view-detail:hover {
    background: #0d6efd;
    color: #fff;
}

/* Responsive cho Mobile */
@media (max-width: 768px) {
    .order-header {
        flex-direction: column;
        align-items: flex-start !important;
        gap: 10px;
    }
    .order-body {
        text-align: left;
    }
    .btn-view-detail {
        width: 100%;
        text-align: center;
        margin-top: 10px;
    }
}
</style>