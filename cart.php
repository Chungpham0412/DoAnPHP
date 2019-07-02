<?php include "header.php"; 
	$carts= $_SESSION['cart'] ? $_SESSION['cart'] : 0;
?>
<br>
<div class="container">
	<div class="panel panel-danger">
		<div class="panel-heading">
			<h3 class="panel-title">Giỏ hàng</h3>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>STT</th>
						<th>Tên sản phẩm</th>
						<th>Hành ảnh</th>
						<th>Giá</th>
						<th>Số lượng</th>
						<th>Thành tiền</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php $n=1; if($carts) : foreach ($carts as $c ) :?>
					<tr>
						<td><?php echo $n ?></td>
						<td><?php echo $c['name'] ?></td>
						<td>
							<img src="uploads/<?php echo $c['image']?>" width="50px">
						</td>
						<td><?php echo $c['price'] ?></td>
						<td><?php echo $c['quantity']?></td>
						<td><?php echo $c['price']*$c['quantity'] ?></td>
						<td>
							<a href="delete_cart.php?id=<?php echo $c['id'] ?>" class="btn btn-xs btn-success">Xóa</a>
						</td>
					</tr>
				<?php $n++; endforeach; endif;?>
				</tbody>
				<tr>
					<td>Tổng cộng</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>1 củ</td>
					<td></td>
				</tr>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10">
			
			<a type="button" href="index.php" class="btn btn-primary">Tiếp tục mua hàng</a>
		</div>
		<div class="col-md-2">
			<a type="button" class="btn btn-primary">Thanh toán</a>
		</div>
	</div>
</div>