<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="form.php" method="get">
    <label for="username">Username</label>
    <input type="text" name="username" id="#"><br>

    <label for="email">Email</label>
    <input type="email" name="email" id="email"><br>

    <input type="submit" value="logIn">



  </form>  




<?php
echo "{$_GET ["username"] }<br> ";
echo "{$_GET ["email"]} <br>";

?>
</body>
</html>