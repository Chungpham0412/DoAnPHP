 <?php 

	session_start();

	require 'config/connect.php';

	$id = isset($_GET['id']) ? $_GET['id'] : 0;
	$action = isset($_GET['action']) ? $_GET['action'] : 'add';
	$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : 1;
	$quantity = $quantity > 0 ? $quantity : 1;

	$qr = mysqli_query($connection, "SELECT * FROM product WHERE id = $id");

	$row= mysqli_fetch_assoc($qr);
	
	if ($row && $action == 'add') {
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
	if ($action == 'update') {
		if (isset($_SESSION['cart'][$id])) {
			$_SESSION['cart'][$id]['quantity'] = $quantity;
		}
	}
	if ($action == 'clear') {
		if (isset($_SESSION['cart'])) {
		unset($_SESSION['cart']);
		}
	}
	// print_r($_SESSION['cart']);
	header('location: cart.php');
?>