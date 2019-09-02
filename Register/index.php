<?php
session_start();

if(isset($_SESSION['username'])){
    $_SESSION['msg'] = "you must log in first to view this page";

    header("location:login.php");
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>HOME PAGE</title>
</head>
<body>
<h1>This is  home page</h1>
<?php
if(isset($_SESSION['succes'])) : ?>

<div>
<h3>
<?php
echo"$_SESSION['success']";
unset($_SESSION['success']);
?>
</h3>
</div>
<?php endif ?>

// if user login in print form about time

<?php if(isset($_SESSION['username'])): ?>

<h3> welcome <strong><?php echo $_SESSION['userame']?></strong></h3>

<button><a href="index.php?logout='1'"></a></button>

<?php endif ?>

</body>
</html>

?>