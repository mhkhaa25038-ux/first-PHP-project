<div class="form-container">
    <div class="form-header">
        <h3 class="form-title">Thêm bài viết mới</h3>
        <p class="form-subtitle">Điền đầy đủ thông tin để xuất bản bài viết lên hệ thống</p>
    </div>

    <form method="POST" action="modules/quanlybaiviet/xuly.php" enctype="multipart/form-data" class="admin-form">
        
        <div class="form-group">
            <label>Tên bài viết</label>
            <div class="input-box">
                <input type="text" name="tenbaiviet" class="form-control" placeholder="Ví dụ: Xu hướng thời trang 2024" required>
            </div>
        </div>

        <div class="form-group">
            <label>Hình ảnh bìa</label>
            <div class="input-box">
                <input type="file" name="hinhanh" class="form-control file-input">
                <small style="color: #888;">Nên chọn ảnh chất lượng cao (.jpg, .png)</small>
            </div>
        </div>

        <div class="form-group">
            <label>Tóm tắt bài viết</label>
            <div class="input-box">
                <textarea rows="5" name="tomtat" class="form-control" placeholder="Mô tả ngắn gọn nội dung bài viết..."></textarea>
            </div>
        </div>

        <div class="form-group">
            <label>Nội dung chi tiết</label>
            <div class="input-box">
                <textarea rows="10" name="noidung" class="form-control" placeholder="Viết nội dung bài viết tại đây..."></textarea>
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
                    ?>
                        <option value="<?php echo $row_danhmuc['id_baiviet'] ?>">
                            <?php echo $row_danhmuc['tendanhmuc_baiviet'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label>Trạng thái</label>
            <div class="input-box">
                <select name="tinhtrang" class="form-control select-custom">
                    <option value="1">Kích hoạt (Công khai)</option>
                    <option value="0">Ẩn (Lưu nháp)</option>
                </select>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" name="thembaiviet" class="btn-primary">Xuất bản bài viết</button>
            <button type="reset" class="btn-secondary">Làm lại</button>
        </div>
    </form>
</div>

<style>
    .form-container {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.1);
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
        color: #1a73e8;
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
        margin-bottom: 20px;
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
        transition: all 0.3s;
        box-sizing: border-box;
        outline: none;
    }

    .form-control:focus {
        border-color: #1a73e8;
        box-shadow: 0 0 0 3px rgba(26, 115, 232, 0.1);
    }

    textarea.form-control {
        resize: none;
        font-family: inherit;
    }

    .select-custom {
        cursor: pointer;
        background-color: #f9f9f9;
    }

    /* NÚT BẤM */
    .form-actions {
        display: flex;
        gap: 15px;
        padding-left: 200px; /* Căn thẳng với input */
        margin-top: 30px;
    }

    .btn-primary {
        background: #1a73e8;
        color: white;
        padding: 12px 30px;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-secondary {
        background: #f1f3f4;
        color: #3c4043;
        padding: 12px 30px;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-primary:hover {
        background: #1557b0;
        box-shadow: 0 4px 12px rgba(26, 115, 232, 0.3);
    }

    .btn-secondary:hover {
        background: #e8eaed;
    }

    /* MOBILE RESPONSIVE */
    @media (max-width: 768px) {
        .form-group label {
            flex: 0 0 100%;
            margin-bottom: 8px;
        }
        .form-actions {
            padding-left: 0;
            flex-direction: column;
        }
        .btn-primary, .btn-secondary {
            width: 100%;
        }
    }
</style>