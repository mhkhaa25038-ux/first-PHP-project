<div class="admin-card">
    <div class="card-header">
        <h4><i class="fas fa-info-circle"></i> Quản lý thông tin website</h4>
        <p class="text-muted">Cập nhật nội dung liên hệ hiển thị phía ngoài trang chủ</p>
    </div>

    <?php
        $sql_lh   = "SELECT * FROM tbl_lienhe WHERE id=1";
        $query_lh = mysqli_query($mysqli, $sql_lh);
        while ($dong = mysqli_fetch_array($query_lh)) {
    ?>
    
    <form class="admin-form" method="POST" action="modules/thongtinweb/xuly.php?id=<?php echo $dong['id'] ?>" enctype="multipart/form-data">
        <div class="form-group">
            <label for="thongtinlienhe">Nội dung thông tin liên hệ</label>
            <textarea id="thongtinlienhe" rows="10" name="thongtinlienhe" placeholder="Nhập địa chỉ, số điện thoại, email..."><?php echo $dong['thongtinlienhe'] ?></textarea>
            <small class="form-hint">Mẹo: Bạn có thể sử dụng các thẻ HTML cơ bản để định dạng văn bản.</small>
        </div>

        <div class="form-actions">
            <button type="submit" name="submitlienhe" class="btn-update">
                <i class="fas fa-save"></i> Cập nhật thay đổi
            </button>
        </div>
    </form>

    <?php
        }
    ?>
</div>

<style>
    /* --- CSS CHO TRANG ADMIN --- */
    .admin-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        max-width: 800px;
        margin: 20px auto;
        overflow: hidden;
        border: 1px solid #eee;
        font-family: 'Inter', sans-serif;
    }

    .card-header {
        padding: 25px;
        border-bottom: 1px solid #f0f0f0;
        background: #fafafa;
    }

    .card-header h4 {
        margin: 0;
        color: #333;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .card-header p {
        margin: 5px 0 0 0;
        font-size: 0.9rem;
    }

    .admin-form {
        padding: 25px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: 600;
        color: #444;
        margin-bottom: 10px;
        font-size: 0.95rem;
    }

    .form-group textarea {
        width: 100%;
        padding: 15px;
        border: 2px solid #edeff2;
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.3s ease;
        line-height: 1.6;
        color: #333;
        box-sizing: border-box;
        resize: vertical; 
    }

    .form-group textarea:focus {
        border-color: #0d6efd;
        outline: none;
        box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.1);
        background: #fff;
    }

    .form-hint {
        display: block;
        margin-top: 8px;
        color: #888;
        font-style: italic;
        font-size: 0.85rem;
    }

    .form-actions {
        padding-top: 10px;
        border-top: 1px solid #f0f0f0;
        margin-top: 20px;
        text-align: right;
    }

    .btn-update {
        background: #0d6efd;
        color: #fff;
        border: none;
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-update:hover {
        background: #0b5ed7;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(13, 110, 253, 0.3);
    }

    .btn-update i {
        font-size: 1rem;
    }
</style>