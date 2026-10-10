<footer class="modern-footer-full">
    <div class="container-fluid px-md-5 footer-top">
        <div class="row gy-4">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="footer-info">
                    <a class="footer-logo" href="index.php">
                        <span class="logo-main">KHA</span><span class="logo-sub">STORE</span>
                    </a>
                    <p class="footer-desc">
                        Chuyên phụ kiện điện thoại giá tốt tại Cần Thơ. Uy tín - Chất lượng - Tận tâm. 
                        Chúng tôi mang đến trải nghiệm mua sắm phụ kiện công nghệ hiện đại nhất.
                    </p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/share/1L69BgiGhu/" class="fb"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.tiktok.com/@xyzobe?_r=1&_t=ZS-94LM31kbdjw" class="tt"><i class="fab fa-tiktok"></i></a>
                        <a href="https://www.instagram.com/ait_hkh?igsh=MXVrNmsya3Nrcnp5ZQ==" class="ig"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                <h5 class="footer-title">LIÊN KẾT</h5>
                <ul class="footer-links">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
                    <li><a href="index.php?quanly=tintuc">Tin tức</a></li>
                </ul>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                <h5 class="footer-title">HỖ TRỢ</h5>
                <ul class="footer-links">
                    <li><a href="#">Bảo hành</a></li>
                    <li><a href="#">Đổi trả</a></li>
                    <li><a href="#">Vận chuyển</a></li>
                </ul>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4">
                <h5 class="footer-title">LIÊN HỆ</h5>
                <div class="contact-box">
                    <p><i class="fas fa-map-marker-alt"></i> Ninh Kiều, Cần Thơ</p>
                    <p><i class="fas fa-phone-alt"></i> 0384729080</p>
                    <p><i class="fas fa-envelope"></i> mhkhaa25038@cusc.ctu.edu.vn</p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom-full">
        <div class="container-fluid px-md-5">
            <div class="row align-items-center">
                <div class="col-md-6 text-md-left text-center">
                    <p class="mb-0">© 2026 <strong>Kha Store</strong>. Phụ kiện điện thoại giá sốc.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
.modern-footer-full {
    width: 100%;
    background: #0f0f0f; 
    color: #fff;
    padding-top: 70px;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    overflow-x: hidden;
}

.footer-top {
    padding-left: 5% !important;
    padding-right: 5% !important;
}

.footer-logo {
    text-decoration: none;
    font-size: 1.8rem;
    margin-bottom: 20px;
    display: inline-block;
}

.footer-desc {
    color: #999;
    max-width: 350px;
    font-size: 0.9rem;
    line-height: 1.7;
}

.footer-title {
    font-size: 1rem;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 30px;
    color: #fff;
    text-transform: uppercase;
}

.footer-links {
    list-style: none;
    padding: 0;
}

.footer-links li { margin-bottom: 12px; }

.footer-links li a {
    color: #888;
    text-decoration: none;
    transition: 0.3s;
    font-size: 0.9rem;
}

.footer-links li a:hover {
    color: #0d6efd;
    padding-left: 8px;
}

.contact-box p {
    color: #888;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 12px;
}

.contact-box i { color: #0d6efd; width: 15px; }

.social-links { display: flex; gap: 12px; margin-top: 20px; }

.social-links a {
    width: 40px;
    height: 40px;
    background: rgba(255,255,255,0.05);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    transition: 0.3s;
}

.social-links a:hover {
    background: #0d6efd;
    transform: translateY(-5px);
}

.footer-bottom-full {
    background: #000;
    padding: 20px 0;
    margin-top: 60px;
    border-top: 1px solid rgba(255,255,255,0.05);
}

.footer-bottom-full p {
    color: #666;
    font-size: 0.85rem;
}

/* Responsive */
@media (max-width: 991px) {
    .footer-top { text-align: center; }
    .footer-desc { margin: 0 auto 20px; }
    .social-links { justify-content: center; margin-bottom: 30px; }
    .footer-title::after { left: 50%; transform: translateX(-50%); }
    .contact-box p { justify-content: center; }
}
</style>