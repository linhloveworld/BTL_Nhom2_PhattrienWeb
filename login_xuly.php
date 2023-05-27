<?php 
    
    ob_start();
    include "ketnoi.php";
    if(isset($_SESSION['user'])){
        header('Location: index.php');
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php include "header.php";?>
<body>
    <?php 
        include "menu.php";
    ?>
    <div class="container-login">
        <div class="container-body">
        <?php 
           $TenDangNhap = $_POST['txtUsername'];
           $MatKhau = $_POST['txtPassword'];
           
           if(isset($TenDangNhap)){
               if(isset($MatKhau)){
                   $sql="SELECT * FROM tbl_nguoidung WHERE TenDangNhap='$TenDangNhap' AND MatKhau='$MatKhau'";
                   $danhsach=mysqli_query($connect,$sql);
                   if($dong=mysqli_num_rows($danhsach)==0){
                       echo "<h3>Thông tin tài khoản sai!</h3>";
                   }else{
                       $dong=mysqli_fetch_array($danhsach);
                       $_SESSION['user']=$TenDangNhap;
                       $_SESSION['ID']=$dong['ID'];
                       $_SESSION['Quyen']=$dong['Quyen'];
                       header('Location:index.php');
                       //echo "<a href='logout.php'>Đăng xuất</a>";
                   }
               }else{
                   echo "thong tin";
               }
           }else{
                echo "thong tin";
           }
           ob_end_flush();
        ?>           
        </div>
    </div>
</body>
</html>