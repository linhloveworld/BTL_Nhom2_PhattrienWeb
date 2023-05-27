<?php
include ("ketnoi.php");
include ("right_ad.php");

if(!function_exists('quangcao()'))
{
    function quangcao($vitri)
    {
        global $connect;
        $qr = "SELECT * FROM quangcao
        where vitri = $vitri";
        return mysqli_query($connect,$qr); 
    }
}else{
    echo "Loi";
  }    
    ?>