  <?php
  include "header_admin.php";
   // $img_else = mysqli_query($connection,"SELECT * FROM product JOIN product_image ON product.id = product_image.product_id");
   $id = $_GET['id'];
   $sql = mysqli_query($connection,"SELECT * FROM product WHERE id=$id");
   $pro = mysqli_fetch_assoc($sql);
   $img_else = mysqli_query($connection,"SELECT * FROM product_image WHERE product_id = $id");

  ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Chi tiết sản phẩm</h1>
      <a href="DS_Product.php">Quay trở lại</a>
    </section>
    <!-- Main content -->
    <section class="content">
    <div class="box-body container">
      <div class="row">
        <div class="col-md-5">
            <img src="../uploads/<?php echo $pro['image']?>" class="img-responsive" alt="Image" style="width: 100%">
                <?php foreach ( $img_else as $im) : ?>
            <div class="col-md-4">
              <div class="thumbnail">
                   <img src="../uploads/<?php echo $im['image'] ?>" alt="" >
               
              </div>
            </div>
                <?php endforeach; ?>
        </div>
        <div class="col-md-7">
            <h1 class="text-center"><b><?php echo $pro['name'] ?></b></h1>
            <div>
              <h3 class="pull-left">Giá: <?php echo $pro['price']." "."VNĐ" ?></h3>
              <h3 class="pull-right">Giá sale: <?php echo $pro['sale_price']." "."VNĐ" ?></h3>
            </div>
            <div class="clearfix"></div>
            <div>
              <h4>Mô tả sản phẩm</h4>
              <?php echo $pro['content'] ?>
            </div>
            <div class="row">
              <div class="col-md-6">
                <h4>Kích thước</h4>
              </div>
              <div class="col-md-6">
                <h4>Màu sắc</h4>
              </div>
            </div>
            <div>
              <h4>Trạng thái</h4>

            </div>
        </div>
      </div>
  </div>
    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php 
include "footer.php"; 
?>