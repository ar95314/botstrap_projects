<?php Include("server.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>REGISTRATION</title>
</head>
<body>
<div class="container">
<div class="header">
<h2>REGISTER</h2>
</div>
<form action="registration.php" method="POST">
<?php include(errors.php) ?>
<div>
<label for="username">USERNAME</label>
<input type="text" name="username" required>
</div>
<br>
<div>
<label for="email">EMAIL</label>
<input type="email" name="email" required>
</div>
<br>
<div>
<label for="password">PASSWORD</label>
<input type="password" name="password_1" required>
</div>
<br>
<div>
<label for="password">REENTER PASSWORD</label>
<input type="password" name="password_2" required>
</div>
<br>
<button type="Submit" name="reg_user">REGISTER</button>

<p>Already a user? <a href="login.php"><b>LOGIN HERE</b></a></p>
</form>
</div>
    
</body>
</html>