<?php

require 'config/connect.php';
require 'side_bar.php';


$macauhoi = $_GET['macauhoi'];

$sql = "SELECT *
  FROM tbl_cauhoi
  LEFT JOIN tbl_dethi
  ON tbl_cauhoi.made = tbl_dethi.made
  WHERE macauhoi='$macauhoi'";
$stm = $pdo->query($sql);
$row = $stm->fetch(PDO::FETCH_OBJ);
?>
<div>
<div class="form-edit" style="width: 60%;">
  
  <form action="update_cauhoi.php" method="post" name="edit-form" onsubmit="return validateForm_edit()" enctype="multipart/form-data">
    <div class="header-form-edit" style="width: 742px;">
      <h1>Cập nhật câu hỏi số: </h1>
      <input style="margin-left: 200px;" class="input-none" type="text" name="macauhoi" id="" value="<?php echo $macauhoi?>">
    </div>
    <label  style="margin-left: 50px;">Ảnh:</label><br>
    <input style="margin-left: 50px;margin-top: -10px;" type="file" name="img" id="">

    <label for="" style="position: relative;top: -50px;left: 40px;">Audio: </label>
    <input style="margin-left: 380px;margin-top: -50px;" type="file" name="audio" id="">
    <br>
                
      <div style="position: relative;top: 0px;margin-left: 50px;">
        <label for="">Nội dung câu hỏi</label><br>
        <textarea id="subject" name="noidung" placeholder="Exam content.." style="height:100px;top:0px;width: 90%;"><?php echo $row->noidungcauhoi?></textarea>
      </div>
      <div style="position: relative;top:70px">
      <a class="close-modal" href="DS_cauhoi.php" style="position: relative;right: 50px;">Close</a>
      <input type="submit" value="Submit" style="position: relative;right: 50px;top: 0px;">
      </div>
  </form>
</div>
</div>
<script>
    function quay_lai_trang_truoc() {
        history.back();
    }

    function validateForm_edit(){
      var noidung = document.forms["edit-form"]["noidung"].value;


      if(noidung == null || noidung ==""){
        alert("Vui lòng nhập nội dung câu hỏi");
        return false;
      }
    }
</script>
