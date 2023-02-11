<!DOCTYPE html>
<html>
    <body>
    
    <form action="switch.php" method="post">
     What was your grade<br>
    <input type="text" name="grade"><br>
    <input type="submit">

    </form> 

    <?php 
        $grade = $_POST["grade"];
        switch($grade){
            case "A":
                echo "You did amazing";
                break;
            case "B";
                echo"You did very good";
                break;
            case "C";
                echo"You did poorly";
                break;
            case "D";
                echo"You did very bad";
                break;
            case "F";
                echo"You fail";
                break;
            default:
            echo "Invalid grade";
        }
    ?>

    </body>
</html>