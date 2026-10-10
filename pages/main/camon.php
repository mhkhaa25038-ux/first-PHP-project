<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include('admincp/config/config.php');
require('carbon/autoload.php');

$code_cart = isset($_SESSION['code_cart']) ? $_SESSION['code_cart'] : (isset($_GET['vnp_TxnRef']) ? $_GET['vnp_TxnRef'] : "KHONG_MA");

if (isset($_GET['vnp_Amount'])) {

    $vnp_Amount = $_GET['vnp_Amount'];
    $vnp_BankCode = $_GET['vnp_BankCode'];
    $vnp_BankTranNo = $_GET['vnp_BankTranNo'];
    $vnp_OrderInfo = $_GET['vnp_OrderInfo'];
    $vnp_PayDate = $_GET['vnp_PayDate'];
    $vnp_TmnCode = $_GET['vnp_TmnCode'];
    $vnp_TransactionNo = $_GET['vnp_TransactionNo'];
    $vnp_CardType = $_GET['vnp_CardType'];

    $shipping = isset($_SESSION['id_shipping']) ? $_SESSION['id_shipping'] : 0;

    $insert_vnpay = "INSERT INTO tbl_vnpay(
                        vnp_amount, 
                        code_cart, 
                        vnp_bankCode, 
                        vnp_banktranno, 
                        vnp_cardtype, 
                        vnp_orderinfo, 
                        vnp_paydate, 
                        vnp_tmncode, 
                        vnp_transactionno
                    ) 
                    VALUES (
                        '$vnp_Amount', 
                        '$code_cart', 
                        '$vnp_BankCode', 
                        '$vnp_BankTranNo', 
                        '$vnp_CardType', 
                        '$vnp_OrderInfo', 
                        '$vnp_PayDate', 
                        '$vnp_TmnCode', 
                        '$vnp_TransactionNo'
                    )";

    $cart_query = mysqli_query($mysqli, $insert_vnpay);
}
?>

<div class="thankyou-page">
    <div class="thankyou-center">
        <div class="thankyou-card">
            <div class="checkmark">✓</div>

            <h1>Đặt hàng thành công!</h1>

            <p class="desc">
                Cảm ơn bạn đã mua hàng tại cửa hàng của chúng tôi.<br>
                Đơn hàng của bạn đang được xử lý.
            </p>

           

            <div class="actions">
                <a href="index.php" class="btn outline">Tiếp tục mua sắm</a>
                <a href="index.php?quanly=lichsudonhang" class="btn primary">Xem lịch sử đơn hàng</a>
            </div>
        </div>
    </div>
</div>

<style>
.thankyou-page {
    width: 100%;
    padding: 30px 15px;
}

.thankyou-page * {
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

.thankyou-center {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 60vh;
}

.thankyou-card {
    width: 100%;
    max-width: 520px;
    background: #fff;
    border-radius: 16px;
    padding: 32px 24px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    animation: fadeIn 0.5s ease;
    border: 1px solid #eee;
}

.checkmark {
    width: 70px;
    height: 70px;
    margin: 0 auto 20px;
    border-radius: 50%;
    background: #e8f5e9;
    color: #43a047;
    font-size: 40px;
    font-weight: bold;
    line-height: 70px;
}

.thankyou-card h1 {
    font-size: 32px;
    color: #1f2937;
    margin-bottom: 15px;
}

.desc {
    color: #6b7280;
    line-height: 1.6;
    margin-bottom: 20px;
    font-size: 16px;
}

.actions {
    display: flex;
    gap: 12px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn {
    min-width: 180px;
    padding: 12px 20px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.25s ease;
    display: inline-block;
    text-align: center;
}

.btn.primary {
    background: #4CAF50;
    color: #fff;
    border: 2px solid #4CAF50;
}

.btn.primary:hover {
    background: #43a047;
    border-color: #43a047;
}

.btn.outline {
    background: #fff;
    color: #4CAF50;
    border: 2px solid #4CAF50;
}

.btn.outline:hover {
    background: #4CAF50;
    color: #fff;
}

@media (max-width: 768px) {
    .thankyou-card {
        padding: 24px 18px;
    }

    .thankyou-card h1 {
        font-size: 26px;
    }

    .btn {
        width: 100%;
        min-width: unset;
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(15px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>