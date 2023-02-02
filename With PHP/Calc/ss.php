<!DOCTYPE html>
<html>
    <body>
           <?php

echo " $num1 $num2 $op $num3"; 
       if ($op == "+"){
            if ($num3 == $num1 + $num2){
                echo '<f1> Great</f1>';
            }  else {
                echo  '<f2> Never give up, try agine.</f2>';
            }
        } elseif ($op == "-"){
            if ($num3 == $num1 - $num2){
                echo '<f1> Great</f1>';
            }  else {
                echo  '<f2> Never give up, try agine.</f2>';
            }
        } elseif ($op == "*"){
            if ($num3 == $num1 * $num2){
                echo '<f1> Great</f1>';
            }  else {
                echo  '<f2> Never give up, try agine.</f2>';
            }
        } elseif ($op == "/"){
            if ($num3 == $num1 / $num2){
                echo '<f1> Great</f1>';
            }  else {
                echo  '<f2> Never give up, try agine.</f2>';
            }
        } else {
        echo '<f> Enter the answer </f>';
        } ?>
    </body>
</html>