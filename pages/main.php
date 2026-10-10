
<div class="container-fluid mt-4 mb-5"> <div id="main" class="main-wrapper">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-12">
                <div class="sidebar-wrapper shadow-sm rounded">
                    <?php include "sidebar/sidebar.php"; ?>
                </div>
            </div>

            <div class="col-lg-10 col-md-9 col-sm-12">
                <div class="main-content-wrapper shadow-sm rounded p-3">
                  <?php
                      if (isset($_GET['quanly'])) {
                          $tam = $_GET['quanly'];
                      } else {
                          $tam = '';
                      }
                      if ($tam == 'danhmucsanpham') {
                          include "main/danhmuc.php";
                      } else if ($tam == 'giohang') {
                          include "main/giohang.php";
                      } else if ($tam == 'danhmucbaiviet') {
                          include "main/danhmucbaiviet.php";

                      } else if ($tam == 'baiviet') {
                          include "main/baiviet.php";
                      } else if ($tam == 'tintuc') {
                          include "main/tintuc.php";
                      } else if ($tam == 'lienhe') {
                          include "main/lienhe.php";
                      } else if ($tam == 'sanpham') {
                          include "main/sanpham.php";
                      } else if ($tam == 'dangky') {
                          include "main/dangky.php";
                      } else if ($tam == 'thanhtoan') {
                          include "main/thanhtoan.php";
                      } else if ($tam == 'dangnhap') {
                          include "main/dangnhap.php";
                      } else if ($tam == 'timkiem') {
                          include "main/timkiem.php";
                      } else if ($tam == 'camon') {
                          include "main/camon.php";
                      } else if ($tam == 'thaydoimatkhau') {
                          include "main/thaydoimatkhau.php";

                      } elseif ($tam == 'vanchuyen') {
                          include "main/vanchuyen.php";
                      } elseif ($tam == 'thongtinthanhtoan') {
                          include "main/thongtinthanhtoan.php";
                      } elseif ($tam == 'donhangdadat') {
                          include "main/donhangdadat.php";

                      } elseif ($tam == 'lichsudonhang') {
                          include "main/lichsudonhang.php";
                      } elseif ($tam == 'xemdonhang') {
                          include "main/xemdonhang.php";

                      } else {
                          include 'main/index.php';
                      }

                  ?>
                </div>
            </div>
        </div>
    </div>
</div>