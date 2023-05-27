<?php 

    $sql_2="SELECT * FROM tbl_baiviet";
							$danhsach2=mysqli_query($connect,$sql_2);
							while($dong=mysqli_fetch_array($danhsach2)){
								if($dong['LuotXem']>=50){
									echo '<div class="tinmoinhat-item">
											<div class="tinmoinhat-item-img">
												<a href=""><img src="'.$dong['MinhHoa'].'" width = 100px height=56px></a>
											</div>
											<div class="tinmoinhat-item-section">
												<a href="baiviet_xem.php?id='.$dong['ID'].'"><h4>'.$dong['TieuDe'].'</h4></a>
											</div>
										</div>
									';
								}
							}
?>