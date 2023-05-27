
<?php include("ketnoi.php");?>
<?php include("header.php"); ?>

<html>
	<body>
	<nav class="nav__main">
	     	    <ul class="nav__main-list">
	     	    	<li class="nav__main-item fa">
	     	    		<a href="index.php"><i class="fas fa-home"></i></a>
	     	    	</li>
	    
	     	    	<li class="nav__main-item"><a href="quanly_user.php">Quản lý user</a>	</li>

	     	    	<li class="nav__main-item"><a href="">Quản lý bình luận</a>	   </li>

	     	    	<li class="nav__main-item"><a href="index_admin.php">Quản lý bài viết</a>    </li>
					 
	     	    </ul>
	     	</nav>
    
	</body>
	<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		
		$MaChuDe = $_POST["MaChuDe"];
		$TieuDe  =  $_POST["TieuDe"];
		$MinhHoa  =  $_POST["MinhHoa"];
		$TomTat  =  $_POST["TomTat"];
		$NoiDung  =  $_POST["NoiDung"];
		
		
	
		 
         if ($MaChuDe == ""){  echo "Quên nhập Machude kìa </br>";}
		 if ($TieuDe == ""){  echo "Quên nhập TieuDe kìa </br>";}
		 if ($MinhHoa == ""){  echo "Quên nhập MinhHoa kìa </br>";}
		 if ($TomTat == ""){  echo "Quên nhập TomTat kìa </br>";}
		 if ($NoiDung == ""){  echo "Quên nhập NoiDung kìa </br>";}
		
         if( $MaChuDe != "" && $TieuDe != "" && $MinhHoa != "" && $TomTat != "" && $NoiDung != "" ){
			$sql = "INSERT INTO tbl_baiviet( MaChuDe, TieuDe, MinhHoa, TomTat, NoiDung,NgayDang )
			VALUES ( '$MaChuDe', '$TieuDe', '$MinhHoa','$TomTat' ,'$NoiDung',now())";
			if(mysqli_query($connect,$sql))
			header("location: index_admin.php");

		 } else {
			
		 }
		
		
    }
	
?>

	<form action="" method="POST">
		<table>
			<tr>
				<td colspan="2"><h3 style = 'padding:30 0px;font-size: 25px;text-align : center'>Thêm bài viết mới</h3></td>
			</tr>
			
			<tr>
				<td nowrap="nowrap">Mã chủ đề :</td>
				<td><textarea id="MaChuDe" name="MaChuDe" rows="3" cols="150"> </textarea></td>
			</tr> 	
			<tr>
				<td nowrap="nowrap">Tiêu đề :</td>
				<td><textarea  id="TieuDe" name="TieuDe" rows="3" cols="150"> </textarea></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Minh họa :</td>
				<td><textarea  id="MinhHoa" name="MinhHoa" rows="3" cols="150"> </textarea></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Tóm tắt :</td>
				<td> <textarea name="TomTat" id="TomTat" cols="150" rows="3"></textarea> </td>
			<tr>
				<td nowrap="nowrap">Nội dung :</td>
				<td><textarea name="NoiDung" id="NoiDung" rows="10" cols="150"></textarea></td>
			</tr>
			
				
			<tr>
				<td colspan="2" align="center"><input type="submit" id = "btn_submit" name="btn_submit" value="Thêm bài viết"></td>
			</tr>

		</table>
		
	</form>

</html>