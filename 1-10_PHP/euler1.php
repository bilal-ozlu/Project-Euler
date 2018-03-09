<?php
$x=0;
$a=0;
     while ($a < 1000) {
       if ($a%3==0 or $a%5==0) {
         $x+=$a;
       }
       $a++;
         }
echo $x;
?>
