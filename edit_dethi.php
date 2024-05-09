<?php
require 'essentials.php';
require 'config/connect.php';
require 'side_bar.php';

$made = $_GET['made'];

$sql = "SELECT * FROM tbl_dethi WHERE made='$made'";
$stm = $pdo->query($sql);
$data = $stm->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Edit-DeThi</title>
</head>

<div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Cập nhật thông tin NHÂN VIÊN</h3>
                <form action="update_nhanvien.php" method="POST">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Thêm nhân viên mới </h5>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Mã nhân viên</label>
                                    <input type="text" name="MANV" class="form-control shadow-none"
                                        value="<?php echo $row['MANV'] ?>" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Họ và tên nhân viên</label>
                                    <input type="text" name="HOTENNV" class="form-control shadow-none" required
                                        value="<?php echo $row['HOTENNV'] ?>">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Chức vụ</label>
                                    <select id=combobox_chucvu class="form-control shadow-none" name="CHUCVU">
                                        <option value="Quản lý">Quản lý</option>
                                        <option value="Thu ngân">Thu ngân</option>
                                        <option value="Tiếp tân">Tiếp tân</option>
                                        <option value="Hỗ trợ">Hỗ trợ</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Năm sinh</label>
                                    <input type="date" name="NAMSINH" class="form-control shadow-none"
                                        value="<?php echo $row['NAMSINH'] ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Giới tính</label>
                                    <select id=combobox_gioitinh class="form-control shadow-none" name="GIOITINH">
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Địa chỉ</label>
                                    <input type="text" name="DIACHI" class="form-control shadow-none"
                                        value="<?php echo $row['DIACHI'] ?>" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Số điện thoại</label>
                                    <input type="text" name="SDTNV" class="form-control shadow-none"
                                        value="<?php echo $row['SDTNV'] ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Chọn tài khoản đã được tạo ở Quản lí tài
                                        khoản</label>
                                    <select name="TAIKHOAN" class="form-select shadow-none" required>
                                        <?php
                                        $res = selectAll('TAIKHOAN');
                                        while ($opt = mysqli_fetch_assoc($res)) {
                                            echo "<option value='$opt[TAIKHOAN]'>$opt[TAIKHOAN]</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" onclick="quay_lai_trang_truoc()"
                                class="btn btn-outline-danger">CANCEL</button>
                            <button type="submit" class="btn btn-outline-success">UPDATE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
<script>
    function quay_lai_trang_truoc() {
        history.back();
    }
</script>