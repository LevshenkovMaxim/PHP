<?php
function isEven($number) { return $number %2== 0; };
$number = [1, 2, 6, 120, 62, 2, 11, 71, 8, 2];
$evennumber = array_filter($number, 'isEven');
print_r($evennumber); 