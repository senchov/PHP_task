<?php
$num = 2424343667822222297;
$need_num = 2;
$count = 0;

while ($num > 0)
{
    $temp = $num % 10;
    if ($temp == $need_num)
        $count++;
    $num = $num / 10;
}

echo $count;