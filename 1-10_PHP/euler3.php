<?php
for ($i=intval((600851475143)**(0.5)+2); $i > 1 ; $i--) {
  if (600851475143%$i==0 and isprime($i)){
    echo $i;
    break;
  }
}
function isprime($x){
    if ($x==0 or $x==1){return False;}
    if ($x==2 or $x==3){return True;}
  for ($i=2; $i<$x**(0.5)+1; $i++) {
    if ($x%$i==0){
      return False;}
  }
return True;
}
?>
