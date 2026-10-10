<?php
$sql_sua_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet WHERE id_baiviet='$_GET[idbaiviet]' LIMIT 1";
$query_sua_danhmucbv = mysqli_query($mysqli,$sql_sua_danhmucbv);
?>

<div class="form-container edit-mode">
    <div class="form-header">
        <h3 class="form-title">Cập nhật danh mục bài viết</h3>
        <p class="form-subtitle">Chỉnh sửa thông tin bên dưới và nhấn lưu để thay đổi</p>
    </div>

    <?php while($dong = mysqli_fetch_array($query_sua_danhmucbv)) { ?>
        <form method="POST" action="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $_GET['idbaiviet'] ?>" class="admin-form">
            
            <div class="form-group">
                <label>Tên danh mục bài viết</label>
                <div class="input-box">
                    <input type="text" value="<?php echo $dong['tendanhmuc_baiviet'] ?>" name="tendanhmucbaiviet" class="form-control" placeholder="Nhập tên danh mục..." required>
                </div>
            </div>

            <div class="form-group">
                <label>Thứ tự sắp xếp</label>
                <div class="input-box">
                    <input type="number" value="<?php echo $dong['thutu'] ?>" name="thutu" class="form-control" required>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" name="suadanhmucbaiviet" class="btn-update">Lưu thay đổi</button>
                <a href="index.php?action=quanlydanhmucbaiviet&query=them" class="btn-cancel">Hủy bỏ</a>
            </div>
        </form>
    <?php } ?>
</div>

<style>
    .edit-mode {
        max-width: 600px;
        margin: 40px auto;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        padding: 30px;
        border-top: 5px solid #f39c12; 
    }

    .form-header {
        margin-bottom: 25px;
        text-align: center;
        border-bottom: 1px solid #f1f1f1;
        padding-bottom: 15px;
    }

    .form-title {
        color: #e67e22;
        font-size: 22px;
        margin: 0;
        text-transform: uppercase;
        font-weight: 700;
    }

    .form-subtitle {
        color: #7f8c8d;
        font-size: 13px;
        margin-top: 5px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: 600;
        color: #34495e;
        margin-bottom: 8px;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #dcdde1;
        border-radius: 8px;
        font-size: 15px;
        outline: none;
        transition: all 0.3s ease;
        box-sizing: border-box;
    }

    .form-control:focus {
        border-color: #f39c12;
        box-shadow: 0 0 0 3px rgba(243, 156, 18, 0.1);
    }

    .form-actions {
        display: flex;
        gap: 10px;
        margin-top: 30px;
    }

    .btn-update {
        flex: 2;
        background: #f39c12;
        color: white;
        padding: 12px;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-cancel {
        flex: 1;
        background: #f1f2f6;
        color: #2f3640;
        padding: 12px;
        text-align: center;
        text-decoration: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 14px;
        transition: 0.3s;
    }

    .btn-update:hover {
        background: #d35400;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(211, 84, 0, 0.2);
    }

    .btn-cancel:hover {
        background: #dfe4ea;
    }

    /* Responsive */
    @media (max-width: 480px) {
        .form-actions {
            flex-direction: column;
        }
    }
</style>