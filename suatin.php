<?php  include("ketnoi.php");   ?>
<?php  include("header.php");            ?>

<?php  
    if(isset($_GET['id'])){
        $ID = $_GET['id'];
	}
 ?>
 <?php  
 
 if(isset($_POST['btn_submit'])){
	  $MaChuDe = $_POST['MaChuDe'];
	  $TieuDe = $_POST['TieuDe'];
	  $MinhHoa = $_POST['MinhHoa'];
	  $TomTat = $_POST['TomTat'];
	  $NoiDung = $_POST['NoiDung'];

	  if ($MaChuDe == ""){  echo "Quên nhập Machude kìa </br>";}
	  if ($TieuDe == ""){  echo "Quên nhập TieuDe kìa </br>";}
	  if ($MinhHoa == ""){  echo "Quên nhập MinhHoa kìa </br>";}
	  if ($TomTat == ""){  echo "Quên nhập TomTat kìa </br>";}
	  if ($NoiDung == ""){  echo "Quên nhập NoiDung kìa </br>";}
	 
	  if( $MaChuDe != "" && $TieuDe != "" && $MinhHoa != "" && $TomTat != "" && $NoiDung != "" ){
		 $sql = "UPDATE tbl_baiviet SET MaChuDe = '$MaChuDe', TieuDe = '$TieuDe', MinhHoa = '$MinhHoa', TomTat = '$TomTat', NoiDung = '$NoiDung', NgayDang = now()
		         where ID = $ID ";
		
		 if(mysqli_query($connect,$sql)){
			header("location: index_admin.php");
		 }
		 else{
			 echo "Lỗi";
		 }
		 

	  }
	}
	 
?>

 <?php  
 
       $sql2 = " SELECT * FROM tbl_baiviet WHERE ID = $ID ";
	   $qr = mysqli_query($connect,$sql2);
	   $row = mysqli_fetch_array($qr);

	   
?>
<form action="" method="POST">
		<table>
			<tr>
				<td colspan="2"><h3 style = 'font-size: 25px;text-align : center; padding: 30 0'>Sửa bài viết</h3></td>
			</tr>
			
			<tr>
				<td nowrap="nowrap">Mã chủ đề :</td>
				<td><textarea name="MaChuDe" id="MaChuDe" rows="3" cols="150"><?php echo $row['MaChuDe']; ?></textarea></td>
			</tr> 	
			<tr>
				<td nowrap="nowrap">Tiêu đề :</td>
				<td><textarea name="TieuDe" id="TieuDe" rows="3" cols="150"><?php echo $row['TieuDe']; ?></textarea></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Hình ảnh :</td>
				<td><textarea name="MinhHoa" id="MinhHoa" rows="3" cols="150"><?php echo $row['MinhHoa']; ?></textarea></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Tóm tắt :</td>
				<td><textarea name="TomTat" id="TomTat" rows="5" cols="150"><?php echo $row['TomTat']; ?></textarea></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Nội dung :</td>
				<td><textarea name="NoiDung" id="NoiDung" rows="10" cols="150"><?php echo $row['NoiDung']; ?></textarea></td>
			</tr>
			
            <tr>
				<td style = 'font-size: 25px;text-align : center; padding: 10 0'
				colspan="2" align="center"><input type="submit" id = "btn_submit" name="btn_submit" value="Sửa bài viết"></td>
			</tr> 

			</table>
		
	</form>
 <style>
#btn_submit{
 cursor : pointer; 
 height : 50px;
 background-color : skyblue; 
}
 </style>