
<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN PAGE</title>
</head>
<body>
<div class="container">
<div class="header">
<h2>LOGIN</h2>
</div>
<form action="login.php" method="POST">

<div>
<label for="username">USERNAME</label>
<input type="text" name="username" required>
</div>
<br>
<div>
<label for="password">PASSWORD</label>
<input type="password" name="password_1" required>
</div>
<br>
<button type="Submit" name="login_user">LOGIN</button>

<p>you are not registered?<a href="registration.php"><b>REGISTER HERE!</b></a></p>
</form>
</div>
    
</body>
</html>