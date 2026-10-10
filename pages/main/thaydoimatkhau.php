<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h4 class="mb-0"><i class="fas fa-key mr-2"></i>ĐỔI MẬT KHẨU</h4>
                </div>
                <div class="card-body p-4">
                    <?php
                    if (isset($_POST['doimatkhau'])) {
                        // Bảo mật dữ liệu đầu vào chống SQL Injection
                        $taikhoan    = mysqli_real_escape_string($mysqli, $_POST['email']);
                        $matkhau_cu  = md5($_POST['password_cu']);
                        $matkhau_moi = md5($_POST['password_moi']);

                        $sql = "SELECT * FROM tbl_dangky WHERE email='$taikhoan' AND matkhau='$matkhau_cu' LIMIT 1";
                        $row = mysqli_query($mysqli, $sql);
                        $count = mysqli_num_rows($row);

                        if ($count > 0) {
                            $sql_update = "UPDATE tbl_dangky SET matkhau='$matkhau_moi' WHERE email='$taikhoan'";
                            mysqli_query($mysqli, $sql_update);
                            echo '<div class="alert alert-success alert-dismissible fade show">
                                    <i class="fas fa-check-circle mr-2"></i>Mật khẩu đã được thay đổi thành công!
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                  </div>';
                        } else {
                            echo '<div class="alert alert-danger alert-dismissible fade show">
                                    <i class="fas fa-exclamation-triangle mr-2"></i>Email hoặc mật khẩu cũ không đúng.
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                  </div>';
                        }
                    }
                    ?>

                    <form action="" autocomplete="off" method="POST">
                        <div class="form-group">
                            <label class="small mb-1 font-weight-bold">Địa chỉ Email</label>
                            <input class="form-control py-4" name="email" type="email" placeholder="Nhập email tài khoản" required />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1 font-weight-bold">Mật khẩu hiện tại</label>
                            <input class="form-control py-4" name="password_cu" type="password" placeholder="••••••••" required />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1 font-weight-bold">Mật khẩu mới</label>
                            <input class="form-control py-4" name="password_moi" type="password" placeholder="••••••••" required />
                        </div>
                        <div class="form-group mt-4 mb-0">
                            <button type="submit" name="doimatkhau" class="btn btn-primary btn-block shadow-sm py-2 font-weight-bold">
                                CẬP NHẬT MẬT KHẨU
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3 bg-light border-0">
                    <div class="small"><a href="index.php" class="text-decoration-none"><i class="fas fa-arrow-left mr-1"></i> Quay lại trang chủ</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 1rem;
    }
    .card-header {
        border-top-left-radius: 1rem !important;
        border-top-right-radius: 1rem !important;
    }
    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0,123,255,.15);
    }
    .btn-primary {
        border-radius: 50px;
        letter-spacing: 1px;
    }
</style>