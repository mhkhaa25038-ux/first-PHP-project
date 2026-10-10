<?php
    if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($mysqli, $_GET['id']);
    } else {
    $id = '';
    }

    $sql_bv       = "SELECT * FROM tbl_baiviet WHERE id='$id' LIMIT 1";
    $query_bv_all = mysqli_query($mysqli, $sql_bv);
?>

<div class="post-detail-wrapper bg-white shadow-sm rounded-lg p-4 p-md-5">
    <?php while ($row_bv = mysqli_fetch_array($query_bv_all)) {?>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent p-0 mb-4">
            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="index.php?quanly=tintuc">Tin tức</a></li>
            <li class="breadcrumb-item active text-truncate" aria-current="page"><?php echo $row_bv['tenbaiviet'] ?></li>
          </ol>
        </nav>

        <article class="single-post">
            <h1 class="post-title mb-3"><?php echo $row_bv['tenbaiviet'] ?></h1>

            <div class="post-meta mb-4 pb-3 border-bottom d-flex align-items-center">
                <span class="badge badge-primary mr-3">Tin công nghệ</span>
                <small class="text-muted"><i class="far fa-calendar-alt mr-1"></i> Đăng bởi: <strong>Kha Store</strong></small>
            </div>

            <div class="post-summary mb-4 font-italic">
                <?php echo $row_bv['tomtat'] ?>
            </div>

           <div class="post-thumbnail mb-4 text-center">
                 <img
                   src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>"
                   class="img-fluid rounded post-img-small"
                   alt="<?php echo $row_bv['tenbaiviet'] ?>">
            </div>

            <div class="post-content">
                <?php echo $row_bv['noidung'] ?>
            </div>
        </article>

    <?php }?>
</div>

<style>
    /* Tổng thể khung bài viết */
    .post-detail-wrapper {
        border: 1px solid #eee;
        line-height: 1.8; /* Khoảng cách dòng cho dễ đọc */
    }

    /* Tiêu đề bài viết */
    .post-title {
        font-weight: 800;
        color: #1a1a1a;
        font-size: 2rem;
        line-height: 1.3;
    }

    /* Phần tóm tắt (Sapo) */
    .post-summary {
        font-size: 1.1rem;
        color: #555;
        border-left: 4px solid #007bff;
        padding-left: 15px;
        background: #f9f9f9;
        padding: 15px;
        border-radius: 0 8px 8px 0;
    }

    /* Nội dung bài viết */
    .post-content {
        font-size: 1.05rem;
        color: #333;
        text-align: justify; /* Căn đều hai bên cho đẹp */
    }

    /* Tối ưu hình ảnh trong nội dung */
    .post-thumbnail img {
    max-width: 420px;
    margin: 0 auto;
    display: block;
    }


    /* Breadcrumb nhỏ gọn */
    .breadcrumb-item, .breadcrumb-item a {
        font-size: 13px;
        color: #888;
        text-decoration: none;
    }

    /* Responsive cho di động */
    @media (max-width: 768px) {
        .post-title {
            font-size: 1.5rem;
        }
        .post-detail-wrapper {
            padding: 20px !important;
        }
    }
</style>