<?php
$arr = [5, 5, 1, 6, 4, 3];

$num = array_diff($arr, [max($arr)]);
$num = max($num);

print("output: ".$num);
