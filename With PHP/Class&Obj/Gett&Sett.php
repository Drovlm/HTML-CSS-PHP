<!DOCTYPE html>
<html>
    <body>

    <?php 
    class Movie {
        public $title;
        private $rating;

        function __construct($title, $rating){
            $this -> title = $title;
            $this -> setRating($rating);
        } 

        function getRating(){
            return $this -> rating;
        }

        function setRating($rating){
            if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
                $this -> rating = $rating;
            } else {
                $this -> rating = "NR";
            }
        }
    }
        $avergers1 = new Movie("Avegers", "PG-13");
        echo $avergers1 -> getRating();
        
        $avergers2 = new Movie("Avegers", "ghdl");
        echo $avergers2 -> getRating();

    ?>

    </body>
</html>