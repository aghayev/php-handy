<?php

 
function binarySearch($array, $target) {
$start = 0;
$end = count($array)-1;

while ($start < $end) {

$middle = floor(($start + $end) / 2);

if ($array[$middle] == $target)  {
return true;
}

if ($array[$middle] < $target) {
echo $array[$middle];
$start = $middle + 1;
}
else {
$end = $middle - 1;
}

}

return false;
}


$array = [1,5,10,20,25,40,50,80,120];
$target = 5;

if (binarySearch($array, $target)) {
echo $target. ' found';
}
else {
echo $target.' not found';
}



