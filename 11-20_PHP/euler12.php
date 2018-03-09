<?php
$tri=0;
for ($i=1; $i <10**10 ; $i++) {
  $tri+=$i;
  $counter=0;
  if ($tri%($tri**0.5)==0){ $counter+=1;}
  for ($j=1; $j < $tri**0.5 ; $j++) {
    if ($tri%$j==0){
      $counter+=2;
    }
  }
  if($counter>500){
    break;
  }
}
echo $tri;

 ?>
