<?php 
  $connection = mysqli_connect('localhost','root','','qlbh');

  //Lấy giá reij theo id
  $id=$_GET['id'];

  // thực hiện xóa
  $sql = mysqli_query($connection,"DELETE FROM category WHERE id=$id");

  //Chuyển hướng
  if($sql){
  	 header('location:DS_category.php');

  	}else{
  		echo "fail r nhe";
  	}
 
?>