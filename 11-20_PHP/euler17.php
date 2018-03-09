<?php
$total_1_9=3+3+5+4+4+3+5+5+4;
$ten=3;
$total_11_19=6+6+8+8+7+7+9+8+8;
$total_20_99=(6+6+5+5+5+7+6+6)*10 + $total_1_9*8;
$total_100_999=$total_1_9*100 + 7*900 + 891*3 +$total_1_9*9 + $total_20_99*9 + $ten*9 + $total_11_19*9;
$total_1000=11;
echo $total_100_999 + $total_20_99 + $total_11_19 + $ten + $total_1_9 + $total_1000;
?>
