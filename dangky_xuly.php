<?php 
    ob_start();
    include "ketnoi.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php include "header.php";?>
<body>
    <?php include "heading.php";
        include "menu.php";
    ?>
    <div class="container-login">
        <div class="container-body">
                <?php 
                    if(isset($_POST['TenNguoiDung']) && isset($_POST['TenDangNhap'])&& isset($_POST['MatKhau'])&& isset($_POST['XacNhanMatKhau']))
                    {
                        $TenNguoiDung=$_POST['TenNguoiDung'];
                        $TenDangNhap = $_POST['TenDangNhap'];
                        $MatKhau = $_POST['MatKhau'];
                        $XacNhanMatKhau = $_POST['XacNhanMatKhau'];
                        if($MatKhau!=$XacNhanMatKhau){
                            echo "Xác nhận mật khẩu sai!";
                        }else{
                            $sql = "SELECT * FROM tbl_nguoidung WHERE TenDangNhap='$TenDangNhap'";
                            $kq = mysqli_query($connect, $sql);
                            if(mysqli_num_rows($kq)==0){
                                $sql = "INSERT INTO tbl_nguoidung(TenNguoiDung, TenDangNhap, MatKhau, Quyen) 
                                VALUES ('$TenNguoiDung', '$TenDangNhap','$MatKhau', 2)";
                                if (mysqli_query($connect, $sql)){
                                    header('Location:login.php');
                                }
                                else {
                                    
                                    echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="dangky.php";</script>';   
                                }
                            }else{
                                echo '<script language="javascript">alert("Tài khoản đã tồn tại!"); window.location="dangky.php";</script>';
                            }
                        }
                    }
                    ob_end_flush();
                    $connect->close();
                    ?>               
        </div>
    </div>
</body>
</html>