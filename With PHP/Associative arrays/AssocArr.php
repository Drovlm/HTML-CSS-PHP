<!DOCTYPE html>
<html>
    <body>

    <form action="AssocArr.php" method="post">
    Name:<input type="text" name="Student">
    <input type="submit">
</form>


 <?php 
$grades = array("Mudar"=>"A+", "Pen"=>"B-", "Mike"=>"C+");
echo $grades[$_POST["Student"]];
?>
</body>
</html>