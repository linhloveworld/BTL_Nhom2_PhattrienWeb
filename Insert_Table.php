<?php
include("Config.php");
for($i=1;$i<=10;$i++){
	$user_name = "User_$i";
	$pwd = "matkhau$i";
	$sql="INSERT INTO tbl_user(uname,pwd) VALUES('$uname',md5('$pwd'))";
	if(mysqli_query($connect,$sql))
	{
		echo "INSERT không thành công";
	}else{
		echo "không thể INSERT.lỗi: ".mysqli_connect_errno()."("mysqli_connect_error().")";
	}
}
?>