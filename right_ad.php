<?php 
include "ketnoi.php";
	$sql="select * from quangcao 
    where vitri=1";
	$quangcao=mysqli_query($connect,$sql);
?>
<div class="right_ad">
	<?php
if($quangcao)
    {
    while ($dong=mysqli_fetch_array($quangcao))
        {
    ?>
        <?php echo $dong['vitri']; ?>
        <a href="<?php echo $dong['lienket']?>">
        <img src="<? echo $dong['anhminhhoa']; ?>" 
             title="<?php echo $dong['tenquangcao']&& <?php echo $dong['phiquangcao'] ?>"/></a>
    <?php
        }
    }
    ?>
</div>