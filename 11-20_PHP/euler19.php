<?php
$day=366 ; //1 Januray 1900 to 1 January 1901
$counter=0; //Since 366/%2!=0
$month_remainings = array(3,0,3,2,3,2,3,3,2,3,2,3,3,0,3,2,3,2,3,3,2,3,2,3,3,0,3,2,3,2,3,3,2,3,2,3,3,1,3,2,3,2,3,3,2,3,2,3);
for ($j=0; $j <25 ; $j++) {
  for ($i=0; $i <48 ; $i++) {
    $day+=$month_remainings[$i];
    if ($day%7==0){$counter+=1;}
  }
}
echo $counter;
?>
