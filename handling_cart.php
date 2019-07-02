<?php 

	session_start();

	require 'config/connect.php';

	$id = isset($_GET['id']) ? $_GET['id'] : 0;

	$qr = mysqli_query($connection, "SELECT * FROM product WHERE id = $id");

	$row= mysqli_fetch_assoc($qr);
	
	if ($row) {
		if (isset($_SESSION['cart'][$id])) {
			$_SESSION['cart'][$id]['quantity'] += 1;
		}else{
			$_SESSION['cart'][$id]=[
				'id' => $row['id'],
				'name' => $row['name'],
				'image' => $row['image'],
				'price' => $row['sale_price'] ? $row['sale_price'] : $row['price'],
				'quantity' => 1
			];	
		}
	}
	// print_r($_SESSION['cart']);
	header('location: cart.php');
?>