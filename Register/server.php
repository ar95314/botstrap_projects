<?php

session_start();

//initializing varibles

$username = "";
$email = "";

$error = array();

//connect to database

$db = mysqli_connect("localhost","root","","practice") or die("could not connect to database");

//Register a user

$username = mysqli_real_escape_string($db,$_POST["username"]);
$email = mysqli_real_escape_string($db,$_POST["email"]);
$password_1 = mysqli_real_escape_string($db,$_POST["password_1"]);
$password_2 = mysqli_real_escape_string($db,$_POST["password_2"]);

//form validation

if(empty($useraname)){array_push($error,"username","username is required")};
if(empty($email)){array_push($error,"email","email is already exits")};
if(empty($password_1)){array_push($error,"password_1","password_1 is already exits")};
if(empty($password_1)){array_push($error,"password_2","password_2 is already exits")};

//check database for exiting user

$user_check_query = "SELECT * FROM user username='$username' or email='$email' LIMIT 1";

$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user){
    if($user['username'] === $username){array_push($error,"username already exits");}
    if($user['email'] === $email){array_push($error,"email already exits");}
}

//register the user if no error

if(count($error) == 0){
    $password = md5($password_1); //this will encrypt password
    $query = "INSERT INTO user (username,email,password) VALUES ('$username','$email','$password')";

    mysqli_query($db,$query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "your are now looged in";

    header('location: index.php');
}


















?>