<!DOCTYPE html>
<html>
    <body>
<?php 
    function getMax($num1, $num2, $num3){
        if($num1 >= $num2 && $num1 >= $num3){
            return $num1;
        } elseif ($num2 >= $num1 && $num2 >= $num3) {
            return $num2;
        } else {
            return $num3;
        }
    }
    echo getMax(30, 190, 40);
?>

    </body>
</html>