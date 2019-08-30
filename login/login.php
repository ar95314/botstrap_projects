<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <div id="frm">
  <form action="process.php" method="POST">
   <P>
      <label>USERNAME</label>
      <input type="text" id="user" name="user"/>
   </P>
   <P>
      <label>PASSWORD</label>
      <input type="password" id="pass" name="pass"/>
   </P>
   <P>
      <input type="submit" id="btn" value="login"/>
</P>
</form>
</div>
</body>
</html>