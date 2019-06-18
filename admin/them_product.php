  <?php
  include "header_admin.php";
  $categoryy= mysqli_query($connection,"SELECT * FROM category where parent_id != 0 && status = 1");
  ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Thêm mới sản phẩm</h1>
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
            <input type="text" name="name" class="form-control" placeholder="Tên sản phẩm.." >
          </div>
          <div class="form-group">
            <label for="">Ảnh sản phẩm</label>
            <input type="file" name="image" class="form-control">
          </div>
       <!--  <div class="form-group">
          <label for="">Ảnh sản phẩm</label>
          <input type="file" name="image_else[]" class="form-control" multiple>
        </div> -->
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Danh mục</label>
              <select name="category_id" class="form-control" required="required">
                <option value="">Chọn danh mục</option>
                <?php foreach ($categoryy as $c) : ?>
                  <option value="<?php echo $c['id']  ?>"><?php echo $c['name'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Giá</label>
              <input type="text" name="price" class="form-control" id="" placeholder="Giá sản phẩm..">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Giá khuyến mãi</label>
              <input type="text" name="sale_price" class="form-control" id="" placeholder="Giá khuyến mãi..">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="">Mô tả</label>
          <textarea name="content" id="input" class="form-control" rows="3" placeholder="Mô tả sản phẩm"></textarea>
        </div>
        <div class="form-group">
          <label for="">Trạng thái</label>
          <div class="radio">
            <label>
              <input type="radio" name="status" id="input" value="1" checked="checked">Hiện
            </label> 
            <label>
              <input type="radio" name="status" id="input" value="0" checked="checked">Ẩn
            </label>
          </div>
        </div>
        <div class="form-group">

          <button type="submit" class="btn btn-primary" >Gửi</button>
        </div>
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