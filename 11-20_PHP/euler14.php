<?php
$max=1;
$n=1;
for ($i=1; $i <10**6 ; $i++) {
  $r=sum($i,0);
  if ($r>$max) {$max=$r; $n=$i;}
}
function sum($i,$r){
  if ($i==1) {
    return $r;
  }
  elseif ($i%2==0) {return sum($i/2,$r+1);}
  else{
    return sum(3*$i+1,$r+1);
  }
}
echo $n;
?>
