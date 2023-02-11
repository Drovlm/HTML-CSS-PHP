<!DOCTYPE html>
<html>
    <body>

<?php 
    $index = 1;  /*while loop*/
    while($index <= 5){
        echo "$index <br>";
        $index++;
    }

    /*for loop*/
    $luckyNumbers = array(4, 8, 14, 16, 23, 42);
    for($i = 0; $i <= count($luckyNumbers); $i++){ 
    echo "$luckyNumbers[$i] <br>";
    }
    ?>

    </body>
</html>