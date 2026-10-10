<div class="container mt-4 mb-5">
    <div class="row mb-4">
        <div class="col-12">
            <div class="arrow-steps clearfix">
                <div class="step done"> <span><a href="index.php?quanly=giohang">Giỏ hàng</a></span> </div>
                <div class="step done"> <span><a href="index.php?quanly=vanchuyen">Vận chuyển</a></span> </div>
                <div class="step current"> <span><a href="index.php?quanly=thanhtoan">Thanh toán</a></span> </div>
                <div class="step"> <span><a href="index.php?quanly=donhangdadat">Lịch sử</a></span> </div>
            </div>
        </div>
    </div>

    <form action="pages/main/xulythanhtoan.php" method="POST">
        <div class="row">
            <?php
            $id_dangky = $_SESSION['id_khachhang'];
            $sql_get_vanchuyen = mysqli_query($mysqli, "SELECT * FROM tbl_shipping WHERE id_dangky='$id_dangky' LIMIT 1");
            $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
            ?>

            <div class="col-md-8">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0 font-weight-bold text-primary"><i class="fas fa-truck mr-2"></i>Thông tin vận chuyển</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="mb-1 text-muted small">Người nhận:</p>
                                <p class="font-weight-bold"><?php echo $row_get_vanchuyen['name'] ?></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-1 text-muted small">Số điện thoại:</p>
                                <p class="font-weight-bold"><?php echo $row_get_vanchuyen['phone'] ?></p>
                            </div>
                            <div class="col-12 mt-2">
                                <p class="mb-1 text-muted small">Địa chỉ nhận hàng:</p>
                                <p class="font-weight-bold"><?php echo $row_get_vanchuyen['address'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0 font-weight-bold text-primary"><i class="fas fa-box-open mr-2"></i>Chi tiết đơn hàng</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th class="text-center">Số lượng</th>
                                    <th class="text-right">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $tongtien = 0;
                                if (isset($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] as $cart_item) {
                                        $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
                                        $tongtien += $thanhtien;
                                ?>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="50" class="rounded mr-2 border">
                                            <span class="small font-weight-bold"><?php echo $cart_item['tensanpham']; ?></span>
                                        </div>
                                    </td>
                                    <td class="text-center"><?php echo $cart_item['soluong']; ?></td>
                                    <td class="text-right font-weight-bold"><?php echo number_format($thanhtien, 0, ',', '.') ?>₫</td>
                                </tr>
                                <?php }} ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4 mt-md-0">
                <div class="card shadow-sm border-0 sticky-top" style="top: 20px;">
                    <div class="card-header bg-primary text-white py-3">
                        <h5 class="mb-0 font-weight-bold">Hình thức thanh toán</h5>
                    </div>
                    <div class="card-body">
                        <div class="payment-methods">
                            <label class="payment-option d-flex align-items-center p-3 mb-2 border rounded cursor-pointer">
                                <input type="radio" name="payment" value="tienmat" checked class="mr-3">
                                <i class="fas fa-money-bill-wave text-success mr-2 fa-lg"></i>
                                <span>Tiền mặt (COD)</span>
                            </label>

                            <label class="payment-option d-flex align-items-center p-3 mb-2 border rounded cursor-pointer">
                                <input type="radio" name="payment" value="chuyenkhoan" class="mr-3">
                                <i class="fas fa-university text-info mr-2 fa-lg"></i>
                                <span>Chuyển khoản ngân hàng</span>
                            </label>

                            
                            <label class="payment-option d-flex align-items-center p-3 mb-3 border rounded cursor-pointer">
                                <input type="radio" name="payment" value="vnpay" class="mr-3">
                                <img src="images/vnpay.png" height="24" width="24" class="mr-2 rounded">
                                <span>Vnpay</span>
                            </label>
                        </div>

                        <hr>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Tạm tính:</span>
                            <span><?php echo number_format($tongtien, 0, ',', '.') ?>₫</span>
                        </div>
                        <div class="d-flex justify-content-between mb-4">
                            <span class="font-weight-bold">Tổng cộng:</span>
                            <span class="h4 font-weight-bold text-danger"><?php echo number_format($tongtien, 0, ',', '.') ?>₫</span>
                        </div>

                        <button type="submit" name="checkout" class="btn btn-danger btn-block btn-lg py-3 font-weight-bold shadow-sm rounded-pill">
                            XÁC NHẬN THANH TOÁN
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<style>
    .payment-option {
        transition: all 0.2s ease;
        cursor: pointer;
    }
    .payment-option:hover {
        background-color: #f8f9fa;
        border-color: #007bff !important;
    }
    .payment-option input[type="radio"]:checked + i,
    .payment-option input[type="radio"]:checked + span {
        color: #007bff;
    }
    .cursor-pointer { cursor: pointer; }
    
    /* Làm cho cột thanh toán chạy dọc khi cuộn trang */
    @media (min-width: 768px) {
        .sticky-top {
            z-index: 10;
        }
    }

.arrow-steps .step {
    font-size: 14px;
    text-align: center;
    color: #666;
    cursor: default;
    margin: 0 3px;
    padding: 10px 10px 10px 30px;
    min-width: 180px;
    float: left;
    position: relative;
    background-color: #d9e3f7; 
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    transition: background-color 0.3s;
}

/* Tạo hình mũi tên ở phía sau bằng pseudo-element ::after */
.arrow-steps .step:after,
.arrow-steps .step:before {
    content: "";
    position: absolute;
    top: 0;
    right: -20px;
    width: 0;
    height: 0;
    border-top: 20px solid transparent; 
    border-bottom: 20px solid transparent;
    border-left: 20px solid #d9e3f7;
    z-index: 2;
    transition: border-color 0.3s;
}

.arrow-steps .step:before {
    right: auto;
    left: 0;
    border-left: 20px solid #fff; 
    z-index: 0;
}

.arrow-steps .step:first-child:before {
    border: none;
}

.arrow-steps .step:first-child {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    padding-left: 20px;
}

.arrow-steps .step span a {
    color: #555;
    text-decoration: none;
    font-weight: bold;
    display: block;
}

.arrow-steps .step.current {
    background-color: #23468c; 
    color: #fff;
}

.arrow-steps .step.current:after {
    border-left: 20px solid #23468c;
}

.arrow-steps .step.current span a {
    color: #fff;
}

/* Hiệu ứng Hover */
.arrow-steps .step:hover {
    background-color: #b5c7ed;
}

.arrow-steps .step:hover:after {
    border-left: 20px solid #b5c7ed;
}

.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

</style>