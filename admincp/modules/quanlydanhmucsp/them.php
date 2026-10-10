<div class="form-container mini-form">
    <div class="form-header">
        <h3 class="form-title">Thêm danh mục sản phẩm</h3>
        <p class="form-subtitle">Tạo nhóm sản phẩm mới (ví dụ: iPhone, Samsung, Phụ kiện...)</p>
    </div>

    <form method="POST" action="modules/quanlydanhmucsp/xuly.php" class="admin-form">
        
        <div class="form-group">
            <label>Tên danh mục</label>
            <div class="input-box">
                <input type="text" name="tendanhmuc" class="form-control" placeholder="Nhập tên danh mục sản phẩm..." required>
            </div>
        </div>

        <div class="form-group">
            <label>Thứ tự hiển thị</label>
            <div class="input-box">
                <input type="number" name="thutu" class="form-control" placeholder="Ví dụ: 1, 2, 3..." required>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" name="themdanhmuc" class="btn-primary">
                Tạo danh mục mới
            </button>
            <button type="reset" class="btn-reset">Nhập lại</button>
        </div>
    </form>
</div>

<style>
    .mini-form {
        max-width: 550px; 
        margin: 40px auto;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.06);
        padding: 30px;
        border-top: 5px solid #0984e3; /* Màu xanh Primary */
    }

    .form-header {
        margin-bottom: 25px;
        text-align: center;
        border-bottom: 1px solid #f1f2f6;
        padding-bottom: 15px;
    }

    .form-title {
        color: #2d3436;
        font-size: 20px;
        margin: 0;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    .form-subtitle {
        color: #636e72;
        font-size: 13px;
        margin-top: 5px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: 600;
        color: #2d3436;
        margin-bottom: 10px;
        font-size: 14px;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #dfe6e9;
        border-radius: 8px;
        font-size: 15px;
        outline: none;
        transition: all 0.3s ease;
        box-sizing: border-box;
    }

    .form-control:focus {
        border-color: #0984e3;
        box-shadow: 0 0 0 3px rgba(9, 132, 227, 0.1);
    }

    .form-actions {
        display: flex;
        gap: 12px;
        margin-top: 30px;
    }

    .btn-primary {
        flex: 2;
        background: #0984e3;
        color: white;
        padding: 14px;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
        text-transform: uppercase;
        font-size: 14px;
    }

    .btn-reset {
        flex: 1;
        background: #f1f2f6;
        color: #2d3436;
        padding: 14px;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
        font-size: 14px;
    }

    .btn-primary:hover {
        background: #074b83;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(9, 132, 227, 0.3);
    }

    .btn-reset:hover {
        background: #dfe6e9;
    }

    /* Tương thích mobile */
    @media (max-width: 480px) {
        .form-actions {
            flex-direction: column;
        }
    }
</style>