<?php
$sql_lietke_bv = "SELECT * FROM tbl_baiviet,tbl_danhmucbaiviet WHERE tbl_baiviet.id_danhmuc = tbl_danhmucbaiviet.id_baiviet ORDER BY tbl_baiviet.id DESC";
$query_lietke_bv = mysqli_query($mysqli, $sql_lietke_bv);
?>

<div class="list-container">
    <h4 class="list-title">Danh sách bài viết</h4>

    <div class="responsive-table">
        <table class="table-styled">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên bài viết</th>
                    <th>Hình ảnh</th>
                    <th>Danh mục</th>
                    <th>Tóm tắt</th>
                    <th>Trạng thái</th>
                    <th>Quản lý</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($query_lietke_bv)) {
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td class="text-bold"><?php echo $row['tenbaiviet'] ?></td>
                    <td>
                        <img class="img-product" src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>">
                    </td>
                    <td><span class="badge-cate"><?php echo $row['tendanhmuc_baiviet'] ?></span></td>
                    <td class="text-summary"><?php echo $row['tomtat'] ?></td>
                    <td>
                        <?php
                        if ($row['tinhtrang'] == 1) {
                            echo '<span class="status-active">Kích hoạt</span>';
                        } else {
                            echo '<span class="status-hidden">Ẩn</span>';
                        }
                        ?>
                    </td>
                    <td class="action-links">
                        <a class="btn-edit" href="?action=quanlybaiviet&query=sua&idbaiviet=<?php echo $row['id'] ?>">Sửa</a>
                        <a class="btn-delete" href="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này?')">Xoá</a>
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
        padding: 10px;
    }
    .list-title {
        font-size: 20px;
        color: #2c3e50;
        margin-bottom: 20px;
        font-weight: 700;
        border-left: 4px solid #3498db;
        padding-left: 15px;
    }

    .table-styled {
        width: 100%;
        border-collapse: collapse;
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
    }

    .table-styled thead tr {
        background-color: #34495e;
        color: #ffffff;
        text-align: center;
        font-weight: bold;
    }

    .table-styled th, .table-styled td {
        padding: 12px 15px;
        border-bottom: 1px solid #eee;
        text-align: center;
    }

    .table-styled tbody tr:hover {
        background-color: #f9f9f9;
    }

    .img-product {
        width: 100px;
        height: auto;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .text-bold {
        font-weight: 600;
        color: #333;
        text-align: left !important;
    }

    .text-summary {
        font-size: 13px;
        color: #666;
        max-width: 250px;
        text-align: left !important;
    }

    .badge-cate {
        background: #e1f5fe;
        color: #0288d1;
        padding: 5px 10px;
        border-radius: 15px;
        font-size: 12px;
        font-weight: 600;
    }

    /* Trạng thái */
    .status-active { color: #27ae60; font-weight: bold; }
    .status-hidden { color: #95a5a6; font-style: italic; }

    /* Nút bấm quản lý */
    .action-links a {
        text-decoration: none;
        padding: 6px 12px;
        border-radius: 4px;
        font-size: 13px;
        font-weight: bold;
        display: inline-block;
        margin: 2px;
    }

    .btn-edit {
        background-color: #3498db;
        color: white !important;
    }

    .btn-delete {
        background-color: #e74c3c;
        color: white !important;
    }

    .btn-edit:hover, .btn-delete:hover {
        opacity: 0.8;
    }

    /* Responsive cho bảng */
    .responsive-table {
        overflow-x: auto;
    }
</style>