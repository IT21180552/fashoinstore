<?php

$connection = mysqli_connect('localhost','root','','iwt');
	
if(mysqli_connect_error())
{
    die('Database connection failed' . mysql_connect_error());
}

    $ID=$_POST['ID'];
    $product_name = $_POST['product_name'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$brand = $_POST['brand'];
	
	$query="UPDATE  adminaddproduct SET product_name='$product_name', price='$price', description='$description', brand='$brand' where ID='$ID' ";
	
	//$result = mysqli_query($connection,$query);

	 if(mysqli_query($connection,$query))
     {
        header ("location: productchart.php?sucess");


         exit();
     }

