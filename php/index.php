<?php

session_start();

if (isset($_SESSION['login_user'])){

    $_SESSION['msg'] = "You must log in to view this page";
    header("location: login.php");
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");

} 

?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        function show_alert ()
        {
            alert ("Are You Sure ?");
        }
    </script>

    <link rel="stylesheet" href="../styles/index.css">
    <title>Logged in</title>
 
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
        <input class="search" type="text" placeholder="search items!!"> 
    </nav>
         <!----end of navigation bar---->

   

    
    <?php if(isset($_SESSION['success'])) : ?>

    <div>
        <h1>
            <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);

                ?>
            </h1>
    </div>
    <?php endif ?>


    <?php if(isset($_SESSION['username'])) : ?>

        <center><h3><strong>Welcome <?php echo $_SESSION['username']; ?>! <br> Thanks for joining with us.</strong></h3></center>

        <a href="login.php" ><input class="logout" type="submit" name="logout" id="logout" value="Logout" onclick="show_alert ()"></a>

        <a href="../html/shop.html"><input class="ch-btn" type="submit" name="continue shopping" value="continue shopping"></a>
        

<?php endif ?>


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
            <img src="../images/playstore.png" >
            <img src="../images/appstore.png" >
        </div>
    </div>
    </div>
    <hr class="footer-hr">
    <p class="copyright">copyright 2022</p>
</div>
   
<script src="../js/cart.js"></script>
</body>
</html>