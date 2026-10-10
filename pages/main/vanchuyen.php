<div class="container mt-4">
    <div class="arrow-steps clearfix mb-4">
        <div class="step done"> <span> <a href="index.php?quanly=giohang">Giỏ hàng</a></span> </div>
        <div class="step current"> <span><a href="index.php?quanly=vanchuyen">Vận chuyển</a></span> </div>
        <div class="step"> <span><a href="index.php?quanly=thanhtoan">Thanh toán</a></span> </div>
        <div class="step"> <span><a href="index.php?quanly=donhangdadat">Lịch sử đơn hàng</a></span> </div>
    </div>

    <h4 class="mb-4 text-uppercase font-weight-bold">Thông tin vận chuyển</h4>

    <?php
        // Giữ nguyên logic xử lý PHP của bạn
        if(isset($_POST['themvanchuyen'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $note = $_POST['note'];
            $id_dangky = $_SESSION['id_khachhang'];
            $sql_them_vanchuyen = mysqli_query($mysqli, "INSERT INTO tbl_shipping(name,phone,address,note,id_dangky) VALUES('$name','$phone','$address','$note','$id_dangky')");
            if($sql_them_vanchuyen){ echo '<script>alert("Thêm vận chuyển thành công")</script>'; }
        }elseif(isset($_POST['capnhatvanchuyen'])){
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $note = $_POST['note'];
            $id_dangky = $_SESSION['id_khachhang'];
            $sql_update_vanchuyen = mysqli_query($mysqli, "UPDATE tbl_shipping SET name='$name',phone='$phone',address='$address',note='$note',id_dangky='$id_dangky' WHERE id_dangky='$id_dangky'");
            if($sql_update_vanchuyen){ echo '<script>alert("Cập nhật vận chuyển thành công")</script>'; }
        }

        $id_dangky = $_SESSION['id_khachhang'];
        $sql_get_vanchuyen = mysqli_query($mysqli, "SELECT * FROM tbl_shipping WHERE id_dangky='$id_dangky' LIMIT 1");
        $count = mysqli_num_rows($sql_get_vanchuyen);

        if($count > 0){
            $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
            $name = $row_get_vanchuyen['name'];
            $phone = $row_get_vanchuyen['phone'];
            $address = $row_get_vanchuyen['address'];
            $note = $row_get_vanchuyen['note'];
        } else {
            $name = ''; $phone = ''; $address = ''; $note = '';
        }
    ?>

    <div class="row">
        <div class="col-md-5 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form action="" autocomplete="off" method="POST">
                        <div class="form-group">
                            <label class="font-weight-bold">Họ và tên</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name?>" placeholder="Nhập tên người nhận">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Số điện thoại</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo $phone?>" placeholder="Nhập số điện thoại">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Địa chỉ</label>
                            <input type="text" name="address" class="form-control" value="<?php echo $address?>" placeholder="Địa chỉ nhận hàng">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Ghi chú</label>
                            <input type="text" name="note" class="form-control" value="<?php echo $note?>" placeholder="Ghi chú đơn hàng">
                        </div>
                        <?php if($name == '' && $phone == '') { ?>
                            <button type="submit" name="themvanchuyen" class="btn btn-primary btn-block">Thêm vận chuyển</button>
                        <?php } else { ?>
                            <button type="submit" name="capnhatvanchuyen" class="btn btn-success btn-block">Cập nhật vận chuyển</button>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="table-responsive shadow-sm rounded bg-white">
                <table class="table table-bordered table-hover mb-0" style="text-align: center;">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                            $i = 0; $tongtien = 0;
                            foreach ($_SESSION['cart'] as $cart_item) {
                                $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
                                $tongtien += $thanhtien; $i++;
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $cart_item['tensanpham']; ?></td>
                            <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" class="img-thumbnail" style="max-width: 80px;"></td>
                            <td>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-circle-plus fa-style mr-2"></i></a>
                                    <?php echo $cart_item['soluong']; ?>
                                    <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-circle-minus fa-style ml-2"></i></a>
                                </div>
                            </td>
                            <td><?php echo number_format($cart_item['giasp'], 0, ',', '.') . 'đ'; ?></td>
                            <td class="font-weight-bold"><?php echo number_format($thanhtien, 0, ',', '.') . 'đ'; ?></td>
                        </tr>
                    <?php } ?>
                        <tr class="bg-light">
                            <td colspan="6" class="text-right py-3 pr-4">
                                <h5 class="mb-3">Tổng tiền: <span class="text-danger font-weight-bold"><?php echo number_format($tongtien, 0, ',', '.') . 'đ' ?></span></h5>
                                <?php if (isset($_SESSION['dangky'])) { ?>
                                    <a href="index.php?quanly=thongtinthanhtoan" class="btn btn-danger btn-lg px-5 shadow-sm">Thanh toán ngay</a>
                                <?php } else { ?>
                                    <a href="index.php?quanly=dangky" class="btn btn-warning btn-lg px-5 shadow-sm">Đăng ký đặt hàng</a>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } else { ?>
                        <tr><td colspan="6" class="py-4 text-muted">Giỏ hàng đang trống</td></tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
.arrow-steps .step {
    font-size: 14px;
    text-align: center;
    color: #666;
    cursor: default;
    margin: 0 3px;
    padding: 10px 10px 10px 30px;
    min-width: 180px;
    float: left;
    position: relative;
    background-color: #d9e3f7; 
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    transition: background-color 0.3s;
}

.arrow-steps .step:after,
.arrow-steps .step:before {
    content: "";
    position: absolute;
    top: 0;
    right: -20px;
    width: 0;
    height: 0;
    border-top: 20px solid transparent; 
    border-bottom: 20px solid transparent;
    border-left: 20px solid #d9e3f7;
    z-index: 2;
    transition: border-color 0.3s;
}

.arrow-steps .step:before {
    right: auto;
    left: 0;
    border-left: 20px solid #fff; 
    z-index: 0;
}

.arrow-steps .step:first-child:before {
    border: none;
}

.arrow-steps .step:first-child {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    padding-left: 20px;
}

.arrow-steps .step span a {
    color: #555;
    text-decoration: none;
    font-weight: bold;
    display: block;
}

.arrow-steps .step.current {
    background-color: #23468c; 
    color: #fff;
}

.arrow-steps .step.current:after {
    border-left: 20px solid #23468c;
}

.arrow-steps .step.current span a {
    color: #fff;
}

/* Hiệu ứng Hover */
.arrow-steps .step:hover {
    background-color: #b5c7ed;
}

.arrow-steps .step:hover:after {
    border-left: 20px solid #b5c7ed;
}

.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
/* Icon Styles */
.fa-style {
    font-size: 1.2rem;
    transition: 0.3s;
}
.fa-style:hover {
    transform: scale(1.2);
}

/* Mobile responsive fixes */
@media (max-width: 768px) {
    .arrow-steps .step {
        clip-path: none;
        border-radius: 4px;
        margin-bottom: 5px;
    }
}
</style>