<?php
$sum1=0;
$sum2=0;
for ($i=1; $i <=100 ; $i++) {
$sum1+=$i;
$sum2+=$i**2;
}
echo -$sum2+$sum1**2;

?>
