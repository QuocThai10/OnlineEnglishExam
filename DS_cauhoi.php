<?php 
    require 'side_bar.php';
    require 'config/connect.php';
?>
<?php 
    $stm = $pdo->query('SELECT * FROM tbl_cauhoi');
    $data = $stm->fetchAll(PDO::FETCH_OBJ);
    $i =1;
    if($stm->rowCount()>0){
        ?>
            <table class="styled-table" style="width: 1140px; margin-left: 50px;">
                <thead>
                    <tr>
                        <td style="text-align: center;">STT</td>
                        <td style="text-align: center;">Mã câu hỏi</td>
                        <td>Nội dung</td>
                        <td>Hình ảnh</td>
                        <td>Âm thanh</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
        <?php
        foreach($data as $item){
            if($i % 2 ==0){
                ?>
                <tr class="active-row">
                    <td style="text-align: center;"><?php echo $i?></td>
                    <td style="text-align: center;"><?php echo $item->macauhoi?></td>
                    <td><?php echo $item->noidung?></td>
                    <td><?php echo $item->hinhanh?></td>
                    <td><?php echo $item->amthanh?></td>
                    <td>
                        
                    </td>
                </tr>
                
             <?php
             $i++;
            }else{
                ?>
                <tr>
                    <td style="text-align: center;"><?php echo $i?></td>
                    <td style="text-align: center;"><?php echo $item->macauhoi?></td>
                    <td><?php echo $item->noidung?></td>
                    <td><?php echo $item->hinhanh?></td>
                    <td><?php echo $item->amthanh?></td>
                </tr>
             <?php
             $i++;
            }
             
         }
         ?>
         </tbody>
         </table>
         <?php 
    }else{
        echo"Lỗi đọc DB";
    }
    
?>
</body>
</html>

