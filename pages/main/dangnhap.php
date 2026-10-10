<?php
if (isset($_POST['dangnhap'])) {
    
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $matkhau = md5($_POST['password']);
    
    // Kiểm tra xem có để trống không
    if (empty($email) || empty($_POST['password'])) {
        $error = "Vui lòng nhập đầy đủ Email và Mật khẩu!";
    } else {
        $sql = "SELECT * FROM tbl_dangky WHERE email='" . $email . "' AND matkhau='" . $matkhau . "' LIMIT 1";
        $row = mysqli_query($mysqli, $sql);
        $count = mysqli_num_rows($row);

        if ($count > 0) {
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangky'] = $row_data['tenkhachhang'];
            $_SESSION['email'] = $email;
            $_SESSION['id_khachhang'] = $row_data['id_dangky'];
            header("Location:index.php?quanly=giohang");
        } else {
            $error = "Mật khẩu hoặc Email sai, vui lòng nhập lại!";
        }
    }
}
?>

<style type="text/css">
    .wrapper-login {
        max-width: 450px;
        margin: 50px auto;
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        font-family: 'Segoe UI', Arial, sans-serif;
    }
    .title-login {
        text-align: center;
        color: #333;
        margin-bottom: 25px;
    }
    .title-login h3 {
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .table-login {
        width: 100%;
        border: none !important; 
    }
    .table-login td {
        padding: 12px 5px;
        border: none !important;
    }
    .table-login input[type="text"],
    .table-login input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-sizing: border-box;
        outline: none;
        transition: 0.3s;
    }
    .table-login input[type="text"]:focus,
    .table-login input[type="password"]:focus {
        border-color: #ff5722;
    }
    .btn-login {
        width: 100%;
        background: #ff5722;
        color: white;
        border: none;
        padding: 12px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        font-size: 16px;
        transition: 0.3s;
    }
    .btn-login:hover {
        background: #e64a19;
    }
    .msg-error {
        color: #d32f2f;
        background: #ffcdd2;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
        text-align: center;
        font-size: 14px;
    }
</style>

<div class="wrapper-login">
    <div class="title-login">
        <h3>Đăng nhập khách hàng</h3>
    </div>

    <?php if(isset($error)) echo '<div class="msg-error">'.$error.'</div>'; ?>

    <form action="" autocomplete="off" method="POST">
        <table class="table-login">
            <tr>
                <td>Tài khoản</td>
                <td><input type="text" name="email" placeholder="Email của bạn..." required></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" name="password" placeholder="Mật khẩu..." required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="dangnhap" class="btn-login" value="Đăng nhập">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; padding-top: 15px;">
                    <a href="index.php?quanly=dangky" style="text-decoration: none; color: #2196F3; font-size: 14px;">Chưa có tài khoản? Đăng ký ngay</a>
                </td>
            </tr>
        </table>
    </form>
</div>