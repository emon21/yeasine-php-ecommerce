<?php 

require_once('connect.php');

if (isset($_POST['add_data'])) {

	$cat_list = $_POST['cat_list'];
	$pro_name = $_POST['pro_name'];
	$pro_desc = $_POST['pro_desc'];
	$pro_price = $_POST['pro_price'];

	// $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $pro_name)));
	// echo $slug;

	 // $slug= str_replace(' ','-', $pro_name); // replace spaces by dashes
	 // $slug= strtolower($slug);

	//img upload

	$filename = $_FILES["pro_img"]["name"];

    $tempname = $_FILES["pro_img"]["tmp_name"];  

     $folder = "products/".$filename;
     move_uploaded_file($tempname, $folder);


$ins = "INSERT INTO products(cat_id,product_name,product_desc,product_price,product_img)
 VALUES ('$cat_list','$pro_name','$pro_desc','$pro_price','$filename')";
 mysqli_query($links,$ins);


 echo '<script>alert("Product Successfully Inserted")</script>';
header('location:product_list.php');

}


 ?>