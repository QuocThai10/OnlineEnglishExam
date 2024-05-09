<?php 
    require 'side_bar.php';
    require 'config/connect.php';
?>
<div class="row">
    <div class="col-lg-10 ms-auto p-4 overflow-hidden">
        <h1 style="margin-top: 10px;margin-left: 20px;">Chứng chỉ: <span id="text-date" style="display: inline;"></span></h1>
        <?php
            $sql = "SELECT * FROM tbl_chungchi order by machungchi";
            $stm = $pdo->query($sql);
        ?>
        <p>
            <select class="select-date" style="border-radius: 5px;padding: 5px;">
                <option value="0"> -- Not Value --</option>
                <?php
                    $data = $stm->fetchAll(PDO::FETCH_OBJ);
                    if($stm->rowCount()>0){
                        foreach($data as $item){
                            ?>
                                <option value="<?php echo $item->machungchi ?>">
                                    <?php echo $item->tenchungchi ?>
                                </option>
                            <?php
                        }
                        ?>
                        <?php 
                    }
                ?>
                    
            </select>
        </p>
        <div class="danhsachdethi">

        </div>
    </div>
</div>

</body>
</html>
<script>
    $(document).ready(function () {
        macdinh();
        $('.select-date').change(function () {
            var macc = $(this).val();
            //$('#text-date').text(text);
            $.post("danhsach_dethi.php", { id: macc }, function (data) {
                $(".danhsachdethi").html(data);
            })
        });
        function macdinh() {
            var id = 0;
            $.post("danhsach_dethi.php", { id: id }, function (data) {
                $(".danhsachdethi").html(data);
            })
        }
    });
</script>

