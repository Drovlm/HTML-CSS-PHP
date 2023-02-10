<!DOCTYPE html>
<html>
    <body>

    <?php 
        class student{
            var $name;
            var $major;
            var $gpa;
         
            function __construct($name, $major, $gpa){
                $this -> name = $name;
                $this -> major = $major;
                $this -> gpa = $gpa;
            }

            function hasHonors(){
                if ($this -> gpa >= 3.5) {
                    return "true";
                } else {
                    return "false";
                }
                
            }
        }

        $student1 = new student("Mike", "JK Busness", 2.8);

        $student2 = new student("Pen", "Art", 3.6);

        echo $student1 -> hasHonors();
    ?>

    </body>
</html>