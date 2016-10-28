<?php
$arr = [4,2,5,19,13,0,10];
$e = false;
foreach ($arr as $value)
{
    if ($value == 2 || $value == 3 || $value == 4)
        $e = true;
}

if ($e)
    echo 'YES';
else
    echo 'NO';