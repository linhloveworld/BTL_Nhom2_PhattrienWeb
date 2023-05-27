<?php   require("ketnoi.php");  ?>

<?php 
        if(isset($_GET['id'])){
             $ID = $_GET['id'];
        }
        $sql2 = "DELETE FROM tbl_binhluan where ID = $ID";
        if(mysqli_query($connect,$sql2)){
            header("location: quanly_binhluan.php");
        }
?>