<?php include "ketnoi.php";?>
<?php include_once "function.php";?>


<div class="left_ad">
    <?php
    $sql = "SELECT * FROM quangcao 
        where idquangcao asc";
    $quangcao=mysqli_query($connect,$sql);
    ?>
    <?php
    if($quangcao)
    {
    while($dong=mysqli_fetch_array($quangcao,MYSQLI_BOTH))
        {
    ?>
        <a href='<?php echo $dong['lienket']?>' title='<?php echo $dong['tenquangcao']?>'>
        <img src='anhminhoa\<?php echo $dong['anhminhhoa']?>'alt='<?php echo $dong['tenquangcao']?>'/>
        </a>
    <?php    
        }
    }
    ?>
</div>
    <?php
        $sql="SELECT * FROM quangcao";
        $quangcao=mysqli_query($connect,$sql);
    ?>
<div class="right_ad">
    <?php
        $quangcao = quangcao(0);
        while($row_quangcao = mysqli_fetch_array($quangcao))
        {
    ?>
        <a href="<?php echo $row_quangcao['lienket']?>">
        <img src="<?php echo $dong['anhminhhoa']?>"/>
        </a>
    <?php  
        }
    ?>
</div>
