<?php
$a = rand (0,9);
$b = rand(0,9);
$operator = '+';
switch ($operator){
    case '+': echo $a+$b; break;
    case '-': echo $a-$b;break;
    case '*': echo $a*$b;break;
    case '/': echo $a/$b;break;
    default: 'unknown operation';
}