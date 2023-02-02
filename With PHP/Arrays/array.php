<!DOCTYPE html>
<html>
    <body>


<?php 
 $friends = array("A", "B", "C", "D", "E");
                /* 0    1    2    3    4*/
                
echo $friends[1]; /*to show the alignment*/
 ?><br>

 <?php
$friends[2] = "AB"; /*changing alignment 2 (from C to AB*/
echo $friends[2];
?>
 
</body>
</html>