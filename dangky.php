<?php include "ketnoi.php";


?>
<!DOCTYPE html>
<html lang="en">

<?php include "header.php"; ?>
<body>
<div class="dangnhap">

<?php include "menu.php";?>
		<div class="container-login">
			<div class="container-table">
				<div class="container-table__section">
					Đăng ký
				</div>
				<form action="dangky_xuly.php" method="post" class = "">
                    <div class="container-table__input">
						<input type="text" name="TenNguoiDung" placeholder="Nhập họ và tên" >
					</div>
					<div class="container-table__input">
						<input type="text" name="TenDangNhap" placeholder="Tên đăng nhập" >
					</div>
					<div class="container-table__input">
						<input type="password" name="MatKhau" placeholder="Mật khẩu" >
					</div>
                    <div class="container-table__input">
						<input type="password" name="XacNhanMatKhau" placeholder="Xác nhận lại mật khẩu" >
					</div>
					<div class="container-table__button">
						<button type="text">
							Đăng ký
						</button>
					</div>
					<div class="container-table__rememberpass">
						<a href="login.php">Bạn đã có tài khoản</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
<?php include "footer.php";?>
</html>