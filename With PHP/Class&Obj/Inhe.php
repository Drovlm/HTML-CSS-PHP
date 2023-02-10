<!DOCTYPE html>
<html>
    <body>
    
    
    <?php 
        class Chef {
            function makeChicken(){
                echo "The chef makes chicken <br>";
            }
            function makeSalad(){
                echo "The chef makes salad <br>";
            }
            function makeSpecialAish(){
                echo "The chef makes sushi <br>"; 
            }
        }

        class ItalianChef extends Chef {
            function makePasta(){
                echo "The Chef makes Pasta <br>";
            }
            function makeSpecialAish(){
                echo "The chef makes chicken parm <br>";
            }

        }


        $chef = new Chef;
        $chef -> makeSpecialAish();

        $italianChef = new ItalianChef;
        $italianChef -> makeSpecialAish();

    ?>

    </body>
</html>