<?php
//get values from login.php

$username = $_POST['user'];
$password = $_POST['pass'];

// to prevent from mysql inection
$username = stripcslashes($username);
$password = stripcslashes($username);
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);

// connect to databse and server

$conn = mysqli_connect("localhost","root","","login");
//mysql_select_db("login");

//query for datbase

//$result = mysqli_query("select * from user where username='$username' and password='$password'") or die("unable to query".mysqli_error());
$result = mysqli_query($conn,"SELECT * FROM `user` WHERE 1");
$row = mysqli_fetch_array($result);

if($row['username']==$username && $row['password']==$password)
{
    echo "login successfully".$row['username'];
}
else
{
echo "failed to connect";
}
?>