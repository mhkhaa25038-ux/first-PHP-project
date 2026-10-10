<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include('admincp/config/config.php');
require('mail/sendmail.php');
require('carbon/autoload.php');

use Carbon\Carbon;

$now = Carbon::now('Asia/Ho_Chi_Minh');

// Kiểm tra bảo mật: Phải có khách hàng đăng nhập và có hàng trong giỏ mới xử lý
if (isset($_SESSION['id_khachhang']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    
    $id_khachhang = $_SESSION['id_khachhang'];
    $ma_khachhang = $_SESSION['email']; // Nên dùng $_SESSION['email'] nếu bạn lưu lúc đăng ký/đăng nhập
    $code_order = rand(0, 9999);

    // 1. Chèn vào bảng tbl_cart (Đơn hàng tổng)
    $insert_cart = "INSERT INTO tbl_cart(id_khachhang, code_cart, cart_status, cart_date) 
                    VALUES ('$id_khachhang', '$code_order', 1, '$now')";
    $cart_query = mysqli_query($mysqli, $insert_cart);

    if ($cart_query) {
        // 2. Chèn chi tiết giỏ hàng (Sử dụng vòng lặp)
        foreach ($_SESSION['cart'] as $key => $value) {
            $id_sanpham = $value['id'];
            $soluong = $value['soluong'];
            
            $insert_order_details = "INSERT INTO tbl_cart_details(id_sanpham, code_cart, soluongmua) 
                                     VALUES ('$id_sanpham', '$code_order', '$soluong')";
            mysqli_query($mysqli, $insert_order_details);
        }

        // 3. Xử lý Gửi Email Xác Nhận
        $tieude = "Xác nhận đơn hàng #" . $code_order . " tại Kha Store";
        $noidung = "
        <div style='font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: auto; border: 1px solid #eee; padding: 20px;'>
            <h2 style='background: #2ecc71; color: #fff; padding: 10px; text-align: center; border-radius: 5px;'>ĐẶT HÀNG THÀNH CÔNG</h2>
            <p>Chào bạn, <b>Kha Store</b> đã tiếp nhận đơn hàng của bạn.</p>
            <p><b>Mã đơn hàng:</b> <span style='color: #e74c3c;'>#" . $code_order . "</span></p>
            <p><b>Ngày đặt:</b> " . $now->format('d/m/Y H:i:s') . "</p>
            
            <table style='width: 100%; border-collapse: collapse; margin-top: 20px;'>
                <thead>
                    <tr style='background: #f8f9fa;'>
                        <th style='padding: 10px; border: 1px solid #ddd; text-align: left;'>Sản phẩm</th>
                        <th style='padding: 10px; border: 1px solid #ddd; text-align: center;'>SL</th>
                        <th style='padding: 10px; border: 1px solid #ddd; text-align: right;'>Giá</th>
                    </tr>
                </thead>
                <tbody>";
        
        $tongtien = 0;
        foreach ($_SESSION['cart'] as $key => $val) {
            $thanhtien = $val['soluong'] * $val['giasp'];
            $tongtien += $thanhtien;
            $noidung .= "
                <tr>
                    <td style='padding: 10px; border: 1px solid #ddd;'>" . $val['tensanpham'] . "</td>
                    <td style='padding: 10px; border: 1px solid #ddd; text-align: center;'>" . $val['soluong'] . "</td>
                    <td style='padding: 10px; border: 1px solid #ddd; text-align: right;'>" . number_format($val['giasp'], 0, ',', '.') . "đ</td>
                </tr>";
        }

        $noidung .= "
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan='2' style='padding: 10px; border: 1px solid #ddd; font-weight: bold; text-align: right;'>Tổng thanh toán:</td>
                        <td style='padding: 10px; border: 1px solid #ddd; font-weight: bold; text-align: right; color: #e74c3c;'>" . number_format($tongtien, 0, ',', '.') . "đ</td>
                    </tr>
                </tfoot>
            </table>
            
            <p style='margin-top: 20px; font-size: 12px; color: #777; text-align: center;'>
                Đây là email tự động, vui lòng không phản hồi email này. Cảm ơn bạn!
            </p>
        </div>";

        // Gửi mail
        $mail = new Mailer();
        $mail->dathangmail($tieude, $noidung, $ma_khachhang);

        // 4. Xóa giỏ hàng và chuyển hướng
        unset($_SESSION['cart']);
        header('Location: index.php?quanly=camon');
        exit();
    } else {
        echo "Lỗi kết nối cơ sở dữ liệu!";
    }
} else {
    header('Location: index.php');
    exit();
}
?>