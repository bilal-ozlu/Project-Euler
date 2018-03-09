<?php
$pascal=array();
//Pascal Triangle
  for ($k=0; $k <=20 ; $k++) {
      for ($i=0; $i <=20; $i++){
      $pascal[$k][$i]=1;
    }
  }
  for ($k=1; $k <=20 ; $k++) {
      for ($i=1; $i <=20; $i++){
      $pascal[$k][$i]=$pascal[$k-1][$i]+$pascal[$k][$i-1];
    }
  }
  echo $pascal[20][20];

?>
