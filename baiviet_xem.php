<!DOCTYPE html>
<html>
<?php
	ob_start();
	include "ketnoi.php";
	include "header.php";
    $id = $_GET['id'];
	
			
?>
<body>
	<div class="Vnexpress">
	    <?php include "heading.php";?>

	<!-------------------------------End Header------->

	    <?php include "menu.php";?>
	   <!-----------------------------hết menu main nav---------->
        <div class="container-1">
        	<div class="grid">
                <div class="tonghop">
					<?php
						$sql = "SELECT *
						FROM tbl_baiviet WHERE ID=$id";
						$danhsach = mysqli_query($connect, $sql);
				
						$dong = mysqli_fetch_array($danhsach);
					?>
	    	        <div class="tonghop-left">
	    		         <h1 class="tonghop-left--tittle"><?php echo $dong['TieuDe'];?></h1>
	    		         <div class="social-share">
	    		         	<button class="social-share__item"><i class="far fa-thumbs-up"></i>Thích</button>
	    		         	<button class="social-share__item"><i class="far fa-share-square"></i>Chia sẻ</button>
	    		         	<button class="social-share__item"><i class="fas fa-bookmark"></i>Lưu vào facebook</button>
	    		         </div>
						 <?php $sql3 = "SELECT LuotXem, NgayDang from tbl_baiviet where ID =$id"; //Lượt xem
						        $qr = mysqli_query($connect,$sql3);
								while($rows = mysqli_fetch_assoc($qr)){
									echo  "<p style = 'font-size: 13px; display :inline-block'>Lượt xem: " .$rows['LuotXem']; echo ";</p>";
									echo "<p style = 'font-size: 13px; display :inline-block'>Ngày đăng: ".$rows['NgayDang']; echo "</p>";
								}
								$sql2 = "UPDATE tbl_baiviet SET LuotXem = LuotXem +1 where ID =$id ";
	                                      if(mysqli_query($connect,$sql2)){
	                                      }
	                                      else{
	                                      }
						   ?>
	    		         <?php echo $dong['NoiDung']?>

	   <!---------------hết phần content--------------->

	    		         <div class="social-share-button">
	    		         	<a href="" class="social-share-button__item button-facebook"><i class="fab fa-facebook-square"></i></a>

	    		         	<a href="" class="social-share-button__item button-twitter"><i class="fab fa-twitter"></i></a>

	    		         	<a href="" class="social-share-button__item button-google"><i class="fab fa-google"></i></a>

	    		         	<a href="" class="social-share-button__item button-priterest">
	    		         		<i class="fab fa-pinterest"></i>
	    		         	</a>
	    		         </div>
	    		    </div>
	    		    <div class="tonghop-right">
	    	        	<div class="tonghop-right__list">
	    	        	    <div class="tinmoinhat-section gachdoc3">
	    	    	    	    <h2>được quan tâm nhất</h2>
	    	    	        </div>
	    	    	        <?php
								include "tinhot.php";
							?>
	    	    	    </div>
	    	        </div>
	    		</div>     
 <!-------------------Phan danh quang cao------------------>
                <div class="left_ad" charset=utf-8>
                    <?php include "left_ad.php";?>
                        <a href='<?php echo $dong['lienket'] ?>' 
                           title='<?php echo $dong['tenquangcao']?>'>
                        </a>
                        <img src="<?php echo $dong['anhminhhoa']?>"/>
                </div>
                <div class="right_ad" charset=utf-8>
                    <?php include "right_ad.php";?>
	                   <a href="<?php echo $row_quangcao['lienket']?>"
                          title='<?php echo $dong['tenquangcao']?>'>
                        </a>
	                   <img src="<?php echo $dong['anhminhhoa']?>"/> 
                </div>

<!---------------------------------------------------------->
        <!-----------------hết phần chia sẻ MXH----------->

	    		<div class="content-end">
	    		    <div class="content-end-right">
	    		        
						<?php
							if(isset($_SESSION['user']))
							{
						?>
						<div>
							<h4 style="font-size:15px;">Viết bình luận...</h4>
						
							<form  method="post">
								<input type="hidden" class="" value="<?php echo $id; ?>" id="MaBaiViet" name="MaBaiViet" placeholder="" />
								<div class="">
									
									<textarea style="width:100%;height:80px;font-size:15px" class="" id="NoiDungBinhLuan" name="NoiDungBinhLuan" placeholder=""></textarea>
								</div>
							
							<button type="submit" class="" style="font-size:15px;background-color:green;"> Gửi</button>
						</form>
						</div>
						<?php
						}
						else
						{
							echo "<p style=\"font-size:15px\">Vui lòng <a  href='login.php'>đăng nhập</a> để gửi bình luận!</p>";
						}
						if(isset($_POST['NoiDungBinhLuan'])){
								$NoiDungBinhLuan=$_POST['NoiDungBinhLuan'];
								$sql_them="INSERT INTO tbl_binhluan(MaBaiViet,MaNguoiDung,NoiDungBinhLuan,NgayDang) VALUES
								('$id','{$_SESSION['ID']}','$NoiDungBinhLuan',now())";
								if(mysqli_query($connect,$sql_them)){
									header('Location:baiviet_xem.php?id='.$id.'');
								}else{
									echo "Lỗi";
								}
							}
						?>
						
	    	    		<?php
							
							$sql_bl = "SELECT b.*, n.TenNguoiDung, n.TenDangNhap
							FROM tbl_binhluan b, tbl_nguoidung n
							WHERE  b.MaNguoiDung = n.ID AND b.MaBaiViet = $id ";
				 			$danhsach_bl = mysqli_query($connect, $sql_bl);
						?>
						<ul>
						<?php
						while ($dong_1 = mysqli_fetch_array($danhsach_bl))
						{
							echo'<li style="" >
								<div >
									<h5  style="font-size:12px;">'.$dong_1['TenNguoiDung'].'</h5>
									<p  style="font-size:12px;">'.$dong_1['NgayDang'].'</p>
									<p style="font-size:12px;">'.$dong_1['NoiDungBinhLuan'].'</p>
								</div>
							</li>';
						}
						?>
						</ul>
							
	    		    </div>
	    	        <div class="content-end-left">
	    	        	<div class="content-end-left__img">
	    	        		<img src="http://dev1.mypagevn.com/star1/wp-content/uploads/2018/07/guy-photoshopped-himself-oscars-best-picture-nominee-poster-gmadjar-2-58c01141d5914-700-1489128472541.jpg">
	    	        	</div>
	    	        	<div class="content-end-left__img">
	    	        		<img src="http://dev1.mypagevn.com/star1/wp-content/uploads/2018/07/guy-photoshopped-himself-oscars-best-picture-nominee-poster-gmadjar-2-58c01141d5914-700-1489128472541.jpg">
	    	        	</div>

	    	        </div>
	            </div>		
	        </div>
	    </div>
		<?php ob_end_flush();
			unset ($NoiDungBinhLuan); ?>
<!-----------------------------phần footer-------------->
	    <?php include "footer.php"; ?>
	</div>

<!---------------------------modal-------------------->
	
	</body>
	</html>  