<?php 

require_once('connect.php');

if (isset($_POST['add_data'])) {

	$cat_name = $_POST['catagory_name'];

	//img upload

	$filename = $_FILES["pro_img"]["name"];

    $tempname = $_FILES["pro_img"]["tmp_name"];  

     $folder = "category/".$filename;
     move_uploaded_file($tempname, $folder);

 mysqli_query($links,"INSERT INTO catagory(catagory_name,catagory_img)
 VALUES ('$cat_name','$filename')");

 echo '<script>alert("Added Category")</script>';
header('location:category_list.php');

}


 ?>