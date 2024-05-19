<?php 
  session_start();
  require 'config/connect.php';


  $made = $_GET['made']??"";
  $nd = $_GET['noidung']??"";
  $anh = $_FILES['img']['name']??null;
  $audio = $_FILES['audio']['name']??null;

  $noidung = trim($nd);

   //echo"$anh, $audio, $made, $noidung";

  $sql = "INSERT INTO `tbl_cauhoi`(`noidungcauhoi`, `hinhanh`, `amthanh`, `made`) 
  VALUES ('$noidung','$anh','$audio','$made')";

  $stm = $pdo->prepare($sql);

  if($stm->execute() == true){
    $_SESSION['successMessage'] = "Thêm câu hỏi mới thành công";
    header("Location: DS_cauhoi.php");
    exit();
  }else{
    $_SESSION['errorMessage'] = "Lỗi: ";
    header("Location: DS_cauhoi.php");
    exit();
  }

?>