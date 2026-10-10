<?php
$sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
$query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>

<div class="form-container edit-mode">
    <div class="form-header">
        <h3 class="form-title">Cập nhật danh mục sản phẩm</h3>
        <p class="form-subtitle">Thay đổi tên hoặc thứ tự hiển thị của danh mục</p>
    </div>

    <?php while ($dong = mysqli_fetch_array($query_sua_danhmucsp)) { ?>
        <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" class="admin-form">
            
            <div class="form-group">
                <label>Tên danh mục sản phẩm</label>
                <div class="input-box">
                    <input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc" class="form-control" placeholder="Nhập tên danh mục..." required>
                </div>
            </div>

            <div class="form-group">
                <label>Thứ tự sắp xếp</label>
                <div class="input-box">
                    <input type="number" value="<?php echo $dong['thutu'] ?>" name="thutu" class="form-control" required>
                    <small style="color: #999;">Thứ tự dùng để sắp xếp danh mục trên trang chủ.</small>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" name="suadanhmuc" class="btn-update">Cập nhật ngay</button>
                <a href="index.php?action=quanlydanhmucsanpham&query=them" class="btn-cancel">Hủy bỏ</a>
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
        border-bottom: 1px solid #f8f9fa;
        padding-bottom: 15px;
    }

    .form-title {
        color: #d35400;
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
        background: #e67e22;
        transform: translateY(-2px);
    }

    .btn-cancel:hover {
        background: #dfe4ea;
    }

    @media (max-width: 480px) {
        .form-actions { flex-direction: column; }
    }
</style>