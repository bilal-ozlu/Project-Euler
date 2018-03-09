<?php
ob_start();
include("euler3.php");
ob_end_clean();

$mop=1; //multiple of primes
for ($k=2; $k<=20  ; $k++) {
  if (isprime($k)) {
    $mop*=$k;
  }
}
$nmop=1; //multiple of non-primes
for ($k=2; $k<=20  ; $k++) {
  if (isprime($k)==False) {
    $nmop*=$k;
  }
}

for ($i=$mop; $i<=$mop*$nmop ; $i+=$mop) {
  $var=1;
  for ($j=1; $j<21 ; $j++) {
    if ($i%$j!=0) {$var=0;}
  }
  if ($var==1){break;}
}
echo $i;
?>
