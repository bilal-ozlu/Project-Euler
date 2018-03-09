<?php
$var=0;
for ($i=1000**2-1; $i>100**2 ;$i--) {
if (strval($i)==strrev(strval($i))) {
    for ($j=100; $j <=999 ; $j++) {
      if ($i%$j==0 and 999>=($i/$j) and ($i/$j)>99){
      $var=1;
      echo $i;
      break;
    }
    }
    if ($var==1)
    {break;}
  }
}
?>
