<?php
// 1. Lấy ID từ URL và bảo mật đầu vào
$id = isset($_GET['id']) ? mysqli_real_escape_string($mysqli, $_GET['id']) : 0;

// 2. Lấy tên danh mục bài viết để hiển thị tiêu đề
$sql_cate = "SELECT tendanhmuc_baiviet FROM tbl_danhmucbaiviet WHERE id_baiviet = '$id' LIMIT 1";
$query_cate = mysqli_query($mysqli, $sql_cate);
$row_title = mysqli_fetch_array($query_cate);

// 3. Lấy danh sách bài viết
$sql_bv = "SELECT * FROM tbl_baiviet WHERE id_danhmuc = '$id' ORDER BY id DESC";
$query_bv = mysqli_query($mysqli, $sql_bv);
?>

<div class="category-header-modern mb-5 mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent p-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php" class="text-muted">Trang chủ</a></li>
            <li class="breadcrumb-item active text-primary" aria-current="page">Tin tức</li>
        </ol>
    </nav>
    <h3 class="fw-bold">
        <span class="title-line"></span>
        <?php echo ($row_title) ? $row_title['tendanhmuc_baiviet'] : 'Tất cả bài viết'; ?>
    </h3>
</div>

<div class="row">
    <div class="col-lg-9 mx-auto"> <?php
        if ($query_bv && mysqli_num_rows($query_bv) > 0) {
            while ($row_bv = mysqli_fetch_array($query_bv)) {
        ?>
            <div class="news-item-modern mb-4">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-4">
                        <div class="news-image-wrapper">
                            <a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>">
                                <img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>" alt="<?php echo $row_bv['tenbaiviet'] ?>">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="news-content-wrapper p-4">
                            <a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>" class="text-decoration-none">
                                <h4 class="news-title-modern"><?php echo $row_bv['tenbaiviet'] ?></h4>
                            </a>
                            <p class="news-excerpt text-muted">
                                <?php echo $row_bv['tomtat'] ?>
                            </p>
                            <div class="news-meta d-flex align-items-center justify-content-between">
                                <a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>" class="read-more-link">
                                    Đọc thêm <i class="fas fa-long-arrow-alt-right ml-1"></i>
                                </a>
                                <span class="news-date text-muted small"><i class="far fa-calendar-alt mr-1"></i> Mới cập nhật</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php 
            } 
        } else {
            echo '<div class="alert alert-light text-center py-5 border">Chưa có bài viết nào trong danh mục này.</div>';
        }
        ?>
    </div>
</div>

<style>
    /* RESET & HEADER */
    .category-header-modern h3 {
        font-weight: 800;
        font-size: 1.8rem;
        position: relative;
        display: flex;
        align-items: center;
        color: #222;
    }
    .title-line {
        width: 40px;
        height: 4px;
        background: #0d6efd;
        display: inline-block;
        margin-right: 15px;
        border-radius: 2px;
    }

    /* CARD BÀI VIẾT */
    .news-item-modern {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.03);
        border: 1px solid #f1f1f1;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .news-item-modern:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        border-color: #0d6efd4d;
    }

    /* XỬ LÝ ẢNH */
    .news-image-wrapper {
        height: 220px;
        overflow: hidden;
    }
    .news-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }
    .news-item-modern:hover .news-image-wrapper img {
        transform: scale(1.1);
    }

    /* XỬ LÝ NỘI DUNG */
    .news-title-modern {
        font-size: 1.25rem;
        font-weight: 700;
        line-height: 1.4;
        color: #1a1a1a;
        margin-bottom: 12px;
        transition: 0.3s;
    }
    .news-title-modern:hover {
        color: #0d6efd;
    }

    .news-excerpt {
        font-size: 0.95rem;
        line-height: 1.6;
        height: 50px; 
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        margin-bottom: 20px;
    }

    /* LINK ĐỌC THÊM */
    .read-more-link {
        font-weight: 700;
        font-size: 0.85rem;
        color: #0d6efd;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-decoration: none !important;
    }
    .read-more-link:hover i {
        transform: translateX(5px);
        transition: 0.3s;
    }

    /* MOBILE RESPONSIVE */
    @media (max-width: 768px) {
        .news-image-wrapper {
            height: 200px;
        }
        .news-content-wrapper {
            padding: 20px !important;
        }
        .news-title-modern {
            font-size: 1.1rem;
        }
    }
</style>