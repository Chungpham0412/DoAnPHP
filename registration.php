<?php include "header.php";?>
<div class="container-login100" style="background-image: url('public/images/bg-01.jpg');  ">
	<div class="modal-dialog" >
		<div class="modal-body">
			<form method="POST" class="login100-form validate-form">

				<?php 
					$errors = [];
					if (isset($_POST['register'])) {
						$name= isset($_POST['name']) ? $_POST['name'] : '';
						if ($_POST['name'] == '') {
							$errors['Full name']='Hãy nhập họ và tên';
						}

						$email= isset($_POST['email']) ? $_POST['email'] : '';
						if ($_POST['email'] == '') {
							$errors['email']='Hãy nhập email';
						}

						$phone= isset($_POST['phone']) ? $_POST['phone'] : '';
						if ($_POST['phone'] == '') {
							$errors['phone']='Hãy nhập số diện thoại';
						}

						$password= isset($_POST['password']) ? $_POST['password'] : '';
						if ($_POST['password'] == '') {
							$errors['password']='Hãy nhập mật khẩu';
						}

						$repassword= isset($_POST['repassword']) ? $_POST['repassword'] : '';
						if ($_POST['repassword'] != $_POST['password']) {
							$errors['repassword']='Mật khẩu không khớp';
						}

						$address= isset($_POST['address']) ? $_POST['address'] : '';
						if ($_POST['address'] == '') {
							$errors['address']='Hãy nhập địa chỉ';
						}
						
						if (!$errors) {
							$passHash = password_hash("$password", PASSWORD_BCRYPT);

							$sql="INSERT INTO `account`(`name`,`email`,`phone`,`password`,`address`,`level`) VALUES('$name','$email','$phone','$passHash','$address',0)";
							if (mysqli_query($connection,$sql)) {
								header('location: index.php');
							}else{
								echo "Thaatj baij";
							}
						}
					}
				?>

			<span class="login100-form-title p-b-49">
				Đăng kí
			</span>

			<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
				<span class="label-input100">Tên người dùng</span>
				<input class="input100" type="text" name="name" placeholder="Type your username">
				<?php if (isset($errors['Full name'])) {?>
					<div class="help-block" style="color: red">
						<?php echo $errors['Full name'] ?>
					</div>
				<?php } ?>
				<span class="focus-input100" data-symbol="&#xf206;"></span>
			</div>

			<div class="wrap-input100 validate-input m-b-23" data-validate="Email is required">
				<span class="label-input100">Email</span>
				<input class="input100" type="text" name="email" placeholder="Type your Email">
				<?php if (isset($errors['email'])) {?>
					<div class="help-block" style="color: red">
						<?php echo $errors['email'] ?>
					</div>
				<?php } ?>
				<span class="focus-input100" data-symbol="&#xf190;"></span>
			</div>
			<div class="wrap-input100 validate-input m-b-23" data-validate="Phone is required">
				<span class="label-input100">Số điện thoại</span>
				<input class="input100" type="text" name="phone" placeholder="Type your phone">
				<?php if (isset($errors['phone'])) {?>
					<div class="help-block" style="color: red">
						<?php echo $errors['phone'] ?>
					</div>
				<?php } ?>
				<span class="focus-input100" data-symbol="&#xf190;"></span>
			</div>
			<div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
				<span class="label-input100">Mật khẩu</span>
				<input class="input100" type="password" name="password" placeholder="Type your password">
				<?php if (isset($errors['password'])) {?>
					<div class="help-block" style="color: red">
						<?php echo $errors['password'] ?>
					</div>
				<?php } ?>
				<span class="focus-input100" data-symbol="&#xf190;"></span>
			</div>
			<div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
				<span class="label-input100">Nhập lại mật khẩu</span>
				<input class="input100" type="password" name="repassword" placeholder="Type your password">
				<?php if (isset($errors['repassword'])) {?>
					<div class="help-block" style="color: red">
						<?php echo $errors['repassword'] ?>
					</div>
				<?php } ?>
				<span class="focus-input100" data-symbol="&#xf190;"></span>
			</div>
			<div class="wrap-input100 validate-input m-b-23" data-validate="Address is required">
				<span class="label-input100">Địa chỉ</span>
				<input class="input100" type="text" name="address" placeholder="Type your Address">
				<?php if (isset($errors['address'])) {?>
					<div class="help-block" style="color: red">
						<?php echo $errors['address'] ?>
					</div>
				<?php } ?>
				<span class="focus-input100" data-symbol="&#xf190;"></span>
			</div>
			
			<div class="text-right p-t-8 p-b-31">
				<a href="#">
					Forgot password?
				</a>
			</div>
			
			<div class="container-login100-form-btn">
				<div class="wrap-login100-form-btn">
					<div class="login100-form-bgbtn"></div>
					<button class="login100-form-btn" type="submit" name="register">
						Login
					</button>
				</div>
			</div>

			<div class="txt1 text-center p-t-54 p-b-20">
				<span>
					Or Sign Up Using
				</span>
			</div>

			<div class="flex-c-m">
				<a href="#" class="login100-social-item bg1">
					<i class="fa fa-facebook"></i>
				</a>

				<a href="#" class="login100-social-item bg2">
					<i class="fa fa-twitter"></i>
				</a>

				<a href="#" class="login100-social-item bg3">
					<i class="fa fa-google"></i>
				</a>
			</div>

			<div class="flex-col-c p-t-155">
				<span class="txt1 p-b-17">
					Or Sign Up Using
				</span>

				<a href="login.php" class="txt2">
					Sign Up
				</a>
			</div>
		</form>
		</div>
	</div>
</div>