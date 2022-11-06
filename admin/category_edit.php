<?php 
require_once('inc_file/header.php');

require_once('connect.php');


if (isset($_GET['cat_edit'])) {

   $product_edit =  $_GET['cat_edit'];

    $sql ="SELECT * FROM catagory WHERE id ='$product_edit'";

    $result = mysqli_query($links,$sql);
  //  $res = mysqli_num_rows($result);

    $getData = mysqli_fetch_assoc($result);
    //echo $getData['id'];
}
?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
 <?php 
require_once('inc_file/top-bar.php');
?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php 
require_once('inc_file/sidebar.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
           

            <div class="card card-primary card-outline">
              <div class="card-header ">
                <h5 class="m-0 float-left pt-2">Create Category</h5>
                <a href="category_list.php" class="float-right btn btn-outline-success">Category List</a>
              </div>
              <div class="card-body">
                <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="category_edit_process.php" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="category_edit" value="<?php echo $getData['id'] ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="catagory_name">Category Name</label>
                    <input type="text" class="form-control" id="catagory_name" name="catagory_name" placeholder="Enter Category Name..." value="<?php echo $getData['catagory_name'] ?>">
                  </div>


                  <div>
                    <div class="row">

                    <div class="form-group col-sm-8">
                      <label for="pro_img">Product Picture</label>
                      <input type="file" class="form-control" id="pro_img" name="pro_img">
                  </div>

                   <div class="form-group col-sm-4">
                    <label>Old Picture</label>
                    <img src="products/<?php echo $getData['product_img'] ?>" alt="" width="120" height="80">
                   
                  </div>

                    </div>
                  </div>
                 
               </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="update_data">Update Category</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

           

          </div>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>