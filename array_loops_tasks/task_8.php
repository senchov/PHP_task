<?php

$arr = [1,2,3,4,5,6,7,8,9];
$line = '';
foreach ($arr as $value)
{
    $temp = (string)$value;
    $line = $line.$temp;
}

echo  $line;