<?php
$arr = [];
$even_mult = 1;
$odd_mult = 1;
for ($i = 0; $i < 10; $i++)
{
    $arr[] = rand(1,100);
    if ($i % 2 == 0)
        $even_mult *= $arr[$i];
    else
        $odd_mult *= $arr [$i];
}
print_r($arr);
echo '<br>'.$even_mult.'   '.$odd_mult;

