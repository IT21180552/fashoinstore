<?php

	$connection = mysqli_connect('localhost','root','','iwt');
	
	if(mysqli_connect_error())
	{
		die('Database connection failed' . mysql_connect_error());
	}
	
	
	$product_name = $_POST['product_name'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$brand = $_POST['brand'];
	
	$query="INSERT INTO adminaddproduct (product_name,price,description,brand) VALUES('$product_name','$price','$description','$brand');";
	
	//$result = mysqli_query($connection,$query);

	 if(mysqli_query($connection,$query))
     {
         header ("location: admin.php?success");

         exit();
     }

?>