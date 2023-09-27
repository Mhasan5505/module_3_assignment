<?php
$numbers = [1,2,3,4,5,6,7,8,9,10];

function removeEvenNumbers(&$array){
foreach ($array as $key => $value) {
    if ($value % 2 == 0) {
        unset($array[$key]);
    }
}
}
removeEvenNumbers($numbers);
print_r($numbers);
?>