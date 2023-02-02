<!DOCTYPE html>
<html>
    <body>

<form action="CheckBoxes.php" method="post">
  Apples: <input type="checkbox" name="fruits[]" value="Apples"><br>
  Oranges: <input type="checkbox" name="fruits[]" value="Oranges"><br>
  Ananas: <input type="checkbox" name="fruits[]" value="Ananas"><br>
  Banana: <input type="checkbox" name="fruits[]" value="Banana"><br>
    <input type="submit">
</form>
<br>

 <?php 
$fruits = $_POST["fruits"];
echo $fruits[0];
?>

</body>
</html>