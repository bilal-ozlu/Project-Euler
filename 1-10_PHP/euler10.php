<?php
ob_start();
include("euler3.php");
ob_end_clean();
$sum=2+3;

for ($i=5; $i <2000000 ; $i+=6){
if (isprime($i)) {
  $sum+=$i;
}
}
for ($i=7; $i <2000000 ; $i+=6) {
  if (isprime($i)) {
    $sum+=$i;
  }
}
echo $sum;
?>
