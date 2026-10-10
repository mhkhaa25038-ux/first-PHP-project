<div class="container mt-4">
    <div class="cart-header mb-4">
        <h4 class="font-weight-bold"><i class="fas fa-shopping-cart mr-2"></i> GIỎ HÀNG</h4>
        <?php if (isset($_SESSION['dangky'])): ?>
            <div class="alert alert-light border-0 shadow-sm p-3">
                Xin chào: <strong class="text-danger"><?php echo $_SESSION['dangky']; ?></strong> 
                <span class="badge badge-success ml-2">Đã đăng nhập</span>
            </div>
        <?php endif; ?>
    </div>

    <div class="row mb-4">
        <div class="col-12">
            <div class="arrow-steps clearfix">
                <div class="step current"> <span><a href="index.php?quanly=giohang">Giỏ hàng</a></span> </div>
                <div class="step"> <span><a href="index.php?quanly=vanchuyen">Vận chuyển</a></span> </div>
                <div class="step"> <span><a href="index.php?quanly=thanhtoan">Thanh toán</a></span> </div>
                <div class="step"> <span><a href="index.php?quanly=donhangdadat">Lịch sử</a></span> </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th>STT</th>
                            <th>Sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Thành tiền</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                            $i = 0; $tongtien = 0;
                            foreach ($_SESSION['cart'] as $cart_item) {
                                $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
                                $tongtien += $thanhtien;
                                $i++;
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td class="font-weight-bold"><?php echo $cart_item['tensanpham']; ?> <br> <small class="text-muted">Mã: <?php echo $cart_item['masp']; ?></small></td>
                            <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" class="rounded shadow-sm" width="80px"></td>
                            <td>
                                <div class="qty-control d-flex align-items-center justify-content-center">
                                    <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>" class="btn btn-sm btn-light border"><i class="fas fa-minus"></i></a>
                                    <span class="mx-3 font-weight-bold"><?php echo $cart_item['soluong']; ?></span>
                                    <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>" class="btn btn-sm btn-light border"><i class="fas fa-plus"></i></a>
                                </div>
                            </td>
                            <td><?php echo number_format($cart_item['giasp'], 0, ',', '.') . '₫'; ?></td>
                            <td class="text-primary font-weight-bold"><?php echo number_format($thanhtien, 0, ',', '.') . '₫'; ?></td>
                            <td>
                                <a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>" class="btn btn-outline-danger btn-sm rounded-circle">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                        
                        <tr class="bg-light">
                            <td colspan="4" class="text-left py-4 px-4">
                                <a href="pages/main/themgiohang.php?xoatatca=1" class="text-danger small"><i class="fas fa-times-circle mr-1"></i>Xoá tất cả giỏ hàng</a>
                            </td>
                            <td colspan="3" class="text-right py-4 px-4">
                                <h5 class="mb-2">Tổng tiền: <span class="text-danger font-weight-bold"><?php echo number_format($tongtien, 0, ',', '.') . '₫' ?></span></h5>
                                <?php if (isset($_SESSION['dangky'])): ?>
                                    <a href="index.php?quanly=vanchuyen" class="btn btn-success btn-lg px-5 shadow-sm rounded-pill font-weight-bold">
                                        Tiến hành đặt hàng <i class="fas fa-chevron-right ml-2"></i>
                                    </a>
                                <?php else: ?>
                                    <a href="index.php?quanly=dangky" class="btn btn-warning btn-lg px-5 shadow-sm rounded-pill font-weight-bold text-white">
                                        Đăng ký để thanh toán <i class="fas fa-user-plus ml-2"></i>
                                    </a>
                                <?php endif; ?>
                            </td>
                        </tr>

                        <?php } else { ?>
                        <tr>
                            <td colspan="7" class="py-5">
                                <div class="text-center">
                                    <i class="fas fa-shopping-basket fa-4x text-light mb-3"></i>
                                    <p class="text-muted">Giỏ hàng của bạn hiện đang trống.</p>
                                    <a href="index.php" class="btn btn-primary rounded-pill px-4">Mua sắm ngay</a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<style>
    /* Làm đẹp bảng */
    .table thead th {
        border-top: none;
        border-bottom: 2px solid #f1f1f1;
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: 0.5px;
        color: #777;
    }
    
    .table tbody td {
        vertical-align: middle !important;
        border-top: 1px solid #f8f9fa;
    }

    /* Nút số lượng */
    .qty-control .btn {
        width: 32px;
        height: 32px;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        transition: 0.3s;
    }

    .qty-control .btn:hover {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }

    /* Hiệu ứng tổng thể */
    .shadow-sm {
        box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
    }

    .btn-lg {
        font-size: 1.1rem;
    }

    /* Container chính */
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
    border-top: 20px solid transparent; /* Độ cao bằng nửa chiều cao thẻ step */
    border-bottom: 20px solid transparent;
    border-left: 20px solid #d9e3f7;
    z-index: 2;
    transition: border-color 0.3s;
}

/* Tạo phần lõm ở phía trước bằng pseudo-element ::before */
.arrow-steps .step:before {
    right: auto;
    left: 0;
    border-left: 20px solid #fff; /* Màu này trùng với màu nền của trang web */
    z-index: 0;
}

/* Loại bỏ phần lõm ở bước đầu tiên */
.arrow-steps .step:first-child:before {
    border: none;
}

.arrow-steps .step:first-child {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    padding-left: 20px;
}

/* Style cho chữ và link */
.arrow-steps .step span a {
    color: #555;
    text-decoration: none;
    font-weight: bold;
    display: block;
}

/* Trạng thái hiện tại (Current Step) */
.arrow-steps .step.current {
    background-color: #23468c; /* Màu xanh đậm */
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

/* Clearfix để không bị vỡ layout do dùng float */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}


</style>