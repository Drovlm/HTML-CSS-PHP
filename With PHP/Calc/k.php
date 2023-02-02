<html>
<body>

<?php   
        $num1 = $_POST["X"];
        $op = $_POST["op"];
        $num2 = $_POST["Y"];
        $num3 = $_POST["Z"];
         
          
        if ($op == "+"){
            echo  $num1 + $num2;
            } elseif ($op == "-"){
                echo $num1 - $num2;
            } elseif ($op == "/"){
                echo $num1 / $num2;
            } elseif ($op == "*"){
                echo $num1 * $num2;
            } else {
                echo "Invalid Operator";
            }

        if ($num3 == $num1 + $num2 || $num3 == $num1 - $num2 || $num3 == $num1 * $num2 || $num3 == $num1 / $num2){
            echo "<br> Great ";
        } else {
            echo " <br>Never give up, try agine.";
        }

    ?>

</body>
</html>