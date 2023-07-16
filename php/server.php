<?php

session_start();

//initialising variables

$username = "";
$email = "";
$phone = "";
$errors = array();


//connect to db

$db = mysqli_connect('localhost','root','root','iwt') or die("could not connect to database");

//register user
if (isset($_POST['reg_user'])) {
//receiveing input values
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


//check db for existing user with same username

$user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user) {

    if($user['username'] === $username){
        array_push($errors, "Username already exists");
    }
    if($user['email'] === $email){
        array_push($errors, "Email already exists");
    }

}

//register the user if no error

if(count($errors) == 0 ) {

    $password = md5($password_1); //to encrypt pw
    $query = "INSERT INTO user (username, email, phoneno, password)
        VALUES('$username', '$email','$phone', '$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
}
}


?>
