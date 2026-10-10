<div class="container mt-5">
    <div class="d-flex align-items-center justify-content-center mb-5">
        <hr class="flex-grow-1 border-primary">
        <h3 class="mx-3 text-uppercase font-weight-bold text-dark mb-0">
            <i class="far fa-newspaper mr-2"></i>Tin tức mới nhất
        </h3>
        <hr class="flex-grow-1 border-primary">
    </div>

    <?php
        $sql_bv = "SELECT * FROM tbl_baiviet WHERE tinhtrang=1 ORDER BY id DESC";
        $query_bv = mysqli_query($mysqli, $sql_bv);
    ?>

    <div class="row">
        <?php while($row_bv = mysqli_fetch_array($query_bv)){ ?>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card h-100 border-0 shadow-sm news-card">
                    <div class="news-img-container">
                        <a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>">
                            <img class="card-img-top" src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>" alt="<?php echo $row_bv['tenbaiviet'] ?>">
                        </a>
                    </div>

                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title font-weight-bold text-dark mb-2">
                            <a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>" class="text-decoration-none text-dark hover-primary">
                                <?php echo $row_bv['tenbaiviet'] ?>
                            </a>
                        </h6>

                        <p class="card-text text-muted small mb-3 flex-grow-1 news-summary">
                            <?php echo $row_bv['tomtat'] ?>
                        </p>

                        <a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>" class="btn btn-outline-primary btn-sm btn-block rounded-pill">
                            Đọc chi tiết
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<style>
    /* Ép kích thước ảnh bài viết đồng nhất */
    .news-img-container {
        height: 180px;
        overflow: hidden;
    }
    .news-img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Giúp ảnh không bị méo khi co giãn */
        transition: transform 0.5s ease;
    }
    .news-card:hover .news-img-container img {
        transform: scale(1.1); /* Hiệu ứng zoom nhẹ khi hover */
    }

    /* Giới hạn tiêu đề trong 2 dòng */
    .card-title {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        height: 42px; /* Đảm bảo độ cao cố định */
        line-height: 21px;
    }

    /* Giới hạn tóm tắt trong 3 dòng */
    .news-summary {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        height: 54px;
        line-height: 18px;
    }

    .news-card {
        border-radius: 12px;
        overflow: hidden;
        transition: 0.3s;
    }
    .news-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    .hover-primary:hover {
        color: #007bff !important;
    }
</style>