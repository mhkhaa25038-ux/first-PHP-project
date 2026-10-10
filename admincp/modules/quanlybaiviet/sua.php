<?php
$sql_sua_bv = "SELECT * FROM tbl_baiviet WHERE id ='$_GET[idbaiviet]' LIMIT 1";
$query_sua_bv = mysqli_query($mysqli, $sql_sua_bv);
?>

<div class="form-container">
    <div class="form-header">
        <h3 class="form-title">Cập nhật bài viết</h3>
        <p class="form-subtitle">Chỉnh sửa thông tin và nhấn lưu để cập nhật bài viết</p>
    </div>

    <?php while ($row = mysqli_fetch_array($query_sua_bv)) { ?>
        <form method="POST" action="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id'] ?>" enctype="multipart/form-data" class="admin-form">
            
            <div class="form-group">
                <label>Tên bài viết</label>
                <div class="input-box">
                    <input type="text" value="<?php echo $row['tenbaiviet'] ?>" name="tenbaiviet" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label>Hình ảnh hiện tại</label>
                <div class="input-box image-edit-group">
                    <input type="file" name="hinhanh" class="form-control file-input">
                    <div class="current-image">
                        <p>Ảnh cũ:</p>
                        <img src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Tóm tắt bài viết</label>
                <div class="input-box">
                    <textarea rows="6" name="tomtat" class="form-control"><?php echo $row['tomtat'] ?></textarea>
                </div>
            </div>

            <div class="form-group">
                <label>Nội dung chi tiết</label>
                <div class="input-box">
                    <textarea rows="10" name="noidung" class="form-control"><?php echo $row['noidung'] ?></textarea>
                </div>
            </div>

            <div class="form-group">
                <label>Danh mục</label>
                <div class="input-box">
                    <select name="danhmuc" class="form-control select-custom">
                        <?php
                        $sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
                        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                            $selected = ($row_danhmuc['id_baiviet'] == $row['id_danhmuc']) ? 'selected' : '';
                            echo "<option value='{$row_danhmuc['id_baiviet']}' $selected>{$row_danhmuc['tendanhmuc_baiviet']}</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>Tình trạng</label>
                <div class="input-box">
                    <select name="tinhtrang" class="form-control select-custom">
                        <option value="1" <?php if($row['tinhtrang'] == 1) echo 'selected'; ?>>Kích hoạt</option>
                        <option value="0" <?php if($row['tinhtrang'] == 0) echo 'selected'; ?>>Ẩn</option>
                    </select>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" name="suabaiviet" class="btn-update">Lưu thay đổi</button>
                <a href="index.php?action=quanlybaiviet&query=lietke" class="btn-cancel">Quay lại</a>
            </div>
        </form>
    <?php } ?>
</div>

<style>
    .form-container {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.08);
        padding: 30px;
        margin: 20px auto;
        max-width: 900px;
    }

    .form-header {
        margin-bottom: 30px;
        border-bottom: 2px solid #f0f0f0;
        padding-bottom: 15px;
    }

    .form-title {
        color: #f39c12; 
        font-size: 24px;
        margin: 0;
        text-transform: uppercase;
        font-weight: 700;
    }

    .form-subtitle {
        color: #666;
        font-size: 14px;
        margin-top: 5px;
    }

    .form-group {
        display: flex;
        margin-bottom: 22px;
        flex-wrap: wrap;
    }

    .form-group label {
        flex: 0 0 200px;
        font-weight: 600;
        color: #444;
        padding-top: 10px;
    }

    .form-group .input-box {
        flex: 1;
        min-width: 300px;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 15px;
        box-sizing: border-box;
        outline: none;
        transition: 0.3s;
    }

    .form-control:focus {
        border-color: #f39c12;
        box-shadow: 0 0 0 3px rgba(243, 156, 18, 0.1);
    }

    .image-edit-group {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .current-image p {
        margin: 0 0 5px 0;
        font-size: 13px;
        color: #888;
    }

    .current-image img {
        border: 2px solid #f0f0f0;
        border-radius: 8px;
        padding: 5px;
    }

    /* NÚT BẤM */
    .form-actions {
        display: flex;
        gap: 15px;
        padding-left: 200px;
        margin-top: 30px;
    }

    .btn-update {
        background: #f39c12;
        color: white;
        padding: 12px 30px;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-cancel {
        background: #f8f9fa;
        color: #555;
        padding: 12px 30px;
        border: 1px solid #ddd;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        font-size: 14px;
        transition: 0.3s;
    }

    .btn-update:hover {
        background: #e67e22;
        box-shadow: 0 4px 12px rgba(243, 156, 18, 0.3);
    }

    .btn-cancel:hover {
        background: #e9ecef;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
        .form-group label {
            flex: 0 0 100%;
            margin-bottom: 8px;
        }
        .form-actions {
            padding-left: 0;
            flex-direction: column;
        }
        .btn-update, .btn-cancel {
            width: 100%;
            text-align: center;
        }
    }
</style>