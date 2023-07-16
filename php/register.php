<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../styles/register.css">
    <title>
        Belezza Clothing store
    </title>
   
</head>
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="header1">
    <a class="cart-icn" href="../html/cart.html" ><i class="fa fa-shopping-bag fa-lg" aria-hidden="true"> Cart <span>0</span></i></a>
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
    

<!--form-->
<div class="header">
  
        <div class="col">
           <form action="register.php" class="form" method="post">
           <?php include('errors.php') ?>
    
	<center><h1>Sign up</h1></center>
	
	<p>Create your account.It's free and only takes a minute.</p>

		
		<label for="username"><b>Username</b></label>
		<input type="text" placeholder="Enter Username" name="username" required>
		
		<label for="email"><b>Email</b></label>
		<input type="text" placeholder="Enter Email" name="email" required>

        <label for="phone"><b>Phone no</b></label>
		<input type="text" placeholder="Enter Phone number" name="phone" required>
		
		<label for="password"><b>Enter Password</b></label>
		<input type="password" placeholder="Enter Password" name="password_1" required>
		
		<label for="password"><b>Confirm Password</b></label>
		<input type="password" placeholder="Enter Password" name="password_2" required>
		
        <br>
        <br>
        
		<button type="submit" class="btn" name="reg_user" value="reg_user">Register</button>
			
		 </form>
		
  </div>

       
 <!--image-->
 <div class="row">
      
		<div class="img">
            <img src="../images/boy5.jpg" >
        </div>
   
</div>
</div>

  
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
            <a href="../cart.html">Cart</a>
           
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
