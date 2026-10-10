<?php
$sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
$query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>

<div class="list-container">
    <div class="list-header">
        <h3 class="list-title">Danh sách sản phẩm</h3>
        <a href="?action=quanlysp&query=them" class="btn-add-product">+ Thêm sản phẩm mới</a>
    </div>

    <div class="responsive-table">
        <table class="table-styled">
            <thead>
                <tr>
                    <th width="50px">STT</th>
                    <th>Hình ảnh</th>
                    <th>Thông tin sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Danh mục</th>
                    <th>Trạng thái</th>
                    <th width="150px">Quản lý</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($query_lietke_sp)) {
                    $i++;
                ?>
                <tr>
                    <td class="text-center"><?php echo $i ?></td>
                    <td class="text-center">
                        <div class="img-wrapper">
                            <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
                        </div>
                    </td>
                    <td>
                        <div class="product-info">
                            <span class="product-name"><?php echo $row['tensanpham'] ?></span>
                            <span class="product-sku">Mã: <?php echo $row['masp'] ?></span>
                            <span class="product-price"><?php echo number_format($row['giasp'],0,',','.') ?>đ</span>
                        </div>
                    </td>
                    <td class="text-center">
                        <span class="stock-count"><?php echo $row['soluong'] ?></span>
                    </td>
                    <td><span class="category-tag"><?php echo $row['tendanhmuc'] ?></span></td>
                    <td class="text-center">
                        <?php
                        if ($row['tinhtrang'] == 1) {
                            echo '<span class="status-active">Kích hoạt</span>';
                        } else {
                            echo '<span class="status-hidden">Đang ẩn</span>';
                        }
                        ?>
                    </td>
                    <td class="action-cell">
                        <a class="btn-edit" href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
                        <a class="btn-delete" href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xoá</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<style>
    .list-container {
        background: #fff;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
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
        color: #2c3e50;
        font-size: 22px;
        font-weight: 700;
        text-transform: uppercase;
        margin: 0;
    }

    .btn-add-product {
        background: #2ecc71;
        color: white !important;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-add-product:hover { background: #27ae60; transform: translateY(-2px); }

    .table-styled {
        width: 100%;
        border-collapse: collapse;
    }

    .table-styled thead tr {
        background: #f8f9fa;
        color: #34495e;
        text-align: left;
    }

    .table-styled th, .table-styled td {
        padding: 15px;
        border-bottom: 1px solid #edf2f7;
    }

    /* Hình ảnh sản phẩm */
    .img-wrapper img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 8px;
        border: 1px solid #eee;
    }

    /* Thông tin sản phẩm */
    .product-info { display: flex; flex-direction: column; gap: 4px; }
    .product-name { font-weight: 700; color: #2c3e50; font-size: 15px; }
    .product-sku { font-size: 12px; color: #95a5a6; }
    .product-price { color: #e74c3c; font-weight: 600; }

    /* Tags & Badges */
    .category-tag {
        background: #e1f5fe;
        color: #0288d1;
        padding: 4px 10px;
        border-radius: 4px;
        font-size: 12px;
    }

    .status-active { color: #27ae60; background: #eafaf1; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: 600; }
    .status-hidden { color: #95a5a6; background: #f4f6f7; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: 600; }

    /* Nút bấm quản lý */
    .action-cell { display: flex; gap: 8px; }
    .action-cell a {
        text-decoration: none;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-edit { background: #3498db; color: white !important; }
    .btn-delete { background: #e74c3c; color: white !important; }
    .btn-edit:hover { background: #2980b9; }
    .btn-delete:hover { background: #c0392b; }

    .text-center { text-align: center; }
    .responsive-table { overflow-x: auto; }
</style>