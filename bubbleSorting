<?php

function bubleSorting($array) {

$array_size = count($array);

  
for ($i=0;$i<count($array);$i++) {
  for ($j=0;$j<count($array);$j++) {

    if ($array[$j]>$array[$i]) {
    $tmp = $array[$j];
    $array[$j] = $array[$i];
    $array[$i] = $tmp;
   }
  }
}
  
  
return $array;
}


$array = [50,80,5,10,20,25,40,120];

print_r(bubleSorting($array));
