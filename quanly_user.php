<?php 
    //Bước 1:Tạo kết nối
    include("ketnoi.php"); ?>
 <header class="header">
	     	<div class="grid">
	     	    <div class="header__navbar">
	     	    
	     		    <ul class="header__navbar-list">
	     			     <li class="header__navbar-item logochinh">
	     				<a href="#"><img src="logo.png"></a></li>
	     		    </ul>
	
	     		
	     	    </div>
	     	</div>
	    </header>
<?php  include("header.php");            ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css
" />
    <title>Trangchu_Admin</title>
   
 
</head>

<body>
            <nav class="nav__main">
	     	    <ul class="nav__main-list">
	     	    	<li class="nav__main-item fa">
	     	    		<a href="index.php"><i class="fas fa-home"></i></a>
	     	    	</li>
	    
	     	    	<li class="nav__main-item"><a href="quanly_user.php">Quản lý user</a>	</li>

	     	    	<li class="nav__main-item"><a href="quanly_binhluan.php">Quản lý bình luận</a>	   </li>

	     	    	<li class="nav__main-item"><a href="index_admin.php">Quản lý bài viết</a>    </li>
					 
	     	    </ul>
	     	</nav>
    

        <div class="user">
           <div><h3 align = 'center' style = "font-size: 25px;width : 50% ;border-top: 15px "> Quản lý user</h3> </div>
        
           <table style = "width: 60%">
           <tr>
               
                <th>ID</th>
                <th>Tên</th>
                <th>Tên đăng nhập</th>
                <th>mật khẩu:</th>             
                <th>Quyền</th>
                <th>Xóa user</th>
                
            </tr>

            <?php
           
            $sql = "SELECT * FROM tbl_nguoidung";
            $result = mysqli_query($connect,$sql);
               while($row = mysqli_fetch_array($result)){//lấy kết quả đưa vào mảng 1 chiều
             ?>
  
        <tr>
            <td style = "text-align: center"><?php echo $row['ID']; ?></td>
            <td style = "text-align: center"><?php echo $row['TenNguoidung']; ?></td>
            <td style = "text-align: center"><?php echo $row['TenDangNhap']; ?></td>
            <td style = "text-align: center"><?php $mk =substr(md5($row['MatKhau']),10,15); 
                                                   echo $mk ; ?>
            </td>
            <td style = "text-align: center"><?php echo $row['Quyen']; ?></td>
           
			<td style = "text-align: center"    >
            <?php echo "<a href = 'xoa_user.php?id=".$row['ID']."'><i class='fas fa-trash-alt'></i> </a>";  ?>
			</td>
        </tr>
       
        
        <?php
    }
    ?>
        </div>

        <?php  mysqli_close($connect); ?>
       
     <style>

.user table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  font-size: 15px;
}

.btn{
	cursor : pointer;
}
.user table, h3{
    padding-top: 60px;
    margin: 20 auto;
    align-items: center;
}
</style>

</body>
</html>
