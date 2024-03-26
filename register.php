<?php 
require('func.php');
require('connect.php');
$user = isset($_REQUEST['user'])?$_REQUEST['user']:null;
$pws= isset($_REQUEST['password'])?$_REQUEST['password']:null;  
$email = isset($_REQUEST['email'])?$_REQUEST['email']:null;
$hoten= isset($_REQUEST['name'])?$_REQUEST['name']:null;  

$stm = $pdo->query("select * from nguoiDung where email = '$email'");
if($stm->rowCount()>0){
    ?>
    <script>
        window.history.back();
    </script>
    <?php
    alert('error','Email đã được đăng ký');
}