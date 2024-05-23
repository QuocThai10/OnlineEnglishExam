<?php 
session_start();
require 'config/connect.php';

$machungchi = $_POST['machungchi'];
$tenchungchi = $_POST['tenchungchi']??"";
$mota = $_POST['mota']??"";

$sql = "UPDATE `tbl_chungchi` 
SET `tenchungchi`='$tenchungchi',`mota`='$mota' WHERE machungchi='$machungchi'";

$stm = $pdo->prepare($sql);

  if($stm->execute() == true){
    $_SESSION['successMessage'] = "Cập nhật thông tin chứng chỉ $tenchungchi thành công.";
    header("Location: DS_chungchi.php");
    exit();
  }else{
    $_SESSION['errorMessage'] = "Lỗi: ";
    header("Location: DS_chungchi.php");
    exit();
  }

  