<?php
    $sql_lietke_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu DESC";
    $query_lietke_danhmucbv = mysqli_query($mysqli,$sql_lietke_danhmucbv);
?>

<div class="list-container">
    <div class="list-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h4 class="list-title" style="margin:0;">Liệt kê danh mục bài viết</h4>
        <a href="?action=quanlydanhmucbaiviet&query=them" class="btn-add-new">+ Thêm danh mục mới</a>
    </div>

    <div class="responsive-table">
        <table class="table-styled">
            <thead>
                <tr>
                    <th width="10%">ID</th>
                    <th width="65%">Tên danh mục bài viết</th>
                    <th width="25%">Quản lý</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while($row = mysqli_fetch_array($query_lietke_danhmucbv)){
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td class="text-bold"><?php echo $row['tendanhmuc_baiviet'] ?></td>
                    <td class="action-links">
                        <a class="btn-edit" href="?action=quanlydanhmucbaiviet&query=sua&idbaiviet=<?php echo $row['id_baiviet'] ?>">
                             Sửa
                        </a>
                        <a class="btn-delete" href="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?')">
                             Xoá
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
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    
    .list-title {
        font-size: 20px;
        color: #2c3e50;
        border-left: 5px solid #3498db;
        padding-left: 15px;
        text-transform: uppercase;
        font-weight: 700;
    }

    .btn-add-new {
        background-color: #27ae60;
        color: white !important;
        text-decoration: none;
        padding: 8px 15px;
        border-radius: 5px;
        font-size: 14px;
        font-weight: 600;
        transition: 0.3s;
    }
    .btn-add-new:hover { background-color: #219150; }

    .table-styled {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    .table-styled thead tr {
        background-color: #34495e;
        color: white;
        text-align: center;
    }

    .table-styled th, .table-styled td {
        padding: 15px;
        border-bottom: 1px solid #eee;
    }

    .table-styled tbody tr:hover {
        background-color: #f8f9fa;
    }

    .text-bold {
        font-weight: 600;
        color: #333;
        text-align: left !important;
    }

    /* Nút Sửa/Xóa */
    .action-links a {
        text-decoration: none;
        padding: 6px 12px;
        border-radius: 4px;
        font-size: 13px;
        margin: 0 5px;
        display: inline-block;
    }

    .btn-edit { background-color: #3498db; color: white !important; }
    .btn-delete { background-color: #e74c3c; color: white !important; }

    .action-links a:hover { opacity: 0.8; }

    .responsive-table { overflow-x: auto; }
</style>