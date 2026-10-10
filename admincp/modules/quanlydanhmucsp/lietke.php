<?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>

<div class="list-container">
    <div class="list-header">
        <h4 class="list-title">Danh mục sản phẩm</h4>
        <a href="?action=quanlydanhmucsanpham&query=them" class="btn-add-cate">+ Thêm danh mục mới</a>
    </div>

    <div class="responsive-table">
        <table class="table-styled">
            <thead>
                <tr>
                    <th width="80px">STT</th>
                    <th>Tên danh mục sản phẩm</th>
                    <th width="200px">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
                    $i++;
                ?>
                <tr>
                    <td class="text-center"><?php echo $i ?></td>
                    <td class="cate-name"><?php echo $row['tendanhmuc'] ?></td>
                    <td class="action-buttons">
                        <a class="btn-action btn-edit" href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">
                            Sửa
                        </a>
                        <a class="btn-action btn-delete" href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>" onclick="return confirm('Xóa danh mục này có thể làm mất các sản phẩm liên quan. Bạn chắc chứ?')">
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
        background: #fff;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        margin-top: 20px;
    }

    .list-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 2px solid #f8f9fa;
    }

    .list-title {
        font-size: 18px;
        color: #2d3436;
        margin: 0;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    .btn-add-cate {
        background: #0984e3;
        color: #fff !important;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
        transition: 0.3s;
    }
    .btn-add-cate:hover { background: #074b83; box-shadow: 0 4px 10px rgba(9, 132, 227, 0.3); }

    .table-styled {
        width: 100%;
        border-collapse: collapse;
    }

    .table-styled thead tr {
        background-color: #f1f2f6;
        color: #2f3542;
        text-align: left;
    }

    .table-styled th, .table-styled td {
        padding: 15px;
        border-bottom: 1px solid #f1f2f6;
    }

    .text-center { text-align: center; }

    .cate-name {
        font-weight: 600;
        color: #2d3436;
    }

    /* Nhóm nút thao tác */
    .action-buttons {
        text-align: center;
    }

    .btn-action {
        text-decoration: none;
        padding: 7px 15px;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 600;
        margin: 0 3px;
        display: inline-block;
        transition: 0.3s;
    }

    .btn-edit { background: #e1f5fe; color: #0288d1 !important; border: 1px solid #b3e5fc; }
    .btn-delete { background: #ffebee; color: #d32f2f !important; border: 1px solid #ffcdd2; }

    .btn-edit:hover { background: #0288d1; color: #fff !important; }
    .btn-delete:hover { background: #d32f2f; color: #fff !important; }

    .responsive-table { overflow-x: auto; }

    /* Hiệu ứng dòng khi di chuột */
    .table-styled tbody tr:hover { background-color: #fafafa; }
</style>