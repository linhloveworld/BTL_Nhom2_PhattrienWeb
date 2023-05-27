<?php 
    
    include "ketnoi.php";
    if(isset($_SESSION['user']))
    {
        unset($_SESSION['user']);
        unset($_SESSION['ID']);
        unset($_SESSION['Quyen']);
        header('Location:login.php');
    }
?>