  <?php
  include "header_admin.php";

 $banner=mysqli_query($connection,"SELECT * FROM banner")
 
  ?>
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Quản lý Banner</h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <form action="" method="POST" class="form-inline" role="form" >
            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="Input field" name="search">
            </div>
            <button type="submit" class="btn btn-primary " name ="SubmitSearch"><i class="fa fa-search"></i></button>
            <a href="them_banner.php" class="btn btn-success">Thêm mới</a>
          </form>
        </div>
        <div class="box-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tên banner</th>
                <th>Hình ảnh</th>
                <th>Thứ tự sắp xếp</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($banner as $ban) { ?>
              <tr>
                <td><?php echo $ban['id'] ?></td>
                <td><?php echo $ban['name'] ?></td>
                <td><img src="../uploads/<?php echo $ban['image'] ?>"style="width:50px"></td>
                <td><?php echo $ban['ordering'] ?></td>
                <td><?php if($ban['status']==1): ?>
                    <span>Hiển thị</span>
                    <?php else: ?>
                      <span>Ẩn</span>
                    <?php endif; ?>
                </td>
                <td><?php echo $ban['created'] ?></td>
                <td>
                  <a href="" class="btn btn-xs btn-primary">Sửa</a>
                  <a href="" class="btn btn-xs btn-danger">Xóa</a>
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

<?php include "footer.php"?>