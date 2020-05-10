<?php
# random array int 
$arr = [12, 3, 70, 40, -2, 0, 100, 101, 100];
# desc sort array's element 
rsort($arr);
# get second largest element
$large_2 = 0;
foreach ($arr as $val) {
    if ($arr[0] > $val) {
        $large_2 = $val;
        break;
    }
}
print("second largest number is ".$large_2);