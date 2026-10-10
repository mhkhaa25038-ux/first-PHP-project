

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleadimcp.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <title>admin cp </title>
</head>
<?php
    session_start();
    if (! isset($_SESSION['dangnhap'])) {
    header('location: login.php');
    }
?>

<body>
   <h3 class="title_admin">Welcome to AdminCP</h3>

    <div class="wrapper">
        <?php
            include "config/config.php";
            include "modules/header.php"; // Chứa Đăng xuất
            include "modules/menu.php";   // Chứa thanh menu màu tối
        ?>
        
        <div id="main">
            <?php include "modules/main.php"; ?>
        </div>

        <?php include "modules/footer.php"; ?>
    </div>
    </div>
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
       <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
       <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
    CKEDITOR.replace('thongtinlienhe');
    CKEDITOR.replace('tomtat');
    CKEDITOR.replace('noidung');
</script>
<script>
$(document).ready(function () {

    thongke();

    var char = new Morris.Area({
        element: 'chart',
        data: [],
        xkey: 'date',
        ykeys: ['order', 'sales', 'quantity'],
        labels: ['Đơn hàng', 'Doanh thu', 'Số lượng bán ra'],
        parseTime: false
    });

    $('.select-date').change(function(){
    var thoigian = $(this).val();
    if(thoigian=='7ngay'){
        var text = '7 ngày qua';
    }else if(thoigian=='28ngay'){
        var text = '28 ngày qua';
    }else if(thoigian=='90ngay'){
        var text = '90 ngày qua';
    }else{
        var text = '365 ngày qua';
    }

    $.ajax({
        url: "modules/thongke.php",
        method: "POST",
        dataType: "JSON",
        data:{thoigian:thoigian},
        success:function(data)
        {
            char.setData(data);
            $('#text-date').text(text);
        }
    });
});


    function thongke() {
        var text = '365 ngày qua';
        $('#text-date').text(text);

        $.ajax({
            url: "modules/thongke.php",
            method: "POST",
            dataType: "JSON",
            success: function (data) {
                console.log(data); 
                char.setData(data);
            }
        });
    }

});
</script>


</script>
</body>
</html>