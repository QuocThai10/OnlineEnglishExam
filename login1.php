<?php
require('connect.php');
$user = isset($_REQUEST['user'])?$_REQUEST['user']:null;
$pws= isset($_REQUEST['password'])?$_REQUEST['password']:null;
echo("user: ");
var_dump($user);
echo("user: ");
var_dump($pws);
$stm = $pdo->query("select * from taikhoan where user = '$user' and mk='$pws'");
if($stm->rowCount()>0){
    $row = $stm->fetch(PDO::FETCH_ASSOC);
    $_SESSION["admin"] = $row;
    header("location:index.php");exit;
}else{
    
}