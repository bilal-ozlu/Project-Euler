<?php
$a=1;
for ($i=1; $i <1000 ; $i++) {
  for ($j=1; $j<1000 ; $j++) {
    if (($i**2+$j**2)==(1000-$i-$j)**2) {
      $a=0;
      break;
    }
  }
  if($a==0){break;}
}
echo $i*$j*(1000-$i-$j);
 ?>
