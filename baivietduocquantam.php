<div class="tonghop-right">
	<div class="tonghop-right__list">
		<div class="tinmoinhat-section gachdoc3">
			<h2>được quan tâm nhất</h2>
		</div>
	<?php 
		$sql_2="SELECT * FROM tbl_baiviet WHERE LuotXem >=50 ";
		$danhsach2=mysqli_query($connect,$sql_2);
		while($dong=mysqli_fetch_array($danhsach2)){
	    	echo '<div class="tinmoinhat-item">
				<div class="tinmoinhat-item-img">
					<a href="baiviet_xem.php?id='.$dong["ID"].'"><img src="'.$dong['MinhHoa'].'" width=100px height=56px></a>
				</div>
				<div class="tinmoinhat-item-section">
					<a href="baiviet_xem.php?id='.$dong["ID"].'"><h4>'.$dong['TieuDe'].'</h4>
					</a>
				</div>
				</div>';							
		}
	?>
	</div>
</div>