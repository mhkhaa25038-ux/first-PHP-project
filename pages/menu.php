<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once("admincp/config/config.php");

// Lấy danh mục
$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);

// Đăng xuất
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangky']);
    header("Location:index.php");
}
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
/* --- BIẾN TOÀN CỤC --- */
:root {
    --primary-color: #007bff;
    --primary-hover: #0056b3;
    --dark-bg: rgba(15, 15, 15, 0.95);
    --glass-border: rgba(255, 255, 255, 0.08);
    --text-main: #e5e5e5;
    --font-family: 'Inter', sans-serif;
}

/* --- RESET & CƠ BẢN --- */
body {
    font-family: var(--font-family);
    padding-top: 80px; /* Tránh đè nội dung dưới Navbar */
}

/* --- NAVBAR CHÍNH --- */
.modern-navbar {
    background: var(--dark-bg);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border-bottom: 1px solid var(--glass-border);
    padding: 12px 0;
    transition: all 0.3s ease;
}

.nav-inner {
    max-width: 1400px;
    margin: 0 auto;
    display: flex;
    align-items: center;
}

/* --- LOGO --- */
.navbar-brand {
    font-size: 1.6rem;
    letter-spacing: -0.5px;
    display: flex;
    align-items: center;
}
.logo-main { color: var(--primary-color); font-weight: 800; }
.logo-sub { color: #fff; font-weight: 500; }

/* --- MENU NAVIGATION --- */
.nav-link {
    color: var(--text-main) !important;
    font-size: 15px;
    font-weight: 500;
    padding: 10px 18px !important;
    transition: 0.2s;
}
.nav-link:hover {
    color: var(--primary-color) !important;
    transform: translateY(-1px);
}

/* --- TÌM KIẾM (TRUNG TÂM) --- */
.nav-search-wrapper {
    flex: 1;
    display: flex;
    justify-content: center;
    padding: 0 30px;
}
.search-box {
    width: 100%;
    max-width: 450px;
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid var(--glass-border);
    border-radius: 12px;
    display: flex;
    padding: 4px 6px;
    transition: 0.3s ease;
}
.search-box:focus-within {
    background: rgba(255, 255, 255, 0.1);
    border-color: var(--primary-color);
    box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.15);
}
.search-box input {
    background: transparent;
    border: none;
    color: #fff;
    padding: 8px 15px;
    width: 100%;
    outline: none;
    font-size: 14px;
}
.search-box button {
    background: var(--primary-color);
    border: none;
    color: #fff;
    width: 40px;
    height: 38px;
    border-radius: 10px;
    cursor: pointer;
    transition: 0.2s;
}
.search-box button:hover { background: var(--primary-hover); }

/* --- GIỎ HÀNG & USER --- */
.nav-right {
    display: flex;
    align-items: center;
    gap: 10px;
}

.cart-icon-wrapper {
    position: relative;
    padding: 8px;
}
.cart-badge {
    position: absolute;
    top: 0;
    right: 0;
    background: #ff3b30;
    color: white;
    font-size: 10px;
    min-width: 18px;
    height: 18px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid var(--dark-bg);
}

/* --- DROPDOWN HIỆN ĐẠI --- */
.dropdown-modern {
    background: #1c1c1e;
    border: 1px solid var(--glass-border);
    border-radius: 14px;
    padding: 8px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.4);
    margin-top: 10px;
}
.dropdown-item {
    color: #d1d1d6;
    padding: 10px 16px;
    border-radius: 10px;
    font-size: 14px;
    transition: 0.2s;
}
.dropdown-item:hover {
    background: rgba(255,255,255,0.05);
    color: var(--primary-color);
}
.dropdown-divider { border-top: 1px solid var(--glass-border); }

/* --- NÚT ĐĂNG KÝ/ĐĂNG NHẬP --- */
.btn-register-modern {
    background: var(--primary-color);
    color: #fff !important;
    border-radius: 10px;
    padding: 8px 22px !important;
    font-size: 14px;
    font-weight: 600;
    transition: 0.3s;
    border: none;
}
.btn-register-modern:hover {
    background: var(--primary-hover);
    box-shadow: 0 4px 12px rgba(0, 123, 255, 0.4);
}

/* --- MOBILE RESPONSIVE --- */
@media (max-width: 991px) {
    .nav-search-wrapper {
        order: 3;
        width: 100%;
        padding: 15px 0;
    }
    .navbar-collapse {
        background: #111;
        padding: 20px;
        border-radius: 20px;
        margin-top: 15px;
        border: 1px solid var(--glass-border);
    }
    .nav-right { margin-top: 15px; border-top: 1px solid var(--glass-border); padding-top: 15px; }
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark modern-navbar fixed-top">
    <div class="container-fluid nav-inner">
        
        <a class="navbar-brand" href="index.php">
            <span class="logo-main">KHA</span><span class="logo-sub">STORE</span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarFull">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarFull">
            
            <ul class="navbar-nav nav-left">
                <li class="nav-item"><a class="nav-link" href="index.php">Trang chủ</a></li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="categoryDrop" data-toggle="dropdown">Danh mục</a>
                    <div class="dropdown-menu dropdown-modern animate slideIn">
                        <?php while ($row = mysqli_fetch_array($query_danhmuc)) { ?>
                            <a class="dropdown-item" href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc']; ?>">
                                <i class="fa-solid fa-chevron-right mr-2" style="font-size: 10px;"></i>
                                <?php echo $row['tendanhmuc']; ?>
                            </a>
                        <?php } ?>
                    </div>
                </li>

                <li class="nav-item"><a class="nav-link" href="index.php?quanly=tintuc">Tin tức</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?quanly=lienhe">Liên hệ</a></li>
            </ul>

            <form class="nav-search-wrapper" action="index.php?quanly=timkiem" method="POST">
                <div class="search-box">
                    <input type="text" name="tukhoa" placeholder="Tìm kiếm sản phẩm, thương hiệu...">
                    <button type="submit" name="timkiem">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>

            <ul class="navbar-nav nav-right">
                <li class="nav-item">
                    <a class="nav-link cart-icon-wrapper" href="index.php?quanly=giohang">
                        <i class="fa-solid fa-bag-shopping" style="font-size: 1.2rem;"></i>
                        <span class="cart-badge">
                            <?php echo (isset($_SESSION['cart'])) ? count($_SESSION['cart']) : 0; ?>
                        </span>
                    </a>
                </li>

                <?php if (isset($_SESSION['dangky'])) { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i class="fa-regular fa-circle-user mr-2" style="font-size: 1.2rem;"></i>
                            <span><?php echo $_SESSION['dangky']; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-modern">
                            <a class="dropdown-item" href="index.php?quanly=lichsudonhang">Đơn hàng của tôi</a>
                            <a class="dropdown-item" href="index.php?quanly=thaydoimatkhau">Đổi mật khẩu</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="index.php?dangxuat=1">
                                <i class="fa-solid fa-arrow-right-from-bracket mr-2"></i>Thoát
                            </a>
                        </div>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="btn btn-register-modern" href="index.php?quanly=dangky">
                            <i class="fa-solid fa-user-plus mr-1"></i> Đăng Ký
                        </a>
                    </li>
                <?php } ?>
            </ul>

        </div>
    </div>
</nav>

<script>
window.onscroll = function() {
    var nav = document.querySelector('.modern-navbar');
    if (window.pageYOffset > 50) {
        nav.style.padding = "8px 0";
        nav.style.background = "rgba(0, 0, 0, 0.98)";
    } else {
        nav.style.padding = "12px 0";
        nav.style.background = "rgba(15, 15, 15, 0.95)";
    }
};
</script>