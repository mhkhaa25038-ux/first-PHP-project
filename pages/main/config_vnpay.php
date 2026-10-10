<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

$vnp_TmnCode = "XLKHPNIK"; 
$vnp_HashSecret = "AIIXJWH7RXTFWXT7POH3WHCQS662L5GN";
$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "http://localhost:1000/myweb/index.php?quanly=camon"; 

$vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
$apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";

$startTime = date("YmdHis");
$expire = date('YmdHis',strtotime('+15 minutes', strtotime($startTime)));



?> 

