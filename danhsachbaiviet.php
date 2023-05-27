<!DOCTYPE html>
<html>
<?php include "header.php";
    include "ketnoi.php";
    $id = $_GET['id'];
    if(isset($_REQUEST['p'])){
        $p = (int)$_REQUEST['p'];
    }else{
        $p=1;
    }
    $start = ($p-1)*14;
    $sql_2="SELECT * FROM tbl_baiviet WHERE MaChuDe = ".$id." ORDER BY NgayDang DESC LIMIT $start,14";
	$danhsach2=mysqli_query($connect,$sql_2);
    $chude=mysqli_query($connect,"SELECT * FROM tbl_chude WHERE id =$id");
    $chude=mysqli_fetch_array($chude);

?>
<body>
	<div class="Vnexpress">
	    <?php include "heading.php";?>

	<!-------------------------------End Header------->

	    <?php include "menu.php";?>
	   <!-----------------------------hết menu main nav---------->
        <div class="container">
        	<div class="grid">     
	    		<div class="content-end">
                    
	    		    <div class="content-end-right">
                        
                        <h1><?=$chude['TenChuDe']?></h1>
					<?php 
							while($dong=mysqli_fetch_array($danhsach2)){
								echo '<div class="content-end__list">
								<div class="content-end__img">
									<a href="baiviet_xem.php?id='.$dong["ID"].'"><img src="'.$dong['MinhHoa'].'"></a>
								</div>
								<div class="content-end__item">
									<a href="baiviet_xem.php?id='.$dong["ID"].'"><h3>
									'.$dong['TieuDe'].'
									</h3></a>
									<p> '.$dong['TomTat'].'</p>
								</div>
							</div>';
									
							}
						?>
                        <div class="phantrang">
							<?php
								$sql = "SELECT * FROM tbl_baiviet WHERE MaChuDe = $id";
								$total=mysqli_num_rows(mysqli_query($connect,$sql));
								$totalPage = ceil($total/14);
								for($i=1;$i<=$totalPage;$i++){	
									if(($i!=$p)) echo "<font size=5><div class='phantrang-item'><a href='danhsachbaiviet.php?id=$id&p=$i'>$i</a></div></font>";
									else echo "<font size = 5><div class='phantrang-item'>$i</div></font>";
								}
							 ?>
                        </div>
                        <style>
                            .phantrang{
                                display:flex;
                                margin:0 50%;
                            }
                            .phantrang-item{
                                padding: 5px;
                            }
                            .phantrang-item a{
                                text-decoration:none;
                            }
                        </style>    		
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

<!-----------------------------phần footer-------------->
	    <?php include "footer.php"; ?>
	</div>

<!---------------------------modal-------------------->
	<div class="modal">
		<div class="modal__overlay"></div>
		<div class="modal__body">
			
			<!-- đăng ký -->
			    
			<!-- đăng nhập -->
				
			
			
		</div>
	</div>
	<script type="text/javascript">

		var login = document.querySelector('.dangnhap');

		var modal = document.querySelector('.modal');

		var modalOverlay = document.querySelector('.modal__overlay');

		var fromLogin = document.querySelector('.auth-form-login ');

		var clickRegister = document.querySelector('.auth-form__switch-btn-item');

		var register = document.querySelector('.auth-form');

		var back = document.querySelector('.btn-back');

		var btnOutFrom = document.querySelector('.btn-out')

		var loginOut = document.querySelector('.auth-form__switch-btn');


		login.addEventListener('click', function () {
			modal.style.display = 'flex';
			modalOverlay.style.display = 'block';
			fromLogin.style.display = 'block';
		})

		clickRegister.addEventListener('click', function() {
			register.style.display = 'block';
			fromLogin.style.display = 'none';
		})

		back.addEventListener('click', function() {
			register.style.display = 'none';
			fromLogin.style.display = 'block';
		})

		btnOutFrom.addEventListener('click', function() {
			modal.style.display = 'none';
			modalOverlay.style.display = 'none';
			fromLogin.style.display = 'none';
		})

		loginOut.addEventListener('click', function() {
			register.style.display = 'none';
			fromLogin.style.display = 'block';
		})

		modalOverlay.addEventListener('click', function() {
			modal.style.display = 'none'
		})

	</script>
	</body>
	</html>  