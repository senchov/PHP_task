<?php


function make_item ($text, $color)
{
    echo "<td bgcolor= {$color}>".$text."</td>";
}

function make_line ($text,$amount , $back_item_colors)
{
    echo '<tr>';
        for ($i = 0;$i < $amount;$i++)
        {
            make_item($text[$i],$back_item_colors [rand(0,(count($back_item_colors)) -1)]);
        }

        echo '</tr>';
}



function gen_table ($text_arr,$rows, $colums, $bg_colors)
{
    echo "<table border= 1>";
    for ($i = 0;$i < $rows;$i++)
    {
        make_line($text_arr[$i],$colums,$bg_colors);
    }
    echo '<table>';
}

$row = 3;
$colomn =12;
$colors = ['red','yellow','blue','gray','maroon','brown','green'];
$item_text = [];

for ($i = 0; $i < $row; $i ++)
{
    $new_arr = [];
    for ($j = 0; $j < $colomn; $j++)
    {
       $new_arr[] = rand(0,20);
    }
    $item_text[] = $new_arr;
}
//print_r($item_text);

gen_table($item_text,$row,$colomn,$colors);


