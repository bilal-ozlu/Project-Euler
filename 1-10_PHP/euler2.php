<?php
$fii = array();
$res=0;
function fibo($x){
  if ($x==1){
  return 1;
}
  elseif ($x==2) {
    return 2;
  }
  else {
    return fibo($x-1)+fibo($x-2);
  }

}
for ($i=1; (fibo($i)<4000000) ; $i++) {
	if (fibo($i)%2==0) {
    	$res+=fibo($i);
  	}
}
echo $res;
?>
