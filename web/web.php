<?php
$host="localhost";
$user="root";
$password="";
$db="login";

$conn = mysqli_connect("localhost","root","","login");
 
if(isset($_POST['user'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    //$sql="select * from login where user='".$uname."'AND Pass='".$password."' limit 1";
    //$sql = $conn,"SELECT * FROM `user` WHERE 1"
    $result=mysqli_query($conn,"SELECT * FROM `user` WHERE 1");
    $row = mysqli_fetch_array($result);
	//if(mysqli_num_rows($result)==1)
	if($row['username']==$username && $row['password']==$password){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
