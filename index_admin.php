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

    <div class = "noidung">  <h3 align = 'center' style = "font-size: 25px; border-top: 15px "> Quản lý bài viết</h3> 
                      <a href="" class="link"></a>
    <table >
    <tr>
                <th align = "center" width = "2%">Id</th>
                <th>Mã chủ đề</th>
                <th>Tiêu đề</th>
                <th>Minh họa</th>
                <th>Tóm tắt</th>
                
                <th>Ngày đăng</th>
                <th width = "4%">Lượt xem</th>
                <th width = "4%">Sửa tin</th>
				<th width = "4%">Xóa tin</th>
            </tr>

            <?php
           
            $sql = "SELECT * FROM tbl_baiviet";
            $result = mysqli_query($connect,$sql);
                
            

    while($row = mysqli_fetch_array($result)){//lấy kết quả đưa vào mảng 1 chiều
        ?>
  
        <tr>
            <td style = "text-align: center"><?php echo $row['ID']; ?></td>
            <td style = "text-align: center"><?php echo $row['MaChuDe']; ?></td>
            <td><?php echo $row['TieuDe']; ?></td>
            <td><?php echo $row['MinhHoa']; ?></td>
            <td><?php echo $row['TomTat']; ?></td>
           
            <td><?php echo $row['NgayDang']; ?></td>
            <td style = "text-align: center"><?php echo $row['LuotXem']; ?></td>
            <td>
            <?php  echo "<a href = 'suatin.php?id=".$row['ID']."'style = 'margin: 20px'><i class='fas fa-edit'></i></a>"; ?>
			</td>
			<td>
            <?php echo "<a href = 'xoatin.php?id=".$row['ID']."' style = 'margin: 20px'><i class='fas fa-trash-alt'></i> </a>";  ?>
			</td>
        </tr>
       
        
        <?php
    }
    ?>

 
  <?php
        echo "
            <tr>
                   <td   colspan = '9' align = 'center' >
                        <button class = 'btn' style = 'height : 45px;font-size : 20px;
                        background-color : skyblue' type = 'button' onclick = 'myFunction()'   
                        
                        >Thêm bài viết mới </button>
                   </td>  
            </tr>";
          echo "</table>";
          ?>

</div> 


        <?php  mysqli_close($connect); ?>
       
     <style>

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  font-size: 15px;
}
.chan{
    height: 200px;
}
.btn{
	cursor : pointer;
}
.noidung{
    padding:80 0px;

}
.noidung h3{
   padding-bottom: 20px;
}
.user{
    width : 100%;
   
    align-items: center;
}
</style>

</body>
</html>
<script>
    function myFunction(){
        location.replace("themtin.php");
 
    }
    function myFunction2(){
        location.replace("xoatin.php");
        
    }
</script>
