<div class="card border-0 mb-4 sidebar-card">
    <div class="card-header bg-primary text-white py-3">
        <h6 class="m-0 font-weight-bold"><i class="fas fa-box-open mr-2"></i> DANH MỤC SẢN PHẨM</h6>
    </div>
    <div class="list-group list-group-flush">
        <?php
            $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
            while($row = mysqli_fetch_array($query_danhmuc)){
        ?>
        <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>" 
           class="list-group-item list-group-item-action sidebar-item">
            <?php echo $row['tendanhmuc'] ?>
        </a>
        <?php } ?>
    </div>
</div>

<div class="card border-0 mb-4 sidebar-card">
    <div class="card-header bg-dark text-white py-3">
        <h6 class="m-0 font-weight-bold"><i class="fas fa-newspaper mr-2"></i> DANH MỤC BÀI VIẾT</h6>
    </div>
    <div class="list-group list-group-flush">
        <?php
            $sql_danhmuc_bv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
            $query_danhmuc_bv = mysqli_query($mysqli, $sql_danhmuc_bv);
            while($row_bv = mysqli_fetch_array($query_danhmuc_bv)){
        ?>
        <a href="index.php?quanly=danhmucbaiviet&id=<?php echo $row_bv['id_baiviet'] ?>" 
           class="list-group-item list-group-item-action sidebar-item">
            <?php echo $row_bv['tendanhmuc_baiviet'] ?>
        </a>
        <?php } ?>
    </div>
</div>
<style>
    .sidebar-card {
        border-radius: 12px !important;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .card-header {
        border: none;
        letter-spacing: 0.5px;
    }

    .sidebar-item {
        font-size: 13.5px;
        color: #4a5568 !important;
        text-transform: uppercase;
        font-weight: 500;
        padding: 12px 20px !important;
        border-bottom: 1px solid #f1f4f8 !important;
        transition: all 0.2s ease-in-out;
    }

    .sidebar-item:hover {
        background-color: #f8fbff !important;
        color: #007bff !important;
        padding-left: 28px !important; 
        border-left: 4px solid #007bff;
    }

    .sidebar-item::before {
        content: '›';
        margin-right: 8px;
        font-weight: bold;
        color: #cbd5e0;
    }
</style>