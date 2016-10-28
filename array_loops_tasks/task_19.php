<?php
$days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];

$day = 'Thursday';
foreach ($days as $item)
{
    if ($item === $day)
    {
        echo  '<em>'.$item.'</em><br>';
    }else
    {
        echo  $item.'<br>';
    }
}