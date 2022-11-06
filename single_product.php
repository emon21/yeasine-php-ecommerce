
<?php 

session_start();

// if ($_SESSION['user_id']==true) {

    
    
// }
// else
// {

//     header("location: employee_login.php");

// }
//$userid = $_SESSION['fac_id'];

//require_once('db_connect/conn.php');
 ?>

 <style>
    .sg-product .category-box #accordion .card:hover {
    border: none;
    margin-bottom: 8px;
    background: #495057;
}

     .sg-product .category-box #accordion .card .card-header a span {
    color: #f00d0d;
    font-weight: 600;
    font-size: 16px;
    transition: all .5s;
    /* background: #495057;*/
}
.sg-product .category-box #accordion .card .card-header a:hover span {
    color: #fff;
    padding-left: 10px;

    
}


    
    .sim-img img
    {
        width: 250px;
        height: 160px;
    }

 </style>
    <body>
        <!-- Preloader -->
        <div class="preloader">
            <div class="load-list">
                <div class="load"></div>
                <div class="load load2"></div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Top Bar -->

    <!-- End Top Bar -->

        <!-- Logo Area 2 -->
     
        <!-- End Logo Area 2 -->

        <!-- Cart Body -->
        
      
        <div class="cart-overlay"></div>
        <!-- End Cart Body -->

        <!-- Sticky Menu -->
        
       
        <!-- End Sticky Menu -->

        <!-- Menu Area 2 -->
     
      
        <!-- End Menu Area 2 -->

        <!-- Mobile Menu -->
     
        <!-- End Mobile Menu -->

        <!-- Log In -->
        <!--section class="login">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="r-customer">
                           
                            <a href="product.php" class="btn btn-outline-info">All Product</a><br/>
                        Wel Come To : <?php echo $_SESSION['fname']; ?>
                        <?php 

                        if ($_SESSION['user_type']=='employee') {
                            echo "employee";
                        }
                        else{
                             echo "customer";
                        }
                         ?>
                           
                            <a href="logout.php" class="btn btn-outline-danger float-right">Logout</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section-->
        <!-- End Log In -->

         <!-- Breadcrumb Area -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-box text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="all_product.php">Home</a></li>
                                <li class="list-inline-item"><span>||</span> Single Product</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->

        <!-- Single Product Area -->
        <section class="sg-product">
            <div class="container">
                <div class="row">
                    <?php 
                 include('admin/connect.php');
                if (isset($_GET['pro_id'])) {
                   $pro_id = $_GET['pro_id'];
                $sel = "SELECT product_list.id,product_list.cat_id,category.category_name,product_list.product_name,product_list.product_img,product_list.product_price FROM category,product_list WHERE category.id=product_list.cat_id and product_list.id='$pro_id'";
                $run  = mysqli_query($links,$sel);
                while ($row = mysqli_fetch_assoc($run)) {
              $pro_id = $row['cat_id'];
                    
                 ?>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="sg-img">
                                    <!-- Tab panes -->
                                    <div class="tab-content">

                                        <div class="tab-pane fade show active" id="sg1" role="tabpanel">
                                            <img src="admin/product_img/<?php echo $row['product_img'];?>" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                  
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="sg-content">
                                    
                                    <div class="pro-tag">
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><a href="#"><?php echo $row['category_name'];?> ></a></li>
                                            <li class="list-inline-item"><a href="#"> <?php echo $row['product_name'];?></a></li>
                                        </ul>
                                    </div>
                                   
                                     <div class="pro-name">
                                         <p>Product Name <?php echo $row['product_name'];?></p>
                                     </div>
                                      
                                     
                                     <div class="pro-price">
                                        
                                             <p class="list-inline"><?php echo $row['product_price'];?> /-tk</p>
                                            
                                        
                                         
                                     </div>
                                     <div class="colo-siz">
                                                 
                                         <div class="pro-btns">
                                            <?php 
                                          error_reporting(0);  
                    if ($_SESSION['user_type']=='employee') { ?>
                        
                        <!-- <a href="offline_payment.php">Payment</a> -->
                         <a href="product_details.php?pro_id=<?php echo $row['id']; ?>" class="cart"> Employee Order Product</a>

                    <?php }

 else if($_SESSION['user_type']=='customer'){ ?>
            <a href="customer_product_details.php?pro_id=<?php echo $row['id']; ?>" class="cart">Customer Order Product</a>
       <?php }
                     else{ ?>
<a href="employee_login.php" class="btn btn-info">login</a>
                        <!-- <li><a href="employee_login.php">login</a></li> -->
                        
                    <?php } ?>

                                             
                                            
                                         </div>
                                     </div>

                                </div>
                            </div>
                          <?php } } ?> 
                            <div class="col-md-12">
                                <div class="sim-pro">
                                    <div class="sec-title">
                                        <h5>Similar Product</h5>
                                    </div>
                                    <div class="sim-slider owl-carousel">
                                         <?php 
                 include('admin/conn.php');
                
                
                
               $sel = "SELECT * FROM product_list WHERE cat_id='$pro_id'";
                $run  = mysqli_query($conn,$sel);
              

                while ($row = mysqli_fetch_array($run)) {
              
                    $id=$row['cat_id'];
                           
                 ?>
                                        <div class="sim-item">

                                            <div class="sim-img">
                                                <img class="main-img img-fluid" src="admin/product_img/<?php echo $row['product_img'];?>" height="150" alt="">
                                                
                                               
                                            </div>
                                            <div class="sim-heading">
                                                <p><a href="#"><?php echo $row['product_name'];?></a></p>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    
                                                    
                                                        <p class="list-inline"><?php echo $row['product_price'];?> /- tk</p>
                                                        
                                                   
                                                </div>
                                                <div>
                                                   
                                                    <a href="single_product.php?pro_id=<?php echo $row['id']; ?>" data-toggle="tooltip" data-placement="top"><img src="images/it-cart.png" alt=""></a>
                                                </div>
                                            </div>
 
                                        </div>
<?php }  ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-box">
                            <div class="sec-title">
                                <h6>All Categories</h6>
                            </div>
                            <!-- accordion -->
                            <div id="accordion">
<?php 
                                  require_once('./admin/conn.php');
                                  

                                  $sel_qry = mysqli_query($conn,"select * from category");
                                  while ($run = mysqli_fetch_assoc($sel_qry)) {
                                    $id = $run['id'];

                                $result=mysqli_query($conn,"SELECT * FROM category where id='$id'");

                                    $cont=mysqli_num_rows($result);
                                    

                             ?>
                                <div class="card">
                                    <div class="card-header">
                                        <a href="all_product.php?pro_id=<?php echo $run['id']?>">
                                            <span><?php echo $run['category_name'];?></span>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                    
                                </div>
<?php } ?>
                                
                            </div>
                        </div>

                        <div class="ht-offer">
                            <div class="sec-title">
                                <h6>New Product</h6>
                            </div>

                            <div class="ht-body owl-carousel">
                                <?php 
             include('admin/conn.php');

             
              //  $show="SELECT * FROM product_list where cat_id='$id'";
              $show="SELECT * FROM product_list";

                        $ser_result=mysqli_query($conn,$show); 
                        $r = mysqli_num_rows($ser_result);
                        
                        if($r ==0)
                        {
                            echo "<h2 style='color:red;font-size:22px;text-align:center'>Product Not Found...</h2>";
                        }

               

               while($row=mysqli_fetch_array($ser_result)){

                        ?>
                                <div class="ht-item" style="border: 2px solid blue;padding: 5px;">
                                    <div class="ht-img">
                                        <a href="#"><img src="admin/product_img/<?php echo $row['product_img'];?>" alt="" class="img-fluid"></a>
                                        <span>- 59%</span>
                                        <ul class="list-unstyled list-inline counter-box">
                                            <li class="list-inline-item">185 <p>Days</p></li>
                                            <li class="list-inline-item">11 <p>Hrs</p></li>
                                            <li class="list-inline-item">39 <p>Mins</p></li>
                                            <li class="list-inline-item">51 <p>Sec</p></li>
                                        </ul>
                                    </div>
                                    <div class="ht-content">
                                        <p class="text-center"><?php echo $row['product_name']; ?></p>
                                       <!--  <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                        <ul class="list-unstyled list-inline price">
                                            <p class="text-left"><?php echo $row['product_price']; ?> /- tk</p>
                                            <!-- <li class="list-inline-item">$150.00</li> -->
                                        </ul>
                                    </div>
                                </div>

                            <?php } ?>
                            </div>

                        </div>

                        <!-- <div class="add-box">
                            <a href="#"><img src="images/s-banner1.jpg" alt="" class="img-fluid"></a>
                        </div> -->


                    </div>
                </div>
            </div>
        </section>
        <!-- End Single Product Area -->
        

 <?php require_once('inc_file/footer.php') ; ?>

    </body>
</html>
