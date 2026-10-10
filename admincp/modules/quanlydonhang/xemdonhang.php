<div class="list-container">
    <div class="list-header">
        <h4 class="list-title">Chi tiết đơn hàng</h4>
        <div class="order-meta">
            <span class="order-code">Mã đơn: <strong>#<?php echo $_GET['code']; ?></strong></span>
            <a href="index.php?action=quanlydonhang&query=lietke" class="btn-back">← Quay lại danh sách</a>
        </div>
    </div>

    <?php
    $code = $_GET['code'];
    $sql_lietke_dh = "
    SELECT * FROM tbl_cart_details, tbl_sanpham 
    WHERE tbl_cart_details.id_sanpham = tbl_sanpham.id_sanpham 
    AND tbl_cart_details.code_cart = '".$code."' 
    ORDER BY tbl_cart_details.id_cart_details DESC
    ";
    $query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
    ?>

    <div class="responsive-table">
        <table class="table-styled">
            <thead>
                <tr>
                    <th width="50px">STT</th>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th class="text-center">Số lượng</th>
                    <th class="text-right">Đơn giá</th>
                    <th class="text-right">Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                $tongtien = 0;
                while ($row = mysqli_fetch_array($query_lietke_dh)) {
                    $i++;
                    $thanhtien = $row['giasp'] * $row['soluongmua'];
                    $tongtien += $thanhtien;
                ?>
                    <tr>
                        <td class="text-center"><?php echo $i ?></td>
                        <td class="text-center">
                            <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" class="product-img-mini">
                        </td>
                        <td class="text-bold"><?php echo $row['tensanpham'] ?></td>
                        <td class="text-center"><?php echo $row['soluongmua'] ?></td>
                        <td class="text-right"><?php echo number_format($row['giasp'], 0, ',', '.') ?>đ</td>
                        <td class="text-right text-blue"><?php echo number_format($thanhtien, 0, ',', '.') ?>đ</td>
                    </tr>
                <?php
                }
                ?>
                <tr class="summary-row">
                    <td colspan="5" class="text-right"><strong>Tổng giá trị đơn hàng:</strong></td>
                    <td class="text-right total-amount">
                        <?php echo number_format($tongtien, 0, ',', '.') ?><span> vnđ</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="order-actions-bottom">
        <button onclick="window.print()" class="btn-print-action">🖨️ In hóa đơn ngay</button>
    </div>
</div>

<style>
    .list-container {
        background: #fff;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        margin: 20px 0;
    }

    .list-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 2px solid #f1f2f6;
    }

    .list-title {
        color: #2d3436;
        font-size: 20px;
        font-weight: 700;
        margin: 0;
    }

    .order-code {
        background: #e3f2fd;
        color: #1976d2;
        padding: 5px 12px;
        border-radius: 6px;
        margin-right: 15px;
        font-size: 14px;
    }

    .btn-back {
        text-decoration: none;
        color: #636e72;
        font-size: 14px;
        font-weight: 600;
    }

    .table-styled {
        width: 100%;
        border-collapse: collapse;
    }

    .table-styled th {
        background: #f8f9fa;
        padding: 15px;
        color: #2d3436;
        font-weight: 600;
        border-bottom: 2px solid #edf2f7;
    }

    .table-styled td {
        padding: 15px;
        border-bottom: 1px solid #edf2f7;
        vertical-align: middle;
    }

    .product-img-mini {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 8px;
        border: 1px solid #eee;
    }

    .text-right { text-align: right; }
    .text-center { text-align: center; }
    .text-blue { color: #1a73e8; font-weight: 700; }

    /* Dòng tổng tiền */
    .summary-row td {
        background: #fcfcfc;
        padding: 20px 15px;
    }

    .total-amount {
        font-size: 20px;
        color: #d32f2f;
        font-weight: 800;
    }
    
    .total-amount span { font-size: 14px; font-weight: 400; }

    .order-actions-bottom {
        margin-top: 30px;
        text-align: right;
    }

    .btn-print-action {
        background: #2d3436;
        color: white;
        padding: 12px 25px;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-print-action:hover {
        background: #000;
        transform: translateY(-2px);
    }

    @media print {
        .btn-back, .btn-print-action { display: none; }
        .list-container { box-shadow: none; padding: 0; }
    }
</style>