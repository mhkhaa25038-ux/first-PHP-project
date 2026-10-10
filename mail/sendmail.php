<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

class Mailer {
    public function dathangmail($tieude, $noidung, $maildathang) {
        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';

        try {
             $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Mở dòng này nếu muốn xem lỗi chi tiết
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'mhkhaa25038@cusc.ctu.edu.vn';
            $mail->Password   = 'zuhwexmopxysnmyj'; // Mật khẩu ứng dụng
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
            $mail->Port       = 587;

            $mail->setFrom('mhkhaa25038@cusc.ctu.edu.vn', 'Cửa hàng Công Nghệ');
            $mail->addAddress($maildathang); // ĐÃ SỬA: Bỏ dấu nháy đơn

            $mail->isHTML(true);
            $mail->Subject = $tieude;
            $mail->Body    = $noidung;

            $mail->send();
            return true;
        } catch (Exception $e) {
            // Ghi log lỗi thay vì chỉ echo để tránh làm hỏng giao diện
            error_log("Lỗi gửi mail: " . $mail->ErrorInfo);
            return false;
        }
    }
}