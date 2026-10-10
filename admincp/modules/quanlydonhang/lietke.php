<div class="list-container">
    <div class="list-header">
        <h4 class="list-title">Quản lý đơn hàng</h4>
        <p class="list-subtitle">Theo dõi và xử lý các đơn hàng từ khách hàng</p>
    </div>

    <?php
    $sql_lietke_dh = "SELECT * FROM tbl_cart, tbl_dangky 
    WHERE tbl_cart.id_khachhang = tbl_dangky.id_dangky 
    ORDER BY tbl_cart.id_cart DESC";
    $query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
    ?>

    <div class="responsive-table">
        <table class="table-styled">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã đơn</th>
                    <th>Khách hàng</th>
                    <th>Thông tin liên hệ</th>
                    <th>Tình trạng</th>
                    <th>Ngày đặt</th>
                    <th colspan="2">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($query_lietke_dh)) {
                    $i++;
                ?>
                    <tr>
                        <td class="text-center"><?php echo $i ?></td>
                        <td class="text-bold"><?php echo $row['code_cart'] ?></td>
                        <td>
                            <div class="customer-info">
                                <strong><?php echo $row['tenkhachhang'] ?></strong>
                            </div>
                        </td>
                        <td class="contact-cell">
                            <span><i class="icon">📍</i> <?php echo $row['diachi'] ?></span><br>
                            <small>📞 <?php echo $row['dienthoai'] ?></small>
                        </td>
                        <td class="text-center">
                            <?php
                                if($row['cart_status'] == 1) {
                                    echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'" class="status-badge badge-new">Đơn hàng mới</a>';
                                } else {
                                    echo '<span class="status-badge badge-done">Đã xem</span>';
                                }
                            ?>
                        </td>
                        <td class="date-cell"><?php echo $row['cart_date'] ?></td>
                        
                        <td class="text-center">
                            <a class="btn-view" href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">
                                👁️ Xem chi tiết
                            </a>
                        </td>
                        <td class="text-center">
                            <a class="btn-print" href="modules/quanlydonhang/indonhang.php?code=<?php echo $row['code_cart'] ?>">
                                🖨️ In đơn
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
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
        margin-bottom: 25px;
        border-bottom: 2px solid #f1f2f6;
        padding-bottom: 15px;
    }

    .list-title {
        color: #2d3436;
        font-size: 20px;
        font-weight: 700;
        margin: 0;
        text-transform: uppercase;
        color: #1a73e8;
    }

    .list-subtitle {
        color: #636e72;
        font-size: 13px;
        margin-top: 5px;
    }

    .table-styled {
        width: 100%;
        border-collapse: collapse;
        font-size: 14px;
    }

    .table-styled thead tr {
        background: #f8f9fa;
        color: #2d3436;
        text-align: left;
    }

    .table-styled th, .table-styled td {
        padding: 15px 12px;
        border-bottom: 1px solid #edf2f7;
    }

    .text-center { text-align: center; }
    .text-bold { font-weight: 700; color: #2d3436; }

    /* Badge tình trạng */
    .status-badge {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
    }

    .badge-new {
        background: #fff3cd;
        color: #856404;
        border: 1px solid #ffeeba;
        animation: pulse 2s infinite;
    }
    
    .badge-done {
        background: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    /* Cột liên hệ */
    .contact-cell {
        max-width: 250px;
        line-height: 1.4;
    }

    /* Nút bấm */
    .btn-view, .btn-print {
        text-decoration: none;
        padding: 8px 12px;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 600;
        display: inline-block;
        transition: 0.3s;
    }

    .btn-view {
        background: #e1f5fe;
        color: #0288d1;
    }

    .btn-print {
        background: #f5f5f5;
        color: #333;
    }

    .btn-view:hover { background: #0288d1; color: #fff; }
    .btn-print:hover { background: #333; color: #fff; }

    .responsive-table { overflow-x: auto; }

    tbody tr:hover { background-color: #fcfcfc; }
</style>