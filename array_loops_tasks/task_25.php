<?php
$arr = [];
$len = rand(10,20);


for ($i = 0; $i < $len; $i++)
{
    $arr[] = rand(0,100);
}
print_r($arr);
$min = $arr[0];
$min_index = 0;
$max = $arr[0];
$max_index = 0;
for ($i = 0; $i < $len; $i ++)
{
    if ($arr[$i] < $min) {
        $min = $arr[$i];
        $min_index = $i;
    }
    if ($arr[$i] > $max){
       $max = $arr[$i];
        $max_index = $i;
    }
}
echo '<br>';
echo  $max.'   '.$max_index.'<br>';
echo  $min.'   '.$min_index.'<br>';

echo '<br>';
$arr[$min_index] = $max;
$arr[$max_index] = $min;

print_r($arr);
