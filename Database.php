<?php
include("Config.php");

//xây dựng và thực hiện truy vấn
$sql="CREAT DATABASE IF NOT EXISTS DB_NgayMoi";
mysqli_query($connect,$sql);
if(mysqli_connect_errno()){
	echo "không thể kết nối được CSDL, lỗi:"
        .mysqli_connect_errno()."("
        .mysqli_connect_error().")";
}else{
	echo "tạo DATABASE thành công";
}

//đóng kết nối
mysqli_close();
?>