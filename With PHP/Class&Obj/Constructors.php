<!DOCTYPE html>
<html>
    <body>

    <?php 
        class Book{
            var $title;
            var $author;
            var $pages;
         
            function __construct($aTitle, $aAuthor, $aPages){
                $this -> title = $aTitle;
                $this -> author = $aAuthor;
                $this -> pages = $aPages;
            }
        }

        $book1 = new Book("Harry Potter", "JK Rowling", 400);
        echo $book1 -> title;

        $book2 = new Book("Lord Of The Rings", "Tolkin", 700);
    ?>

    </body>
</html>