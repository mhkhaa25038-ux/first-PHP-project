<?php
    $sql_lh = "SELECT * FROM tbl_lienhe WHERE id=1";
    $query_lh = mysqli_query($mysqli, $sql_lh);
    $dong = mysqli_fetch_array($query_lh);
?>

<div class="contact-container py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">LIÊN HỆ VỚI CHÚNG TÔI</h2>
            <div class="title-underline mx-auto"></div>
            <p class="text-muted mt-3">Kha Store luôn sẵn sàng lắng nghe và hỗ trợ bạn 24/7</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-5">
                <div class="contact-info-card h-100">
                    <h4 class="mb-4 text-white">Thông tin cửa hàng</h4>
                    
                    <div class="info-item">
                        <div class="icon-box"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="text-box">
                            <h5>Địa chỉ cửa hàng</h5>
                            <p>123 Đường 3/2, Phường Xuân Khánh, Quận Ninh Kiều, Cần Thơ</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="icon-box"><i class="fas fa-phone-alt"></i></div>
                        <div class="text-box">
                            <h5>Hotline hỗ trợ</h5>
                            <p>038 472 9080 (Zalo/Viber)</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="icon-box"><i class="fas fa-envelope"></i></div>
                        <div class="text-box">
                            <h5>Email phản hồi</h5>
                            <p>khastore@gmail.com</p>
                        </div>
                    </div>

                    <hr class="border-light my-4">
                    
                    <div class="other-info">
                        <h5 class="text-white mb-3">Thông tin bổ sung:</h5>
                        <div class="dynamic-content">
                            <?php echo $dong['thongtinlienhe']; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="map-wrapper shadow-sm">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.847528399589!2d105.7664654!3d10.0292389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0883d2192b0f1%3A0x464197951ef9842b!2zMTIzIMSQxrDhu51uZyAzLzIsIFh1w6JuIEtow6FuaCwgTmluaCBLaeG7gXUsIEPhuqduIFRoxqE!5e0!3m2!1svi!2s!4v1715600000000" 
                        width="100%" height="450" style="border:0; border-radius: 20px;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Reset & Font */
.contact-container {
    background-color: #f8f9fa;
    font-family: 'Inter', sans-serif;
}

.title-underline {
    width: 60px;
    height: 4px;
    background: #0d6efd;
    border-radius: 2px;
}

/* Thẻ thông tin bên trái */
.contact-info-card {
    background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
    color: #cbd5e1;
    padding: 40px;
    border-radius: 25px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

.info-item {
    display: flex;
    margin-bottom: 30px;
    align-items: flex-start;
}

.icon-box {
    width: 50px;
    height: 50px;
    background: rgba(13, 110, 253, 0.2);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #3b82f6;
    font-size: 1.2rem;
    margin-right: 20px;
    flex-shrink: 0;
}

.text-box h5 {
    color: #fff;
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 5px;
}

.text-box p {
    font-size: 0.95rem;
    line-height: 1.5;
    margin-bottom: 0;
}

.dynamic-content {
    background: rgba(255, 255, 255, 0.05);
    padding: 15px;
    border-radius: 12px;
    border-left: 3px solid #3b82f6;
    font-style: italic;
    color: #94a3b8;
}

/* Bản đồ bên phải */
.map-wrapper {
    height: 100%;
    min-height: 450px;
    border-radius: 25px;
    overflow: hidden;
    border: 8px solid #fff;
}

/* Responsive */
@media (max-width: 991px) {
    .contact-info-card {
        padding: 30px;
    }
    .map-wrapper {
        margin-top: 20px;
        min-height: 350px;
    }
}
</style>