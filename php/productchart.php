<?php
	$connection = mysqli_connect('localhost','root','','iwt');
	
	if(mysqli_connect_error())
	{
		die('Database connection failed' . mysql_connect_error());
	}
	
?>	


<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="../styles/adminlogin.css">
    <title>
        Belezza Clothing store
    </title>
   
</head>
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="header1">
    <a class="cart-icn" href="../cart.html" ><i class="fa fa-shopping-bag fa-lg" aria-hidden="true"> Cart <span>0</span></i></a>
        <a class="signin-icn" href="login.php" ><i class="fa fa-sign-in" aria-hidden="true"> Sign in / Register</i></a>
        
    </div>
       <!----logo---->
       <div class="container">
        <img class="logo "src="../images/logo3.jpg" height="150px" width="300px" >
    </div>
            
        
        <!----navigation bar---->
    <nav>
    <a class="active" href="../html/home.html">Home</a>
        <a href="../html/shop.html">Shop</a>
        <a href="../html/about us.html">About</a>
        <a href="../html/contact.html">Contact us</a>
        <a href="#">Account</a>
    </nav>
        <!----end of navigation bar---->
    		
		
	<center>
<h2>Product Details</h2>
<br>

<div class="" style="boder-style: groove;boder-color: black">
	<table border="1" width = "100%">
	<tr>
		<th>ID</th>
		<th>Product Name</th>
		<th>Price</th>
		<th>Product Details</th>
		<th>Brand</th>
	</tr> 
	<?php
	$sql = "select * from adminaddproduct";
	$result = $connection ->query($sql);

	if($result->num_rows>0)
	{
		while($row = $result->fetch_assoc())
		{
			echo"<tr>";
			echo"<td>".$row["ID"]."</td><td>".$row["product_name"]."</td><td>".$row["price"]."</td><td>".$row["description"]."</td><td>".$row["brand"]."</td></td>";
			echo"<td><a href ='editproduct.php?id=".$row['ID']."'>edit</a> | <a href ='deleteproduct.php?id=".$row['ID']."'>Delete</a></td>";
			echo"</tr>";
		}	
	}
	
	echo "</table>";
   
	$connection ->close();
	
	?>
	<br>
		
	<br>
    <br>
    <br>	
    <br>
    <br>
    <br>
    <br>
	
<!------footer-->
 <div class="footer-container">
    <div class="footer">
        <div class="footer-heading footer-1">
            <h3>Usefull links</h3>
                <a href="#">Return policy</a>
                <a href="#">size guide</a>
                <a href="#">about</a>
             
        </div>
        <div class="footer-heading footer-2">
            <h3>Follow us on</h3>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
            <a href="#">Whatsapp</a>
        </div>
        <div class="footer-heading footer-3">
            <h3>Quick Links</h3>
            <a href="#">Account</a>
            <a href="#">Cart</a>
           
        </div>
       
        <div class="footer-heading footer-4">
            <img src="../images/logo3.jpg" width="250px" height="120px">
                    <p>Sri Lanka's Largest Online Shopping Store.</p>
      </div>
      <div class="footer-heading footer-5">
        
		<h3>Download our App</h3>
        <p>Download app for android and ios mobile phone.</p>
        
		<div class="app-logo">
            <img src="../images/playstore.png">
            <img src="../images/appstore.png">
        
		</div>
      </div>
    </div>
    <hr>
    <p class="copyright">copyright 2022</p>
</div>

<script src="../js/cart.js"></script>
</body>
</html>