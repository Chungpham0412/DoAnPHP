<?php include "header.php"; 
	$carts= isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>
<br>
<div class="container">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Tiến hành đặt hàng</h3>
		</div>
		<div class="panel-body">
			<?php if (isset($_SESSION['login'])) :
				$od=$_SESSION['login'];
				if (isset($_POST['btn-orders'])) {
					//1 Lưu vào bảng orders để lấy account_id
					$account_id=$od['id'];
					$name=$od['name'];
					$email=$od['email'];
					$phone=$od['phone'];
					$address=$od['address'];
					$qrod=mysqli_query($connection,"INSERT INTO orders(account_id,name,email,phone,address) VALUES ($account_id,'$name','$email',$phone,'$address')");
					if ($qrod) {
						$orders_id = mysqli_insert_id($connection);
					//2 Duyệt giỏ hàng và lưu thông tin tên sản phẩm trong giỏ hàng vào bẳng order_detail
						$a = "";
						foreach ($carts as $c) {
							$product_id = $c['id'];
							$quantity= $c['quantity'];
							$price = $c['tatolPrice'];
							$color = $c['colorBuy'];
							$size = $c['sizeBuy'];
							$a = mysqli_query($connection,"INSERT INTO `order_detail` (`order_id`, `product_id`, `quantity`, `price`, `color`, `size`) VALUES ('$orders_id', '$product_id', '$quantity', '$price', '$color', '$size')");
						}
							if($a){
								echo "Chúc mừng bạn đã bị lừa";

							}else{
								echo "Đặt hàng không thành công. Xin vui lòng thử lại!";
							}

						//Sẽ thực hiện gửi mail
						//Chuyển hướng về trang cảm ơn ♥

						// header('location: index.php');
						unset($_SESSION['cart']);
					}
				}
			?>
			<?php if (tong_so_luong()>0) :?>
				<!-- đặt hàng -->
				<form action="" method="POST" role="form">

					<div class="form-group">
						<label for="">Tên người đặt</label>
						<input type="text" class="form-control" name="name" value="<?php echo $od['name']?>" placeholder="Input field">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" class="form-control" name="email" value="<?php echo $od['email']?>" placeholder="Input field">
					</div>
					<div class="form-group">
						<label for="">Số điện thoại</label>
						<input type="text" class="form-control" name="phone" value="<?php echo $od['phone']?>" placeholder="Input field">
					</div>
					<div class="form-group">
						<label for="">Địa chỉ</label>
						<input type="text" class="form-control" name="address" value="<?php echo $od['address']?>" placeholder="Input field">
					</div>
					<div class="row">
						<div class="col-md-10"></div>
						<div class="col-md-2">
							<button type="submit" name="btn-orders" class="btn btn-primary">Đặt hàng ngay</button>
						</div>
					</div>
				</form>
					<?php else : ?>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Lỗi</strong> Bạn chưa có sản phẩm trong giỏ hàng
						</div>
						<div class="row">
						<div class="col-md-10"></div>
						<div class="col-md-2">
							<a type="button" href="index.php"  class="btn btn-primary">Tiếp tục mua hàng</a>
						</div>
					</div>
					<?php endif; ?>
			<?php else : ?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Lỗi</strong> Bạn chưa đăng nhập!
				</div>
				<a type="button" href="login.php"  class="btn btn-lg btn-success">Đăng nhập ngay</a>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php include "footer_cart.php" ?>
