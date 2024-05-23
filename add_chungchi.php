<?php 
session_start();
require 'config/connect.php';

$tenchungchi = $_POST['tenchungchi']??"";
$mota = $_POST['mota']??"";

$sql = "INSERT INTO `tbl_chungchi` 
VALUES(`tenchungchi`='$tenchungchi',`mota`='$mota')";

$stm = $pdo->prepare($sql);

  if($stm->execute() == true){
    $_SESSION['successMessage'] = "Thêm chứng chỉ $tenchungchi thành công.";
    header("Location: DS_chungchi.php");
    exit();
  }else{
    $_SESSION['errorMessage'] = "Lỗi: ";
    header("Location: DS_chungchi.php");
    exit();
  }

  