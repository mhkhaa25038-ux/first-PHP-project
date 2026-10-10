<div class="form-container mini-form">
    <div class="form-header">
        <h3 class="form-title">Thêm danh mục bài viết</h3>
        <p class="form-subtitle">Tạo các chủ đề như: Tin tức, Khuyến mãi, Review...</p>
    </div>

    <form method="POST" action="modules/quanlydanhmucbaiviet/xuly.php" class="admin-form">
        
        <div class="form-group">
            <label>Tên danh mục</label>
            <div class="input-box">
                <input type="text" name="tendanhmucbaiviet" class="form-control" placeholder="Nhập tên danh mục..." required>
            </div>
        </div>

        <div class="form-group">
            <label>Thứ tự hiển thị</label>
            <div class="input-box">
                <input type="number" name="thutu" class="form-control" placeholder="Ví dụ: 1, 2, 3..." required>
                <small style="color: #888;">Số càng lớn danh mục sẽ nằm càng cao.</small>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" name="themdanhmucbaiviet" class="btn-primary">
                Lưu danh mục
            </button>
            <a href="index.php?action=quanlydanhmucbaiviet&query=them" class="btn-secondary">Làm mới</a>
        </div>
    </form>
</div>

<style>
    .mini-form {
        max-width: 600px; 
        margin: 40px auto;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        padding: 30px;
    }

    .form-header {
        margin-bottom: 25px;
        text-align: center;
        border-bottom: 1px solid #eee;
        padding-bottom: 15px;
    }

    .form-title {
        color: #2c3e50;
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
        border-color: #3498db;
        box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
    }

    .form-actions {
        display: flex;
        gap: 10px;
        margin-top: 25px;
    }

    .btn-primary {
        flex: 2;
        background: #3498db;
        color: white;
        padding: 12px;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-secondary {
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

    .btn-primary:hover {
        background: #2980b9;
        transform: translateY(-2px);
    }

    .btn-secondary:hover {
        background: #dfe4ea;
    }

    /* Di động */
    @media (max-width: 480px) {
        .form-actions {
            flex-direction: column;
        }
    }
</style>