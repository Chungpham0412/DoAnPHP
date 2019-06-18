  <?php
  include "header_admin.php";
  $categoryy= mysqli_query($connection,"SELECT * FROM category where parent_id != 0 && status = 1");
  $pro_img = mysqli_query($connection,"SELECT * FROM product_image")
  ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Thêm mới ảnh sản phẩm</h1>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-body">
          <?php 
            // var_dump($_FILES);
         if (isset($_POST['name'])) {
            $name = $_POST['name'];
            $content = $_POST['content'];
            $category_id = $_POST['category_id'];
            $price = $_POST['price'];
            $sale_price = $_POST['sale_price'];
            $status = $_POST['status'];
            $image = '';

            if (!empty($_FILES['image']['name'])) {
            $f = $_FILES['image'];
            $f_name = time(). '-' .$f['name'];

            if (move_uploaded_file($f['tmp_name'], '../uploads/'.$f_name)) {
             $image = $f_name;
           }
         }
          $sql = "INSERT INTO `product` ( `name`, `image`, `content`, `category_id`, `price`, `sale_price`, `status`) VALUES ('$name', '$image', '$content', '$category_id', '$price', '$sale_price', '$status')"   ;
         if (mysqli_query($connection,$sql)) {
            header('location:DS_Product.php');
           // echo "<script type='text/javascript'>alert('Thành công');</script>";
          }else{
            echo "Lỗi Thêm mới";
          }
        }
        ?>
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="">Tên sản phẩm</label>
              <input type="text" name="name" value="<?php echo $pro_img['product_id']  ?>" class="form-control" placeholder="Tên sản phẩm.." >
            </div>
            <div class="form-group">
              <label for="">Ảnh sản phẩm</label>
              <input type="file" name="image" class="form-control">
            </div>
      
            <button type="submit" class="btn btn-primary" >Gửi</button>
          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php 
include "footer.php"; 
?>