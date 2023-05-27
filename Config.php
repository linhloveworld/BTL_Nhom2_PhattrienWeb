<?php
//tạo kết nối đến CSDL
$connect=mysqli_connect("localhost","root","","DB_NgayMoi");
//kiểm tra kết nối
if(mysqli_connect_errno())
   {
	echo "không thể kết nối được CSDL,lỗi: 
        .mysql_connect_errno()."("
        .mysqli_connect_error().")";
}else{
	echo "kết nối thành công<br>";
}
?>