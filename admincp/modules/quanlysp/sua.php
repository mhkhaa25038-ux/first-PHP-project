<?php
$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
$query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>

<div class="form-container large-form edit-mode">
    <div class="form-header">
        <h3 class="form-title">Cập nhật thông tin sản phẩm</h3>
        <p class="form-subtitle">Chỉnh sửa chi tiết sản phẩm bên dưới và nhấn lưu để thay đổi</p>
    </div>

    <?php while ($row = mysqli_fetch_array($query_sua_sp)) { ?>
        <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data" class="product-form">
            <div class="form-grid">
                <div class="form-column">
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham" required>
                    </div>

                    <div class="form-row-inner">
                        <div class="form-group">
                            <label>Mã sản phẩm</label>
                            <input type="text" value="<?php echo $row['masp'] ?>" name="masp" required>
                        </div>
                        <div class="form-group">
                            <label>Số lượng kho</label>
                            <input type="number" value="<?php echo $row['soluong'] ?>" name="soluong" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Giá bán hiện tại (VNĐ)</label>
                        <input type="text" value="<?php echo $row['giasp'] ?>" name="giasp" required>
                    </div>

                    <div class="form-group">
                        <label>Hình ảnh sản phẩm</label>
                        <div class="edit-image-block">
                            <div class="current-image">
                                <p>Ảnh hiện tại:</p>
                                <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
                            </div>
                            <div class="file-input-wrapper">
                                <input type="file" name="hinhanh" id="hinhanh">
                                <label for="hinhanh" class="file-label">Thay đổi ảnh mới</label>
                            </div>
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
                                    $selected = ($row_danhmuc['id_danhmuc'] == $row['id_danhmuc']) ? 'selected' : '';
                                    echo "<option value='".$row_danhmuc['id_danhmuc']."' $selected>".$row_danhmuc['tendanhmuc']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Trạng thái hiển thị</label>
                            <select name="tinhtrang">
                                <option value="1" <?php if($row['tinhtrang']==1) echo 'selected' ?>>Kích hoạt</option>
                                <option value="0" <?php if($row['tinhtrang']==0) echo 'selected' ?>>Đang ẩn</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Mô tả tóm tắt</label>
                        <textarea rows="5" name="tomtat"><?php echo $row['tomtat'] ?></textarea>
                    </div>

                    <div class="form-group">
                        <label>Nội dung chi tiết</label>
                        <textarea rows="8" name="noidung"><?php echo $row['noidung'] ?></textarea>
                    </div>
                </div>
            </div>

            <div class="form-footer">
                <button type="submit" name="suasanpham" class="btn-update-large">Cập nhật sản phẩm</button>
                <a href="index.php?action=quanlysp&query=lietke" class="btn-cancel-light">Quay lại</a>
            </div>
        </form>
    <?php } ?>
</div>

<style>
    .edit-mode {
        max-width: 1000px;
        margin: 30px auto;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        padding: 40px;
        border-top: 6px solid #f39c12; /* Màu cam cảnh báo sửa đổi */
    }

    .form-header { text-align: center; margin-bottom: 30px; border-bottom: 1px solid #eee; padding-bottom: 20px; }
    .form-title { font-size: 24px; color: #d35400; font-weight: 800; text-transform: uppercase; }

    .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 30px; }
    
    .form-group { margin-bottom: 18px; }
    .form-group label { display: block; font-weight: 600; color: #34495e; margin-bottom: 8px; font-size: 14px; }

    .product-form input, .product-form select, .product-form textarea {
        width: 100%; padding: 12px; border: 1px solid #dcdde1; border-radius: 8px; font-size: 15px; outline: none; transition: 0.3s;
    }

    .product-form input:focus, .product-form textarea:focus { border-color: #f39c12; box-shadow: 0 0 0 3px rgba(243, 156, 18, 0.1); }

    .form-row-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }

    /* Hiển thị ảnh hiện tại */
    .edit-image-block { display: flex; align-items: flex-end; gap: 20px; background: #fffcf5; padding: 15px; border-radius: 10px; border: 1px solid #ffeaa7; }
    .current-image p { font-size: 12px; color: #7f8c8d; margin-bottom: 5px; }
    .current-image img { width: 100px; height: 100px; object-fit: cover; border-radius: 6px; border: 2px solid #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }

    .file-label { display: block; padding: 10px; background: #f39c12; color: #fff; border-radius: 6px; cursor: pointer; font-size: 13px; font-weight: 600; }
    #hinhanh { display: none; }

    /* Footer Buttons */
    .form-footer { margin-top: 30px; display: flex; gap: 15px; justify-content: center; border-top: 1px solid #eee; padding-top: 25px; }
    
    .btn-update-large { background: #f39c12; color: white; padding: 15px 40px; border: none; border-radius: 10px; font-size: 16px; font-weight: 700; cursor: pointer; transition: 0.3s; }
    .btn-update-large:hover { background: #e67e22; transform: translateY(-2px); box-shadow: 0 8px 15px rgba(230, 126, 34, 0.3); }

    .btn-cancel-light { background: #f1f2f6; color: #2f3640; padding: 15px 30px; border-radius: 10px; text-decoration: none; font-weight: 600; font-size: 15px; transition: 0.3s; }
    .btn-cancel-light:hover { background: #dfe4ea; }

    @media (max-width: 850px) { .form-grid { grid-template-columns: 1fr; } }
</style>