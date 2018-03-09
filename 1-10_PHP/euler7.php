<?php
ob_start();
include("euler3.php");
ob_end_clean();
$counter=1;
for ($i=3; $i < 10**10; $i+=2) {
  if (isprime($i)) {
    $counter+=1;
  }
  if ($counter==10001) {
    break;
  }
}
echo $i;
?>
