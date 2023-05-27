<?php
//tạo kết nối
include("Config.php");

//xây dựng và truy vấn
$sql = "CREAT TABLE IF NOT EXISTS 
tbl_user(ID int primary key auto_increment,
user_name varchar(20),
pwd varchar(32))";

mysqli_query($connect,$sql);
if(mysqli_connect_errno()){
	echo "không thể tạo TABLE, lỗi: "
	.mysqli_connect_errno()."("
        .mysqli_connect_error().")";
}else{
	echo "tạo TABLE thành công";
}
?>