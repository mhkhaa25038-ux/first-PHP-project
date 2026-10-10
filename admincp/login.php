<?php
session_start();
include 'config/config.php';
if (isset($_POST['dangnhap'])) {
    $taikhoan = $_POST['username'];
    $matkhau  = md5($_POST['password']);
    $sql      = "SELECT * FROM tbl_admin WHERE username='" . $taikhoan . "' AND password='" . $matkhau . "' LIMIT 1";
    $row      = mysqli_query($mysqli, $sql);
    $count    = mysqli_num_rows($row);
    if ($count > 0) {
        $_SESSION['dangnhap'] = $taikhoan;
        header("Location:index.php");
    } else {
        echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng, vui lòng nhập lại.");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Admincp</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .wrapper-login {
            background: #fff;
            width: 100%;
            max-width: 400px;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        .wrapper-login h3 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            color: #666;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #eee;
            border-radius: 8px;
            outline: none;
            transition: all 0.3s ease;
            font-size: 15px;
        }

        .form-group input:focus {
            border-color: #667eea;
            box-shadow: 0 0 8px rgba(102, 126, 234, 0.2);
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background: linear-gradient(to right, #667eea, #764ba2);
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            margin-top: 10px;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(118, 75, 162, 0.4);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        /* Hiệu ứng mượt cho mobile */
        @media (max-width: 480px) {
            .wrapper-login {
                width: 90%;
                padding: 25px;
            }
        }
    </style>
</head>
<body>

<div class="wrapper-login">
    <form action="" autocomplete="off" method="POST">
        <h3>Admin Login</h3>
        
        <div class="form-group">
            <label>Tài khoản</label>
            <input type="text" name="username" placeholder="Nhập tài khoản..." required>
        </div>

        <div class="form-group">
            <label>Mật khẩu</label>
            <input type="password" name="password" placeholder="Nhập mật khẩu..." required>
        </div>

        <input type="submit" name="dangnhap" class="btn-login" value="Đăng nhập">
    </form>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</body>
</html>