  <?php
  include "header_admin.php";
  $categoryy= mysqli_query($connection,"SELECT * FROM category where parent_id != 0 && status = 1");
  $size = mysqli_query($connection,"SELECT * FROM attribute WHERE type= 'size' ");
  $color = mysqli_query($connection,"SELECT * FROM attribute WHERE type= 'color' ");
#  $img_elses = mysqli_query($connection,"SELECT * FROM product_image WHERE product_id = $id");

  ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Sửa sản phẩm</h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-body">
          <?php 
          //lấy id
          $id = isset($_GET['id']) ? $_GET['id'] : 0;
          $query= mysqli_query($connection,"SELECT * FROM product WHERE id = $id");
          $pro = mysqli_fetch_assoc($query);

          if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $content = $_POST['content'];
            $category_id = $_POST['category_id'];
            $price = $_POST['price'];
            $sale_price = $_POST['sale_price'];
            $status = $_POST['status'];
            $image = '';
            $size = $_POST['size'];
            $color = $_POST['color'];

            //sửa tên ảnh
            if (!empty($_FILES['image']['name'])) {
              $f = $_FILES['image'];
              $f_name = time(). '-' .$f['name'];

              if (move_uploaded_file($f['tmp_name'], '../uploads/'.$f_name)) {
               $image = $f_name;
             }
           }
           //Thêm dữ liệu
           $sql = "UPDATE `product` SET `name`= '$name', `image`=$image, `content`='$content', `category_id`=$category_id, `price`=$price, `sale_price`=$sale_price, `status`=$status WHERE id=$id"   ;

           if (mysqli_query($connection,$sql)) {
            //lấy id
            $product_id = mysqli_insert_id($connection);
            if (count($size)>0) {
              foreach ($size as $ss) {
                mysqli_query($connection, "UPDATE product_attribute SET ss=$ss ");
              }
            }

            if (count($color)>0) {
              foreach ($color as $cl) {
                mysqli_query($connection, "UPDATE product_attribute SET cl=$cl ");
              }
            }

            header('location:DS_Product.php');


          }else{
            echo "Lỗi cập nhập!";
          }
        }
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="name" class="form-control" placeholder="Tên sản phẩm.." value="<?php echo $pro['name'] ?>" >
          </div>
          <div class="row">
            <div class="col-md-6">
             <div class="form-group">
              <label for="">Ảnh sản phẩm</label>
              <input type="file" name="image" id="add_img" class="form-control">
              <img src="../uploads/<?php echo $pro['image']?>" alt="" style="width: 100px" id="show_img">
            </div>
          </div>
          <div class="col-md-6">
           <div class="form-group">
            <label for="">Ảnh khác</label>
            <input type="file" name="image_else[]" id="add_img_else" class="form-control" multiple>
            <div id="show_img_else">
              <?php foreach($img_elses as $img) { ?>
                <div class="col-md-3">
                  <a href="" class="thumbnail">
                    <img src="../uploads/<?php echo $img['image'] ?>" alt="">
                  </a>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="">Danh mục</label>
            <select name="category_id" class="form-control" required="required">
              <option value="">Chọn danh mục</option>
              <?php foreach ($categoryy as $c) { 
                $selected=$c['id']==$pro['category_id'] ? 'selected' : '';
                ?>

                <option <?php echo $selected ?> value="<?php echo $c['id']  ?>"><?php echo $c['name'] ?></option>

              <?php } ?>
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="">Giá</label>
            <input type="text" name="price" class="form-control" id="" placeholder="Giá sản phẩm.." value="<?php echo $pro['price'] ?>">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="">Giá khuyến mãi</label>
            <input type="text" name="sale_price" class="form-control" id="" placeholder="Giá khuyến mãi.." value="<?php echo $pro['sale_price'] ?>">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="">Kích thước</label>
            <?php foreach ($size as $s ) { 
              $checkbox=$s['atrribute_id']==$pro['id'] ? 'checked' : '';
              ?>
              <div class="checkbox">
                <label>
                  <input <?php echo $checkbox ?> type="checkbox" name="size[]" value="<?php echo $s['id'] ?>">
                  <?php echo $s['name'] ?>
                </label>
              </div>
            <?php } ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="">Màu sắc</label>
            <?php foreach ($color as $c) {?>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="color[]" value="<?php echo $c['id'] ?>">
                  <?php echo $c['name'] ?>
                </label>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="">Mô tả</label>
        <textarea name="content" id="content" class="form-control" placeholder="Mô tả sản phẩm" ><?php echo $pro['content'] ?></textarea>
      </div>
      <div class="form-group">
        <label for="">Trạng thái</label>
        <div class="radio">
          <label>
            <input type="radio" name="status" id="input" value="1" <?php if($pro['status']==1) echo "checked" ?>>Hiện
          </label> 
          <label>
            <input type="radio" name="status" id="input" value="0" <?php if($pro['status']==0) echo "checked" ?>>Ẩn
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Gửi</button>

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