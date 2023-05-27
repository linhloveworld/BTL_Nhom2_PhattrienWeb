<?php
include("Config.php");
if(mysqli_query($connect,$sql))
{
    echo "Sua thanh cong";
}else{
    echo "khong the ket noi, loi: "
        .mysqli_connect_errno($connect)."("
        .mysqli_connect_error($connect).")";
}
mysqli_close($connect);
unset($sql);
?>