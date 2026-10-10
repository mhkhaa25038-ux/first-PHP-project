<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

$vnp_TmnCode = "XLKHPNIK"; 
$vnp_HashSecret = "AIIXJWH7RXTFWXT7POH3WHCQS662L5GN";
$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "http://localhost:1000/vnpay_php/vnpay_return.php"; 

$vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
$apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";

$startTime = date("YmdHis");
$expire = date('YmdHis',strtotime('+15 minutes', strtotime($startTime)));
// KHÔNG DÙNG THẺ ĐÓNG 


//http://localhost:1000/vnpay_php/vnpay_return.php?vnp_Amount=1000000&vnp_BankCode=NCB&vnp_BankTranNo=VNP15421108&vnp_CardType=ATM&vnp_OrderInfo=Thanh+toan+don+hang+1664&vnp_PayDate=20260204152804&vnp_ResponseCode=00&vnp_TmnCode=XLKHPNIK&vnp_TransactionNo=15421108&vnp_TransactionStatus=00&vnp_TxnRef=1664&vnp_SecureHash=f113e62205dd749153fad490602d7e2dd54842a7ae100e71932b4a7b39e310fc52aa1d2b19b533788267fb6ec84af7c49b6028f3e17ffbfbd7dfe4e8b79fd9e5
?> 

