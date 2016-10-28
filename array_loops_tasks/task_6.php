<?php
$arr = array('green'=> 'zelnui','red' =>'krasnui','blue'=> 'goluboi');
$en = array();
$ru = array();

foreach ($arr as $key => $value)
{
    array_push($en,$key);
    array_push($ru,$value);
}

var_dump($ru);
var_dump($en);