<?php
include("Config.php");

$sql="SELECT * FROM tbl_user";

if($result= mysqli_query($connect,$sql))
{
    echo "truy van thanh cong";
}else{
    echo "khong the truy van CSDL, loi: "
        .mysqli_connect_errno($connect)."("
        .mysqli_connect_errno($connect).")";
}
echo 
    "#";

while($row=mysqli_fetch_array($result))
{
    echo "#";
}
$uname = "User_10";
$pwd = 'matkhau_10';
$pwd2 = substr(md5($pwd),2,5);
$sqlLogin = "SELECT * FROM tbl_user
where uname = '$uname' AND pwd = '$pwd' ";
if($result=mysqli_query($con,$sqlLogin))
{
    echo "Truy van thanh cong";
}else{
    echo "khong the truy van";
}
echo "#";
while($row=mysqli_fetch_array($result))
{
    echo "#";
}
mysqli_close($con);
unset($sql,$i,$pwd,$uname);
?>