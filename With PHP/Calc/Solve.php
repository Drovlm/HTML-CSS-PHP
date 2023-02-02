<!DOCTYPE html>
<html>
    <head>
    <title>Solve Game</title>
    <link rel="stylesheet" href="Solve.css">
    <link rel="stylesheet" href="General.css">
    </head>
    <body>

        <div class="wrapper">
            
            <div class="video">
                <video loop muted autoplay poster="img/forest-poster.jpg" class="video__item">
                <source src="V.mp4" type="video/mp4">
                </video>
           </div>
    <div class="Of">
        <div class="Q">
            <p>Solve the exercise: </p> 
        </div>

        <div class="A">
        <form action="Solve.php" method="POST">
        <input class="N" type="number" step="0.001" name="X"> 
        <input class="OP" type="text" name="op"> 
        <input class="N" type="number" step="0.001" name="Y"> <br>
Answer: <input class="Te" type="number" step="0.01" name="Z"><br>
        <input class="S" type="submit" value="Submit">
        </form>
        </div>

        <?php 
        $num1 = $_POST ["X"];
        $op = $_POST["op"]; 
        $num2 = $_POST ["Y"];
        $num3 = $_POST["Z"];
        
        if ($op == "+"){
            if ($num3 == $num1 + $num2){
                echo '<f1> Great <br> enter a new inputs</f1>';
            } else {
                echo '<f2> Never give up, try agine.</f2>';
            }
        } elseif ($op == "-"){
            if ($num3 == $num1 - $num2){
                echo '<f1> Great <br> enter a new inputs</f1>';
            }  else {
                echo  '<f2> Never give up, try agine.</f2>';
            }
        } elseif ($op == "*"){
            if ($num3 == $num1 * $num2){
                echo '<f1> Great <br> enter a new inputs</f1>';
            }  else {
                echo  '<f2> Never give up, try agine.</f2>';
            }
        } elseif ($op == "/"){
            if ($num3 == $num1 / $num2){
                echo '<f1> Great <br> enter a new inputs</f1>';
            }  else {
                echo  '<f2> Never give up, try agine.</f2>';
            }
        } else {
            echo '<f> Enter the enputs</f>';
        }
    ?>
</div>
    </body>
</html>