<!DOCTYPE html>
<html>
    <body>

<form action="post.php" method="post">
    Password:<input type="password" name="password">
    <br>
    <input type="submit">
</form>
<br>
<?php 
 echo $_POST["password"]?>
 
</body>
</html>