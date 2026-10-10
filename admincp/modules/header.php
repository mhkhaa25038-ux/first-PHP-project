<?php
    if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
        unset($_SESSION['dangnhap']);
        header('location: login.php');
    }
?>

<header class="admin-header">
    <h1 class="header-title">Hệ thống Quản trị Admin</h1>

    <div class="logout-container">
        <a href="index.php?dangxuat=1">
            <i class="fas fa-sign-out-alt"></i> Đăng xuất : 
            <span class="user-name">
                <?php if(isset($_SESSION['dangnhap'])) {
                    echo $_SESSION['dangnhap'];
                } ?>
            </span>
        </a>
    </div>
</header>