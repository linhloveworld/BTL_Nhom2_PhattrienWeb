<?php   require("ketnoi.php");  ?>

<?php 
        if(isset($_GET['id'])){
             $ID = $_GET['id'];
        }
        $sql = "DELETE FROM tbl_baiviet where ID = $ID ";
        if(mysqli_query($connect,$sql)){
            header("location: index_admin.php");
        }
?>