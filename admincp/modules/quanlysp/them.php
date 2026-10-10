<div class="form-container large-form">
    <div class="form-header">
        <h3 class="form-title">Đăng ký sản phẩm mới</h3>
        <p class="form-subtitle">Điền đầy đủ thông tin để sản phẩm hiển thị tốt nhất trên cửa hàng</p>
    </div>

    <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data" class="product-form">
        <div class="form-grid">
            <div class="form-column">
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" name="tensanpham" placeholder="Ví dụ:  Phụ kiện Pro Max" required>
                </div>

                <div class="form-row-inner">
                    <div class="form-group">
                        <label>Mã sản phẩm</label>
                        <input type="text" name="masp" placeholder="Mã SKU..." required>
                    </div>
                    <div class="form-group">
                        <label>Số lượng kho</label>
                        <input type="number" name="soluong" placeholder="0" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Giá bán (VNĐ)</label>
                    <input type="text" name="giasp" placeholder="Nhập giá tiền..." required>
                </div>

                <div class="form-group">
                    <label>Hình ảnh sản phẩm</label>
                    <div class="file-input-wrapper">
                        <input type="file" name="hinhanh" id="hinhanh" required>
                        <label for="hinhanh" class="file-label">Chọn ảnh từ máy tính</label>
                    </div>
                </div>
            </div>

            <div class="form-column">
                <div class="form-row-inner">
                    <div class="form-group">
                        <label>Danh mục</label>
                        <select name="danhmuc">
                            <?php
                            $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                                echo '<option value="'.$row_danhmuc['id_danhmuc'].'">'.$row_danhmuc['tendanhmuc'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <select name="tinhtrang">
                            <option value="1">Kích hoạt (Hiển thị)</option>
                            <option value="0">Ẩn sản phẩm</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>Tóm tắt sản phẩm</label>
                    <textarea name="tomtat" rows="4" placeholder="Mô tả ngắn gọn đặc điểm nổi bật..."></textarea>
                </div>

                <div class="form-group">
                    <label>Nội dung chi tiết</label>
                    <textarea name="noidung" rows="6" placeholder="Thông số kỹ thuật, bài viết chi tiết..."></textarea>
                </div>
            </div>
        </div>

        <div class="form-footer">
            <button type="submit" name="themsanpham" class="btn-submit-large">Thêm sản phẩm vào hệ thống</button>
            <button type="reset" class="btn-reset-light">Nhập lại từ đầu</button>
        </div>
    </form>
</div>

<style>
    .large-form {
        max-width: 1000px;
        margin: 30px auto;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        padding: 40px;
    }

    .form-header {
        text-align: center;
        margin-bottom: 35px;
        padding-bottom: 20px;
        border-bottom: 1px solid #f1f1f1;
    }

    .form-title { font-size: 26px; color: #1e293b; font-weight: 800; text-transform: uppercase; }
    .form-subtitle { color: #64748b; font-size: 14px; margin-top: 8px; }

    /* Layout 2 cột */
    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }

    .form-group { margin-bottom: 20px; }
    .form-group label {
        display: block;
        font-weight: 600;
        color: #334155;
        margin-bottom: 8px;
        font-size: 14px;
    }

    /* Input & Select & Textarea */
    .product-form input[type="text"],
    .product-form input[type="number"],
    .product-form select,
    .product-form textarea {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        font-size: 15px;
        transition: 0.3s;
        background: #f8fafc;
    }

    .product-form input:focus, .product-form select:focus, .product-form textarea:focus {
        background: #fff;
        border-color: #3b82f6;
        box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
        outline: none;
    }

    .form-row-inner {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
    }

    /* Custom File Input */
    .file-input-wrapper { position: relative; }
    .file-label {
        display: block;
        padding: 12px;
        background: #eff6ff;
        color: #2563eb;
        border: 2px dashed #bfdbfe;
        border-radius: 10px;
        text-align: center;
        cursor: pointer;
        font-weight: 600;
    }
    .file-input-wrapper input { opacity: 0; position: absolute; z-index: -1; }

    /* Footer Buttons */
    .form-footer {
        margin-top: 40px;
        display: flex;
        gap: 15px;
        justify-content: center;
    }

    .btn-submit-large {
        background: #2563eb;
        color: white;
        padding: 15px 40px;
        border: none;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-submit-large:hover { background: #1d4ed8; transform: translateY(-2px); box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2); }

    .btn-reset-light {
        background: #f1f5f9;
        color: #475569;
        padding: 15px 30px;
        border: none;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
    }

    /* Responsive cho màn hình nhỏ */
    @media (max-width: 850px) {
        .form-grid { grid-template-columns: 1fr; }
        .large-form { padding: 20px; }
    }
</style>