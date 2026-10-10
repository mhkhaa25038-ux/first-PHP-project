<?php
if (isset($_POST['dangky'])) {
    $tenkhachhang = mysqli_real_escape_string($mysqli, $_POST['hovaten']);
    $email        = mysqli_real_escape_string($mysqli, $_POST['email']);
    $dienthoai    = mysqli_real_escape_string($mysqli, $_POST['dienthoai']);
    $diachi       = mysqli_real_escape_string($mysqli, $_POST['diachi']);
    $matkhau      = md5($_POST['matkhau']);

    // Kiểm tra ràng buộc phía Server
    if (empty($tenkhachhang) || empty($email) || empty($dienthoai) || empty($diachi) || empty($_POST['matkhau'])) {
        $error = "Vui lòng nhập đầy đủ thông tin!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Định dạng email không hợp lệ!";
    } else {
        // Kiểm tra trùng email 
        $check = mysqli_query($mysqli, "SELECT * FROM tbl_dangky WHERE email='$email' LIMIT 1");
        if(mysqli_num_rows($check) > 0){
            $error = "Email này đã tồn tại!";
        } else {
            $sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) 
                          VALUE('" . $tenkhachhang . "','" . $email . "','" . $diachi . "','" . $matkhau . "','" . $dienthoai . "')");
            
            if ($sql_dangky) {
                $_SESSION['dangky'] = $tenkhachhang;
                $_SESSION['email'] = $email;
                $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
                header('location:index.php?quanly=giohang');
            }
        }
    }
}
?>

<style type="text/css">
    .wrapper-dangky {
        max-width: 500px;
        margin: 20px auto;
        background: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        font-family: Arial, sans-serif;
    }
    .title-dangky {
        text-align: center;
        text-transform: uppercase;
        color: #333;
        font-weight: bold;
        font-size: 20px;
        margin-bottom: 20px;
    }
    .dangky-table {
        width: 100%;
        border-collapse: collapse;
    }
    .dangky-table td {
        padding: 10px 5px;
    }
    .dangky-table input[type="text"],
    .dangky-table input[type="email"],
    .dangky-table input[type="tel"],
    .dangky-table input[type="password"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box; 
    }
    .btn-submit {
        background: #ff5722;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        font-weight: bold;
    }
    .btn-submit:hover {
        background: #e64a19;
    }
    .login-link {
        text-decoration: none;
        color: #2196F3;
        font-size: 14px;
    }
    .msg-error {
        color: #d32f2f;
        background: #ffcdd2;
        padding: 10px;
        border-radius: 4px;
        margin-bottom: 15px;
        text-align: center;
    }
</style>

<div class="wrapper-dangky">
    <div class="title-dangky">Đăng ký thành viên</div>

    <?php if(isset($error)) echo '<div class="msg-error">'.$error.'</div>'; ?>

    <form action="" method="POST" autocomplete="off">
        <table class="dangky-table">
            <tr>
                <td>Họ và tên</td>
                <td><input type="text" name="hovaten" required placeholder="Nguyễn Văn A"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required placeholder="vidu@gmail.com"></td>
            </tr>
            <tr>
                <td>Điện thoại</td>
                <td><input type="tel" name="dienthoai" pattern="[0-9]{10,11}" title="Vui lòng nhập 10-11 số điện thoại" required placeholder="0901234567"></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type="text" name="diachi" required placeholder="Địa chỉ nhận hàng"></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" name="matkhau" minlength="6" required placeholder="Ít nhất 6 ký tự"></td>
            </tr>
            <tr>
                <td><input type="submit" name="dangky" class="btn-submit" value="Đăng ký"></td>
                <td><a href="index.php?quanly=dangnhap" class="login-link">Đăng nhập nếu có tài khoản</a></td>
            </tr>
        </table>
    </form>
</div>