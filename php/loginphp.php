<?php 
session_start();
$db = mysqli_connect('localhost','root','','iwt') or die("could not connect to database");

//login user

if(isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
   
    $password = md5($password); 
    
    $query = "SELECT * FROM user WHERE username='$username' AND password ='$password' ";
    $results = mysqli_query($db, $query);
            
    if(mysqli_num_rows($results)) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Logged in successfully";
        header('location: index.php');
    } else {
        array_push($errors, "Wrong username/password combination. Please try again");
    }
    

}