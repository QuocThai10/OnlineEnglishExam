<?php 
session_start();
require 'config/connect.php';

$id_nguoidung = $_POST['id_nguoidung'];
$hoten = $_POST['name']??"";
$ngaysinh = $_POST['bod']??"";
$email = $_POST['email']??"";
$taikhoan = $_POST['username']??"";
$matkhau = $_POST['password']??"";
$quyen = $_POST['role']??"";


$sql = "INSERT INTO `tbl_nguoidung` 
VALUES(`hoten`='$hoten',`ngaysinh`='$ngaysinh',`email`='$email' ,`taikhoan`='$taikhoan',`matkhau`='$matkhau',`manhomquyen`='$manhomquyen')";

$stm = $pdo->prepare($sql);

  if($stm->execute() == true){
    $_SESSION['successMessage'] = "Thêm người dùng $hoten thành công.";
    header("Location: DS_taikhoan.php");
    exit();
  }else{
    $_SESSION['errorMessage'] = "Lỗi: ";
    header("Location: DS_taikhoan.php");
    exit();
  }

  