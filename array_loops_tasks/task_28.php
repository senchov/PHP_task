<?php
require_once 'task_27.php';

$mult_table = [];

for ($i = 1; $i <= 9; $i++)
{
    $new_line = [];
    for ($j = 1; $j <= 9; $j++)
    {
        $new_line[] = $i*$j;
    }
    $mult_table[] = $new_line;
}

//$colors = ['red','yellow','blue','gray','maroon','brown','green'];
gen_table($mult_table,9,9,$colors);