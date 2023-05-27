<?php   require("ketnoi.php");  ?>

<?php 
        if(isset($_GET['id'])){
             $ID = $_GET['id'];
        }
        $sql2 = "SELECT Quyen from tbl_nguoidung where ID = $ID";
             $quyen = mysqli_query($connect,$sql2);
        $sql = "DELETE FROM tbl_nguoidung where ID = $ID ";
        //if( $quyen != 1  ){
            if(mysqli_query($connect,$sql)){
                header("location: quanly_user.php");
            }
           // else {
             //   echo "Không được xóa quản lý";
            //}
        //}
        
?>