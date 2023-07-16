<?php
$connection = mysqli_connect('localhost','root','','iwt');
	
if(mysqli_connect_error())
{
    die('Database connection failed' . mysql_connect_error());
}

    $ID=$_GET['id'];
	
	$query= "DELETE FROM adminaddproduct where ID='$ID'";


	 if(mysqli_query($connection,$query))
     {

         header ("location: productchart.php?sucess");

         exit();
     }

?>