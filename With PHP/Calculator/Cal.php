<!DOCTYPE html>
<html>
    <body>

    <form action="Cal.php" method="post">
        First Nym: <input type="number" step="0.00001" name="num1"> <br>
        Operator: <input type="text" name="op"> <br>
        Second Nym: <input type="number" step="0.00001" name="num2"> <br>
        <input type="submit">
    </form>

    <?php 
    $num1 = $_POST["num1"];
    $op = $_POST["op"];
    $num2 = $_POST["num2"];

    if ($op == "+"){
        echo $num1 + $num2;
    } elseif($op == "-"){
        echo $num1 - $num2;
    } elseif($op == "/"){
        echo $num1 / $num2;
    } elseif($op == "*"){
        echo $num1 * $num2;
    } else {
        echo "Invalid Operator";
    }

    
    ?>

    </body>
</html>