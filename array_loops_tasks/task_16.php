<?php
$arr = [1,2,3,4,5,6,7,8,9];
$len = count($arr);

$text = '';
for ($j = 0; $j < $len; $j++)
{
    if ($arr[$j] % 3 == 0)
    {
        $text .= $arr[$j];
        echo $text.'<br>';
        $text='';
    }
    else
    {
        $text .= $arr[$j].', ';
    }
}