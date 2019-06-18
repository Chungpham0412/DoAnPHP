  <?php
  include "header_admin.php";
  $orders=mysqli_query($connection,"SELECT * FROM orders");
  if(isset($_POST["SubmitSearch"])){
    $search = $_POST["search"];
    $sqli_1 = mysqli_query($connection,"SELECT * FROM category WHERE name LIKE '%$search%'");
    if($sqli_1){
      $cats = $sqli_1;
    }else{
      echo "Thử lại ";
    }
  }
  ?>
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Quản lý đơn hàng</h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <form action="" method="POST" class="form-inline" role="form">
            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="Input field" name="search">
            </div>
            <button type="submit" class="btn btn-primary" name="SubmitSearch" ><i class="fa fa-search"></i></button>
            <a href="them_order.php" class="btn btn-success">Thêm mới</a>
          </form>
        </div>
        <div class="box-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($orders as $o) { ?>
              <tr>
                <td><?php echo $o['id'] ?></td>
                <td><?php echo $o['account_id'] ?></td>
                <td><?php echo $o['name'] ?></td>
                <td><?php echo $o['email'] ?></td>
                <td><?php echo $o['phone'] ?></td>
                <td><?php if($o['status']==1): ?>
                    <span>Hiển thị</span>
                    <?php else: ?>
                      <span>Ẩn</span>
                    <?php endif; ?>
                </td>
                <td><?php echo $o['created'] ?></td>
                <td>
                  <a href="" class="btn btn-xs btn-success">Sửa</a>
                  <a href="" class="btn btn-xs btn-info">Xóa</a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include"footer.php" ?>