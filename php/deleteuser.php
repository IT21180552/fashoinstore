<?php
$connection = mysqli_connect('localhost','root','','iwt');
	
if(mysqli_connect_error())
{
    die('Database connection failed' . mysql_connect_error());
}

    $username=$_GET["username"];
	
	$query= "DELETE FROM user where username='$username'";


	 if(mysqli_query($connection,$query))
     {

         header ("location: userdetails.php?success");

         exit();
     }

?>