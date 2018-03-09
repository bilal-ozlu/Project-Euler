<?php
$sum=0;
$int = sprintf("%.0F", 2**1000);
$str = (string) $int;
for($i = 0; $i < strlen($str); $i++){
	$sum += $int[$i];
}
echo $sum;
?>
