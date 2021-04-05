
<?php

function shakeSorting($array) {

$array_size = count($array);

  $left = 0;
  $right = count($array)-1;
  
  while ($left <= $right) {

  for ($i = $left; $i < $right; ++$i) {
    if ($array[$i]>$array[$i+1]) {
    $tmp = $array[$i+1];
    $array[$i+1] = $array[$i];
    $array[$i] = $tmp;
   } 
  }
   ++$left;
  
    //TODO: figure out why $i> = left and not $i > $left
  for ($i = $right; $i >= $left; --$i) {
    if ($array[$i]<$array[$i-1]) {
    $tmp = $array[$i-1];
    $array[$i-1] = $array[$i];
    $array[$i] = $tmp;
   }
  }
  --$right;    
    
}
  
  
return $array;
}


$array = [50,80,5,10,20,25,40,120];

print_r(shakeSorting($array));
